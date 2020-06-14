<?php session_start(); ?>
<?php ob_start();?>
<?php require_once("includes/connection.php"); ?>
<?php include("includes/head.php"); ?>
<?php
	if(isset($_SESSION["session_username"])){
	// вывод "Session is set"; // в целях проверки
	header("Location: intropage.php");
	}
	if(isset($_POST["login"])){
		if(!empty($_POST['email']) && !empty($_POST['psw'])) {
			$email=htmlspecialchars($_POST['email']);
			$password=htmlspecialchars($_POST['psw']);
			$query =mysqli_query("SELECT * FROM USER WHERE email='".$email."' AND password='".$password."'");
			$numrows=mysqli_num_rows($query);
			if($numrows!=0)
			{
				while($row=mysqli_fetch_assoc($query))
				{
					$dbmail=$row['mail'];
					$dbpassword=$row['password'];
				}
				if($mail == $dbmail && $password == $dbpassword)
				{
					// старое место расположения
					//  session_start();
					 $_SESSION['session_username']=$email;	 
					/* Перенаправление браузера */
					header("Location: intropage.php");
				}
			} else {
				//  $message = "Invalid username or password!";
				echo  "Invalid username or password!";
			}
		} else {
			$message = "All fields are required!";
		}
	}
	ob_end_flush();
?>
