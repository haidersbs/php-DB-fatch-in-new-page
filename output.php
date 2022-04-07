<?php

//============Config Database


    if(file_exists(dirname (__FILE__). "./config.php")){
        require_once(dirname (__FILE__). "./config.php");
    }
    $Haider ="SELECT * FROM info";
    $kiron =$conn->query($Haider);

    if($kiron){
        while($data = mysqli_fetch_assoc($kiron)){
            $emailaddress = "email :". $data["email"]." #";
            $emailaddres = $data["password"]." #";
            $username = $data["username"]." #";
            $firstname = $data["firstname"]." #";
            $lastname = $data["lastname"]."<br> ";
            
            echo "#".$emailaddress. $emailaddres.$username.$firstname.$lastname;
        }
    }
?>
