<?php
include("header.php");

 
  mysqli_query($con,"UPDATE signup SET status= 1 WHERE id='$_GET[id]'");

  header("location:sign-data.php");


?>