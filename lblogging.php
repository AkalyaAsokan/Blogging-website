

<!DOCTYPE html>
<html>
<head>
<style>
	.pics
	{	margin-top:15px;
		margin-left:70%;
	}
	
	a
	{	text-decoration:none;
	}
	body 
		{ background-color:white;
		}
	button{
			background-color:black;
			color:white;
			padding: 10px 15px;
			margin-left:600px
			border: none;
			cursor: pointer;
			width: 150px;
			font-family: "Franklin Gothic Medium";
		}
		button:hover {
			opacity: 0.8;
		}
		

.first {
  width: 560px;
  display: block;
 margin-left:10%;
  background-color: #A13736;
  padding: 1em  ;
  color: white;
  text-align: center;
  margin-top: 1em;
  font-family: "Lato";
  font-size: 1.6em;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  position: relative; }
  
  
  .avatar {
  width: 6%;
  display: inline-block;
  vertical-align: top;
  position: relative;
  overflow: hidden;
  margin-left: 10%; 
}
  
  .avatar img {
    width: 85%;
    border-radius: 50%;
	height:60px;
    border: 5px solid #dcdcdc;
    position: relative; }
  
  .avatar:hover {
    cursor: pointer;
  }
	
	
	
	.bubble {
  width: 460px;
  
   margin-left: 10px; 
  padding: .5em 1em;
  line-height: 1.4em;
  padding: 20px;
  background-color: #dcdcdc;
  position: relative;
  border-radius: 8px;
  text-align: left;
  display: inline-block; }
  
  
 
	
	h3 {
  font-size: 1.2em;
  font-weight: bold;
  font-family: "corbel";
  display: inline-block;
  margin-bottom: .2em;
  color: #95a5a6; }
 
 body {
  font-family: "Segoe UI Symbol";
  color: #7f8c8d;
  font-size: 14px;
  background-color: WHITE; }
  
  .modal {color:black;
				display: none;          									 /* Hidden by default */
				position: fixed;        									 /* Stay in place */
				z-index: 1;            										 /* Sit on top */
				left: 0;
				top: 0;
				width: 100%;          										  /* Full width */
				height: 100%;         										  /* Full height */
				overflow: auto;        										  /* Enable scroll if needed */
				background-color: rgb(0,0,0);                    			  /* Fallback color */
				background-color: rgba(0,0,0,0.4);                            /* Black w/ opacity */
				padding-top: 60px;
				float:center;
				}
	
	.container {
    padding: 16px;
				}
	.close {
			position: absolute;
			right: 35px;
			top: 15px;
				color: #000;
			font-size: 40px;
			font-weight: bold;
			cursor:pointer;
			}
	.modal-content {
				background-color: #fefefe;       /*form background*/
				color:black;
				margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
				border: 1px solid #888;
				width: 80%; /* Could be more or less, depending on screen size */
			}
			
			
		}
		.place
		{	margin-left:410px;
			width:300px;
			margin-top:205px;
			height:300px;
			border:5px solid black;
			border-radius:40px;
		
		}
		.forform{
		margin-left:800px;
		}
	
</style>
<script>

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
	//alert("profile changes have been updated!!");
</script>
</head>
<body>
<div class="pics">
<?php
session_start();


	


$host="localhost";
$user="root";
$password="root@123";
$lname=$_POST['luname'];
$pwd=$_POST['lpsw'];
$_SESSION["lname"]=$lname;

 $con = mysqli_connect("$host","$user","$password");
