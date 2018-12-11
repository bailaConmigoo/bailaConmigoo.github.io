<html>
<head>
  <title>
    Administracija
  </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <?php
  session_start();
  if(isset($_SESSION['logged'])){ 
    if($_SESSION['logged'] == 1){ 
      echo '<center><h1> Izaberite clana </h1>
      <a href="clanovi.php"><button> Clanovi </button> </a>
     <a href="logout.php"> <button> Logout </button> </a>
<div class="clan">
  

</div>

';
  };
}
else{echo'
	<div class="container">
    <a href="login.php"> Login </a> 
      <br>
  </div>';
}
?>
</body>
</html>
