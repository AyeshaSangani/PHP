
<?php


$name1 = "ahmed";
$name2 = "anas";
$name3 = "umer";

function name($value){          

      $username = $value;
      echo $username;
};
name($name1);
name($name2);
name($name3);


  

// .........sending greeting msg............



function sendmsg($usernames){
    
    foreach ($usernames as $username){
        $msg = "Ramadan Mubarak $username";
        echo $msg . "<br>";

    }

}

$usernames = ["Salik", "Wajaht" , "Zain" ];

sendmsg($usernames)

?>




