<?php 
require_once('../config.php');
require_once(DBAPI);

$cliente = null;

function index() {
	global $cliente;
	$cliente = find_all('cliente');
}

function add(){
	if(!Empty($_POST['cliente'])){
		/*$hoje = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$cliente= $_POST['cliente'];
		$cliente['data_modificacao'] = $cliente['data_criacao'] = $hoje->format('Y-m-d H:i:s');
		$cliente['data_nasc']=implode('-',array_reverse(explode('/',$cliente['data_nasc'])));*/


	try{
		$database = open_database();
		$cliente = $_POST['cliente'];

		$sql = $database->prepare('INSERT INTO CLIENTE VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
	  	$sql->bindValue(1, null);
   	 	$sql->bindValue(2, utf8_decode($cliente['nome']));
    	$sql->bindValue(3, $cliente['CPF']);
    	$sql->bindValue(4, $cliente['CNH']);
    	$sql->bindValue(5, $cliente['CEP']);
    	$sql->bindValue(6, $cliente['estado']);
    	$sql->bindValue(7, utf8_decode($cliente['cidade']));
   		$sql->bindValue(8, $cliente['bairro']);
    	$sql->bindValue(9, $cliente['rua']);
    	$sql->bindValue(10, $cliente['telefone']);
    	$sql->bindValue(11, $cliente['numero']);
    	$sql->bindValue(12, $cliente['funcionario']);
    	$sql->bindValue(13, $cliente['usuario']);
   	 	$sql->bindValue(14, $cliente['pagamento']);
		$sql->execute();

		session_start();
 		$_SESSION['message'] = 'Cadastro de clientes realizados com sucesso.';
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
		if(isset($_POST['cliente'])){
			try{
			$database = open_database();
			$cliente = $_POST['cliente'];

			$sql = $database->prepare('UPDATE CLIENTE SET NOME=?, CPF=?, CNH=?, CEP=?, ESTADO=?, CIDADE=?, BAIRRO=?, RUA=?, TELEFONE=?, NUMERO=?, FUNCIONARIO=?, USUARIO=?, PAGAMENTO=? WHERE IDCLIENTE=?');
			$sql->bindValue(1, $cliente['nome']);
			$sql->bindValue(2, $cliente['CPF']);
			$sql->bindValue(3, $cliente['CNH']);
			$sql->bindValue(4, $cliente['CEP']);
			$sql->bindValue(5, $cliente['estado']);
			$sql->bindValue(6, $cliente['cidade']);
			$sql->bindValue(7, $cliente['bairro']);
			$sql->bindValue(8, $cliente['rua']);
			$sql->bindValue(9, $cliente['telefone']);
			$sql->bindValue(10, $cliente['numero']);
			$sql->bindValue(11, $cliente['funcionario']);
			$sql->bindValue(12, $cliente['usuario']);
			$sql->bindValue(13, $cliente['pagamento']);
			$sql->bindValue(14, $id);
			$sql->execute();
			
			session_start();
			$_SESSION['message'] = 'Cliente alterado com sucesso com sucesso.';
			$_SESSION['type'] = 'seccess';
			}
			catch(Exception $e){
				session_start();
				$_SESSION['message'] = 'ERRO - '.$e->getMessage();
				$_SESSION['type'] = 'danger';
			}
			header('location: '.BASEURL.'clientes/list.php');
			close_database();
		}
		else{
			global $cliente;
			$cliente = findcliente('cliente', $id);
		}
	}
	else{
		header('location: '.BASEURL.'clientes');
		}
	}
	function view($idcliente = null){
		global $cliente;
		$cliente = findcliente('cliente', $idcliente);
	}
	function delete($idcliente = null)
	{
		$database = open_database();

		try{
			if($idcliente){
				$sql = $database ->prepare("DELETE FROM CLIENTE WHERE IDCLIENTE=?");
				$sql->bindValue(1,$idcliente,PDO::PARAM_INT);
				$sql->execute();

				session_start();
				$_SESSION['message'] = 'Cliente deletado com sucesso...';
				$_SESSION['type'] = 'sucess';
			}
		}
		catch(Exception $e){
			session_star();
			$_SESSION['message'] = 'ERRO :'.$e->getMessage();
			$_SESSION['type'] = 'danger';
		}
		close_database($database);
	}
 ?>