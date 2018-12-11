
<?php
    session_start();
    if(isset($_SESSION['logged'])){ 
      if($_SESSION['logged']==1){
      header("Location: index.php");
      };
    }else{
        echo ' <div class="container">
    <h3> You have to login! </h3>
    <form method="post" action="login.php">
      <input type="text" name="username" placeholder="Type your username"> <br>
      <input type="password" name="password" placeholder="Type your password"> <br><br>
      <button type="submit"> Login </button>
    </form>
  </div>';

    }
    ?>

   