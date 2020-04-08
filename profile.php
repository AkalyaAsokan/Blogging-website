<html>
<body>
<?php
                                                               
$host="localhost";
$user="root";
$pass="root@123";
echo "getting ready";
$con = mysqli_connect("$host","$user","$pass");
if($con)
{	//echo 'connection done';
	mysqli_select_db($con,'test');
	$uname=$_POST['user'];
	$first=$_POST['first'];
	$last=$_POST['last'];
	//$dob=$_POST['date'];
	//$gender=$POST["gender"];
	 $filetmp=$_FILES["image"]["tmp_name"];
	$filename=$_FILES["image"]["name"];
	$filetype=$_FILES["image"]["type"];
	$filepath="pictures/".$filename;
	move_uploaded_file($filetmp,$filepath);
	//echo" upload done";
	$query="INSERT INTO profile(user,img_name,img_path,img_type) VALUES ('$uname','$filename','$filepath','$filetype')";
	$result=mysqli_query($con,$query);
	// echo" inserted";
	$query="Select * from profile  where user='$uname'";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
	echo " <img src='pictures/".$row['img_name']."' width='400' height='200' />"; 
	}
	 mysqli_close($con);
}
else
{echo "connetion not done";
}
?>
</body>
</html>
	