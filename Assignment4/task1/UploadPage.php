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
    <form method="POST" action="./index.php" enctype="multipart/form-data">
        <input type="file" name="image"/>
        <input type="text" placeholder="name of image" name="imageName"/>
        <input type="submit" name="submit"/>
    </form>
</body>
</html>