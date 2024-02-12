
<!doctype html>
<html>
<head>
<title>The language app</title>
<meta name="description" content="Our first page">
<meta name="keywords" content="html tutorial template">
<link rel="stylesheet" href="stylesheet/stylesheet.css">
</head>
<style>
    .forms{
        align-items: center;
        display: flex;
        align-items: center;
        padding: 10px;
        margin: 5px;
    }
</style>
<body>
<form class = "forms" action = "includes/login.inc.php" method="POST">
    <input type="text" name="username" placeholder = "Your Username/Email"><br>
    <input type="password" name = "password" placeholder = "Your Password"><br>
    <button type = "submit" name = "submit">Log in!</button>
</form>

<?php
include_once "includes/functions.inc.php";
?>


</div>
</body>
</html>