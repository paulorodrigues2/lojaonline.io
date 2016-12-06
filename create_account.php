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

  <title>Snapbacks Portugal - Loja Oficial</title>
<base href="http://localhost" />
<meta name="description" content="Snapbacks Portugal - A tua loja de excelência em Portugal" />
<link href="http://w33d.pt/image/data/w33d-favicon.jpg" rel="icon" />

  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">

  
  
  <!-- Custom styles for this template -->
  <link href="/css/carousel.css" rel="stylesheet">
  <link href="/css/bootstrap-datetimepicker.css" rel="stylesheet">
  

</head>
<!-- NAVBAR
  ================================================== -->
  <body>
  
  
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '736965029689528', // Set YOUR APP ID
      channelUrl : '', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });
 
 
   FB.Event.subscribe('auth.authResponseChange', function(response)
    {
     if (response.status === 'connected')
    {
        
        //SUCCESS
 
    }   
    else if (response.status === 'not_authorized')
    {
        //alert("not authorized");
 
        //FAILED
    } else
    {
        //alert("logged out");
 
        //UNKNOWN ERROR
    }
    });
 
    };
    function registerInfo()
	{
	    FB.api('/me', function(response) 
		{
  
		  
          $.ajax({
		type: "POST",
		url: 'index.php?route=account/fbconnect',
		data: {"first_name":response.name,"email":response.email,"id":response.id}
		})
		.done(function( msg ) 
		{
		    location.href=location.href;
		});
		
 
      });
		
		
		
	
	}
    function Login()
    {
 
        FB.login(function(response) {
           if (response.authResponse)
           {
                
				registerInfo();
				console.log('User Logged in  fully authorize.');
            } 
			else
            {
             console.log('User cancelled login or did not fully authorize.');
            }
         },{scope: 'email,user_photos,user_videos'});
 
    }
 
  
    function getPhoto()
    {
      FB.api('/me/picture?type=normal', function(response) {
 
         return response.data.url;
 
    });
 
    }
    function Logout()
    {
        FB.logout(function(){document.location.reload();});
    }
 
  // Load the SDK asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
 
</script>
 
    
  <!--fblogin code ends here-->
  
  
  
  
  
    <div class="navbar-wrapper">
	
	
	
      <div class="container">

        <nav class="navbar navbar-inverse">
          <div class="container">
		  <div class="span9">
							<div class="row-fluid">
								
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <img id="logo" src="images/logo.png" />
				<img id="banner" src="images/banner.png" />
            </div>

          </div>
        </nav>
		</div>

	<div class="container">

	
	<form>
	
	</form>
<?php


if(isset($_POST['submit']))
	
{

$nome = "joao";//$_POST['nome'];
$sobrenome = "maria";//$_POST['sobrenome'];
$email = "mail.com";///$_POST['email'];
$password= "mail"; //$_POST['password'];

	
	$checkemail="SELECT * FROM cliente WHERE email='$email'";
	
	$runing= mysqli_query($link, $checkmail);
	
	if(mysqli_num_rows($runing)>0){
		echo "<script>alert('Email $email já existe na nossa base de dados, por favor use outro email!)</script>";
	exit();
	}

		
$queryl="INSERT INTO cliente (nome,sobrenome, email, password) VALUES ('$nome','$sobrenome']}','$email','$password')";
		$result=mysqli_query($link, $queryl);
		echo	$queryl;
}

?>



	 

	 

	

	

        
    
  

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
    




    <!-- jQuery Bootstrap Form Validator -->
    <link rel="stylesheet" href="/formvalidation/css/formValidation.css"/>
    <script type="text/javascript" src="/formvalidation/js/formValidation.js"></script>
    <script type="text/javascript" src="/formvalidation/js/framework/bootstrap.js"></script>
    <!--Validação de input números de telefone plugin pro form validation-->
    <link rel="stylesheet" href="/formvalidation/css/intlTelInput.css" />
    <script src="/formvalidation/js/intlTelInput.min.js"></script>
<!--
<script>
function submitForm(){
    // Initiate Variables With Form Content
    var nome = $("#nome").val();
	var sobrenome = $("#sobrenome").val();
	var morada = $("#morada").val();
	var pais = $("#pais").val();
	var email = $("#email").val();
	var codigopostal = $("#cp").val();
 
    $.ajax({
        type: "POST",
        url: "create_account.php",
        data: "nome=" + nome + "&sobrenome=" + sobrenome + "&morada=" + morada + "&pais=" + pais + "&email=" + email + "&codigopostal=" + cp, 
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
        }
    });
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
}
</script>
	
<script>
$("#contactForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});
</script>
--->



    


  </body>
  </html>