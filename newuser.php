<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$con=mysqli_connect("localhost", "root","") or die(mysqli_error()); //Connect to server
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
    $bool = true;
	
	mysqli_select_db($con,"prison") or die("Cannot connect to database"); //Connect to database
	$query = "Select * from admin_tbl"; //Query the Admin_tbl table
	$result=mysqli_query($con,$query);
	while($row = mysqli_fetch_array($result)) //display all rows from query
	{
		$table_users = $row['name']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($name == $table_users) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
		}
	}
	if($bool) // checks if bool is true
	{
		mysqli_query($con,"INSERT INTO admin_tbl (name, password) VALUES ('$name','$password')"); //Inserts the value to table Admin_tbl
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
	}
}
?>
