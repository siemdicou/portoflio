<?php

session_start(); 
include '../config/config.php';


   

      $user=preg_replace("/[^a-zA-Z0-9]+/", "", $_POST['username'] );
      $myusername = mysqli_real_escape_string($mysqli,$user);
      // echo $myusername;
      $pw=preg_replace("/[^a-zA-Z0-9]+/", "", $_POST['password'] );
      $mypassword = mysqli_real_escape_string($mysqli,$pw); 
      // hash password, salt +pepperens
      $sql = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";
      // echo $result;  
      $result = mysqli_query($mysqli,$sql);  
      $row = $result->fetch_array(MYSQLI_ASSOC);
      // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		echo $count;
      if($count == 1) {
         // session_register("myusername");
         $_SESSION['login_user'] = htmlentities($row["username"]);
         ?>

         <script>window.location.replace("../index.php?page=admin");</script>
         <?php
      }else {
         ?>
         <script>window.location.replace("../index.php?page=admin");</script>
         <?php
      }
   
?>