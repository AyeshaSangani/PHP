<?php

// ======  indexed Array   ==========

$data = array("Mouse", "keyboard", 23,12);
echo $data[0];
echo $data[1];
$newData =  $data[0];


//   ======  Associative Array ======

$data = array("name"=>"Ahmed", "email"=>"ahmed@gmail.com","status"=>"Developer");

echo $data["name"];
echo $data["email"];
echo $data["status"];



// ====== MultiDimentional Array   =========

$data = array(

"salik" => array("Phone"=>"+923654889", "email"=>"salik@gmail.com","status"=>"BackendDeveloper"),
"usman" => array("Phone"=>"+9256454", "email"=>"usman@gmail.com","status"=>"FrontendDeveloper"),
);

echo $data["salik"]["email"];
echo "<br>";
echo $data["usman"]["email"]


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAYS</title>
</head>
<body>
    
    <h1>Arrays in PHP</h1>

    <h3><b>  <?php echo  $newData ?>  </b></h3>


</body>
</html>
