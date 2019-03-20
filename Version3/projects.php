<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Projects</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" href="CSS/basics.css"/>
    <link rel="stylesheet" href="CSS/project.css"/>
    <link rel="icon" href="Images/projects.png"/>
  </head>
  <body>
    <div class="navbar">
      <ul class="nav">
        <a href="index.html"><li>Home</li></a>
        <a href="#"><li class="active">Projects</li></a>
        <a href="#"><li>Inbox</li></a>
        <a href="admin.html"><li>Antony</li></a>
      </ul>
    </div>
    <div class="contact">
      <div class="card">
        <p class="conInfo">kaigikinyua@gmail.com</p>
        <img class="contact" src="Images/Gmail.png"/>
      </div>
      <div class="card">
        <p class="conInfo">+254704273214</p>
        <img class="contact" src="Images/phone.jpg"/>
      </div>
      <div class="card">
        <p class="conInfo">@tonnymacoin</p>
        <img class="contact" src="Images/twitter.png"/>
      </div>
    </div>
    <div style="height:100px"></div>
    <!--encased in for loop-->

    <?php
      include('PHP/db.php');
      $sql="select * from projects";
      $result=mysqli_query($con,$sql);
      if($result){
          if(mysqli_num_rows($result)>0){
            while($values=mysqli_fetch_array($result)){
              echo "<div class='project'>
                      <h3 class='title'>".$values[0]."</h3>
                      <div class='tile'>
                        <div class='pImage'>
                          <img class='projectImage' src='".$values['icon']."'/>
                          <!--add buttons here-->
                          </div>
                          <div class='pDesc'>
                          <p class='pDesc'>".$values['description']."</p>
                        </div>
                      </div>
                    </div>";
            }
          }else{
            //echo tonny has not added any project yet
            echo mysqli_error($result);
          }
        }
    ?>
    <!--
    <div class="project">
      <h3 class="pTitle">
        Project one
        <!--refer to database Profile field project names
      </h3>
      <div class="tile">
        <div class="pImage">
          <!--refer to Profile database field project image to get the filename and append to PHP/PImages
          <img class="projectImage" src="Images/Gmail.png"/>
          <div class="btn-grp">
          <!--download src from PHP/Projects : button
            <button class="src"><img class="icon" src="Images/download.png"/></button>
            <button class="src"><img class="icon" src="Images/view.jpg"/></button>
          <!--view source reffer to github repo:button
          </div>
        </div>
        <div class="pDesc">
          <p class="pDesc">
            Test For the project distribution and description page
            <!---refer to database Profile table projects field projectDesc->
          </p>
        </div>
      </div>
    </div>
  -->

  </body>
</html>
