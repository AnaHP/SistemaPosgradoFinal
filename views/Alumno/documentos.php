<?php
    print_r($_FILES);
    $temp = explode(".", $_FILES["file"]["name"]);
    $newfilename = round(microtime(true)).'.'.end($temp);

    if (move_uploaded_file($_FILES["file"]["tmp_name"], "./files/".$newfilename)){
    //if (move_uploaded_file($_FILES["files"]["tmp_name"],$newfilename)){
        echo 1;
    } else {
        echo 0;
    }
?>