<?php
$target_dir = "/var/www/semmens.info/web/uploads/";
$target_dir = $target_dir . basename( $_FILES["uploadFile"]["name"]);
$uploadOk=1;

// Check if file already exists
if (file_exists($target_dir . $_FILES["uploadFile"]["name"])) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else { 
    if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_dir)) {
        echo "The file <a href=\"http://semmens.info/uploads/". basename( $_FILES["uploadFile"]["name"]). "\">Picture</a> has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
        echo $_FILES["uploadFile"]["error"];
    }
}
?>
