<?php
require_once ('connection.php');
if(isset($_POST['v']))
{   $v=$_POST['v'];
    $sql="INSERT INTO `news` (`title`, `detail`, `path`, `type`) VALUES ('video','not required','$v', 4)";
    $result=mysqli_query($conn,$sql);
}