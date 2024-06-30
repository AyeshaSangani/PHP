<?php
//linking files
    require "01connection.php";

       $table = "
        
       create table if not exists php class(
        id int auto_increment primary key not null ,
        username nvarchar(255),
        useremail nvarchar(255),
        title nvarchar(255),
        decscription text(5000),
        dateofpost date default current_timestamp()
       );
       
        ";


        $res = mysqli_query($con, $table);

  if ($res){
    echo "created";
  }
  else{
    echo "not created";
  }

?>