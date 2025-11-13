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
  <p>Selecione qual atendimento desejado!</p> 
</div>

    
    
	<?
	
	$id = $_POST['id'];
	 
	 if(isset($_POST['id'])){
        		?>
				<p>
			   <strong>Dados processados!  <br />  
			   </p> 
	           <?
	 }else{
        ?>

			<div class="alert alert-info container margin_60">
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			  <h4><i class="icon-attach-3"></i> NOTAS!</h4>
			  <p>
			   <strong>Dados não foram processados!  <br />  
			   </p> 
			 </div>
		
		<? 
	 }
	 

    ?>	
	
	
 
    <div class="container-fluid">
     <div class="container">
	   <div class="row"> 
			   
			  
			  
			  		<div class="control-group"  id="divRecebimento">
                        
						<label for="ncm" class="control-label"><strong> Nome</strong> </label>
                        <div class="controls">
                            <input id="nome" type="text" name="nome" value="<?php echo set_value('nome'); ?>"  />
                        </div>
						
						<label for="ncm" class="control-label"><strong> Curso deseajado</strong> </label>
                        <div class="controls">
                            <input id="curso" type="text" name="curso" value="<?php echo set_value('curso'); ?>"  />
                        </div>
						
						
						<label for="ncm" class="control-label"><strong> Celular</strong> </label>
                        <div class="controls">
                            <input id="celular" type="text" name="celular"  value="<?php echo set_value('celular'); ?>"  />
                        </div>
						
						<label for="ncm" class="control-label"><strong> Email</strong> </label>
                        <div class="controls">
                            <input id="email" type="text" name="email"  value="<?php echo set_value('email'); ?>"  />
                        </div>
						
						<div class="control-group" style="margin-left: 10>			
							<label for="transporte"><strong>          Já foi aluno do curso?</strong></label>
							  
										&nbsp &nbsp &nbsp &nbsp<input  id="ckex" type="checkbox" name="ckex" value="1" /> 
							   	 		
					    </div>
						
						
                    </div>
			  
			    
				
				
		 
		</div>	  
	  
	  
    </div>
    
    </div>
 

</body>
</html>
