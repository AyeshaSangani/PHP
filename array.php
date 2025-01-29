
<?php


// 2D array

$data = array(
    array("name"=>"Ahmed", "email"=>"ahmed@gmail.com","status"=>"Developer"),
    array("zain", "zain@gmail.com", "backendDeveloper"),
    array(23232,332,541545,545454,5454)
);

echo $data[0]["email"];
echo $data[1][0];
echo $data[2][0];






/// 3D array


$data = array(
        array("Anas", "X", "Marks"=>array("eng"=>85, "phy"=>70, "chem"=>72), "A", "75%"),    
);

echo "Name:" . $data[0][0]; echo "<br>";
echo "Class:" . $data[0][1]; echo "<br>";

echo "Marks Eng:". $data[0]["Marks"]["eng"]; echo "<br>";
echo "Marks Phy:" . $data[0]["Marks"]["phy"]; echo "<br>";
echo "Marks Chem:" . $data[0]["Marks"]["chem"]; echo "<br>";
echo "Grade:" . $data[0][2]; echo "<br>";
echo "Percentage:" . $data[0][3]; echo "<br>";



?>