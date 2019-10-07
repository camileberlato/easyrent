<?php
require_once(DBAPI);
function index()
 {
     if(!empty($_POST['login']) && !empty($_POST['senha'])){
        $database = open_database();
        $found = null;

        $login=$_POST['login'];
        $senha=$_POST['senha'];
   
        try{
            if($login){
                $sql = $database->prepare("SELECT * FROM USUARIO WHERE login =  ? and senha = ?;");
                $sql->bindParam(1 ,$login);
                $sql->bindParam(2 ,$senha);
                $sql->execute();
                if($sql->rowCount() > 0){
                   $found = $sql->fetch(PDO::FETCH_ASSOC);
                   
                   session_start();
                   $_SESSION['tipo'] = $found['tipo_usuario'];
                   $_SESSION['login'] = $_POST["login"];
                   $_SESSION['senha'] = $_POST["senha"];
                   
                   header('location: '.BASEURL.'index.php');
                }
                else{
                   header('location: '.BASEURL.'login/index.php');
                }
            }
            else{
               $found = $sql->fetchall();
            }
        }
        catch (Exception $e)
        {
            session_start();
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        close_database($database);
        return $found;
     } 
 }
 ?>