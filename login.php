<?php
$error ='';
if(isset($_POST['submit'])){
    if(empty($_POST['username']) || empty($_POST['password'] )){
        $error= "username or password incorrect";
    }else{
        //define user and pass
        $user = $_POST['username'];
        $pass = $_POST['password'];

        //establish a connection
        $conn = mysqli_connect('127.0.0.1:3307','root','','kabu_cas');
        $query = mysqli_query($conn,"SELECT * FROM users WHERE password='$pass' AND username='$user';");
        if(mysqli_num_rows($query)==1){
            if($user=='admin'){
            //redirect to home page
            header("location: index_admin.html ");
            }else{
                header("location: index.php ");
            }
        }else{
           $error = "username or password incorrect";
        }
        //close connection
        mysqli_close($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            position: relative;
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ3RNPurS3fYVp7RIXTlrNjuVELW-N9AJWxQ&usqp=CAU");
            background-size: cover;
        }
        .container{
            text-align:center;
            margin-top: 2%;
            margin-left: 30%;
            position: absolute;
            width: 30%;         
            background-color:rgba(211, 211, 211, 0.5);           
        }
        .logo{
            align-items: center;
        }
        h2{
            text-align: center;
        }
        h4{
            padding-left: 300px;
            color:rgb(88, 64, 64);
        }
        h3{
            text-align: justify;
        }
        a{
            text-decoration: underline;
            color: rgb(59, 34, 34);
            padding: 20px;
            font-size: 20px;
        }
        form{
        background-color: rgba(211, 211, 211, 0.5);
        padding-top: 40px;
        padding-bottom: 40px;
    }
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <div class="container" >
        <div class="logo">
            <img src="http://eserver.kabarak.ac.ke/students/img/logo-main.png" alt="KABU_LOGO">
          </div>
        <h2>Welcome to KABU_CAS</h2>
        <h4> <i>We are distict</i></h4>
        <h3 style="padding-left:20px;">Kindly signup:</h3><br>
        <form method="POST" action="">
            <p> 
              <label for="name"><b>Username</b></label>
              <input type="name" placeholder="Username " name="username" required>
            </p> 
            <p>
              <label for="password"><b>Password</b></label>
              <input type="password" placeholder="Password " name="password"required>
            </p> 
              <label><input type="checkbox" checked="checked" name="remember"> Remember me</label>
            </p> 
            <div class="error">
                <?php echo $error; ?>   
            </div>
            <p >
              <button type="submit" name="submit">Login</button>
            <p>
            <p style=" text-align:center;">New Account? <a href="signup.php" style="text-decoration: none; color:mar0oon;">Sign up</a></p>
             
          </form>
                    
    </div>
</body>
</html>