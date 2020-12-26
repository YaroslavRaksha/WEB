
<?php

require 'config/connect.php';

?>

<?php 
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    
    echo $login;
    echo $pass;
?>

<!DOCTYPE html>
<html>
 <head>
   <title>Products</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
 <body>
 	<div class="container">
 		<div class="row justify-content-end">
 			<div class="col-2">
 				<div class="text-end">
 					<a href="index.php">EXIT</a>
 				</div>
 			</div>
 		</div>
		<div class="row">
			<div class="col-6 testimonial-group">
				<div class="row" id="list">
				
				</div>
			</div>
			<div class="col-6">
				<div class="row">
					<div class="col-12" id="summarize">	
					</div>
					<div class="col-12" id="prihod">
						100
					</div>
				</div>
			</div>
		</div>
 		<div class="row">
 			<div class="col-6">
 				<div class="row">
 					<div class="col-12">
 						<div id="entry__container">
						 </div>
 					</div>
 				</div>
 			</div>
 			<div class="col-6">
 				<div class="row product__cards">
 					<?php

	            $products = mysqli_query($connect, "SELECT * FROM `products`");
	            $products = mysqli_fetch_all($products);
	            foreach($products as $product) { ?>

 			<div class="col-4">
 				<a class="appendbtn" onmouseover="" style="cursor: pointer;" onclick="create('<?= $product[1] ?>', '<?= $product[2] ?>', '<?= $product[3] ?>');">
	 				<div class="product__card">
	 					<div class="row">
		 					<div class="col-12">
		 						<div class="text-center">		
					 				<?= $product[1] ?>	
		 						</div>
		 					</div>
		 				</div>

		 				<div class="row">
		 					<div class="col-12">
		 						<div class="text-center">
					 				<?= $product[2] ?> грн
		 						</div>
		 					</div>
		 				</div>
		 				<div class="row">
		 					<div class="col-12">
		 						<div class="text-center">				 					
		 							<?= $product[3] ?> 
		 						</div>
		 					</div>
		 				</div>
	 				</div>
 				</a>
 			</div>
 			<?php } ?>
 				</div>
 			</div>
 		</div>

 		<div class="row" style="margin-top: 50px;">
 			<div class="col-6">
 				<div class="row justify-content-center">
 					<div class="col-4">
 						<div class="text-center">
 								<button onclick="hey();" id="button__confirm">123</button>
 						</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-6"></div>
 		</div>


 	</div>
 	<script src="js/script.js"></script>
	<script src="js/confirm.js"></script>

		
 </body>
 </html>