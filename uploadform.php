<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/notonastaliqurdudraft.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
<div class="container">
    <h3 class="display-2 text-center">Upload Form</h3>
    <h4 class="display-4">Add News</h4>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">title</label>
        <input type="title" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <lebel>Detail</lebel>
        <textarea type="text" class="form-control" name="detail"></textarea>
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <select class="form-control" id="type" name="type">
            <option value="1"> تازہ ترین </option>
            <option value="3"> کالمز </option>
            <option value="2"> کھیل</option>

        </select>
    </div>
    <div class="custom-file">
        <input type="file" name="fileToUpload" id="fileToUpload" class="custom-file-input">
        <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <input type="submit" value="Submit" name="submit" class="btn btn-primary mt-3">

</form>
    <h4 class="display-4">Add iframe</h4>
    <form action="video.php" method="post">
        <div class="form-group">
            <label>Iframe</label>
            <input class="form-control" type="text" name="v">
        </div>
        <input type="submit" value="Submit" name="submit" class="btn btn-primary mt-3">
    </form>
</div>
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
</body>
</html>