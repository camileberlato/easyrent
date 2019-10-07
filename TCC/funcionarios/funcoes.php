<?php 
require_once('../config.php');
require_once(DBAPI);

$funcionario = null;

function index() {
	global $funcionario;
	$funcionario = find_all('funcionario');

	//Determinar o número de itens por página
	global $itens_por_pagina;
	$itens_por_pagina = 10;

	//Pegar a página atual
	global $pagina;
	if(isset($_GET['pagina'])){
		$pagina = intval($_GET['pagina']);
	}
	else{
		$pagina = 1;
	}

	//obter filtro
	global $get;
	if(isset($_REQUEST['filtro'])){
		$filtro = $_REQUEST['filtro'];
		$get = "&filtro=".$_REQUEST['filtro'];
	}
	else{
		$filtro = null;
	}

	$funcionario = find_all('funcionario', $pagina, $itens_por_pagina, $filtro);

	//Pegar o total de funcionarios cadastrados
	$num_total = count(find_all('funcionario', null, null, $filtro));

	//Determinar o número de páginas
	global $num_paginas;
	$num_paginas = ceil($num_total / $itens_por_pagina);
}

function add(){
	if(!Empty($_POST['funcionario'])){
		/*$hoje = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$funcionario= $_POST['funcionario'];
		$funcionario['data_modificacao'] = $funcionario['data_criacao'] = $hoje->format('Y-m-d H:i:s');
		$funcionario['data_nasc']=implode('-',array_reverse(explode('/',$funcionario['data_nasc'])));*/


	try{
		$database = open_database();
		$funcionario = $_POST['funcionario'];


		$sql = $database->prepare('INSERT INTO FUNCIONARIO VALUES(?,?,?,?,?,?)');
	  	$sql->bindValue(1, null);
     	$sql->bindValue(2, utf8_decode($funcionario['nome_completo']));
     	$sql->bindValue(3, $funcionario['CPF']);
    	$sql->bindValue(4, $funcionario['RG']);
      	$sql->bindValue(5, $funcionario['pagamento']);
     	$sql->bindValue(6, $funcionario['usuario']);
		$sql->execute();

		session_start();
 		$_SESSION['message'] = 'Cadastro de Funcionários realizados com sucesso.';
		$_SESSION['type'] = 'seccess';

		}
		catch(Exception $e){
		session_start();
		$_SESSION['message'] = 'ERRO - '.$e->getMessage();
		$_SESSION['type'] = 'danger';
		}
	  }
	}

	function edit(){
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		if(isset($_POST['funcionario'])){
			try{
			$database = open_database();
      		$funcionario = $_POST['funcionario'];

			$sql = $database->prepare('UPDATE FUNCIONARIO SET NOME_COMPLETO=?, CPF=?, RG=?, PAGAMENTO=?, USUARIO=? WHERE IDFUNCIONARIO=?');
			$sql->bindValue(1, $funcionario['nome_completo']);
			$sql->bindValue(2, $funcionario['CPF']);
			$sql->bindValue(3, $funcionario['RG']);
			$sql->bindValue(4, $funcionario['pagamento']);
			$sql->bindValue(5, $funcionario['usuario']);
			$sql->bindValue(6, $id);
			$sql->execute();
			
			session_start();
			$_SESSION['message'] = 'Funcionário alterado com sucesso com sucesso.';
			$_SESSION['type'] = 'seccess';
			}
			catch(Exception $e){
				session_start();
				$_SESSION['message'] = 'ERRO - '.$e->getMessage();
				$_SESSION['type'] = 'danger';
			}
			header('location: '.BASEURL.'funcionarios/list.php');
			close_database();
		}
		else{
			global $funcionario;
			$funcionario = findfuncionario('funcionario', $id);
			// echo '<pre>';
			// print_r($funcionario);
			// echo '</pre>';
			// exit;
		}
	}
	else{
			header('location: '.BASEURL.'funcionarios');
		}
	}

	function view($idfuncionario = null){
		global $funcionario;
		$funcionario = findfuncionario('funcionario', $idfuncionario);
	}
	
	function delete($idfuncionario = null)
	{
		$database = open_database();

		try{
			if($idfuncionario){
				$sql = $database ->prepare("DELETE FROM FUNCIONARIO WHERE IDFUNCIONARIO=?");
				$sql->bindValue(1,$idfuncionario,PDO::PARAM_INT);
				$sql->execute();

				session_start();
				$_SESSION['message'] = 'Funcionario deletado com sucesso...';
				$_SESSION['type'] = 'sucess';
			}
		}
		catch(Exception $e){
			session_start();
			$_SESSION['message'] = 'ERRO :'.$e->getMessage();
			$_SESSION['type'] = 'danger';
		}
		close_database($database);
	}	
?>