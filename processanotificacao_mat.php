<?php 
//require('../_app/Config.inc.php');
// site = HOME;

//$getiduser = $_POST['iduser'];

$getCond = $_POST['idDoPedido'];
$atualizarver = array();
$atualizarver['view'] = 1;
//$lerbanco->ExeRead('ws_pedidos', "WHERE user_id = :userid AND view = :c", "userid={$getiduser}&c={$getCond}");
//$updatebanco->ExeUpdate("ws_pedidos", $atualizarver, "WHERE user_id = :userid AND id = :up", "userid={$getiduser}&up={$getCond}");


//if ($updatebanco->getResult()):
                          $conexao = new PDO("mysql:host=mysql.plataformactea.com.br:3306;dbname=plataformactea02","plataformactea02","23612361Isaias61");
						  $conexao->exec('SET CHARACTER SET utf8');												
						  $select = $conexao->prepare("update atende set view ='".$atualizarver."'  WHERE  id ='".$getCond."' order by id asc ");
						  $select->execute();      
						  //$linha = $select->fetchAll(PDO::FETCH_OBJ);

    unset($conexao); 
   
	echo "true";
	 
	
//endif;

