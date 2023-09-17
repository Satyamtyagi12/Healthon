<?php 
 include 'dbconnection.php' ;
 session_start();

 $_SESSION['loginStatus'] = false ;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthOn Signin/Signup</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
    <div class="outer-box">
        <div class="inner-box">
            <header class="signin-header">
                <h1>SignIn</h1>
                
            </header>

            <main class="signin-body">
                <form action="" method="post">
                    
                    <p>
                        <label for="email">Your Email</label>
                        <input type="email" name="email" id="email" placeholder="ayushbaghel0143@gmail.com" required>
                    </p>
                    <p>
                        <label for="password">Your Password</label>
                        <input type="password" name="password" id="password" placeholder="at least 8 characters" required>
                    </p>
                    
                        
                    <input type="submit" name="LoginSubmit" value="Login">
                </form>

            </main>
            <footer class="signin-footer">
                <p>Don't have an Account ? <a href="signup.html">Rigester</a></p>
            </footer>
        
</body>
</html>



<?php



if (!empty($_POST['LoginSubmit'])) {

	$email =  $_POST['email'];

	$password =  $_POST['password'];


	$sql = "SELECT * FROM register 
			WHERE `email` = '".$email."' AND `password` = '".$password."'";
	$result = mysqli_query($con, $sql);
	$num = mysqli_num_rows($result);

	if ($num > 0) {
		
		$_SESSION['email'] = $email ;
		$_SESSION['password'] = $password ;
		$_SESSION['loginStatus'] = true ;

		header("Location:home.php");

	}else{
		header("Location: login.php");
	}
}



?>