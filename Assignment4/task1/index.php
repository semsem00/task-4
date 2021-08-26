<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

    <div class="container">
<?php

if(isset($_POST['submit'])){

 $image = $_FILES['image'];

$imageName = $image['name'];
$imageType = $image['type'];
$imageTmpName = $image['tmp_name'];
$imageError = $image['error'];
$imageSize = $image['size'];

//validation
$imageNameWithoutExtention = pathinfo($imageName , PATHINFO_FILENAME);
$imageExtention = pathinfo($imageName, PATHINFO_EXTENSION);
$imageNewName = "$imageNameWithoutExtention".uniqid().".$imageExtention";
move_uploaded_file($imageTmpName , "images/$imageNewName");
$dir= "images";
$results= scandir($dir);
// print_r($results);
 foreach($results as $result){  ?>
  <div>
 <img src="<?php echo "$dir.$result" ?>"width="200px" height="200px" />
 <a href="#">Download</a>
  </div>
 
<?php }; ?>
<?php }; ?>
    </div>
</body>
</html>


