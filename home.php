<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <center><h1>Hi <?php
    session_start();
     echo $_SESSION['login'];?></h1></center>

<div class="card">
    <div class="card-body">
    <a href= "login.php"><button type="button" class="btn btn-danger">Logout</button></a>
    </div>
</div>

<div class="card">
                <div class="card-body">
                        <?php
                        $con = mysqli_connect("localhost", "root", "");
                        $db = mysqli_select_db($con, 'ceb_db');

                         $query = "SELECT * FROM `employee` WHERE ID = 5";
                        $query_run = mysqli_query($con, $query);
                        ?>
                    <table class="table table-dark">
                        <?php
                            if($query_run){
                                
                                foreach($query_run as $row){
                        ?>
                        <thead>
                            <tr><th scope="col">ID</th><th> <?php echo $row['ID']; ?> </th>
                            <tr><th scope="col">NIC</th><th> <?php echo $row['NIC']; ?> </th>
                            <tr><th scope="col">NIC</th><th> <?php echo $row['Name']; ?> </th>
                            <tr><th scope="col">Password</th><th> <?php echo $row['Password']; ?> </th>
                            <tr><th scope="col">Contact Number</th><th> <?php echo $row['Contact']; ?> </th>
                        </thead>
                        
                        <?php
                                }
                                
                            }else{
                                echo "No records found.";
                            }
                        ?>
                    </table>
                </div>
            </div>
</body>
</html>