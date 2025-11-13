<?php  $site = 'https://plataformactea.com.br/atendimento/'; 
       
	   session_start();
	   $guiche = $_SESSION['guiche'];
       $tipo =  $_SESSION['tipo'];
	//   echo '<strong>ghiche é ' . $guiche . '</strong></br>';
	 //  echo '<strong>tipo é ' . $tipo . '</strong></br>';
	   
	   if($tipo == 1){
		  $tipob = 'MATRÌCULA';   
	   }
	   if($tipo == 2){
		 $tipob = 'ENTREGA DE DOCUMENTOS';  
	   }
	   
	   echo 'Next Week: '. date('d-m-Y', strtotime('-1 day')) ."<br>";

	   ?>



<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>
		 

		<!-- BASE CSS -->
		<link href="<?= $site; ?>css/base.css" rel="stylesheet">
		<link href="<?= $site; ?>css/custom.css" rel="stylesheet">
		<link href="<?= $site; ?>css/reset.css" rel="stylesheet">
		<link href="<?= $site; ?>css/datepicker.css" rel="stylesheet">
		<link href="<?= $site; ?>css/style-bt-file.css" rel="stylesheet">
		<link href="<?=$site;?>css/suportewats.css" rel="stylesheet">
		
		<link href="<?=$site;?>css/icheck/icheck-material.css" rel="stylesheet">
		
<?php
		
include 'View.class.php';
include 'Pager.class.php';
 
 
  $hoje = date('d/m/Y');
  $codidata =0;
  $codidata = substr($hoje,6,4) . substr($hoje,3,2) . substr($hoje,0,2)  . '</br>';
  
        $conexao = new PDO("mysql:host=mysql.plataformactea.com.br:3306;dbname=plataformactea02","plataformactea02","23612361Isaias61");
		$conexao->exec('SET CHARACTER SET utf8'); 
		$select = $conexao->prepare("delete from atende  WHERE  sta ='Aberto' and codidata <  ".$codidata."");
		$select->execute();      
		//$linha = $select->fetchAll(PDO::FETCH_OBJ);
		
	//	$select2 = $conexao->prepare("delete from atende  WHERE  codidata =  '0'");
	//	$select2->execute();      
	//	$linha = $select->fetchAll(PDO::FETCH_OBJ);
        
		
		
		
		
        $conexao = "";
		 
  
 
?>
<!-- INICIO DA TABELA DE SERVICOS -->
<div style="background-color:#ffffff;" class="container margin_60">   
  <p style="color: red;"><b><span></span> Mantenha essa página aberta! A cada minuto ela te atualiza!</b></p>  
  <div class="indent_title_in">
    <i class="fa fa-cutlery" aria-hidden="true"></i>  
    <h3><? echo 'ATENDIMENTO de ' . $tipob; ?></h3>    
	
    
	<div class="controls">
	  <p style="color: black; margin: 0 auto;align-items: center;display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;"><b><span></span> Selecione abaixo!</b></p> 
	</div>
	
  </div>
  <style type="text/css">
    #custom-search-input{
      padding: 3px;
      border: solid 1px #E4E4E4;
      border-radius: 6px;
      background-color: #fff;
    }

    #custom-search-input input{
      border: 0;
      box-shadow: none;
    }

    #custom-search-input button{
      margin: 2px 0 0 0;
      background: none;
      box-shadow: none;
      border: 0;
      color: #666666;
      padding: 0 8px 0 10px;
      border-left: solid 1px #ccc;
    }

    #custom-search-input button:hover{
      border: 0;
      box-shadow: none;
      border-left: solid 1px #ccc;
    }

    #custom-search-input .glyphicon-search{
      font-size: 23px;
    }
	
  </style>
  
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
 
 <form id="f1" name="f1" action="" method="post" onsubmit="return valida_form(this)"> 
    
  <div style="margin: 0 auto;align-items: center;display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;" class="toolbar-btn-action">
   	<a   type="button" href="https://plataformactea.com.br/atendimento/guiche.php"   class="btn btn-danger"><? echo $guiche; ?> <i class="icon-ok icon-white"></i></a>&nbsp;
	<a   type="checkbox" value="1"   selsta ="Todos"  id="btnTodos" name="btnTodos"  class="btn btn-default">Todos <i class="fa fa-cutlery" aria-hidden="true" ></i></a>&nbsp;
    <a   type="checkbox" value="1"   selsta ="Aberto"  id="btnAberto" name="btnAberto"  class="btn btn-warning">Abertos <i class="fa fa-cutlery" aria-hidden="true" ></i></a>&nbsp;
    <a   type="checkbox" value="1" data-element="#mostrar"   selsta ="Em Andamento"  class="btn btn-info">Em Andamento <i class="fa fa-cutlery" aria-hidden="true"></i></a>&nbsp;
    <a   type="checkbox" value="1" data-element="#mostrar"   selsta ="Finalizado"  class="btn btn-success">Finalizados <i class="fa fa-cutlery" aria-hidden="true"></i></a>&nbsp;
  <!--  <a  type="checkbox" value="1" data-element="#mostrar"   selsta ="Cancelado"  class="btn btn-danger">Cancelados <i class="fa fa-cutlery" aria-hidden="true"></i></a> -->
  </div>  
    <p><hr></hr></p>  
    <div class="controls" class="span5" style="margin: 0 auto;align-items: center;display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">	 
     <div class="controls"  >
		<input type="text" name="status" id="status" value="Todos"  />
	<!--	<a  type="submit" id="btnsel" name="btnsel" class="btn btn-primary" ><i class="icon-ok icon-white"></i> Confimar </a> -->
		<button type="submit" id="btnsel" name="btnsel" class="btn btn-primary" ><i class="icon-ok icon-white"></i>Confirmar</button>
		&nbsp;
 <!--   <hr></hr>  		 -->   
    </div>     
  </div>     
  
