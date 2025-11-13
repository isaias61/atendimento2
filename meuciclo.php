
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
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
 
  

 <legend>Colocando PONTO no CPF</legend>
        <form id="form">
            <label for="cpf">CPF</label>
            <input type="number" name="cpf" placeholder="Sem pontos e traço" required />
            <input type="submit" value="ENVIAR" name="button"/><br/><br/>
            <input name='recebe' id="recebe" value="QUERO_EXIBI-LA_AQUI" readonly style='width:100%;'/>
        </form>
		
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
 
 
 
         $(document).ready(function(){
  // tudo que estiver aqui poderá ser executado, após o documento ser carregado

  $("#form").on("submit", function(e){
    // está função diz, que quando esse formulario for enviado, tudo oque estiver aqui será executado.
    e.preventDefault(); // está função é usada pro form não ir para outra pagina, pois o evento padrão de um formulario é ir para outra pagina.
    var data = $("#form").serialize(); // a function serialize serve para pegar todos os valores que foram colocados nos inputs do form
    $.ajax({
      // está é a função ajax, do jquery, ela será usada para fazer a requisição assícrona.
      url: "ciclo.php", // aqui vai a url da requisição, nela é colocado o valor do atributo action da tag form
      data:  data, // aqui vai os dados para o servidor, geralmente é os inputs do form
      method: "POST", // aqui vai o método da requisição, acho que você já sabe sobre o get e post !
      dataType: "json", // aqui será o tipo de resposta que vamos receber, será no formato json, um formato simples e mais usado.
      success: function(data){
        // essa é a function success, ela ira ser executada se a requisição for feita com sucesso
        $("#recebe").val(data); // aqui estamos setando o valor retornado do php, no input
         // a variavel data, veio do parametro da function, e será a resposta do php.
      },
      error: function(){
        // essa é funcion error, ela será executada caso ocorrer algum erro na requisição
        alert("erro na requisição");
      }
    });
  });

});
</script>