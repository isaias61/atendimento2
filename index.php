<!DOCTYPE html>
<html lang="en">
<head>
  <title>Atendimento CTEA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <?php
    $base_url = "https://plataformactea.com.br/atendimento/";
  ?>
  
  <script language="javascript" type="text/javascript" src="<?php echo $base_url;?>js/dist/jquery.jqplot.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>js/dist/jquery.jqplot.min.css" />

  <script type="text/javascript" src="<?php echo $base_url;?>js/dist/plugins/jqplot.pieRenderer.min.js"></script>
  <script type="text/javascript" src="<?php echo $base_url;?>js/dist/plugins/jqplot.donutRenderer.min.js"></script>

  
</head>
<body>

<div class="jumbotron text-center">
 <h1><i class="icon-bell"> Atendimento CTEA</i></h1>
  <p>Selecione qual atendimento desejado!</p> 
</div>
    
 
    <div class="container-fluid">
     <div class="container">
	   <div class="row"> 
			   
			<!--  <p>Envelope icon: <span class="glyphicon glyphicon-envelope"></span></p>    
			  <p>Envelope icon as a link:
				<a href="#">
				  <span class="glyphicon glyphicon-envelope"></span>
				</a>
			  </p>
			  <p>Search icon: <span class="glyphicon glyphicon-search"></span></p> 
			  <p>Search icon on a button:
				<button type="button" class="btn btn-default">
				  <span class="glyphicon glyphicon-search"></span> Search
				</button>
			  </p>
			  <p>Search icon on a styled button:
				<button type="button" class="btn btn-info">
				  <span class="glyphicon glyphicon-search"></span> Search
				</button>
			  </p> 
			  <p>Print icon: <span class="glyphicon glyphicon-print"></span></p>    -->
			    
			  <div class="col-sm-4"> 
			  
				  <p class="jumbotron text-center" ><strong>Efetuar Matrículas</strong>
					<a href="https://plataformactea.com.br/atendimento/atende.php" class="btn btn-primary btn-block btn-lg">
					  <span class="glyphicon glyphicon-edit"></span> Imprimir cupom 
					</a>
				  </p> 
				  
				  
			 </div>	  
            
			 <div class="col-sm-4"> 
			  <div > 
				  <p class="jumbotron text-center" ><strong>Entregar de Documentos</strong>
					<a href="https://plataformactea.com.br/atendimento/doc.php" class="btn btn-success  btn-block btn-lg">
					  <span class="glyphicon glyphicon-envelope"></span> Imprimir cupom
					</a>
				  </p>  
			 </div>	    
			</div>       
            <div class="col-sm-4"> 			
			 <div > 
				  <p class="jumbotron text-center" ><strong>Pegar de Documentos</strong>
					<a href="https://plataformactea.com.br/atendimento/ent.php" class="btn btn-warning  btn-block btn-lg">
					  <span class="glyphicon glyphicon-duplicate"></span> Imprimir cupom
					</a>
				  </p>  
			 </div>	 
			</div> 
			 
		</div>	  
	  
	  
    </div>
    
    </div>
 

</body>
</html>