if($con) 
{	
	mysqli_select_db($con,"test");
	//echo '$name';
	//echo '$_SESSION["name"]';
	$que='select * from bloggers where name="$_SESSION['lname']"';
	
	$result=mysqli_query($con,$que);

	 $rowcount=mysqli_num_rows($result);
	if($rowcount==0)
	{	echo "<script> alert ('YOU ARE NOT AN EXISTING USER!!')</script>";

	?><meta http-equiv="refresh" content="0; url=3.html"/><?php
	mysqli_close($con);}
	else
	{
	/*$query="select * from bloggers where name = $name";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_array($result,MYSQLI_NUM);
	$pass=$row[2];
	//$pass=mysqli_result($result,$i,"name");
	if($pass!=$pwd)
		echo"PASSWORD INCORRECT!!";*/





	
	
		?><br><b style="font-size:20px" >WELCOME : </b>
		<?php //if(isset($_COOKIE[$name]))
		echo $_SESSION["name"] ;
		?> <br><br>
		<a href="3.html" ><img style="width:30px;height:30px;" src="home.png"></a> &nbsp
		<a  onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> <img style="width:30px;height:30px;" src="textpic.png"> </a> &nbsp 
		<a  onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><img style="width:30px;height:30px;" src="cam.png"> </a> &nbsp
		<a onclick="document.getElementById('id03').style.display='block'" style="width:auto;"><img style="width:30px;height:30px;" src="video.png"> </a> &nbsp  
		<a onclick="document.getElementById('id05').style.display='block'" style="width:auto;"><img style="width:30px;height:30px;" src="quotes.png">  </a> &nbsp
		<a onclick="document.getElementById('id06').style.display='block'" style="width:auto;"><img style="width:30px;height:30px;" src="link.png"> </a>&nbsp 
		<a onclick="document.getElementById('id04').style.display='block'" style="width:auto;"> <img style="width:30px;height:30px;" src="audio.png"> </a> &nbsp 
		<a href="profile.html"><img src="update.png" style="width:30px;height:30px;"></a>
		<a href="home.html"><img src="log.png" style="width:30px;height:30px;"></a>
	</div>
	

<?php

  
  
 // <?php



  //mysqli_select_db($con,"test");
  //$currentTime = date("Y-m-d H:i:s", time());

 /* $filetmp=$_FILES["image"]["tmp_name"];
  $filename=$_FILES["image"]["name"];
  $filetype=$_FILES["image"]["type"];
  $filepath="uploads/".$filename;
  
  move_uploaded_file($filetmp,$filepath);
  
  $query="insert into new(img_name,img_path,img_type,time) values ('$filename','$filepath','$filetype',now())";
  $result=mysqli_query($con,$query);*/
    mysqli_select_db($con,"test");

  $query="Select * from new order by time desc";
  $result=mysqli_query($con,$query);

?>
<span class="first"> 
@ 
<?php //if(isset($_COOKIE[$name]))
		echo  $_SESSION["lname"];
?>
</span>

<?php
while($row=mysqli_fetch_array($result))
  {?>
     
  
			<br>
				<div class="avatar">
				
        <?php echo "<img src='uploads/".$row['img_name']."' />"; ?>
					
				</div>
				
					<div class="bubble">
					
						<h3>@<?php echo "$row[0]" ?>&nbsp </h3>blogged<br>
					<?php echo "<img  width='250' height='200' src='uploads/".$row['img_name']."' />"; ?>
						
					</div>	
			
			<br><br>
  
  <?php }
  $query="Select * from newvideo order by time desc";
  $result=mysqli_query($con,$query);


while($row=mysqli_fetch_array($result))
  {?>
     
  
			<br>
				<div class="avatar">
				
        <?php //echo "<img src='uploads/".$row['vid_name']."' />"; ?>
					
				</div>
				
					<div class="bubble">
					
						<h3>@<?php echo  "$row[0]" ?>&nbsp </h3>blogged<br>
						<?php echo "<video width='320' height='240' controls> <source  src ='uploads/".$row['vid_name']."' type='video/mp4'></video>" ?>						
					</div>	
			
			<br><br>
  
  <?php }
  $query="Select * from audio order by time desc";
  $result=mysqli_query($con,$query);

while($row=mysqli_fetch_array($result))
  {?>
     
  
			<br>
				<div class="avatar">
				
        <?php //echo "<img src='uploads/".$row['aud_name']."' />"; ?>
					
				</div>
				
					<div class="bubble">
					
						<h3>@<?php echo  "$row[0]" ?>&nbsp </h3>blogged<br>
					<?php echo "<audio controls> <source  src ='uploads/".$row['aud_name']."' type='audio/mp3'></audio>" ?>
						
					</div>	
			
			<br><br>
  
  <?php }
  
  $query="Select * from textcontent order by time desc";
  $result=mysqli_query($con,$query);


while($row=mysqli_fetch_array($result))
  {?>
     
  
			<br>
				<div class="avatar">
				
        <?php //echo "<img src='uploads/".$row['img_name']."' />"; ?>
					
				</div>
				
					<div class="bubble">
					
						<h3>@<?php echo  "$row[0]" ?>&nbsp </h3>blogged<br>
					<?php echo "$row[1]"; ?>
						
					</div>	
			
			<br><br>
  
  <?php }?>
  
  
  
  
  
 

	
	
	
	
	<div id="id01" class="modal">
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">×</span>
			<form action="http://localhost//text.php" method="POST" class="modal-content animate" >
				<div class="container">
					<br><br><b>POST YOUR THOUGHTS HERE!!</b><br>
					<input type="text"
					<textarea  name="postm" placeholder="TYPE YOUR TEXT HERE" rows=15 cols=80 >
					</textarea><br><br>
					<!--<button type="submit" style="margin-left:510px;" >POST</button>-->
					<button type="button" onclick="document.getElementById('id01').style.display='none'">CANCEL</button>
					<button type="submit"  >POST</button>
				</div>
			</form>
	</div>
	
	<div id="id02" class="modal">
		<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close">×</span>
			<div class="place" style="background:url(Captureleft.png);width: 400px; height:300px;margin-left:800px;margin-top:100px;">
			<br><br><br><br><br><br><br><br><br><br>
			</div><br>
			<div class="forform">
				<form  action="http://localhost//pic.php" method="POST" enctype="multipart/form-data" >
				
					<input type="file" name="image" accept="image/*"><br><br>
					<button type="reset" style="margin-left:10px;" >CLEAR</button>  &nbsp &nbsp <button type="submit">POST</button> 
				</form>
			</div>
	</div>
	
	
	<div id="id03" class="modal">
		<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close">×</span>
			<div class="place" style="background:url(Capture.png);width: 400px; height:300px;margin-left:800px;margin-top:100px;">
			<br><br><br><br><br><br><br><br><br><br>
			</div><br>
			<div class="forform">
				<form  action="http://localhost//video.php" method="POST" enctype="multipart/form-data" >
					<input type="file" name="video" accept="video/*"><br><br>
					<button type="reset" style="margin-left:10px;" >CLEAR</button> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <button type="submit">POST</button> 
				</form>
			</div>
	</div>
	
	
	<div id="id04" class="modal">
		<span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close">×</span>
			<div class="place" style="background:url(mic.png);width: 400px; height:300px;margin-left:800px;margin-top:100px;">
			<br><br><br><br><br><br><br><br><br><br>
			</div><br>
			<div class="forform">
				<form  action="http://localhost//audio.php" method="POST" enctype="multipart/form-data" >
					<input type="file" name="audio" accept="audio/*"><br><br>
					<button type="reset" style="margin-left:10px;" >CLEAR</button> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <button type="submit">POST</button> 
				</form>
			</div>
	</div>
	
	
	<div id="id05" class="modal">
		<span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close">×</span>
			<form action="http://localhost//text.php" method="POST" class="modal-content animate" >
				<div class="container">
					<br><br><b>"SHARE YOUR WISE QUOTES HERE!!"</b><br>
					<textarea  name="postm" placeholder="TYPE YOUR QUOTES " rows=15 cols=80 >
					</textarea><br><br>
					<!--<button type="submit" style="margin-left:510px;" >POST</button>-->
					<button type="button" onclick="document.getElementById('id05').style.display='none'">CANCEL</button>
					<button type="submit" >POST</button>
				</div>
			</form>
	</div>
	
	
	<div id="id06" class="modal">
		<span onclick="document.getElementById('id06').style.display='none'" class="close" title="Close">×</span>
			<form action="http://localhost//text.php" method="POST" class="modal-content animate" >
				<div class="container">
					<br><br><b>"SHARE YOUR LINKS HERE!!"</b><br>
					<textarea  name="postm" placeholder="PASTE THE URL " rows=15 cols=80 >
					</textarea><br><br>
					<!--<button type="submit" style="margin-left:510px;" >POST</button>-->
					<button type="button" onclick="document.getElementById('id06').style.display='none'">CANCEL</button>
					<button type="submit" >POST</button>
				</div>
			</form>
	</div>
	<?php
	mysqli_close($con);}
}
else
{echo "connetion not done";
}
?>
	
	
	
	
</body>
</html>
	
	
	
	
	
	





