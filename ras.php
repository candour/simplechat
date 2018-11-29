<form action="ras-upload.php" method="post" enctype="multipart/form-data">
  Please choose a file: <input type="file" name="uploadFile"><br>
  <input type="submit" value="Upload File">
</form>

<br />
<?php
$upload_dir = 'uploads';
if (is_dir($upload_dir) && is_writable($upload_dir)) {
  echo "Can upload";
} else {
  echo "Can't upload";
}
