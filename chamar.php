<?php  $site = 'https://plataformactea.com.br/atendimento/'; ?>
 

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

<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>
		 

		<!-- BASE CSS -->
		<link href="<?= $site; ?>css/base.css" rel="stylesheet">
		<link href="<?= $site; ?>css/custom.css" rel="stylesheet">
		<link href="<?= $site; ?>css/reset.css" rel="stylesheet">
		<link href="<?= $site; ?>css/datepicker.css" rel="stylesheet">
		<link href="<?= $site; ?>css/style-bt-file.css" rel="stylesheet">
		<link href="<?=$site;?>css/suportewats.css" rel="stylesheet">
		
		<link href="<?=$site;?>css/icheck/icheck-material.css" rel="stylesheet">
		
  
<!DOCTYPE html>
<html lang="en">
<head>  
  <title> Atendimento CTEA</title>
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
 
</div>
    
  <!-- jQuery -->
<script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.min.js"></script>
<!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
 
 
   
  <div id="search"></div>
  <div class="table-responsive" id="mostrar">
     
    <table data-sortable class="table table-hover table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th style="font-size: 20px;">TIPO</th>    		  
          <th style="font-size: 20px;">Guichê</th>            
		  <th style="font-size: 20px;">NÚMERO </th>    
          
           
        </tr>
      </thead>
     
      <tbody>
	  
	                
					   
        <?php
    
       		   
						  $conexao = new PDO("mysql:host=mysql.plataformactea.com.br:3306;dbname=plataformactea02","plataformactea02","23612361Isaias61");
						  $conexao->exec('SET CHARACTER SET utf8');  
						  $select = $conexao->prepare("select * from chamadas  WHERE  view ='1'order by id asc ");
						  $select->execute();      
						  $linha = $select->fetchAll(PDO::FETCH_OBJ);
       
		
        foreach ($linha as $p) { 
		  $view = $p->view; 
          $id = $p->id; 
		  $atd= $p->atd; 
		 
		       if($atd=='MAT'){ ?>
			     <tr id="<?=$p->id;?>" <?=($view == 1 ? "style='background-color: #0066cc;font-weight: bold;color:#ffffff'" : "");?>> 
		     <?} 
			    if($atd=='DOC'){ ?>
			     <tr id="<?=$p->id;?>" <?=($view == 1 ? "style='background-color: #34AF23;font-weight: bold;color:#ffffff'" : "");?>> 
		       <?} 
			    if($atd=='PEG'){ ?>
			       <tr id="<?=$p->id;?>" <?=($view == 1 ? "style='background-color: #ffa31a;font-weight: bold;color:#ffffff'" : "");?>> 
		       <?} ?>
			
			
			   
		  
              <td>
                
                 <strong><? echo $p->id;?></strong>
               <?				  
			 	if($view==1){
		           echo "<script> play();</script>";
				   ?>
				    <div id="lH" style=" display: none">
				   <audio controls autoPlay id="aH"> 
					  <source src="https://plataformactea.com.br/atendimento/campainha.mp3" type="audio/mp3"> 
					</audio>
				  </div>	
                
		        <? } ?>    
             </td >
             <td style="font-size: 30px;">                    
               <?php
			    
			    echo $p->descricao; 
               ?>
                 			   
             </td>  
			 <td style="font-size: 30px;">			 
              <?php
			     echo $p->guiche; 
                ?>
             
              </td> 
              <td style="font-size: 80px;" >			 
              <?php
			     echo  $p->atd . '-' . $p->atendimento; 
                ?>  
             
              </td>
			   
              
               
            </tr>   
            <?php
		} // endforeach;
          
       ?>  
       <!-- FINAL DO LOOP DA LEITURA DO BANCO -->

        
</tbody>
</table>
</div>
  <audio id="audio">
   <source src="https://plataformactea.com.br/atendimento/campainha.mp3" type="audio/mp3" />
</audio>
 <div id="chamadanotificacao"></div>
 
 
 <script type="text/javascript">
  setTimeout(function() {
    window.location.reload(1);
	
	//alert('atualizou');
	 
     
	
	 
	
  }, 20000);
  
    
</script>
