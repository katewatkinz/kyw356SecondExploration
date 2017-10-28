<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
<style>
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


<body>


<div class="container">

	<div id="back"><a></a></div>
	
	<div class="four columns">
		<h1>Test</h1>
	</div>
		
	<div id="nav" class="five columns">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Portfolio</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>			
	
	<div id="headerImage" class="sixteen columns"><img src="https://designshack.net/tutorialexamples/Skeleton/images/field.jpg" /></div>
		
	<div id="welcome" class="sixteen columns">
		<h1>Built with Skeleton</h1>
		<p>This page was built for Design Shack using Skeleton, an awesome framework for building responsive web pages. Responsive pages can be difficult to plan and build but Skeleton makes it a breeze. Try resizing the browser window to see how the page responds. Even the images change size as the page gets smaller!</p>
	</div>
		
	<div class="one-fourth column feature">
			
		<h2>One</h2>
		<img src="http://lorempixum.com/400/100/nature/1" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod ultrices ante, ac laoreet nulla vestibulum adipiscing. Nam quis justo in augue auctor imperdiet. Curabitur aliquet orci sit amet est posuere consectetur.</p>
	</div>
		
	<div class="one-fourth column feature">
			
		<h2>Two</h2>
		<img src="http://lorempixum.com/400/100/nature/2" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod ultrices ante, ac laoreet nulla vestibulum adipiscing. Nam quis justo in augue auctor imperdiet. Curabitur aliquet orci sit amet est posuere consectetur.</p>
	</div>
		
	<div class="one-fourth column feature">
			
		<h2>Three</h2>
		<img src="http://lorempixum.com/400/100/nature/3" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod ultrices ante, ac laoreet nulla vestibulum adipiscing. Nam quis justo in augue auctor imperdiet. Curabitur aliquet orci sit amet est posuere consectetur.</p>
	</div>


<?php
echo '<h1>start</h1>';
$servername = "localhost";
$username = "root";
$password = "Starwars1";
$DB = "testDB1";

// Create connection
$conn = new mysqli($servername, $username, $password, $DB);

echo '<h1>fasfhiisdg</h1>';
// Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	echo '<h1>no connection</h1>';
} 
echo '<h1>Connectod successfully</h1>';

//$sql = "INSERT INTO userTest1 (userID, email, reason, message) VALUES (1,'t', 1, 'h')";
//$conn->exec($sql);



	 
   if(isset($_POST['save'])){
        $sql = "INSERT INTO userTest1 ( email, reason, message)
        VALUES ('".$_POST["email"]."', '".$_POST["reason"]."', '".$_POST["message"]."')";   
	
// 
if(mysqli_query($conn, $sql)){

   

    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 }
// Close connection
mysqli_close($conn);

echo '<h1>why no work</h1>';
?>






	<!-- The above form looks like this -->
<form action = "indexTest1.php" method = "post">
  <div class="row">
    <div class="six columns">
      <label for="exampleEmailInput">Your email</label>
      <input class="u-full-width" type="email" name="email" placeholder="test@mailbox.com" id="exampleEmailInput">
    </div>
    <div class="six columns">
      <label for="exampleRecipientInput">Reason for contacting</label>
      <select type = "reason"  name = "reason" class="u-full-width" id="exampleRecipientInput">
        <option type="reason" name="reason" value=1>Questions</option>
        <option type="reason" name="reason"value=2>Admiration</option>
        <option type = "reason" name="reason" value=3>Can I get your number?</option>
      </select>
    </div>
  </div>
  <label for="exampleMessage">Message</label>
  <textarea type="message" name="message" class="u-full-width" placeholder="Hi Dave" id="exampleMessage"></textarea>
  <label class="example-send-yourself-copy">
    <input type="checkbox">
    <span class="label-body">Send a copy to yourself</span>
  </label>
  <button class="button-primary" name = "save" type="submit" value="Submit">
</form>

<!-- Always wrap checkbox and radio inputs in a label and use a <span class="label-body"> inside of it -->

<!-- Note: The class .u-full-width is just a utility class shorthand for width: 100% -->		

</div><!-- container -->


</body>
</html>