</form>  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
	 <script>
	   $(document).ready(function(){ 
			 $(document).on('click', 'a', function(event) {        
			 var selsta = $(this).attr('selsta');
			    $('#status').val(selsta); 	 												 
			 });
		});	 
  </script>  
 	   
  <?
    if(isset($_REQUEST["status"])){ 
		 $status = $_REQUEST['status'];
         $sta = $_REQUEST['status'];		 
		// if($status=="Aberto"){
		//	echo "<p style='color: red;'>teste botão == " . $status  . "</p></br>";
		// }
	}else{
		//	echo "<p style='color: red;'>Dados não foram processados</p></br>";
	}
  ?>
    
  
  <script language= "JavaScript">
	  $("#btnsel").submit(function() {
		 if($("#status").val()== ""){
			alert('Favor selecionar uma opção acima para pesquisar!');      
			return false;
		} 
		  
		  
	//	if($("#cpf").val()== null || $("#email").val() =="" || $("#senha").val() ==""  || $("#valor").val() ==""){
	//		alert('Campos CPF, EMAIL e SENHA não podem ficar em branco e Selecione o curso desejado!');      
	//		return false;
	//	}
	
     }); 
     </script>	 
  
  <br />
  <div id="search"></div>
  <div class="table-responsive" id="mostrar">
     
    <table data-sortable class="table table-hover table-striped">
      <thead>
        <tr>
          <th>Atedimento #</th>              
          <th>Data </th>    
          <th>Status</th>
          <th >Chamar</th>		  
          <th data-sortable="false">Ver Atendimento/Status</th>
		 
          <!--<th>Motoboy</th>-->
        </tr>
      </thead>
     
      <tbody>
        <?php
   
        	        $data = new DateTime();
					$hoje = new DateTime();
					 
                    $hoje = date('d/m/Y');
                   
				       
						  $conexao = new PDO("mysql:host=mysql.plataformactea.com.br:3306;dbname=plataformactea02","plataformactea02","23612361Isaias61");
						  $conexao->exec('SET CHARACTER SET utf8'); 
						  if($sta=='Todos'){
							  $select = $conexao->prepare("select * from atende where data = '".$hoje."' order by id  desc ");
							//  $sql = "select * from atende  order by id order by id desc";  
						  }else{
						      $select = $conexao->prepare("select * from atende  WHERE  sta ='".$sta."' and data =  '".$hoje."'  order by id desc ");
							  
							 //  $sql = "select * from atende  WHERE  sta ='".$sta."' order by id  desc"; 
						  } 
						  $select->execute();      
						  $linha = $select->fetchAll(PDO::FETCH_OBJ);
       
		
        foreach ($linha as $p) { 
		 $view = $p->view;
		 $atd= $p->atd;      
		
		 if($view == 0){
		 ?>    <div id="lH" style=" display: none">
                <audio controls autoPlay id="aH"> 
					  <source src="https://plataformactea.com.br/atendimento/addcarrinho.mp3" type="audio/mp3"> 
					</audio>
				  </div>
				</div>  
				  
           <?           
		   $id = $p->id;
         
		 }?>
            <tr id="<?=$p->id;?>" <?=($view == 0 ? "style='background-color: #34AF23;font-weight: bold;color:#ffffff'" : "");?>> 
			
			
			
			
			
			
		<!--	<tr id="<?=$p->id;?>" <?=($view == 0 );?>> -->
              <td>
                
                 <strong><? echo $p->atd . '-' . $p->id;?></strong>
                
             </td >
             <td>                    
               <?php
			   $data = $p->data; 
			    echo $data;
               ?>
                 			   
             </td>  
              <td>			 
              <?php
			    $sta = $p->sta;
                if($sta == "Aberto"):
                  echo "<span class=\"label label-warning\">Aberto</span>";
                elseif($sta == "Finalizado"):
                  echo "<span class=\"label label-success\">Finalizado</span>";
                elseif($sta == "Cancelado"):
                  echo "<span class=\"label label-danger\">Cancelado</span>";
                elseif($sta == "Em Andamento"):
                  echo "<span class=\"label label-info\">Em Andamento</span>"; 
                endif;
                ?>
             
              </td>  
			   
               <!-- <button id="verPedido_<?=$id;?>" class="btn btn-primary btn-xs">Ver Pedido</button> -->
			   <td> 
			      <?  echo '<a href="#ex12" rel="modal:open"   selid2="'.$p->id.'"  selnome2="'.$p->nome.'" selatendimento="'.$p->id.'" selguiche="'.$guiche.'"  selatd2 ="'.$p->atd.'"   style="margin-right: 1%" class="btn btn-warning" ><i class="icon-bell icon-white"></i>Chamar</i></a></td>'; ?>
                
			   </td>  
			   <td> 
	                <?  echo '<a href="#ex1" rel="modal:open"   selid="'.$p->id.'"  selnome="'.$p->nome.'" selcurso="'.$p->curso.'" seltelefone="'.$p->telefone.'"  selatd ="'.$p->atd.'"  style="margin-right: 1%" class="btn btn-primary" ><i class="icon-ok icon-white"></i>Atender</i></a></td>'; ?>
			   </td>
			  
               
            </tr>   
            <?php
		} // endforeach;
          
       ?>  
       <!-- FINAL DO LOOP DA LEITURA DO BANCO -->

        
