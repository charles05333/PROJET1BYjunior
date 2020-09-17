<?php
    session_start();

    include('bd/connexionDB.php'); 
    ?>

<!DOCTYPE HTML5>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<title>SUCCES</title>
<link rel="stylesheet"  href="style.css" />
<link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="images\moon.png">
</head>
<style type="text/css"> 

.fe
{  border-radius:10px;
  color:white ;
  padding:30px;
  margin:30px;
  box-shadow:0 4px 10px 0 rgba(0,0,0,0.9),0 4px 20px 0 rgba(0,0,0,0.9);
  
}

input
{
  padding-right: 25px;
  padding-left: 25px;
  padding-bottom: 10px;
}
form
{
  box-shadow:0 4px 10px 0 rgba(0,0,0,0.9),0 4px 20px 0 rgba(0,0,0,0.9);
  padding-bottom: 20px;
}
.clearfix .cancelbtn
{
  background-color: red;
}
 .cancelbtn a
{
  color: white;
  padding-top: 25px;
}
button
{
  width: 50%;
   box-shadow:0 4px 50px 0 rgba(0,0,0,0.5),0 4px 10px 0 rgba(0,0,0,0.5);
   padding-bottom:40px;
   padding-top: 40px;
   padding-left: 40px;
   padding-right: 40px;
}
h2
{
    text-shadow : 6px 6px 10px black;
    box-shadow:0 4px 50px 0 rgba(0,0,0,0.5),0 4px 10px 0 rgba(0,0,0,0.5);
}
</style>
<body  style="background-color:#3b5989; "><br><br><br>
<h2 class="glow"><font color="white"><center>FORMULAIRE DU CHOIX DU VERSEMENT</center></font></h2>
<br><br><br><br>
<center>

<div class="container-fluid">
<div class="row about">
<div class="col-md-4">
 <center><a href="scolarite1.php"><button  class="cancelbtn" >VERSEMENT 1 </button></a></center>
</div>

<div class="col-md-4">
  <center><a href="scolarite2.php"><button  class="cancelbtn" >VERSEMENT 2</button></a></center>
</div>
  
<div class="col-md-4">
 <center><a href="scolarite3.php"><button  class="cancelbtn" >VERSEMENT 3</button></a></center>
</div>


</div></div><br><br><br><br><br><br><br><br>
<h2 class="glow"><font color="white"><center>MERCI DE S'ASSURER DES VERSEMENTS PASSER</center></font></h2>
</center>



</body>
</html>         