<?php
$server='127.0.0.1:3307';
$username='root';
$password='';
$dbname='kabu_cas';
// Create connection
$conn = new mysqli($server, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$error ='';
if(isset($_POST['submit'])){
    // prepare and bind
    $stmt=$conn->prepare("INSERT INTO users (username,fullname,email,phoneno,password,confirm) VALUES (?, ?, ? , ?, ? ,?)");
    $stmt->bind_param("ssssss", $user,$fname,$email,$phoneno,$password,$confirm);

    // set parameters and execute
    $user = $_POST['username'];
    $fname = $_POST['fullname'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $stmt->execute();

    $query = "SELECT * FROM users WHERE username='$username' LIMIT 1;";
    $result = mysqli_query($conn,$query);


    if(mysqli_num_rows($result)==0){
        if($password==$confirm ){
            header("location: login.php ");
        }else{
            $error='Passwords do not match';
        }
    }      
    else{
        $error= 'Username already exists';
    }
   
}
$conn->close();
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
    .logo{
        text-align:center;
    }
    input[type=text], input[type=password] {
        width: 75%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display:inline;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /*  styles for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    button:hover {
        opacity:1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .submitbtn,.cancelbtn {
        margin: 20px;
        float: right;
        width: 100px;
    }

    /* Add padding to container elements */
    .container {
        width:50%;
        padding: 20px;
        position: absolute;
        background-color:rgba(211, 211, 211, 0.5); 
        margin-left: 25%;
    }

    /* Clear floats */
    .buttons::after {
        content: "";
        clear: both;
        display: table;
    }
    .error{
        color:red;
        text-align:center;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 700px) {
        body{
            background:none;
            background-color:rgba(211, 211, 211, 0.5); 
        }
        input[type=text], input[type=password] {
            width: 100%;
            display:inline;
           
        }
        .cancelbtn, .submitbtn {
            width: 100px;
            margin-right:5px ;
            margin-left: 2px;
        }
        .container {
            background:none;
            padding: 20px;
            margin-left: 2%;
            margin-right: 2%;
        }
    }
}
</style>       

</head>
<body>
    <div class="container" >
        <div class="logo">
            <img src="http://eserver.kabarak.ac.ke/students/img/logo-main.png" alt="KABU_LOGO">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
          </div>
        <form method="POST" action="" >
            <div class="error">
                <?php echo $error; ?>   
            </div>
            <label for="username" style="padding-right:10px;"><b>UserName</b></label>
            <input type="text" placeholder="Enter user Name" name="username" required>
            <br>
            <label for="fullname" style="padding-right:15px;"><b>FullName</b></label>
            <input type="text" placeholder="Enter full Name" name="fullname" required>
            <br>
            <label for="email" style="padding-right:9px;"><b>Email(sch)</b></label>
            <input type="text" placeholder="Enter school Email" name="email" required>
            <br>
            <label for="phoneno" style="padding-right:11px;"><b>Phone No.</b></label>
            <input type="text" placeholder="Enter Phone Number" name="phoneno" required>
            <br>
            <label for="psw" style="padding-right:15px;"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br>
            <label for="confirm" style="padding-right:20px;"><b>Confirm</b></label>
            <input type="password" placeholder="Re-enter Password" name="confirm" required>
            <br>         
            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
            <div class="buttons">
                <button type="button" name="cancel" class="cancelbtn">Cancel</button>
                <button type="submit" name="submit" class="submitbtn">Sign Up</button>
            </div> 
            <p style=" text-align:center;">Already a member? <a href="login.php" style="text-decoration: none; color:maroon;">Sign in</a></p>
        </form>
                    
    </div>
</body>
</html>