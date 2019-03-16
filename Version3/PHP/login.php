<?php
  include('db.php');
  if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $pass=$_POST['password'];
    if($con){
      $sql="SELECT * FROM admin where name='$name' and password='$pass'";
      $result=mysqli_query($con,$sql);
      if(mysqli_num_rows($result)==1){
        header('location:../adminPage.php');
      }
      else{
        header('location:../admin.html');
        //header('location:../admin.html');
      }
    }else{
      echo mysqli_connect_error($con);
    }
  }
?>