</tbody>
</table>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
 <!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
  
    <?
        $conexao  = new PDO("mysql:host=mysql.plataformactea.com.br:3306;dbname=plataformactea","plataformactea","23612361Isaias61");
		$conexao ->exec('SET CHARACTER SET utf8');												
	 ?>
	 
<!-- Modal HTML embedded directly into document -->
<div id="ex1" class="modal" class="modal hide fade"   role="dialog" aria-labelledby="myModalLabel">
      <form method="post" action="processaAtualizaAgenda.php?id" >
 
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h5 id="myModalLabel">  Atendimento de Matrículas/Documentos</h5>
  </div> 
  <div class="modal-body"> 
  
                    <div class="control-group">
                        <label for="nomeCliente" class="control-label">Atendimento #</span></label>
                        <div class="controls">
                            <input type="text" id="id" name="id" value="" /> 
							<input type="text" id="atd" name="atd" value="" /> 
                       </div>
                    </div>
                     
       
	   
	               <div class="control-group">
                        <label for="nomeCliente" class="control-label">Nome</span></label>
                        <div class="controls">
                            <input id="nome" type="text" name="nome" style="width:400"    />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="documento" class="control-label">Qual o Curso </label> 
						<select name="curso" id="curso" >	
							<?php 
							// Colocando os grupos cadastrados na select
							
							$select = $conexao ->prepare("select *  from cursos  order by nomeCurso asc");
							$select->execute();      
							$linha = $select->fetchAll(PDO::FETCH_OBJ); 
							foreach ($linha as $r2) {  
								 
									$descricao_grupo = $r2->nomeCurso;
									//$id_grupo =  mysql_result($sql, $i, "id");
									echo '<option value="'.$descricao_grupo.'">'.$descricao_grupo.'</option>';
								 
							} 
                            ?>  
							
						</select>   
						 
						 
                    </div>  
					
                    <div class="control-group">
                        <label for="telefone" class="control-label">Telefone<span class="required"></span></label>
                        <div class="controls">
                            <input id="telefone" type="text" name="telefone"    />
                        </div>
                    </div>
					
				<div class="control-group">
				         <label for="telefone" class="control-label">Status<span class="required"></span></label>
                        <div class="controls">
						<select name="sta" id="sta" value="Em Andamento" >
						  <option value="Em Andamento">Em Andamento</option>
						  <option value="Finalizado">Finalizado</option>
						  <option value="Cancelado">Cancelado</option>
						  
						</select>
						
					   </div>	
				</div>		
				 	
					 
					 
    </div>   
    
  <div class="modal-footer">
   
