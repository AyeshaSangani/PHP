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

echo $data["salik"]["phone"];
echo "<br>";
echo "<br>";
echo $data["usman"]["email"]


?>







