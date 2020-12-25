<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><br><br>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<!-- Insert -->
<div class="modal fade" id="emplyeeaddmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Employee Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="insert.php" method="POST">
            <div class="modal-body">

                <div class="form-group">
                    <label >NIC Number</label>
                    <input type="text" name="nic" class="form-control" placeholder="Enter the NIC number">
                </div>
                <div class="form-group">
                    <label >Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter the name">
                </div>
                <div class="form-group">
                    <label >Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enther password">
                </div>
                <div class="form-group">
                    <label >Contact Number</label>
                    <input type="text" name="contact" class="form-control" placeholder="Enter the contact number">
                </div>
                
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
            </div>
      </form>
    </div>
  </div>
</div>

<!-- ##################################################################################### -->
<!-- Upddate -->
<div class="modal fade" id="updatemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Employee Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="update.php" method="POST">
            <div class="modal-body">

                <input type="hidden" name="update_ID" id="update_ID">

                <div class="form-group">
                    <label >NIC Number</label>
                    <input type="text" name="nic" id="update_NIC" class="form-control" placeholder="Enter the NIC number">
                </div>
                <div class="form-group">
                    <label >Name</label>
                    <input type="text" name="name" id="update_Name" class="form-control" placeholder="Enter the name">
                </div>
                <div class="form-group">
                    <label >Password</label>
                    <input type="password" name="password" id="update_Password" class="form-control" placeholder="Enther password">
                </div>
                <div class="form-group">
                    <label >Contact Number</label>
                    <input type="text" name="contact" id="update_Contact" class="form-control" placeholder="Enter the contact number">
                </div>
                
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
            </div>
      </form>
    </div>
  </div>
</div>

<!-- ################################################################################## -->

<!-- Delete -->
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Employee Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="delete.php" method="POST">
            <div class="modal-body">

                <input type="hidden" name="delete_ID" id="delete_ID">

                <h4>Do you want to delete record ?</h4>
                
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">  No </button>
            <button type="submit" name="deletedata" class="btn btn-danger"> Yes </button>
            </div>
      </form>
    </div>
  </div>
</div>



    <div class="container">
        <div class="jambotron">
            <div class="card">
            <center><h2> - Admin Panel - </h2></center>
            </div>
            <div class="card">
                <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#emplyeeaddmodel">
                    Add Data
                 </button>
                 <button type="button" onclick="window.print()" class="btn btn-warning">Print Records</button>
                 <a href= "login.php"><button type="button" class="btn btn-danger">Logout</button></a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                        <?php
                        $con = mysqli_connect("localhost", "root", "");
                        $db = mysqli_select_db($con, 'ceb_db');

                        $query = "SELECT * FROM `employee` ";
                        $query_run = mysqli_query($con, $query);
                        ?>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NIC</th>
                            <th scope="col">Name</th>
                            <th scope="col">Password</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <?php
                            if($query_run){
                                
                                foreach($query_run as $row){
                        ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $row['ID']; ?> </td>
                                <td> <?php echo $row['NIC']; ?> </td>
                                <td> <?php echo $row['Name']; ?> </td>
                                <td> <?php echo $row['Password']; ?></td>
                                <td> <?php echo $row['Contact']; ?></td>

                                <td> 
                                    <button type="button" class="btn btn-success btnedit" >UPDATE</button>
                                </td>
                                <td> 
                                    <button type="button" class="btn btn-danger btndelete" >Delete</button>
                                </td>
                            </tr>
                           
                        </tbody>
                        <?php
                                }
                                
                            }else{
                                echo "No records found.";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- ############################################### DELETE ############################################### -->

<script>
$(document).ready(function(){
    
    $('.btndelete').on('click', function(){
        $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();

            }).get();

            // console.log(data);

            $('#delete_ID').val(data[0]);
           
    });

}); 

</script>

<!-- ############################################### UPDATE ############################################### -->
<script>
$(document).ready(function(){
    
    $('.btnedit').on('click', function(){
        $('#updatemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();

            }).get();

            // console.log(data);

            $('#update_ID').val(data[0]);
            $('#update_NIC').val(data[1]);
            $('#update_Name').val(data[2]);
            $('#update_Password').val(data[3]);
            $('#update_Contact').val(data[4]);
    });

}); 

</script>


</body>
</html>