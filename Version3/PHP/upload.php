<?php
  if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $description=$_POST['description'];
    $file=$_FILES['icon']['name'];
    if(empty($title) || empty($description) || empty($file) ){
      header("location:../adminPage.php");
    }
    else{
      //checkfile size and extensions
      $filepath='../Uploads/Projects/'.basename($file);
      if(file_exists($filepath)){
        $filepath='../Uploads/Projects/'.$title."_".basename($file);
      }
      $fileLocation='Uploads/Projects/'.basename($file);
      include('db.php');
      $sql="INSERT INTO projects(title,description,icon,likes) VALUES('$title','$description','$fileLocation',1)";
      //$sql="INSERT INTO projects(title,description,icon,likes) VALUES($title,$description,$filepath,5)";
      $result=mysqli_query($con,$sql);
      if($result){
          if(move_uploaded_file($_FILES['icon']['tmp_name'],$filepath)){
            header("location:../adminPage.php");
          }else{
            echo "Could Not Upload File";
          }
      }
      else{
        echo mysqli_error($con);
      }
    }
  }
?>
