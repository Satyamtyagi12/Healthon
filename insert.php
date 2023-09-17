<?php  

 include 'dbconnection.php' ;


 $name =  $_POST['name'];

 $last_name =  $_POST['last_name'];

 $age =  $_POST['age'];
 
 $blood_group =  $_POST['blood_group'];

 $Height =  $_POST['Height'];

 $Weight =  $_POST['Weight'];

 $gender =  $_POST['gender'];
 
 $email =  $_POST['email'];
 
 $password =  $_POST['password'];


 $sql = "INSERT INTO `mental_health`.`register`  ( `name`, `last_name`, `age`, `blood_group`, `Height`, `Weight`, `gender`, `email`, `password`, `dt`) 
			VALUES ('$name','$last_name', '$age', '$blood_group', '$Height', '$Weight', '$gender', '$email', '$password', current_timestamp())";
 
 



 if (mysqli_query($con, $sql)) {
	?>
	 <script>
       alert("Submit Successfully.");
       location.href="login.php";
    </script>
	<?php
}


// INSERT INTO `register` (`sno`, `name`, `last_name`, `age`, `blood_group`, `Height`, `Weight`, `gender`, `email`, `password`, `dt`) 
// VALUES (NULL, 'Ayush', 'Baghel', '20', 'O++', '6', '50', 'male', 'ayushbaghel0143@gmail.com', 'ayush@12', current_timestamp());

 ?>




