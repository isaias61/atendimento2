<?php 
//FUNÇÃO PARA GERAR URL AMIGÁVEL
 function retirar_acentos($string) {
	$palavra = strtr($string, "ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ?", "SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy");
	$palavranova = str_replace("_", " ", $palavra);
	return $palavranova; 
}
 
 
 
$site = 'https://plataformactea.com.br/atendimento/';

				$meuid = $_POST['id'];
          //     echo 'meu id = ' . $meuid . '</br>'; 
			   $nome = $_POST['nome'];
		//	   echo 'meu nome = ' . $nome . '</br>';
			   $sta = $_POST['sta'];
		///	   echo 'meu sta = ' . $sta . '</br>';
			   $curso = retirar_acentos($_POST['curso']);

		//	   echo 'mue curso = ' . utf8_encode($curso) . '</br>'; 
			   $telefone =  retirar_acentos($_POST['telefone']);
		//	   echo 'mu telefone = ' . $telefone . '</br>';
			   $sql = "update atende set view = '1', nome = '".$nome."', curso = '".$curso."', telefone = '".$telefone."', sta = '".$sta."' where id = '". $meuid . "'";
	//		  echo $sql . '</br>'; 	 
			   
			   
			   
// if($view == 0){
            
			
		  // $sinal = $site . 'campainha.mp3';   
          //  if(isset($POST['submit2'])){ 
		   
				$meuid = $_POST['id'];
				$nome = $_POST['nome'];
				$curso = retirar_acentos($_POST['curso']);
				$telefone =  retirar_acentos($_POST['telefone']);
				$sta = $_POST['sta'];

			 	  $sql = "update atende set view = '1', nome = '".$nome."', curso = '".$curso."', telefone = '".$telefone."', sta = '".$sta."' where id = '". $meuid . "'";
			 
				 
									 	  $conexao = new PDO("mysql:host=mysql.plataformactea.com.br:3306;dbname=plataformactea02","plataformactea02","23612361Isaias61");
										  $conexao->exec('SET CHARACTER SET utf8');												
										  $select = $conexao->prepare($sql);
										  $select->execute();      
										  $linha = $select->fetchAll(PDO::FETCH_OBJ);  
										  
										  
										  if($sta=="Em Andamento"){
											  $sql2 = "delete from chamadas where atendimento = '". $meuid . "'";
											  $select = $conexao->prepare($sql2);
										      $select->execute();      
										    //  $linha = $select->fetchAll(PDO::FETCH_OBJ);  
										   
										  }
										  
										  
										  
										  
										  
										  header('location:https://plataformactea.com.br/atendimento/matriculas.php?id='.$_POST['id']);	  
										  //echo $sql . '</br>'; 
				      
	 //				unset($conexao); 
	 	//	}else{
	 		//	echo '<script>alert("dados não proecessados")</scritpt>';
			
 		    //}

			
   
	 
	
 //}else{
//	 echo 'Já foi atualizado';
//	 echo '<script>alert("dados não proecessados")</scritpt>';
 //}  
 
?>
 