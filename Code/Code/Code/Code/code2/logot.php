<html>
<head>
<?php
session_start();
if(session_destroy()) {
      header("Location: login.php");
   }
?>
</head>
<body>
</body>
</html>
