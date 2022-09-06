<?php 
include 'db.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $hash = password_hash("$password", PASSWORD_DEFAULT);
    $sql = "INSERT INTO register (name,email,password) VALUES('$name','$email','$hash')";

    $select = mysqli_query($connection, "SELECT * FROM register WHERE email = '". $_POST['email']."'");
        if(mysqli_num_rows($select)) {
        echo "<h1><center>Sorry already existing email! </center></h1>"; 
        }
      
    $result = mysqli_query($connection,$sql);


    if($result) {
      header("");
    }else {
        die("There was a problem sending us your Message");
    }
} 

if(isset($_POST['show'])) {
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($connection, $email);  
        $password = mysqli_real_escape_string($connection, $password);  
      
        $sql = "select *from register where email = '$email'";  

        $result = mysqli_query($connection, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          $user = mysqli_fetch_assoc($result);
       $hash = $row['password'];
          $verify = password_verify($password, $hash);

          

  // Print the result depending if they match
  if ($verify) {
    echo "<h1><center> Login successful </center></h1>";  
    header("location: admin.php");
}  
else{  
    echo "<h1 class='text-danger'> Login failed. Email or password.</h1>";  
}  
          
}
?>  


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>sign-up or sign-in</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/lolo.png">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">

</head>

<body class="bg-gradient-dark">

   
    <h2>Welcome to <strong>which_choice?</strong><br>Kindly sign-in or sign-up</h2>
    <div class="container" id="container" >
        <div class="form-container sign-up-container">
            <form action="#" method="POST">
                <h1>Create Account</h1>
                
                <div class="social-container">
                    <a href="https://www.facebook.com/" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.gmail.com/" class="social"><i class="fab fa-google-plus-g"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name"  name="name"/ required>
                <input type="email" placeholder="Email"  name="email"/ required>
                <input type="password" placeholder="Password" name="password"/ required>
                <button type="submit" name="submit" >
                    sign in
                </button>
                
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#" method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="https://www.facebook.com/" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.gmail.com/" class="social"><i class="fab fa-google-plus-g"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" placeholder="Email"  name="email"/ required>
                <input type="password" placeholder="Password" name="password"/ required>
                <a href="forgot-password.php">Forgot your password?</a>
                <button type="submit" name="show" >sign in</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with <strong>Which_choice?</strong></p>
                    <button class="ghost" id="signUp" href="admin.php">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    
    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script>
        const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
    </script>

</body>

</html>