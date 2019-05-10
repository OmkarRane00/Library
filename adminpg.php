<?php
$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "library";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="description" content="Mulund College of Commerce educate youth to serve the nation with excellence and dedication leading to social, cultural & economic development of india" /> 
    <meta name="HandheldFriendly" content="true"/>
    <meta name="keywords" content="Mulund College of Commerce, Parle Tilak Vidyalaya Association, PTVA, MCC">
    <meta property="og:title" content="Mulund College of Commerce"/>
    <meta property="og:site_name" content="Mulund College of Commerce"/>
    <meta property="og:type" content="website">
    <meta name="title" content="Mulund College of Commerce" />
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="MCClogo.png">
	<title>Admin</title>
  <style>
/* width */
::-webkit-scrollbar {
    width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555; 
}
</style>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
</head>
<body>


	<nav class="navbar navbar-expand-md navbar-dark sticky-top" style="background-color: #343a40;">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.html"><i class="fas fa-book"></i> LIBRARY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <!-- Links -->
  <ul class="navbar-nav justify-content-end">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        About
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="index.html">Home</a>
        <a class="dropdown-item" href="timing.html">Timing</a>
        <a class="dropdown-item" href="#">Comittee</a>
        <a class="dropdown-item" href="#">Rules</a>
        <a class="dropdown-item" href="staff.html">Staff</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">External Links</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Web-Oppac</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Download
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Question paper</a>
        <a class="dropdown-item" href="#">Syllabus</a>
        <a class="dropdown-item" href="#">Articles</a>
      </div>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="services.html">Services</a>
    </li>
    <li class="nav-item">	
      <a class="nav-link" href="contact.html">Contact</a>
    </li>
  </ul>
</div>
</nav>





<section class="adminmain">
  <div class="admindetails">
    <div class="adminprofimg">
      <img src="images/default_user.jpg">
    </div>  
    <div class="adminnm">S. K. Dongre</div>  
      <div class="list-group">
        <a id="staff" class="list-group-item list-group-item-action">Staff</a>
        <a id="mails" class="list-group-item list-group-item-action">Messages</a>
        <a id="lgout" class="list-group-item list-group-item-action">Logout</a>
        <a id="mails" class="list-group-item list-group-item-action">Mails</a>
      </div> 
  </div>
  <div class="line"></div>
  

  <div class="rightblock mailblk">
    
    <?php
 
     $sql = "SELECT * FROM message";
    $results = mysqli_query($conn, $sql);

      // echo "<pre>";
      // print_r($results);
      // echo "</pre>";


if (mysqli_num_rows($results) > 0) {
    // output data of each row
    foreach ($results as $row) {

    ?>
    
    
      <?php
        $mailid="$row[Id]";
      ?>
      <div class="mail">
      <a href="messages.php?msgid=<?php echo $mailid;?>">
      <div class="mailsender"><?php echo "$row[name]";?></div>
      </a>  
      <div class="emailsender"><?php echo "$row[email]";?></div>
      <div class="senddate"><?php echo "$row[sentdate]";?></div>
      <a href="#"><div class="fas fa-trash del"></div></a> 
    </div>
        
    <?php
  
    }
    }
    mysqli_close($conn);
    ?>
      </div>


</section>




  
  <footer class="footer1">
    <!-- <div class="ftlogo"> -->
      <!-- <img src="MCClogo.png"> -->
    <!-- </div> -->
    <div class="ftlinks"><ul>
      <li>About</li>
      <li>Contact Us</li>
      <li>Golden card</li>
    </ul></div>
    <div class="ftlinks"><ul>
      <li>Location</li>
      <li>Telephone</li>
      <li>E-mail</li>
    </ul></div>
    <div class="ftlinks"><ul>
      <li>Syllabus</li>
      <li>Question Papers</li>
      <li>External links</li>
      <li>News Papers</li>
    </ul></div>
    <div class="ftlinks"><ul>
      <li>Library</li>
      <li>Weboppac</li>
      <li>College Website</li>
    </ul></div>
    <img src="MCClogo.png">
  <div class="logo">
    
    <span class="small" style="margin-left: 130px;">
      Parle Tilak Vidyalaya Association's
    </span>
<span class="mid" style="margin-left: 20px;">MULUND COLLEGE OF COMMERCE</span>
<span class="small small1" style="margin-left: 50px;">NAAC "A" GRADE RE-ACCREDITED (III Cycle) 2016-2021</span>
  </div>
  </footer>
</div>
</body>
</html>
