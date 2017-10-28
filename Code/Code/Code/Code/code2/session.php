<?php
   //include('config.php');
$servername = "localhost";
$username = "root";
$password = "Starwars1";
$DB = "testDB1";
$conn = new mysqli($servername, $username, $password, $DB);

   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query("SELECT usern FROM userID WHERE usern = '".$_SESSION['login_user']."' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_BOTH);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
