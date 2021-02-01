<!DOCTYPE html>
<html lang="en">
<head>








	<?php include 'include/head.inc';?>
	<?php include 'include/mixpanel.inc';?>
	<?php include 'include/mixp_functions.inc';?>

	
	<!-- Bootstrap
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	 Bootstrap --> 
	<link rel="stylesheet" href="include/styles.css">



	
 	<title>Buenos Aires Top - Las mejores opciones donde comer, donde divertirse, seguros de vehículos.</title>
</head>

<body>
<br>
<!-- encabezado-->
<div class="container" >
	<div class="template">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4" align="left"> 
		  		<img src="images/app/utils/logo2.jpg"  alt="" longdesc="" id="img_logo"  height="62" width="130">
			</div>
			<div class="col-sm-8 col-md-8 col-lg-8" valign="center" align="center"> 
				<!--<p class="h1"  align="left">Guía de Buenos Aires</p>--> 
				<h1 align="left">Guía de Buenos Aires</h1>
			</div>
		</div> <!--row-->
	</div>
</div> <!--container-->

<br><br>
 <!-- opciones del menu-->  
<div class="container" >
<div class="template">
    <div class="row">
		<!-- opcion Restaurantes-->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		    <a href="#" onclick="openPage('restaurants.php');"><p class="h1">Restaurantes</p>
			<img src="images/app/menu/opt_comidas.jpeg" width="120" height="75" alt="Restaurantes" longdesc="Restaurantes" id="img_rest" /></a>
		   <p class="text_menu">Carnes, pescado, pastas, pizzas, asiática..</p>
		   <hr>
		    <br>
        </div>
		<!-- opcion Bares-->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		  <!-- <a href="listsites.php?categoria=c020"><p class="h1">Bares</p> -->
		   <a href="#" onclick="showList('c020');"><p class="h1">Bares</p>
			<img src="images/app/menu/opt_bares.jpg" width="120" height="75" alt="Bares" longdesc="Bares" id="img_bar" /></a>
			<p class="text_menu">Cervezas y mas bebidas</p>
		   <hr>  
		    <br>
		</div>
		<!-- opcion Actividades-->
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		  <!-- <a href="listsites.php?categoria=r000"><p class="h1">Actividades</p> -->
		   <a href="#" onclick="showList('r000');"><p class="h1">Actividades</p>
			<img src="images/app/menu/opt_funny.jpg" width="120" height="75" alt="Actividades" longdesc="Actividades" id="img_acti" /></a>
			<p class="text_menu">Parques, karting, tenis, golf,...</p>
		   <hr>  
		   <br>
		</div>
		<!-- opcion Servicios-->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		 <!--   <a href="services.php"><p class="h1">Serv. y productos</p> -->
		   <a href="#" onclick="openPage('services.php');"><p class="h1">Serv. y productos</p>
			<img src="images/app/menu/opt_servprof.jpeg" width="120" height="75" alt="Servicios y productos" longdesc="Servicios y productos" id="img_serv" /></a>
			<p class="text_menu">xSeguros, salud, estética, ...</p>
		   <hr>  
		</div>	

		
	</div> <!--div row -->
	</div>  <!--div template -->
</div> <!-- class="container" -->
  
<br><br><br><br><br><br><br><br>
<!--pie de pagina-->
<?php 
include 'include/footer.inc';
?>


</body>
</html>