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
    <?php
       $products=[
         'product1' => [
            'name' => 'laptop',
            'price' =>  15000,
             'image' => 'pexels-serpstat-1.jpg',
         ],
         'product2' => [
           'name' => 'iphone',
           'price' =>  3000,
           'image' =>'download.jpg'
        ],
        'product3' => [
            'name' => 'lenovo',
           'price' =>  10000,
           'image' => 'pexels-cottonbro-4065620',
        ],
        'product4' => [
            'name' => 'samsung',
           'price' =>  8000,
           'image' => 'IMG-20191209-WA0013.jpg',
        ],
    ];

    if(isset())
       
       ?>
       <div class="container">
          
               <?php  foreach($products as $key => $value){ 
                foreach($value as $key1 => $value1){?>      
               
                 <p> <?php echo "$key1 : $value1"; }; ?> </p>
                 <button class="btn btn-info" name="submit"> add to cart</button>
                 <hr/>
                  <?php  }; ?>
            
       </div>
</body>
</html>



