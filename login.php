<?php
    session_start();
    $con = mysqli_connect("localhost", "root", "");
if (isset($_POST['email])) {

    $email=$_POST['email'];
    $lozinka=$_POST['lozinka'];

    $sql= "SELECT * FROM `korisnik` WHERE `email`='$email' AND `lozinka`='$lozinka'";
    $result=mysqli_query($con,$sql);
    if($result) {
      if(mysqli_num_rows($result)>0){
        $_SESSION['logged']=1;
        while($row=mysqli_fetch_assoc($result)){
         $_SESSION['korisnik'] = $row['id'];
        
       

?>
