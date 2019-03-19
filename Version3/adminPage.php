<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" href="CSS/adminPage.css"/>
    <link rel="icon" href="Images/projects.png"/>
  </head>
  <body>
    <div class="navbar">
      <ul class="nav">
        <a href="index.html"><li>Home</li></a>
        <a href="projects.php"><li>Projects</li></a>
        <a href="#"><li>Inbox</li></a>
        <a href="admin.html"><li class="active">Antony</li></a>
      </ul>
    </div>
    <div class="barner">
      <!--display Mwa-name and time since the site was up-->
      <h4><i>Welcome Commander</i></h4><br/>
      <center>
      <table border="0" cellspacing="5px" cellpadding="5px">
        <tr><td>Year</td><td>Month</td><td>Date</td><td>Hours</td><td>Minutes</td><td>Seconds</td></tr>
        <tr><td id="year"></td><td id="month"></td><td id="date"></td><td id="hours"></td><td id="minutes"></td><td id="seconds"></td></tr>
      </table>
      <script type="text/javascript" src="JS/admin.js"></script>
    </center>
    </div>
    <!---->
    <!-- add a new project -->
    <div style="height:170px;"></div>
    <div class="module">
      <form method="POST" action="PHP/upload.php" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Title" required /><br/>
        <input type="file" name="icon" required/><br/>
        <textarea rows="5" cols="40" name="description" placeholder="Project Description" required></textarea>
        <input class="submit" type="submit" name="submit" value="UPLOAD"/>
      </form>
    </div>

    <!--View Messages-->
    <div class="module">
      <!--php for loop to display username and message maybe reply button-->
    </div>

    <!-- edit portfolio description,professional background,skill set,about me-->
    <div class="module">
      <!-- drop down to select the section-->
      <!-- textarea to edit the portfolio section-->
    </div>

  </body>
</html>