<!--	<a href="javascript:history.back();" class="btn" class="btn btn-inverse">Voltar</a> -->
    <button class="btn btn-primary" type="submit" id="submit2" name="submit2" > <i class="icon-ok icon-white"></i>Parar aviso sonoro/Gravar</button>
	
  </div>
  </form>
   
</div>
    
 
 

<script type="text/javascript">
$(document).ready(function(){
   $(document).on('click', 'a', function(event) {
        
        var selid = $(this).attr('selid');
        $('#id').val(selid);
		
		 var selatd = $(this).attr('selatd');
        $('#atd').val(selatd);
		
		
		
        var selnome = $(this).attr('selnome');
        $('#nome').val(selnome);
		
		var selcurso = $(this).attr('selcurso');
        $('#curso').val(selcurso);
		
		var seltelefone = $(this).attr('seltelefone');
        $('#telefone').val(seltelefone);
    });

});

</script>


<!-- Modal HTML embedded directly into document -->
<div id="ex12" class="modal" class="modal hide fade"   role="dialog" aria-labelledby="myModalLabel">
    <form method="post" action="processaChamada.php?id2" >
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
      <h5 id="myModalLabel">  Chamadas </h5>
    </div> 
    <div class="modal-body"> 
  
                    <div class="control-group">
                        <label for="nomeCliente" class="control-label">id #</span></label>
                        <div class="controls">
                            <input type="text" id="id2" name="id2" value="" /> 
							<input type="text" id="atd2" name="atd2" value="" /> 
                       </div>
                    </div>
                     
	               <div class="control-group">
                        <label for="nomeCliente" class="control-label">Tipo</span></label>
                        <div class="controls">
                            <input id="nome2" type="text" name="nome2" style="width:400"    />
                        </div>
                    </div>
                     
					
                    <div class="control-group">
                        <label for="telefone" class="control-label">Atendimento<span class="required"></span></label>
                        <div class="controls"> 
                            <input id="atendimento" type="text" name="atendimento"    />
                        </div>
                    </div>
					 
                    <div class="control-group">
                        <label for="telefone" class="control-label">Guichê<span class="required"></span></label>
                        <div class="controls">
                            <input id="guiche" type="text" name="guiche"    />
                        </div>
                    </div>
				</div>	
<div class="modal-footer"> 
    <button class="btn btn-primary" type="submit" id="submit3" name="submit3" > <i class="icon-ok icon-white"></i>Chamar</button>
  </div>
  </form>
</div>				
    </div>   
  

<script type="text/javascript">
$(document).ready(function(){
   $(document).on('click', 'a', function(event) {
		var selid2 = $(this).attr('selid2');
        $('#id2').val(selid2);
		
		var selatd2 = $(this).attr('selatd2');
        $('#atd2').val(selatd2);
		
		
        var selnome2 = $(this).attr('selnome2');
        $('#nome2').val(selnome2);
		
		var selatendimento = $(this).attr('selatendimento');
        $('#atendimento').val(selatendimento);
		
		var selguiche = $(this).attr('selguiche');
        $('#guiche').val(selguiche);
    });
});

</script>



<div class="data-table-toolbar">
 <?php
   function ExePaginator($Tabela, $Termos = null, $ParseString = null) {
        $this->Tabela = (string) $Tabela;
        $this->Termos = (string) $Termos;
        $this->Places = (string) $ParseString;
        $this->getSyntax();
    }

 

?>  
</div>

</div>

<br />
<div class="alert alert-info container margin_60">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4><i class="icon-attach-3"></i> NOTAS!</h4>
  <p>
   <strong>Clique em "Atender" Para ver ou editar o status do aviso!  <br /> 
   <strong>Atendimento com a cor de fundo  <b style="color:#34AF23;">VERDE</b> Significa que não foram atendidos!

   </p>

 </div>
 <div id="chamadanotificacao"></div>
 
 
 <script type="text/javascript">
  setTimeout(function() {
    window.location.reload(1);
	// alert('atualizou');
  }, 30000);
  
  $(document).ready(function () {
    $("tr").dblclick(function(){
        
    });
  });
</script>
