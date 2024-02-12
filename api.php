<?php

$response = array();

    $db = mysqli_connect("localhost", "root", "", "photos");
    $sql = "SELECT * FROM images";
    $result = mysqli_query($db, $sql);
    if($result) {
        header("Content-Type: JSON");
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row ['id'];
            $response[$i]['image'] = $row ['image'];
            $response[$i]['text'] = $row ['text'];
            $i++;

        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
    else {
        echo "Database connection failed!";
    }

?>