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
  </body>
</html>
