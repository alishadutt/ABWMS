<?php
include 'functions.php';
if(isset($_POST['login'])){

    $user=$_POST['username'];

   
   

    $loginqry="SELECT id FROM online_db WHERE USERNAME='$user'";
    $res=mysqli_query($conn,$loginqry);
 

    echo"<script>
    window.location.href='dashboard.php' ;</script>";

    
  
}





?>