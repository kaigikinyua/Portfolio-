<?php
  $con=mysqli_connect('localhost','root','root','Portfolio');
  if($con){
  }else{
    echo mysqli_connect_error($con);
  }
?>
