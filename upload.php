<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>


<?php
require_once ("connection.php");
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$title=$_POST['title'];
$detail=$_POST['detail'];
$path=$target_file;
$type=$_POST['type'];
mysqli_set_charset($conn,'utf8');
$sql="INSERT INTO `news` (`title`, `detail`, `path`, `type`) VALUES ('$title','$detail', '$path', '$type')";







$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}



// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    ?>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Error</h4>
            <p class="card-text"><? echo "Sorry, your file was not uploaded."; ?></p>
            <a href="index.php" class="card-link">Back to home page</a>
            <a href="uploadform.php" class="card-link">Upload Again</a>
        </div>
    </div>
    <?php

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && $result = mysqli_query($conn, $sql)) {
        ?>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Uploaded</h4>
                <p class="card-text"><?php echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded."; ?></p>
                <a href="index.php" class="card-link">Back to home page</a>
                <a href="uploadform.php" class="card-link">Upload another file</a>
            </div>
        </div>
        <?php

    } else {
        ?>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Error</h4>
                <p class="card-text"><?php echo $conn->error; ?></p>
                <a href="index.php" class="card-link">Back to home page</a>
                <a href="uploadform.php" class="card-link">Upload Again</a>
            </div>
        </div>
        <?php



        }
        }?>

</body>
</html>