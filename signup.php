<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthOn Signin/Signup</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    
    <div class="outer-box">
        <div class="inner-box">
            <header class="signin-header">
                <h1> Register</h1>
                
            </header>

            <main class="signin-body">
                <form action="insert.php"  method="post">

                    <div class="inputBox">
                        <label for="name"> Your Name </label>
                        
                        <input type="text" name="name" id="name" placeholder="first name" required>
                        <input type="text" name="last_name" id="last_name" placeholder="last name" required>
                    </div>
                    <div class="inputBox">
                        <label for="name"> Age  & Blood Group</label>
                        <input type="text" name="age" id="age" placeholder="Age" required>
                        <input type="text" name="blood_group" id="blood_group" placeholder="Blood Group" required>
                    </div>
                    <div class="inputBox">
                        <label for="name"> Height & Weight</label>
                        <input type="text" name="Height" id="Height" placeholder="Height" required>
                        <input type="text" name="Weight" id="Weight" placeholder="Weight" required>
                    </div>
                    <p>
                        <label for="Gender"> Gender</label>
                        <input type="gender" name="gender" id="gender" placeholder="Male/Female" required>
                    </p>
                    
                    <p>
                        <label for="email"> Your Email </label>
                        <input type="email" name="email" id="email" placeholder="ayushbaghel0143@gmail.com" required>
                    </p>
                    <p>
                        <label for="password">Enter New Password</label>
                        <input type="password" name="password" id="password" placeholder="at least 8 characters" required>
                    </p>
                    <p>
                        <label for="password">  Confirm New Password</label>
                        <input type="password" name="password" id="password" placeholder="confirm password" required>
                    </p>
                    <Button class="btn2"> Register </Button>
                    
                </form>

            </main>
            
        
</body>
</html>