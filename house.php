<?php
require_once('common/database.php');
require_once('common/common.php');
?>

	  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Casa da Avó</title>

  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/carousel.css" rel="stylesheet">
  <link href="/css/bootstrap-datetimepicker.css" rel="stylesheet">
  <link rel='shortcut icon' type='image/x-icon' href='/images/favicon.png' />
  
</head>
<!-- NAVBAR
  ================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">	
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">
                <img alt="Brand" src="images\drawing2.png">
              </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li  class="active"><a href="#home" class="page-scroll" 	>Home    </a></li>
                <li><a href="#reserva" class="page-scroll" 	>Reservas</a></li>
                <li><a href="login.php"					>Login   </a></li>
                <li><a href="#sobre" class="page-scroll"	>Sobre </a></li>
              </ul>
            </div>
          </div>
		  </div>
       

      </div>
    </div>
</div>


    

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
	  <div>
      <div class="row">
        <div class="col-lg-6 ">
         <span class="circle glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
         <p>
		 <iframe width="560" height="315" src="https://www.youtube.com/embed/ooyI5fcoOW0" frameborder="0" allowfullscreen></iframe>
		 </p>
		 </div>
        <div class="col-lg-6 ">
         <span class="circle glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
		 <p>
         <iframe width="560" height="315" src="https://www.youtube.com/embed/1yKUsUoe2WI" frameborder="0" allowfullscreen></iframe>
		 </p>
         </div>
		 </div>
        </div>
		
		<!-- /.row -->




        <!-- START THE FEATURETTES -->

		
		<div class="botao">

        			<center> <a class="btn btn-success btn-lg" href="formreserva.php"><span class="glyphicon"></span> Efectuar reserva</a> </center>

        		</div >
       


<!-- /END THE FEATURETTES -->
<!-- FOOTER -->
<footer class="container text-center footer">
 <p>&copy; 2015/2016 PMS GRUPO 2. &middot; </p>
</footer>

</div><!-- /.container -->




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/js/holder.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/scrolling-nav.js"></script>
    <!--Traduz datapicker pra pt e data atual-->
    <script src="/js/moment.js"></script>
    <script type="text/javascript" src="/js/locale/pt.js"></script>
    <script type="text/javascript" src="/js/bootstrap-datetimepicker.min.js"></script>
    

    <script type="text/javascript">
      var data = new Date();
	   data=data.setDate(1);
     

      $(function () {
        $('#datetimepicker1').datetimepicker({
          locale: 'pt',
          format: 'YYYY-MM-DD HH:mm',
          minDate:  data,
          enabledHours: [8,9,10,11,12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22,23],
          sideBySide:true}).on('changeDate', function(e) {
                  // Revalidate the date field
                  $('#dateRangeForm').formValidation('revalidateField', 'datahora_inicial');
                });

        });
      var date = new Date();
	 date.setMinutes(date.getMinutes() + 50);
  

      $(function () {
        $('#datetimepicker2').datetimepicker({
          locale: 'pt',
          format: 'YYYY-MM-DD HH:mm',
          minDate:  date,
          enabledHours: [8,9,10,11,12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22,23],
          sideBySide:true}).on('changeDate', function(e) {
                  // Revalidate the date field
                  $('#dateRangeForm').formValidation('revalidateField', 'datahora_final');
                });
        });
    </script>


    <!-- jQuery Bootstrap Form Validator -->
    <link rel="stylesheet" href="/formvalidation/css/formValidation.css"/>
    <script type="text/javascript" src="/formvalidation/js/formValidation.js"></script>
    <script type="text/javascript" src="/formvalidation/js/framework/bootstrap.js"></script>
    <!--Validação de input números de telefone plugin pro form validation-->
    <link rel="stylesheet" href="/formvalidation/css/intlTelInput.css" />
    <script src="/formvalidation/js/intlTelInput.min.js"></script>


    <script type="text/javascript">
      $(document).ready(function() {

        $('#form_reserva').formValidation({
          framework: 'bootstrap',
          icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
          },
          fields: {
            selNumPes: {
              validators: {
                notEmpty: {
                  message: 'Deve introduzir o número de pessoas para a sua reserva.'
                }
              }
            }
			selNumPes_crianca: {
              validators: {
                notEmpty: {
                  message: 'Deve introduzir o número de menores para a sua reserva.'
                }
              }
            }
        });
      });
	  }

    </script>
    <!--Fim dos plugin de validação-->

    


  </body>
  </html>