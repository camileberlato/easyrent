<?php
    include_once ("conexao.php");   
?>         
<body>    
    <div id="cadastro">
        <fieldset>
            <legend>Listar Contatos</legend>
            <form method="GET" action="listar.php">
                <select name="txtOperadora" id="id">
                <option value="0">-- Selecione --</option>
                <?php
                    if($_GET["txtOperadora"]){
                        $id = $_GET["txtOperadora"];
                    } else{
                        $id = "0";
                    }
                         
                    $SQL = "SELECT * FROM contatos ORDER BY operadora ASC";                 
                    $query = mysql_query($SQL, $conn);
                    while($exibir = mysql_fetch_array($query)){
                ?>
                    <option value="<?php echo $exibir["id"];?>"<?php echo($exibir["id"] == $id ? "selected='selected'" : "")?>><?php echo $exibir["operadora"];?></option>
                    <?php }?>             
                </select>
                <input type="submit" value="Filtrar"/>
                <input type="button" value="Voltar" onClick="history.go(-1)"> 
            </form>           
            <ul>
                <?php
                    $SQL = "SELECT * FROM contatos";
                                         
                    if(isset($_GET["txtOperadora"])){
                        if(is_numeric($_GET["txtOperadora"])){
                            $SQL .= " WHERE id =".$_GET["txtOperadora"];
                        }
                    }
                                         
                    $query = mysql_query($SQL, $conn);
                    while($exibir = mysql_fetch_array($query)){             
                ?>               
                <li><?php echo $exibir["id"]?> - <?php echo $exibir["nome"]?> - <?php echo $exibir["email"]?> - <?php echo $exibir["operadora"]?> - <?php echo $exibir["endereco"]?> - <?php echo $exibir["cidade"]?> - <?php echo $exibir["estado"]?> - <?php echo $exibir["sexo"]?> - <?php echo $exibir["idade"]?></li>    
                <?php
                    }
                ?>           
            </ul>         
        </fieldset>   
        </div>
    </body>
//https://www.devmedia.com.br/forum/fazer-um-filtro-em-php/431193 