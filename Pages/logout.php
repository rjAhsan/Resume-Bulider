<?php

session_start();
      if(isset($_SESSION["user_id"])){
        unset($_SESSION["user_id"] );
        unset($_SESSION["email"] ); 
        unset($_SESSION["password"]);
        header('Location: http://localhost/ResumeBulider/Pages/login.php');

        
}


?>