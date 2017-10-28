<html>
<head>

<?php
$servername = "localhost";
$username = "root";
$password = "Starwars1";
$DB = "testDB1";

// Create connection
$conn = new mysqli($servername, $username, $password, $DB);

//echo '<h1>fasfhiisdg</h1>';
// Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
        echo '<h1>no connection</h1>';
}

 if(isset($_POST['submit'])){
        $sql = "INSERT INTO userDB (usern, passw)
        VALUES ('".$_POST["username"]."', '".$_POST["password"]."')";

//
if(mysqli_query($conn, $sql)){



//    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 }
// Close connection
mysqli_close($conn);

?>





 <form action = "" method = "post">
                <h2>
                    <label>Username:</label> <input type = "text" name = "username"><br>
                    <label>Password:</label> <input type = "text" name = "password"<br>
                    <input type="submit" name = "submit" value="Submit">
                    <a href=login.php>Back to login page</a>
		</h2>
</form>


</head>
<body>
</body>
</html>

