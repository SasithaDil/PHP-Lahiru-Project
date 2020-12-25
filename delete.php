<?php

    $con = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($con, 'ceb_db');

    if(isset($_POST['deletedata'])){

        $ID = $_POST['delete_ID'];
        
        $query = "DELETE FROM `employee` WHERE `ID`='$ID'";
         
        $query_run = mysqli_query($con, $query);
        if($query_run){
            echo '<script> alert("Data saved")</script>';
            header('Location: index.php');

        }else{
            echo '<script> alert("There is a problem by saving data")</script>';;
        }
    }
?>