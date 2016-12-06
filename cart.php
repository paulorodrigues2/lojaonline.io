<?php
require_once('common/database.php');
require_once('common/common.php');
session_start();

function total(){
	
	if(isset($_GET['comprar'])){
		
		
		$get_items= "SELECT * FROM cart where cliente_id='.{SESSION['cliente_id']}.'";
		$run_items=mysqli_query($link, $get_items);
		
		$count_items =mysqli_num_rows($run_items);
	}
		else{
		$get_items= "SELECT * FROM cart where cliente_id='.{SESSION['cliente_id']}.'";
		$run_items=mysqli_query($link, $get_items);
		$count_items =mysqli_num_rows($run_items);
			
		}
				echo $count_items;
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
	else
	{

//getting the total added items





?>

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

  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/bootstrap-datetimepicker.css" rel="stylesheet">
 
  <link rel='shortcut icon' type='image/x-icon' href='/images/favicon.png' />

</head>
<!-- NAVBAR
  ================================================== -->
  <body>
	
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
				 <img id="logo" src="images/logo.png" />
				<img id="banner" src="images/banner.png" />
              </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
			
              <ul class="nav navbar-nav navbar-right">
                <li  class="active"><a href="#home" class="page-scroll" 	>Home    </a></li>
                <li><a href="#reserva" class="page-scroll" 	>Reservas</a></li>
                <li><a href="login.php"					>Login   </a></li>
                <li><a href="#sobre" class="page-scroll"	>Sobre    </a></li>
				 <li><a id="login_fb" href="javascript:void(0);" style="cursor:pointer;" onclick="Login()"><img src="images\facebook.png" alt="login with fb" title="login with fb" /></a></li>
              </ul>
			  	
            </div>
			</div>
			
			<div id="shopping_cart">
			<ul class="nav navbar-nav navbar-right">
			
			<div class="content drop-here">	<!-- content class, shared with the product section above, and the targeted drop-here class -->
				<div class="progress">
				  <div class="progress-bar progress-bar-striped active" role="progressbar"
				  aria-valuenow="500" aria-valuemin="50" aria-valuemax="1000" style="width:50%">
					50%
				  </div>
				</div>
			</div>
				</ul>		
<ul class="nav navbar-nav navbar-right">
	<div id="cart-icon">
	
			<span style="float:right; font-size:18px; padding:5px;line-height:40px;">
	<?php ?></span> Total Items:  Total Price: <a href="payment.php">Go to Cart</a>

	</ul>
</div>

	</div>

	</div>
	</nav>
			</div>
          </div>

      </div>
    
	<!-- Content -->
		
	
				  <div class="panel-body">
				  
				  <div class="container">
			<div class="col-md-12 col-xs-12">
				<div class="panel panel-info">
				  <div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-md-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Cart</h5>
							</div>
							<div class="col-md-6">
								<button class="btn btn-primary btn-sm pull-right"><span class="glyphicon glyphicon-share-alt"></span> Continue Shoping</button>
							</div>
						</div>
					</div>
				  </div>
					<hr>
					<div class="row">
					<form action="" method="post" enctype="multipart/form-data">
								<table align="center" width="700">
								<tr>
									<td colspan="5"><h2> Actualizar o seu carrinho ou Fazer pagamento </h2></td>
									</tr>
								<tr align="center">
									<td>Remover</td>
									<td>Produtos</td>
									<td>Quantidade</td>
									<td>Preço</td>
									</tr>
		<?php
									$total = 0;
		// Usado para o stock $dif =0;
		global $link;
		
		
		$get_price= "SELECT * FROM cart where cliente_id='{$_SESSION['cliente_id']}'";
		$run_price = mysqli_query($link, $get_price);
		
		if (!$run_price) {
                                        die("Query error 5: " . mysqli_error($link));
                                       
		 }
		while($row_price=mysqli_fetch_array($run_price))
		{
			$pro_id= $row_price['artigo_id'];
			
			$artigo_price= "Select * from artigo where id='$pro_id'";
			$run_pro_price = mysqli_query($link, $artigo_price);
			
			if (!$run_pro_price) {
                                        die("Query error 6: " . mysqli_error($link));
                                       
								  }
			
					while($pp_price = mysqli_fetch_array($run_pro_price))
					{
						//Array para o numero de artigos
						$product_price = array($pp_price['price']);
						$single_price = $pp_price['price'];
						$product_image = $pp_price['imageType'];
						$product_name = $pp_price['nome'];
						
						$values = array_sum($product_price);
						$total +=$values;
						
		
		//echo $total."€";
	?>
							
							<tr align="center">
								<td>
								<input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"/></td>
								<td><?php echo $product_name; ?><br>
<?php echo '<img src="data:image/jpeg;base64,' . base64_encode($product_image) . '" width="60" height="60" />'; ?>
								
								</td>									
								<td><input type="text" size="4"  name="quantidade" value="<?php echo $_SESSION['quantidade']; ?>"></td>
								<?php
								
								if(isset($_POST['update'])){
								
								$qty = $_POST['quantidade'];
								//$tamanho = $_POST['tamanho'];
								
								$update_qty = " update cart set quantidade='$qty'";
								
								$run = mysqli_query($link, $update_qty);
								
								if (!$run) {
                                        die("Query error 9: " . mysqli_error($link));
                                       
		 }
								
								$_SESSION['quantidade'] = $qty;
								$total = $total*$qty;
								}
?>			
								
					
								<td><?php echo $single_price."€" ?></td>
																				</tr>
								
							
							
							<?php	
								}
			
		}	
?>	
										<tr align="right">
									<td colspan="4"><b> Total valor  </b></td>
									<td colspan="4"><b> <?php echo $total."€"  ?> </b></td>
										</tr>
									<tr align="center">
									<td colspan="2"><input type="submit" name="update" value="Atualizar Carrinho"/></td>
									<td><input type="submit" name="continue" value="Continuar compras"/></td>
									<td><?php echo 	"<a href='checkout.php' style='float:left;'>Efectuar pagamento</a>"; ?></td>
									</tr>
									</table>
									</form>
									
				<?php
				
				function update(){
	if(isset($_POST['update'])){
					
					foreach($_POST['remove'] as $removeid){
						$delete = "DELETE from cart where cliente_id='".$_SESSION['cliente_id']."' and artigo_id='$removeid'";
						$resde = mysqli_query($link, $delete);
					
					if (!$resde) {
                                        die("Query error 9: " . mysqli_error($link));
                                       
		 }
		 
					
					
					if($resde){
						echo"<script>window.open('','_self')</script>";
					}
				}
					
					
				}
				
				if(isset($_POST['continue'])){
				
				echo "<script>window.open('index.php','_self')</script>";
				}
				echo $up_date= update();
}	
				
				
	
				
				?>
						<div class="col-md-2 col-xs-12">
						</div>
						
						<div class="col-md-6 col-xs-12">
							<div class="col-md-6 text-right">
								<h4><strong></strong> </h4>
							</div>
							<div class="col-md-4 col-xs-9">
								
							</div>
							<div class="col-md-2 col-xs-2">
								
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						
						
						<div class="col-md-3 col-xs-12">
							
						</div>
					</div>
				  </div>
				  <div class="panel-footer">
					<div class="row">
						<div class="col-md-9 col-xs-12 text-right">
						
			
							
						</div>
						<div class="col-md-3 col-xs-12">
						
						</div>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
<?php
	}
	?>
	<!-- End Content -->
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
	<!-- End Footer -->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
	<script src="function.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>