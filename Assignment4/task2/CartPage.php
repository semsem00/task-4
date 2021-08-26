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
    //  $x= $_POST['name'];
    // session_start();
    // $display_names=$_SESSION['x'];
    // print_r($$display_names);

    if(isset($_POST['submit'])){
      $pro_name = $_POST['pro_name'];
     $_SESSION['pro_name'] = $pro_name;

           $display_names=$_SESSION['pro_name'];
     print_r($$display_names);
       }
     ?>

</div>
</body>
</html>