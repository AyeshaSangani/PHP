<?php


$host = "localhost";
$username = "root";
$password = "";
$database = "feedbacksystem";

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("connection failed" . mysqli_connect_error());
} else {
    echo "connected Successfully";
    echo "<br>";
}

$username = $_POST['username'];
$email = $_POST['email'];
$number = $_POST['number'];
$feedback = $_POST['feedback'];

$sql = "insert into $database.studentdata ( username , email , 'number' , feedback) 
  values ('$username' , '$email' , '$number' , '$feedback')";


if (mysqli_query($connection, $sql)) {

    echo "Record Successfully Added";

} else {
    echo "Error:" . $sql . "<br>" . mysqli_error($connection);
}


mysqli_close($connection);


?>
