<?php 
require_once('../config.php');
require_once(DBAPI);

$veiculo = null;

function index() {
	global $veiculo;
	$veiculo = find_all('veiculo');
}

function add(){
	if(!Empty($_POST['veiculo'])){
		/*$hoje = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$veiculo= $_POST['veiculo'];
		$veiculo['data_modificacao'] = $veiculo['data_criacao'] = $hoje->format('Y-m-d H:i:s');
		$veiculo['data_nasc']=implode('-',array_reverse(explode('/',$veiculo['data_nasc'])));*/


	try{
		$database = open_database();
		$veiculo = $_POST['veiculo'];

		$sql = $database->prepare('INSERT INTO VEICULO VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
	  	$sql->bindValue(1, null);
     	$sql->bindValue(2, utf8_decode($veiculo['nome_veiculo']));
     	$sql->bindValue(3, $veiculo['modelo']);
    	$sql->bindValue(4, $veiculo['marca']);
      	$sql->bindValue(5, $veiculo['ano_lancamento']);
     	$sql->bindValue(6, $veiculo['tipo']);
      	$sql->bindValue(7, $veiculo['funcionario']);
   		$sql->bindValue(8, $veiculo['situacao']);
  		$sql->bindValue(9, $veiculo['passageiros']);
    	$sql->bindValue(10, utf8_decode($veiculo['ar_condicionado']));
    	$sql->bindValue(11, utf8_decode($veiculo['direcao_hidraulica']));
    	$sql->bindValue(12, $veiculo['portas']);
    	$sql->bindValue(13, utf8_decode($veiculo['vidros']));
    	$sql->bindValue(14, $veiculo['travas_eletricas']);
    	$sql->bindValue(15, utf8_decode($veiculo['airbag']));
		$sql->bindValue(16, $veiculo['freios_abs']);
		$sql->bindValue(17, utf8_decode($veiculo['cambio']));
		$sql->bindValue(18, $veiculo['radio']);
		$sql->bindValue(19, $veiculo['malas']);
		$sql->execute();

		session_start();
 		$_SESSION['message'] = 'Cadastro de Veiculos realizados com sucesso.';
		$_SESSION['type'] = 'seccess';
		}
		catch(Exception $e){
		session_start();
		$_SESSION['message'] = 'ERRO - '.$e->getMessage();
		$_SESSION['type'] = 'danger';
		}
		header('location: '.BASEURL.'veiculos/list.php');
		close_database();  
	}
}

function edit(){
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		if(isset($_POST['veiculo'])){
			try{
			$database = open_database();
			$veiculo = $_POST['veiculo'];

			$sql = $database->prepare('UPDATE VEICULO SET NOME_VEICULO=?, MODELO=?, MARCA=?, ANO_LANCAMENTO=?, TIPO=?, FUNCIONARIO=?, SITUACAO=?, PASSAGEIROS=?, AR_CONDICIONADO=?, DIRECAO_HIDRAULICA=?, PORTAS=?, VIDROS=?, TRAVAS_ELETRICAS=?, AIRBAG=?, FREIOS_ABS=?, CAMBIO=?, RADIO=?, MALAS=? WHERE IDVEICULO=?');
			$sql->bindValue(1, $veiculo['nome_veiculo']);
			$sql->bindValue(2, $veiculo['modelo']);
			$sql->bindValue(3, $veiculo['marca']);
			$sql->bindValue(4, $veiculo['ano_lancamento']);
			$sql->bindValue(5, $veiculo['tipo']);
			$sql->bindValue(6, $veiculo['funcionario']);
			$sql->bindValue(7, $veiculo['situacao']);
			$sql->bindValue(8, $veiculo['passageiros']);
			$sql->bindValue(9, $veiculo['ar_condicionado']);
			$sql->bindValue(10, $veiculo['direcao_hidraulica']);
			$sql->bindValue(11, $veiculo['portas']);
			$sql->bindValue(12, $veiculo['vidros']);
			$sql->bindValue(13, $veiculo['travas_eletricas']);
			$sql->bindValue(14, $veiculo['airbag']);
			$sql->bindValue(15, $veiculo['freios_abs']);
			$sql->bindValue(16, $veiculo['cambio']);
			$sql->bindValue(17, $veiculo['radio']);
			$sql->bindValue(18, $veiculo['malas']);
			$sql->bindValue(19, $id);
			$sql->execute();
			
			session_start();
			$_SESSION['message'] = 'Veiculo alterado com sucesso com sucesso.';
			$_SESSION['type'] = 'seccess';
			}
			catch(Exception $e){
				session_start();
				$_SESSION['message'] = 'ERRO - '.$e->getMessage();
				$_SESSION['type'] = 'danger';
			}
			header('location: '.BASEURL.'veiculos/list.php');
			close_database();
		}
		else{
			global $veiculo;
			$veiculo = findveiculo('veiculo', $id);
		}
	}
	else{
		header('location: '.BASEURL.'veiculos');
	}
}

function view($idveiculo = null){
	global $veiculo;
	$veiculo = findveiculo('veiculo', $idveiculo);
}
	
function delete($idveiculo = null)
{
	$database = open_database();

	try{
		if($idveiculo){
			$sql = $database ->prepare("DELETE FROM VEICULO WHERE IDVEICULO=?");
			$sql->bindValue(1,$idveiculo,PDO::PARAM_INT);
			$sql->execute();

			session_start();
			$_SESSION['message'] = 'Veiculo deletado com sucesso...';
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