<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">
<div align="center">
  <header>
    <img src="upload_pic/logo.jpg">
  </header>
</div>
</head>
<body style="background-color: #FFFFFF">

<!-- ************************ Buttons *************************** -->
<div align="center">
<a href="home_page.html"><button class="button" ><span>Home</span></button></a>
<a href="about_page.html"><button class="button" ><span>About Us</span></button></a>
<a href="service_page.html"><button class="button" ><span>Services</span></button></a>
<a href="portfolio_user.php"><button class="button" ><span>Portfolio</span></button></a>
<a href="project_page.html"><button class="button" ><span>Project</span></button></a>
<a href="contact_page.html"><button class="button" ><span>Contact</span></button></a>
</div>
<!-- ************************ Description *************************** -->

<div style="background-color:#5f2160; color:white;padding:20px; text-align:left; margin: 10px; width: 93%;">

  <h2> <b></b> Picture gallery </h2>
  <h2> <b> Design List </b> </h2>


  <?php
require "fetch_pic.php";
$jsonData = getJSONFromDB("select * from image");
$jsn      = json_decode($jsonData);
?>

<table border="1" width="10%;">

<?php
for ($i = 0; $i < sizeof($jsn); $i++) {

    //  echo "<tr>";
    ?>
		<tr>
		<td style="width:20%"> <?php echo "<td>" . $jsn[$i]->name . "</td>" . "<br>" . "<br>"; ?> </td>
		<td style="width:30%"> <?php echo "<img src=" . $jsn[$i]->path . ">" . "</div>"; ?> </td>
		</tr>
	<?php	//echo "</tr>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

}
?>

</div>

<div align="center">
  <footer>Copyright © 2017 Nicdos Interior. All rights reserved.</footer>
</div>

</body>
</html>














