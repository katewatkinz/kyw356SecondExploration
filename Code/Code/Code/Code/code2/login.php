<html>
<?php
	session_start();
?>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

<style>

h1, h2{
	text-align: center;
}
.inputs{
	margin: 0 auto;
	margin-left: auto;
	margin-right: auto;
	text-align: center;

}

</style>

<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="/base.css">
	<link rel="stylesheet" href="/skeleton.css">
	<link rel="stylesheet" href="/layout.css">
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />

<?php
$servername = "localhost";
$username = "root";
$password = "Starwars1";
$DB = "testDB1";

$conn = new mysqli($servername, $username, $password, $DB);

if($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
	echo '<h1>No Connection</h1>';
}

if(isset($_POST['submit'])) {
      // username and password sent from form 
     	$conn = new mysqli("localhost","root","Starwars1","testDB1"); 
	$myusername = $_POST['username'];
      	$mypassword = mysqli_real_escape_string($DB, $_POST['password']);
	echo "<h2>" . $myusername . "</h2>";
	$sql = "SELECT usern FROM userDB WHERE usern = '".$_POST['username']."' AND passw = '".$_POST['password']."'";
	$result = $conn->query($sql);
        //$row = mysqli_fetch_array($result,MYSQL_NUM);
        //$active = $row['active'];
      
      	$count = $result->num_rows; 
      	//echo "hello" . $count;
	//echo "count is $count $result $sql $DB";
if($count > 0) {
         //session_register("myusername");
         $_SESSION['login_user'] = $_POST['username'];
         
         header("location: indexTest1.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
 
}
?>

<div class = "title">
	<h1>Login</h1>
</div>
</head>
<body>
	<div class = "inputs">
		<form action = "" method = "post">
		<h2>
		    <label>Username:</label> <input type = "text" name = "username"><br>
		    <label>Password:</label> <input type = "password" name = "password"<br>
		    <input type="submit" name = "submit" value="Submit">
		    <label>Register: </label><a href=register.php>Sign up!</a>	
		</h2>
		</form>
	</div>

</body>
</html>
