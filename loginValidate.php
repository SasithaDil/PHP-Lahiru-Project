<?php
     session_start();
    $con = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($con, 'ceb_db');

    if(isset($_POST['login'])){

        
        $name = $_POST['name'];
        $password = $_POST['password'];
        

        $query = "SELECT * FROM `employee` WHERE Name='$name' AND Password='$password'";
         
        $query_run = mysqli_query($con, $query);
        if($query_run){

            $count = mysqli_num_rows($query_run);
            if($count == 1){
                foreach($query_run as $row){
                    // $id = $row['ID'];
                    $_SESSION['login'] = $row['ID'];
                    header('Location: home.php');

                }
                
            }elseif($name == 'Admin' && $password =='Admin'){
                $_SESSION['login'] = "<div class='success'>Login Successful..</div>";
                echo '<script> alert("Login Successful..")</script>';
                header('Location: index.php');
            }else{
                $_SESSION['login'] = "<div class='error'>Username or password is incorrect..</div>";
                echo '<script> alert("Username or password is incorrect..")</script>';

                header('Location: login.php');
            }
        }
        else{
            echo '<script> alert("There is a problem by login")</script>';
            
        }
    }
?>