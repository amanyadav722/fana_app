<!doctype html>
<html>
<head>
<title>The language app</title>
<meta name="description" content="Our first page">
<meta name="keywords" content="html tutorial template">
<link rel="stylesheet" href="stylesheet/stylesheet.css">
</head>

<body>
<form class = "forms" action = "includes/signup.inc.php" method="POST">
    <input type="text" name="firstname" placeholder = "Your firstname"><br>
    <input type="text" name="lastname" placeholder = "Your lastname"><br>
    <input type="text" name="username" placeholder = "Your Username"><br>
    <input type="text" name="email" placeholder = "Your Email"><br>
    <input type="password" name = "password" placeholder = "Your Password"><br>
    <input type="password" name = "repassword" placeholder = "Retype your Password"><br>
    
    <label for="language">language:</label>
    <select id="language" name="language">
    <option value="English">English</option>
    <option value="French">French</option><br>
    </select>
    <label for="level">Choose your level:</label>
    <select id="level" name="level">
    <option value="A1">A1</option>
    <option value="A2">A2</option>
    <option value="B1">B1</option>
    <option value="B2">B2</option>
    </select><br>

    <button type = "submit" name = "submit" >Sign UP!</button>
</form>

</div>
</body>
</html>