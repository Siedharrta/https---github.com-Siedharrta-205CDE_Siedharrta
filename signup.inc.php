<?php 
session_start();

	include("connection.php");
	include("functions.php");

  //Sign Up
  if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$email = $_POST]['email'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,email) values ('$user_id','$user_name','$password','$email')";

			mysqli_query($con, $query);

			header("Location: Login.php");
			die;
		}
    else
		{
			echo "Please enter some valid information!";
		}
	}
?>
