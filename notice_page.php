<!DOCTYPE html>
<html>
<head>
	<title>notice board</title>
	<meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="CSS/notice.css">
<div align="center">
  <header>
    <img src="upload_pic/logo.jpg">
  </header>
</div>
</head>

<script>
function showHint() {

			msg="NOTICE IS DELETED BY ADMIN";

			alert(msg);
	}


</script>
</head>

<body style="background-color: #FFFFFF">


<!-- ************************ Buttons *************************** -->
<div align="center">
<a href="home_page.html"><button class="button" ><span>Home</span></button></a>
<a href="about_page.html"><button class="button" ><span>About Us</span></button></a>
<a href="service_page.html"><button class="button" ><span>Services</span></button></a>
<a href="project_page.html"><button class="button" ><span>Portfolio</span></button></a>
<a href="project_page.html"><button class="button" ><span>Project</span></button></a>
<a href="contact_page.html"><button class="button" ><span>Contact</span></button></a>
</div>
<!-- ************************ Description *************************** -->

<div style="background-color:#5f2160; color:white;padding:20px; text-align:left; margin: 17px; width: 93%;">

  <h2> <b></b> Project </h2>
  <h2> <b> Description </b> </h2>
  <p> description </p>

</div>


<form action = "notice_page.php" method = "post" align = "center">
<b> NEW NOTICE: </b><br>
<textarea name="theNotice" style="height:80px;width:500px">
</textarea>
<br>
<input type = "submit" value = "SUBMIT" name = "newNotice" />
</form>
<?php
if (isset($_POST['newNotice']) && $_POST['theNotice'] !== "") {
    $conn = new mysqli("localhost", "root", "robi", "reg_demo");
    if ($conn->connect_error) {
        die("Database connection failed" . $conn->connect_error);
    }

    $conn->query("insert into notice values(null, current_timestamp,'" . $_POST['theNotice'] . "')");
} else if (isset($_POST['delNotice']) && $_POST['noticeID'] !== "") {
    $conn = new mysqli("localhost", "root", "robi", "reg_demo");
    if ($conn->connect_error) {
        die("Database connection failed" . $conn->connect_error);
    }

    $conn->query("delete from notice where id = " . $_POST['noticeID']);

}
?>

    <form action = "notice_page.php" method = "post" align="right">
	    <br><br> <b>
		DELETE NOTICE </b><br>
		<b>INPUT ID : </b>
		<input type = "text" name = "noticeID" value = "" size = "11" maxlength = "30" />
		<input type = "submit" value = "DELETE NOTICE" name = "delNotice" onclick="showHint(this)" />

	</form>
	<br>

	<table id="t01" >
	<tr>
	<th> ID </th>
	<th> NOTICE </th>
	<th> DATE & TIME </th>
	</tr>
	<?php
$jsn = json_decode(fetchNotice());
for ($i = (sizeof($jsn) - 1); $i >= 0; $i--) {
    echo "<tr>";
    echo "<td>" . $jsn[$i]->id . "</td>";
    echo "<td>" . $jsn[$i]->text . "</td>";
    echo "<td>" . $jsn[$i]->timeinfo . "</td>";
    echo "</tr>";
}
?>
	</table>
	<br>
	<br>
    <div align="center">
  <footer>Copyright © 2017 Nicdos Interior. All rights reserved.</footer>
</div>
</body>
</html>


<?php

function fetchNotice()
{
    $conn = new mysqli("localhost", "root", "robi", "reg_demo");
    if ($conn->connect_error) {
        die("Database connection failed" . $conn->connect_error);
    }

    $result = $conn->query("select * from notice");
    $arr    = array();
    while ($row = $result->fetch_assoc()) {
        $arr[] = $row;
    }
    return json_encode($arr);
}

/*     function deleteNotice($id){
$conn = new mysqli("localhost", "root", "", "reg_demo");
if($conn->connect_error)die("Database connection failed" . $conn->connect_error);
$result= $conn->query("delete from notice where id =".$id);
} */

?>
