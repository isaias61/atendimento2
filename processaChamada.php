<?php 
//FUNÇÃO PARA GERAR URL AMIGÁVEL
 function retirar_acentos($string) {
	$palavra = strtr($string, "ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ?", "SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy");
	$palavranova = str_replace("_", " ", $palavra);
	return $palavranova; 
}
   
 
 
$site = 'https://plataformactea.com.br/atendimento/';

				$atendimento = $_POST['id2'];
          //     echo 'meu id = ' . $meuid . '</br>'; 
			   $descricao = $_POST['nome2'];
		//	   echo 'meu nome = ' . $nome . '</br>';
			   $atendimento = $_POST['atendimento'];
		///	   echo 'meu sta = ' . $sta . '</br>';
			   $guiche = $_POST['guiche'];
			   $atd = $_POST['atd2'];
                echo 'guiche = ' . $atd . '</br>'; 
		   // echo 'guiche = ' . $guiche . '</br>'; 
			   //$guiche =  $_POST['ghiche'];
		//	   echo 'mu telefone = ' . $telefone . '</br>';
			    
			   
	//		  echo $sql . '</br>'; 	 
			   $sql = "insert into chamadas(descricao,
											guiche,
                                            atendimento,
											atd,
											view) value('".$descricao."',
														'".$guiche."',
														'".$atendimento."',
														'".$atd."',
														'1')";
														
														
														
														
														
											
			   
// if($view == 0){
            
			
		  // $sinal = $site . 'campainha.mp3';   
          //  if(isset($POST['submit2'])){ 
		   
	
			 	//  $sql = "update atende set view = '1', nome = '".$nome."', curso = '".$curso."', telefone = '".$telefone."', sta = '".$sta."' where id = '". $meuid . "'";
			 
				 
									 	  $conexao = new PDO("mysql:host=mysql.plataformactea.com.br:3306;dbname=plataformactea02","plataformactea02","23612361Isaias61");
										  $conexao->exec('SET CHARACTER SET utf8');												
										  $select = $conexao->prepare($sql);
										  $select->execute();      
										  $linha = $select->fetchAll(PDO::FETCH_OBJ);  
									//	  header('location:https://plataformactea.com.br/atendimento/');	  
									      header('location:https://plataformactea.com.br/atendimento/matriculas.php?id2='.$_POST['id2']);	  
										//  echo $sql . '</br>'; 
				      
	 //				unset($conexao); 
	 	//	}else{
	 		//	echo '<script>alert("dados não proecessados")</scritpt>';
			
 		    //}

			
   
	 
	
 //}else{
//	 echo 'Já foi atualizado';
//	 echo '<script>alert("dados não proecessados")</scritpt>';
 //}  
 
?>
 