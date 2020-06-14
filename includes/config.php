<?php
	// register
	if(isset($_POST["register"])){
	
	if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['psw'])) {
  $firstName= htmlspecialchars($_POST['firstName']);
	$email=htmlspecialchars($_POST['email']);
 $lastName=htmlspecialchars($_POST['lastName']);
 $psw=htmlspecialchars($_POST['psw']);
 $query=mysqli_query($con, "SELECT * FROM `USER` WHERE email='".$email."'");
  $numrows=mysqli_num_rows($query);
if($numrows==0)
   {
	$sql="INSERT INTO USER(firstName, email, lastName, password)
	VALUES('$firstName','$email', '$lastName', '$psw')";
  $result=mysqli_query($con, $sql);
 if($result){
	$message = "Account Successfully Created";
} else {
 $message = "Failed to insert data information!";
  }
	} else {
	$message = "That username already exists! Please try another one!";
   }
	} else {
	$message = "All fields are required!";
	}
	}
	?>

	<?php if (!empty($message)) {echo "text";} ?>
	<!-- LOGIN confg -->
