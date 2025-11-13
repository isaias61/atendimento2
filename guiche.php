 
  <?php
    $base_url = "https://plataformactea.com.br/atendimento/";
  ?>
  
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body> 

<div class="jumbotron text-center">
  <h1>Atendimento CTEA</h1>
 
</div>
    
     <form action = ""  id="ace"  name="ace" method="post"  onsubmit="return valida_form(this)" class="form-inline"  style="text-align: center">
    <div class="container-fluid">
     <div class="container" >
	 
	   <div class="row" style="text-align: center"> 
			    
			 							
										
				 
                        <label  class="jumbotron text-center" class="control-label"><strong>Qual é o Guichê de atendimento? </strong></label>
                        <div  class="form-group">
                            <select name="guiche" id="guiche" class="jumbotron text-center">
                                <h1><option value="Guichê - 1" class="jumbotron text-center">Guichê - 1</option></h1>
                                <h1><option value="Guichê - 2" class="jumbotron text-center">Guichê - 2</option></h1>                              
								<h1><option value="Guichê - 3" class="jumbotron text-center">Guichê - 3</option></h1> 
                            </select>
						</div>
						<div  class="form-group">	
							 <select name="tipo" id="tipo" class="jumbotron text-center">
                                <h3><option value="1 - MATRÌCULA"  >1 - MATRÌCULA</option></h3>
                                <h3><option value="2 - ENTREGAR DOC"  >2 - ENTREGAR DOCUMENTOS</option></h3> 
                                <h3><option value="3 - PEGAR DOC"  >3 - PEGAR DOCUMENTOS</option></h3> 								
								 
                            </select> 
						</div>	 
					<button type="sibmit" class="btn btn-primary   btn-block btn-lg" id="btn" name="btn">
					  <span class="glyphicon glyphicon-saved"> Enviar </span>
					</button>
				       
							
                     
						 
					 
			 </div>	   
		</div>
		
	  
	  
    </div>
    
    </div>
    </form>

</body>  
</html>
<?
    $tipo = substr($_POST['tipo'],0,1);
	$guiche = $_POST['guiche'];
	
	session_start();
	$_SESSION['tipo'] = $tipo;
	$_SESSION['guiche'] = $guiche;
	
	
	
	if($tipo == 1){
		header('location:https://plataformactea.com.br/atendimento/matriculas.php');	  
	}
	if($tipo ==2){
		 echo 'documentos';
		 header('location:https://plataformactea.com.br/atendimento/matriculas.php');	  
	}
	
	
    //if(isset($_POST['btn'])){
	//    echo 'postou ' . $tipo . '</br>';	
	//}else{
	//	echo 'não foi ' . '</br>';	
	//}
	 
?>





