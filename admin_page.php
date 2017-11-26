
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="CSS/admin.css">
<div align="center">
  <header>
    <img src="upload_pic/logo.jpg">
  </header>
</div>

</head>

<!-- //////////////////////////// database ///////////// -->
<?php
require "fetch_data.php";
$jsonData = getJSONFromDB("select * from registration");
$jsn      = json_decode($jsonData);
?>

<body style="background-color: #FFFFFF">

<!-- ************************ Buttons *************************** -->
<div align="center">
<a href=""><button class="button" ><span> Contact List </span></button></a>
<a href="signup_page.php"><button class="button" ><span> Signup Admin</span></button></a>
<a href="admin_portfolio.php"><button class="button" ><span> Portfolio</span></button></a>
<a href="notice_page.php"><button class="button" ><span> Notice </span></button></a>
<a href="project_page.html"><button class="button" ><span> button</span></button></a>
<a href=""><button class="button" ><span>Logout</span></button></a>
</div>
<!-- ************************ Description *************************** -->

<div style="background-color:#5f2160; color:white;padding:20px; text-align:left; margin: 17px; width: 93%;">

  <h2 align="center"> <b></b> ADMIN PAGE</h2>
  <h3 align="center "> <b> Visitor's Messages and Information </b> </h3>

</div>

<div style="margin: 17px; width: 96%;">
<table id="t01" >

<tr>
<th> Name </th>
<th> Phone </th>
<th> Email </th>
<th> Message </th>
<th> Delete option </th>
</tr>
 <!-- <form action = "admin_page.php" method = "post" align="right"> -->

<?php
for ($i = 0; $i < sizeof($jsn); $i++) {
    echo "<tr>";
    echo "<td>" . $jsn[$i]->Name . "</td>";
    echo "<td>" . $jsn[$i]->Phone . "</td>";
    echo "<td>" . $jsn[$i]->Email . "</td>";
    echo "<td>" . $jsn[$i]->Message . "</td>";
    echo "<td><a href=contact_delete.php?id=" . $jsn['ID'] . "> delete</a></td>";

    //echo "<td>"
    /*?>
<input type = "submit" value = "DELETE" name = "delNotice" />
</form>
<?php         */

}
echo "<pre>";
echo "</pre>";
?>

</table>
</div>

<div align="center">
  <footer>Copyright © 2017 Nicdos Interior. All rights reserved.</footer>
</div>


</body>
</html>

<?php

//$id = $_GET["ID"];
if (isset($_POST['delNotice'])) {
    $conn = new mysqli("localhost", "root", "robi", "reg_demo");
    if ($conn->connect_error) {
        die("Database connection failed" . $conn->connect_error);
    }

    $conn->query("delete * from registration where id = " . $_POST['delNotice']);
}

?>