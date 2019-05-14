<?php
if (isset($_POST['upload']))

$file_tmp_name = $_FILES['file']['tmp_name'];
$video_name = "video/"."video".".mp4";

if(move_uploaded_file($file_tmp_name, $video_name))
{

    echo "<h2>Video Uploaded Successfully.</h2>";
}
?>


<!DOCTYPE html>
<html>
    <title>Demo Video Sync</title>
</html> 

<body>

    <form action="?" method="POST" enctype="multipart/form-data">
        <label>Upload Video</label>
        <p><input type="file" name="file"></p>
        <p><input type="submit" name="upload" value="Upload Video"></p>
        <!-- <p><input type="submit" name="update" value="Update Video"></p> -->
    </form>
</body>