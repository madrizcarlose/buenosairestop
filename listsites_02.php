﻿<?php 

//$categoria = $_GET['categoria'];

$latt = $_GET['lat'];
//print ($latt);


if( isset($_GET['categoria']) )
{
    
    $categoria = $_GET['categoria'];
  
} 
    else  {
       
     if ( isset($_GET['zona']) )
     {
        $zona = $_GET['zona'];
     
    }
}






$lont = $_GET['lon'];
//print ($lont);
//$str_sql="SELECT N.nomb_negocio,N.codi_negocio , N.desc_negocio ,N.valoracion ,N.telef_negocio ,N.imagen_negocio ,N.direccion_negocio,N.coord_negocio, N.coord2, N.webpage FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='" .$categoria. "' AND Activo=1;";

//$str_sql="SELECT N.* FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='" .$categoria. "' AND Activo=1;";
//$str_sql2 = urlencode($str_sql);
//$str_sql3 = urldecode($str_sql2);


//$lat  = $_SESSION["lat"];
//$lon  = $_SESSION["lon"];
$lat = $latt;
$lon = $lont;

if (empty($lat) or (round($lat)!= -34 and round($lat)!= -35)) {
  $lat = -34.6037389;
}
if (empty($lon) or (round($lon)!= -58)) {
  $lon = -58.3815704;
}
	
	
//$parametros = "categoria=" . $_GET['categoria'] . "&lat=".$lat . "&lon=".$lon;


if( isset($_GET['categoria']) )
{
  $parametros = "categoria=" . $_GET['categoria'] . "&lat=".$lat . "&lon=".$lon;
} 
    else  {
     if ( isset($_GET['zona']) )
     {
      $parametros = "zona=" . $_GET['zona'] . "&lat=".$lat . "&lon=".$lon;
    }
}

$parametros = str_replace(' ', '%20', $parametros);
//print $parametros;
//--------------------------------------

//$url = "http://localhost/buenosairestop/get_sites.php?categoria=" . $_GET['categoria'];
//$url = "https://serviciomadriz.online/buenosairestop/get_sites.php?" . $parametros;

//$url = "https://topbuenosaires.online/get_sites.php?" . $parametros;
$url = "http://ec2-3-138-102-101.us-east-2.compute.amazonaws.com/get_sites.php?" . $parametros;


