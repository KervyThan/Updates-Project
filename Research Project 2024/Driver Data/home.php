<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TODA | Home</title>
    <link rel="icon" href="images/City Logo.jpg">
    <link rel="stylesheet" href="home.css" />
  </head>
  <body>
    <header class="header-container">
        <div class="logo-section">
            <img src="images/City Logo.jpg" alt="Logo" class="logo">
         </div>
        <h1 class="logo">TODA</h2>
        <nav class="navbar">
        <ul class="links">
          <li><a href="home.php">Home</a></li>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li class="dropdown">
            <input type="checkbox" id="servicesToggle" class="toggle-input">
            <label for="servicesToggle" class="dropbtn">Services <span class="arrow">&#9660;</span></label>
            <div class="dropdown-content">
                <a href="#">Service 1</a>
                <a href="#">Service 2</a>
                <a href="#">Service 3</a>
            </div>
          </li>
          <li><a href="information.php">Information</a></li>
          <li><a href="log.php">Attendance Log</a></li>
        </ul>
        </nav>
      <div class="logout-btn">
        <a href="dform.php">Logout</a>
      </div>
    </header>
    <main>
      <div class="homecontainer">
        <h1 class="center">Announcement</h1>
        <p class="p">Hi John Kervy Jamito, kindly read about some of the important announcement below.

          You may now send a request for advising in your respective College by navigating to Enrollment Services >> Send a Request for Advising. This is for students with irregular standing status only.
          For students of PLMun with irregular standing status, please refer to this pdf for the advising procedure.</p>
      </div>
      <div class="homeconupdt">
        <h1 class="center2">Updates</h1>
        <p class="p2">dashconupdtdashconupdtdashconupdtdashconupdtdashconupdtdashconupdtdashconupdtdashconupdtdashconupdtdashconupdt</p>
      </div>
    </main>
  </body>
</html>