<?php

  // if upload button is pressed
  if (isset($_POST['upload'])) {
      //the path to store the uploaded images
    $target = 'images/'.basename($_FILES['image']['name']);

    //connect to te database
    $db = mysqli_connect("localhost", "root", "", "photos");

    //get all the submitted data from the form
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    $sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
    mysqli_query($db, $sql); //stores the submitted data into the databse table: images

    //now let's move the uploaded inmges into the  folder: images
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image Uploaded successfully";
    }else {
            $msg = "There was a problem uploading image";
        }
    }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="home_for_upload" id="content">
        <form method="post" action="index.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <div>
                <input type="file" name="image">

            </div>
            <div>
                <textarea name="text" cols="40" rows="4" placeholder="Say something about this image...">
                </textarea>

            </div>
            <div>
                <input type="submit" name="upload" value="Upload Image">
            </div>
    </div>
</body>

</html>