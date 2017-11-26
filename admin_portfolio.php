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
<div align="center"
<a href="home_page.html"><button class="button" ><span>Home</span></button></a>
<a href="about_page.html"><button class="button" ><span>About Us</span></button></a>
<a href="service_page.html"><button class="button" ><span>Services</span></button></a>
<a href="project_page.html"><button class="button" ><span>Portfolio</span></button></a>
<a href="project_page.html"><button class="button" ><span>Project</span></button></a>
<a href="contact_page.html"><button class="button" ><span>Contact</span></button></a>
</div>
<!-- ************************ Description *************************** -->
<script>
function validate(){
	flag=true;
	msg=document.getElementById("m");
	if(document.mfm.fileToUpload.value.length==0){
		msg.innerHTML="<h2>file was not choosen</h2>";
		msg.style.color="red";
		flag=false;
	}
	if(document.mfm.uName.value.length==0){
	msg.innerHTML="<h2>file name is empty</h2>";
		msg.style.color="red";
		flag=false;
	}
	return flag;
}
 </script>
<div style="background-color:#5f2160; color:white;padding:20px; text-align:left; margin: 17px; width: 93%;">

  <h2> <b></b> Picture Upload</h2>
  <h2> <b> (only admin will use) </b> </h2>
  <form action="upload1.php" method="post" enctype="multipart/form-data" name="mfm"><pre>
<h3> Your Name : </h3> <input type="text" name="uName" id="uName">

<h2> Select image to upload : </h2><input type="file" name="fileToUpload" id="fileToUpload">

<input type="submit" onclick="return validate();" value="Upload File" name="submit"><pre>
</form>
<p id="m"></p>

</div>


<div align="center">
  <footer>Copyright © 2017 Nicdos Interior. All rights reserved.</footer>
</div>

</body>
</html>
