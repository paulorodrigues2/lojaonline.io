<?php
require_once('common/database.php');
require_once('common/common.php');
session_start();






function getPro(){
	
	if(isset($_GET['pro_id'])){
	global $link;
	
	
	
	$product_id = $_GET['pro_id'];
	
	$get_pro="Select * from artigo where artigo.id='$product_id'";
	
	$run_pro=mysqli_query($link, $get_pro);
	
	$numrows=mysqli_num_rows($run_pro);
	
	if($numrows >0){
	
	
	while($row_pro=mysqli_fetch_array($run_pro))
	{
		$pro_id = $row_pro['id'];
		$pro_nome = $row_pro['nome'];
		$pro_description = $row_pro['descript'];
		$pro_price = $row_pro['price'];
		$pro_quantidade = $row_pro['quantidade'];
		$pro_estate = $row_pro['state'];
		$pro_photo= $row_pro['imageData'];
		$pro_data= $row_pro['imageType'];

		
		
		
	
		echo"
		<div id='single_product'>
		";
		echo'<img src="data:image/jpeg;base64,'.base64_encode( $pro_photo ).'"/>';
					
			echo"<th><h3> $pro_nome </h3></th>
			<h3> $pro_price € </h3>
			
			
			
			
		
		</div>";
		
			}
		}
		
		}
		else{
			echo "Não existe nenhum artigo selecionado.";
	}
		
	}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Detalhes</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap-social.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
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
	
	<!-- Page Content -->
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12">
			
			<form  method="get" action="resultados.php" enctype="multipart/form-data" id="form_busca">
			<label>
				<span> Procurar Artigo </span>
				<input type="text" name="buscar"/>
				</label>
				<input type="submit" name="search" value="Procurar" />
				</form>
			
			
			
			
			
				<p class="lead">Categorias</p>
				
<?php

	$get_pro="Select * from categoria";
	
	$run_pro=mysqli_query($link, $get_pro);
	
	while($row_pro=mysqli_fetch_array($run_pro))
	{
		$pro_id = $row_pro['id'];
		$pro_name = $row_pro['name'];
		

		
?>
				<div class="list-group">
				<ul>
						<?php echo"<a href='detalhes.php?cat_id=$pro_id'</a>"; ?> <?php echo $pro_name;?></a> 
						
						</ul>
						
				</div>
				
				
				<?php
	}
?>
			</div>
			<div class="col-md-9 col-sm-9 col-xs-12">
				<?php getPro();?>
<?php
		if(isset($_GET['pro_id'])){

		$product_id = $_GET['pro_id'];
	
		$get_pro="Select * from artigo where artigo.id='$product_id'";
	
		$run_pro=mysqli_query($link, $get_pro);
	
		$numrows=mysqli_num_rows($run_pro);
	
		if($numrows = 0){
			
			echo "Não encontramos nenhum artigo que tenha selecionado.";
			
		}
	else{
	
?>
	

<?php
	}
}
?>
<?php
if(empty($_SESSION['cliente_id']))
	{
?>
		<p>Para efectuar a compra é necessário efetuar Login.</p>
		<center><ul class='nav navbar-nav navbar-'> <a href='login.php' class='btn btn-success' role='button'>Login</a> </ul></center>
		
<?php

	}
?>	
<?php 

		if(isset($_GET['pro_id']))
		{
?>


												<form action="" method="POST" enctype="multipart/form-data">
			  
			  <fieldset>
				<legend>Comprar Produto</legend>
			<tr>
			
				<td align="right"><b> Quantidade:</b></td>
				<td>
				<select name="quantidade">
				<option> Escolhe a quantidade</option>
				<option value='1'>1</option>
				<option value='2'>2</option>
				<option value='3'>3</option>
				<option value='4'>4</option>
				<option value='5'>5</option>
				<option value='6'>6</option>
				<option value='7'>7</option>
				

				
			</select>
				</td>
				</p>
				<tr>
			
				<td align="right"><b> Tamanho:</b></td>
				<td>
				<select name="tamanho">
				<option> Escolhe o tamanho</option>
				<option value='XS'>XS</option>
				<option value='S'>S</option>
				<option value='M'>M</option>
				<option value='L'>L</option>
				<option value='XL'>XL</option>
				<option value='XLL'>XLL</option>
				

				
			</select>
				</td>
			</tr>
				</p>
			<p>
			<tr align="center>
			<td colspan="7"><input type="submit" name="insert_post" value="Comprar"/></td>
			</tr>
			</p>
				
		
	</form>
	<?php
		}
		else{
			
		echo "<a href='index.php' style='float:left;'>Voltar</a>";
		
		}
	
	
	
	?>
	
	
	
	
<?php
	
	
	if(isset($_POST['insert_post'])){
		
		
		if(isset($_GET['pro_id'])){
	
	
		$product_id = $_GET['pro_id'];
		$quantidade = $_POST['quantidade'];
		$tamanho = $_POST['tamanho'];
		
		
		
		$disponivel="Select * from artigo where id='$product_id' and tamanho_id='$tamanho'";
		$run_d= mysqli_query($link, $disponivel);
		
		if (!$run_d) {
                                        die("Query error: " . mysqli_error($link));
                                       
		 }
		
		if($run_d){
		
	    
		
		
		$sqt="INSERT INTO cart (artigo_id, tamanho, quantidade, cliente_id) VALUES ('$product_id','$tamanho','$quantidade','".$_SESSION['cliente_id']."')";
		$resl=mysqli_query($link, $sqt);
		
		if (!$resl) {
                                        die("Query error: " . mysqli_error($link));
                                       
		 }
		
		
		if($resl){
			echo'<div class="alert alert-success">
  <strong>Successo!</strong> Produto inserido com sucesso!</div>';
							
						}
						else
						{
							echo "error";
						}
		}
		else
			{
			echo " Não poderá adicionar esse artigo porque não existe as caracteristicas que pretende inserir.";
			}
		}
	}


?>
					</div>
				  </div>
				</div>
				
				
		</div>
	</div>
	<!-- End Page Content -->
	
	<!-- Footer -->
	<div class="container">
		<hr>	
		<footer>
			<div class="row">
				<div class="col-md-12">
					<p class="pull-right"><a href="#">Back to top</a></p>
					<p> Copyright &copy; 2015. Your name</p>
				</div>
			</div>
		</footer>
	</div>
	<!--  End Footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
	<script src="function.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>