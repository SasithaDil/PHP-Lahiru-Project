<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <form action="loginValidate.php" method="post">
     	<h2>LOGIN</h2><br>
         <?php if (isset($_SESSION['login'])) { 
            echo $_SESSION['login'];
            unset($_SESSION['login']);
     	 } ?>
         <br>
     	<label>User Name</label>
     	<input type="text" name="name" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit" name="login">Login</button>
          <!-- <a href="signup.php" class="ca">Create an account</a> -->
     </form>
</body>
</html>