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
  <h1>Atendimento CTEA</h1>
 
</div>
    
 
    <div class="container-fluid">
     <div class="container">
	 
	   <div class="row"> 
			    
			  <div class="col-sm-6"> 
			  
				  <p class="jumbotron text-center" style="font-size: 300px">
					  <div class="control-group">
                        <label for="documento" class="control-label">Qual é o Guichê de atendimento? </label> 
						 
							<select class="span12" name="indpag" id="status" value="">
                                <option value="Guichê - 1">Guichê - 1</option>
                                <option value="Guichê - 2">Guichê - 2</option>                              
								<option value="Guichê - 3">Guichê - 3</option>                              
                           </select>  
						 
                    </div>  
					  
					  
				  </p> 
				  
				  
			 </div>	 
   
		</div>
		
	  
	  
    </div>
    
    </div>
 

</body>
</html>
