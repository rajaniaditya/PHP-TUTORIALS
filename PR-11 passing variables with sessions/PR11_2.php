<?php
 session_start();
 if(isset($_POST['submit']))
 {
  $sr=$_POST['fname'];
  $_SESSION['sr']=$sr;
  echo "Sessin is start"."<br>";
  echo "Your name is : ".$_SESSION['sr'];
 }
?>
