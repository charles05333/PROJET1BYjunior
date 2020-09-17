<?php
    session_start();

    include('bd/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD
    // S'il y a une session alors on ne retourne plus sur cette page
    
?>

<!DOCTYPE HTML5>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<title>SUCCES</title>
<link rel="stylesheet"  href="styles.css" />
<link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="images\moon.png">
</head>
<style type="text/css">
 body{
     background-color: #000000;
   padding: 0px;
   margin: 0px;
 }
 button
{
padding-bottom: 5px;
    padding-top: 5px;
    padding-left: 25px;
    padding-right: 25px;
    background-color:#24bb01;
  border: none;
  color: white;
}

#gradient
{
  width: 100%;
  height: 800px;
  padding: 0px;
  margin: 0px;
}   

.fe
{  border-radius:10px;
  color:white ;
  padding:30px;
  margin:30px;
  box-shadow:0 4px 10px 0 rgba(0,0,0,0.9),0 4px 20px 0 rgba(0,0,0,0.9);
  
}
.col-md-6 a
{
  text-decoration: none;
}
</style>
<body style=" background-image: linear-gradient(to left top, rgb(63, 2, 168), rgb(139, 63, 174));">
<div id="gradient" /> 
<div class="container-fluid">
<div class="row about">
<div class="col-md-3"></div>
<div class="col-md-6"><br><br><br><br><br>
<center>

<a href="menu.php"><h2 class="fe">INSCRIPTION EFFECTUEZ AVEC SUCCES</h2></a></center>
<center><a href="#"><button>IMPRIMER LE RECU</button></a></center>
</div>
<div class="col-md-3"></div>
<script type="text/javascript">
var colors = new Array(
  [62,35,255],
  [60,255,60],
  [255,35,98],
  [45,175,230],
  [255,0,255],
  [255,128,0]);

var step = 0;
//color table indices for: 
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0,1,2,3];

//transition speed
var gradientSpeed = 0.002;

function updateGradient()
{
  
  if ( $===undefined ) return;
  
var c0_0 = colors[colorIndices[0]];
var c0_1 = colors[colorIndices[1]];
var c1_0 = colors[colorIndices[2]];
var c1_1 = colors[colorIndices[3]];

var istep = 1 - step;
var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
var color1 = "rgb("+r1+","+g1+","+b1+")";

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "rgb("+r2+","+g2+","+b2+")";

 $('#gradient').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];
    
    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    
  }
}

setInterval(updateGradient,10);</script>