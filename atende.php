 
  <?php
    $base_url = "https://plataformactea.com.br/atendimento/";
  ?>
  
  <script language="javascript" type="text/javascript" src="<?php echo $base_url;?>js/dist/jquery.jqplot.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>js/dist/jquery.jqplot.min.css" />

  <script type="text/javascript" src="<?php echo $base_url;?>js/dist/plugins/jqplot.pieRenderer.min.js"></script>
  <script type="text/javascript" src="<?php echo $base_url;?>js/dist/plugins/jqplot.donutRenderer.min.js"></script>
  <script language="javascript" type="text/javascript" src="<?php echo $base_url;?>js/dist/jquery.jqplot.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>js/dist/jquery.jqplot.min.css" />

  <script type="text/javascript" src="<?php echo $base_url;?>js/dist/plugins/jqplot.pieRenderer.min.js"></script>
  <script type="text/javascript" src="<?php echo $base_url;?>js/dist/plugins/jqplot.donutRenderer.min.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php
 
 
                    $servername = "mysql.plataformactea.com.br:3306";
				    $username = "plataformactea02";
				    $password = "23612361Isaias61";
				    $dbname = "plataformactea02";	
							 
							// Create connection
					$conn = mysqli_connect($servername, $username, $password, $dbname);
							// Check connection
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					} 
							
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					} 
							  
					$sql = "";
					$sql= "SET NAMES 'utf8'";
					mysqli_query($conn, $sql);
					$sql = "SET character_set_connection=utf8";
					mysqli_query($conn, $sql);
					$sql ="SET character_set_client=utf8";
					mysqli_query($conn, $sql);
					$sql ="SET character_set_results=utf8";
					mysqli_query($conn, $sql); 
					
					$demi = new DateTime();
					$hora = date('H:i:s');
                    $demi = date('d/m/Y');
					
					$conta = 0;
					$hoje = date('d/m/Y');
                    $codidata =0;
                    $codidata = substr($hoje,6,4) . substr($hoje,3,2) . substr($hoje,0,2)  . '</br>';
					
				//	echo 'Data é ' . $demi . '<br>';
				//	echo 'Hora é ' . $hora . '<br>';
					
					mysqli_query($conn, "INSERT INTO atende (data, codidata, nome, hora, sta ,atd) VALUES ('$demi','$codidata','MATRÍCULA' , '$hora','Aberto','MAT')");
                    $id = mysqli_insert_id($conn);
					
				//	echo "New record has id: " . $id;
					//mysqli_close($conn);
					
?>					

 
 <!--
<div class="jumbotron text-center">
 <h1><i class="icon-bell"> Atendimento CTEA MATRÍCULAS</i></h1>
  <p>Selecione o botão verde(AVANÇAR) para imprimir cupom!</p> 
</div>
 --> 
 <div class="page-header">
   

 
 
 
  

<div> 
 
   	 
      <div id="divImprimir"    >
	
     
      
          <?php
          
		    
		  $nome_empresa = 'Atendimento';
		  
          ?><center><?php 
            
 echo "\n <br />";
		  echo "\n <br />";
		  echo "\n <br />";
		  echo "\n <br />";
		  echo "\n <br />";
		  echo "<br ><p  >Atendimento \n </p></br>"; 
		  echo "\n <br />";
           		  
		  echo "<br ><p  >MAT-{$id} \n </p></br>"; 
          
		  $mostrar = "MATRICULAS - CUPOM MAT-" . $id;
         
			 ?></center><?php   
       
		  
          ?> 
        </div>
  <!--    </article> -->
	   
  
	 
  </div>   
 	  
 
 

  <!--  <a><button id="botaoInicio" class="btn btn-primary btn-block btn-lg" href="https://plataformactea.com.br/atendimento/"> Início <i class="icon-back"  ></i></button></a>
   <button id="botaoPrint" class="btn btn-success btn-block btn-lg" href=""> Avançar <i class="icon-print-2"  ></i></button></a> -->
  <!--<div class="container-fluid"> -->
    <div class="container"> 
    
	   <div class="row"> 
          <form id="formCancelar"  action="" onsubmit="return valida_form(this)" method="post">
          <div class="col-sm-6"> 
			  
				  <p class="jumbotron text-center"><strong>ESCOLHER ATENDIMENTO</strong>
					<a href="https://plataformactea.com.br/atendimento/" class="btn btn-primary btn-block btn-lg">
					  <span class="glyphicon glyphicon-arrow-left"></span> Início 
					</a>
				  </p> 
				   
				     
			 </div>	   
   
			  <div class="col-sm-6"> 
			  
				  <p class="jumbotron text-center"><strong><? echo $mostrar; ?></strong>
					<button href="" id="botaoPrint" name="botaoPrint" type="submit" class="btn btn-primary btn-block btn-lg">
					  <span class="glyphicon glyphicon-print"></span> Avançar
					</button>
				  </p> 
				  
			 </div>	  
			 </form>
     </div>	  
 </div>	
  <!-- </div>	  -->
  


 </div>
 				
		
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
	 $("#botaoPrint").click(function(){         
            PrintElem('#divImprimir');
     })  
	 
	 function PrintElem(elem)
        {
            Popup($(elem).html());
        }
  
        function Popup(data)
        {   
            var mywindow = window.open('', 'CTEA', 'height=100,width=300');
            mywindow.document.write('<html><head><title>Atendimento</title>');
            mywindow.document.write("<link rel='stylesheet' href='<?php echo $base_url;?>assets/css/bootstrap.min.css' />");
            mywindow.document.write("<link rel='stylesheet' href='<?php echo $base_url;?>assets/css/bootstrap-responsive.min.css' />");
            mywindow.document.write("<link rel='stylesheet' href='<?php echo $base_url;?>assets/css/matrix-style.css' />");
            mywindow.document.write("<link rel='stylesheet' href='<?php echo $base_url;?>assets/css/matrix-media.css' />");
 

            mywindow.document.write('</head><body style="font-size: 80px;" >');
            mywindow.document.write(data);
		//	mywindow.document.write('<button  id="botaoPrint" class="btn btn-primary btn-block btn-lg" href="https://plataformactea.com.br/atendimento/"> Voltar <i class="icon-print-2" aria-hidden="true"></i></button></a>')
            mywindow.document.write('</body></html>');

            mywindow.print();
            mywindow.close();
			

            return false;
        } 
	   
	 
       
  });  
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
 <!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>


<script type="text/javascript" charset="utf-8">
/*  $(document).ready(function(){
    $('#botaoPrint').click(function(){
      $('#divImprimir').printThis({
        doctypeString: '<meta charset="utf-8">', 
        importStyle: true,
        base: false,
      });
    });
  }); */
</script> 
		 
 