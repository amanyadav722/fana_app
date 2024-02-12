<?php
session_start();

?>
<!doctype html>
<html>
<head>
<title>The language app</title>
<meta name="description" content="Our first page">
<meta name="keywords" content="html tutorial template">
<link rel="stylesheet" href="stylesheet/stylesheet.css">
<script type="javascript" src="script/script.js"></script>
</head>
<body>
    <?php
        if(isset($_SESSION["username"])){
            echo "<p>Hello, </p>", $_SESSION["username"];
            echo "<div class = 'signup'>";
            echo "<a href ='includes/logout.inc.php'>Log out!</a>";
        }
        else{
            echo "<div class = 'signup'>";
            echo "<a href ='signup.php'>SIGN UP!</a>";
            echo "<a href ='login.php'>LOGIN!</a>";
            echo "<a href ='includes/guest.inc.php'>LOGIN as a guest!</a>";
        }
    ?>

</div>
</body>
</html>