//print $url;
// $_GET['categoria'];
$data = file_get_contents($url);
$products = json_decode($data,true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/app/utils/ico.png">
  <style type="text/css">
    .container.custom-container {
      padding: 0 20px;
    }
  </style>

<style type="text/css">        
    /* Rate Star*/        
    .result-container{
        width: 100px; height: 22px;
        background-color: #ccc;
        vertical-align:middle;
        display:inline-block;
        position: relative;
        top: -4px;
    }
    .rate-stars{
        width: 100px; height: 22px;
        background: url(images/app/stars/stars.png) no-repeat;
        background-size: cover;
        position: absolute;
    }
    .rate-bg{
        height: 22px;
        background-color: #ffbe10;
        position: absolute;
    }
    /* Rate Star Ends*/
    .div2 {
  background-color: lightblue;
}
    
    /* Display rate count */    
    .reviewCount, .reviewScore {font-size: 12px; color: #666666; margin-left: 5px;}
    .reviewScore {font-weight: 600;}
    /* Display rate count Ends*/        
    </style>
   <?php include 'include/head.inc';?>
   <?php include 'include/onesignal.inc';?>
   <?php include 'include/mixpanel.inc';?>
	<?php include 'include/mixp_functions.inc';?>

   <!--
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
-->
   <title>Buenos Aires - Mejores sitios</title>

  <script>
    function selectText(containerid) {
       if (document.selection) { // IE
            var range = document.body.createTextRange();
            range.moveToElementText(document.getElementById(containerid));
            range.select();
        } else if (window.getSelection) {
            var range = document.createRange();
            range.selectNode(document.getElementById(containerid));
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
        }
    }
  </script>
  <script>
     
     




    
</script>
</head>

<body>


<br>
<!-- ENCABEZADO-->
<div class="custom-container container">
	<div class="template">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4" align="left"> 
			<a href="index.php"><img src="images/app/utils/logo_BA.png"  alt="" longdesc="" id="img_logo"  height="62" width="130">
			</a>
			</div>
			<div class="col-sm-8 col-md-8 col-lg-8" valign="center" align="center"> 
				<!--<p class="h1"  align="left">Guía de Buenos Aires</p>--> 
				<h1 align="left">Guia - Mejores sitios</h1>
			</div>
		</div> <!--row-->
	</div> <!--template-->
</div> <!--container-->
<!-- FIN DEL ENCABEZADO -->
<br>
<div class="custom-container container">
	<div class="template">
		<div class="row" align="right">
    <div class="col-sm-12 col-md-12 col-lg-12" align="right">
<form id="formulario" name="formulario" target="POPUPW" action="maps/map2a.php" method="post" 
				onsubmit="POPUPW = window.open('about:blank','POPUPW',
   'width=1200,height=800');">
   <input type="hidden" name="lat" value="<?php print($lat); ?>" />
   <input type="hidden" name="lon" value="<?php print($lon); ?>" />
   <input type="hidden" name="latt" value="<?php print($lat); ?>" />
   <input type="hidden" name="lont" value="<?php print($lon); ?>" />
   <input type="hidden" name="latround" value="<?php print( round($lat)); ?>" />
   <input type="hidden" name="parametros" value="<?php print($parametros); ?>" />


  
   
   
				<!--	<input type="submit" value="Ver mapa" /> -->
      <a href=="#" onclick="document.formulario.submit();return false"><img src="images/app/utils/ver_en_mapa.png"  alt="" longdesc="" id="img_logo" height="46" width="162" >
			</a>
	
          </form>
          </div>
          </div> <!--row-->
	</div> <!--template-->
</div> <!--container-->
<br>

<div class="container" >
<div class="template">
<div class="container-fluid" style="background-color:white;">
	<br><br>
<div class="row gutter-30" >
				
				<br>	
<?php

$max = "5"; // Numero total de imagenes
$extension2 = ".png";// Definimos la extension, puede ser .jpg, gif, bmp, etc.
$carpeta2 = "../imagenes/apps/estrellas";//Carpeta con las imagenes
$start = "2";

//$row = $products;
//var_dump($products);
$longitud = count($products);

//while($row = $products->fetch_assoc()) {
  //foreach ($products as $row) {
for($i=0; $i<$longitud; $i++) {
  
  $row = $products[$i];
     // var_dump($row);
  //$random = mt_rand($start, $max);
  //$image_name2 = $carpeta2  . $random . $extension2;
  //$image_name2= "img src='" . $image_name2 . "'  width=52,height=28 id='imagen' class='imagen'/> ";
  //$image_name3= "img src='" . $image_name2 . "'  width=25,height=25 id='imagen' class='imagen'/> ";
	$foto = "images/sites/" . $row['imagen_negocio'] ;
    
    $foto = "faces/face" .rand(100, 113) . ".jpg" ;
?>
<div class="col-xs-6 col-sm-4 col-md-2 col-lg-2"  >	
  ddd
<div class="card">
      <img class="card-img-top" src="faces/face109.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="faces/face109.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>


 <div class="shadow-lg p-2 mb-5 bg-white rounded">
<!-- <div class="shadow p-0 mb-5  border-radius:25px"> -->
    <img class="card-img-top" src="<?php echo $foto;?>" alt="Card image cap" width='90' height='280' border-radius=25%>
   
    <div class="card-body" style="background-color:black" color="white" align="center" border-radius:25px>
        <h5 class="card-title" bgcolor=black >
        <div id="site2<?php echo $row['codi_negocio']; ?>">
      
        <div style="width: 80%; float:left">
                
                <a href="show_fotos.php?id=<?php print $row['codi_negocio'];?>" target="_blank"  border-radius:25px>
                <font size=3 color="white"><?php print $row['nomb_negocio']; ?></font>  
                <br>
                <font size=3 color="white">22</font>  
				      </a>
            </div>
            <div style="width: 20%; float:right;" align="right">
               <a align="right" data-toggle="collapse" href="#texto<?php echo $row['codi_negocio']; ?>" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">...</a>            </div>
          </div>
          
<p><br>

         



        <?php
    //defining Product id
  if ($row['valoracion']<0){

      $rate_bg = round(($row['valoracion']/5),2)*100;
      ?>
      <div style="margin-top: 10px">
      <div class="result-container">
      <div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
      <div class="rate-stars"></div>
  </div>                    
  <span class="reviewScore"><?php echo substr($row['valoracion'],0,3); ?></span>  <span class="reviewCount">(<?php echo $row['user_ratings_total']; ?> reviews)</span>
    
  <div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="texto<?php echo $row['codi_negocio']; ?>">
      <div class="card card-body">
      <?php echo $row['desc_negocio']; ?> </div>
    </div>
  </div>
 
</div>




   <?php } ?>
                       
    
    </h5>
       <p>
		    <span class="glyphicon glyphicon-earphone"></span>
		    <span style="color:black; text-algin:center;display-block:inline;">
            <?php print $row['telef_negocio'];?>        
            <?php 
            if ($row['whatsapp'] != NULL) {
              ?>
              <a href="https://api.whatsapp.com/send?phone=<?php print $row['whatsapp'];?>&text=Hola, los ubiqué en *https://topbuenosaires.online*." target="blank" >
              <img src="images/app/utils/whatsapp_ico.png"  height="22" width="22"><br>
				      </a>
            <?php  } ?>     
          </span>
        <p>
        <span class="glyphicon glyphicon-map-marker"></span>
        <?php print $row['direccion_negocio'];?>
       
        <a href="#" onclick="showListZona('<?php print $row['zona']; ?>');"><span class="badge  bg-secondary"><?php print $row['zona']; ?></span></a>
            
    </div> <!-- class="card-body" -->

    <ul class="list-group list-group-flush">
        <li class="list-group-item"  style="background-color:#fafafa;">
           <div style="width: 50%; float:left">
              <a href="<?php print $row['webpage']; ?>" target="blank" >Web page</a>
          </div>
          <div style="width: 50%; float:right;" align="right">
            <?php 
              $coord = $row['coord2'];
             // $tira= "<a href=https://www.google.co.ve/maps/place/" .$coord . " onclick=" . "\"window.open(this.href, 'mywin', 'left=200,top=20,width=900,height=500,toolbar=1,resizable=0'); return false;" . "\" align='right'>Ver mapa</a>";
              //echo ("<br>");
              //echo $tira;
              $tira2= "<a href=".$row['url'] . " onclick=" . "\"window.open(this.href, 'mywin', 'left=200,top=20,width=900,height=500,toolbar=1,resizable=0'); return false;" . "\" align='right'>Ver mapa</a>";
              echo $tira2;
     
            ?>
            <font face="helvetica"><small><?php print $row['distance']; ?>&nbsp;km</font></small>
          </div>
       </li>
    </ul>
    
</div>

ddd
<div class="shadow-lg p-1 mb-1 bg-white rounded">
<!-- <div class="shadow p-0 mb-5  border-radius:25px"> -->
    <img class="card-img-top" src="<?php echo $foto;?>" alt="Card image cap" width='90' height='280' border-radius=25%>
   
    <div class="card-body" style="background-color:black" color="white" align="center" border-radius:25px>
        <h5 class="card-title" bgcolor=black >
        <div id="site2<?php echo $row['codi_negocio']; ?>">
      
        <div style="width: 80%; float:left">
                
                <a href="show_fotos.php?id=<?php print $row['codi_negocio'];?>" target="_blank"  border-radius:25px>
                <font size=3 color="white"><?php print $row['nomb_negocio']; ?></font>  
                <br>
                <font size=3 color="white">22</font>  
				      </a>
            </div>
            <div style="width: 20%; float:right;" align="right">
               <a align="right" data-toggle="collapse" href="#texto<?php echo $row['codi_negocio']; ?>" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">...</a>            </div>
          </div>
          
<p><br>

         



        <?php
    //defining Product id
  if ($row['valoracion']<0){

      $rate_bg = round(($row['valoracion']/5),2)*100;
      ?>
      <div style="margin-top: 10px">
      <div class="result-container">
      <div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
      <div class="rate-stars"></div>
  </div>                    
  <span class="reviewScore"><?php echo substr($row['valoracion'],0,3); ?></span>  <span class="reviewCount">(<?php echo $row['user_ratings_total']; ?> reviews)</span>
    
  <div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="texto<?php echo $row['codi_negocio']; ?>">
      <div class="card card-body">
      <?php echo $row['desc_negocio']; ?> </div>
    </div>
  </div>
 
</div>




   <?php } ?>
                       
    
    </h5>
       <p>
		    <span class="glyphicon glyphicon-earphone"></span>
		    <span style="color:black; text-algin:center;display-block:inline;">
            <?php print $row['telef_negocio'];?>        
            <?php 
            if ($row['whatsapp'] != NULL) {
              ?>
              <a href="https://api.whatsapp.com/send?phone=<?php print $row['whatsapp'];?>&text=Hola, los ubiqué en *https://topbuenosaires.online*." target="blank" >
              <img src="images/app/utils/whatsapp_ico.png"  height="22" width="22"><br>
				      </a>
            <?php  } ?>     
          </span>
        <p>
        <span class="glyphicon glyphicon-map-marker"></span>
        <?php print $row['direccion_negocio'];?>
       
        <a href="#" onclick="showListZona('<?php print $row['zona']; ?>');"><span class="badge  bg-secondary"><?php print $row['zona']; ?></span></a>
            
    </div> <!-- class="card-body" -->

    <ul class="list-group list-group-flush">
        <li class="list-group-item"  style="background-color:#fafafa;">
           <div style="width: 50%; float:left">
              <a href="<?php print $row['webpage']; ?>" target="blank" >Web page</a>
          </div>
          <div style="width: 50%; float:right;" align="right">
            <?php 
              $coord = $row['coord2'];
             // $tira= "<a href=https://www.google.co.ve/maps/place/" .$coord . " onclick=" . "\"window.open(this.href, 'mywin', 'left=200,top=20,width=900,height=500,toolbar=1,resizable=0'); return false;" . "\" align='right'>Ver mapa</a>";
              //echo ("<br>");
              //echo $tira;
              $tira2= "<a href=".$row['url'] . " onclick=" . "\"window.open(this.href, 'mywin', 'left=200,top=20,width=900,height=500,toolbar=1,resizable=0'); return false;" . "\" align='right'>Ver mapa</a>";
              echo $tira2;
     
            ?>
            <font face="helvetica"><small><?php print $row['distance']; ?>&nbsp;km</font></small>
          </div>
       </li>
    </ul>
    
</div>






</div>	

<?php
}  //fin de bucle
?>
			
</div> <!-- row gutter-30 -->
</div> <!-- container-fluid -->
</div> <!-- template -->
</div> <!-- custom-container container -->

<br><br><br><br>
<!--pie de pagina-->
<?php 
//require "include/db_conect_close.inc";
include 'include/footer.inc';
?> 

</body>

</html>
