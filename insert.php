<?php

    $con = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($con, 'ceb_db');

    if(isset($_POST['insertdata'])){

        $nic = $_POST['nic'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $contact = $_POST['contact'];

        $query = "INSERT INTO `employee` (`ID`, `NIC`, `Name`, `Password`, `Contact`) VALUES (NULL, '$nic', '$name', '$password', '$contact')";
         
        $query_run = mysqli_query($con, $query);
        if($query_run){
            echo '<script> alert("Data saved")</script>';
            header('Location: index.php');

        }else{
            echo '<script> alert("There is a problem by saving data")</script>';;
        }
    }
?>