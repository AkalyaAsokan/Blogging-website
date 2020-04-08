
<!DOCTYPE html>
<html><head>
	<meta http-equiv="refresh" content="0; url=bloggin.php"/> 
</head>
<style>


.first {
  width: 560px;
  display: block;
  margin: auto;
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
  margin-left: 26%; 
}
  
  .avatar img {
    width: 85%;
    border-radius: 50%;
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
  background-color: #ededed; }
	
  
  </style>
  <body>

<?php
session_start();

$host="localhost";
$user="root";
$password="root@123";
$text=$_POST['postm'];
$name=$_SESSION["name"];
//$name=$_POST['suname'];
//setcookie("$name", "idf", time() + (86400 * 30), "/");
$con = mysqli_connect("$host","$user","$password");
if($con)
{
  mysqli_select_db($con,"test");
  
  
  $query="insert into textcontent(user,content,time) values ('$name','$text',now())";
  $result=mysqli_query($con,$query);
  $query="Select content from textcontent";
  $result=mysqli_query($con,$query);
?>
<span class="first"> 
@  
<?php //if(isset($_COOKIE[$name]))
		//	{	echo "$name ";}
?>
</span>

<?php
while($row=mysqli_fetch_array($result))
  {?>
     
  
			<br>
				<div class="avatar">
				
          <img src="http://www.croop.cl/UI/twitter/images/doug.jpg">
					
				</div>
				
					<div class="bubble">
					
						<h3>@<?php// echo "$name"?></h3>blogged<br/>
					<?php echo "$row[0]"; ?>
						
					</div>	
			
			<br><br>
  
  <?php }mysqli_close($con);	}
else
{
  echo '<h1>MySQL Server is not connected</h1>';
}		 ?>
</body>
</html>





  
  
    
  
 

