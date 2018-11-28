<?php
//set up for mysql Connection
$conn=mysqli_connect("localhost", "root","") or die(mysqli_error());

//connect to database
mysqli_select_db($conn,'prison');
$Officer_Id=$_POST['Officer_Id'];
$Station_Id=$_POST['Station_Id'];
$Station_Name=$_POST['Station_Name'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$Email=$_POST['Email'];
$Mobile=$_POST['Mobile'];
$name=$_POST['name'];
$password=$_POST['password'];

//Protecting form submitting an empty data

//if (!Officer_Id||!$Station_Id || !$Station_Name  || !$Address  || !$City || !$Email  || !$Mobile || !$name || !$password)
//	{
//	echo'<body bgcolor="green">';
//	echo'<center>';
//	echo "<h2>Please enter the required details</h2>";
//	echo "<br/>";
//	echo "<br/>";
//	echo "<font size='5'>"."Click" . "<a href='addoff.php'>"."  ". "here"  . "</a>"  . "  " . "to Officer registration"."</font>";
//	echo'</center>';
//	echo'</body>';
//
//	exit;
//	}


//call the procedure
$sql = ("CALL NEW('$Officer_Id','$Station_Id','$Station_Name','$Address','$City','$Email','$Mobile','$name','$password')");
   
//we are using mysqli_query function. it returns a resource on true else False on error
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('The data is already: ' . mysqli_error($conn));
 
}

?>
					<script type="text/javascript">
						alert("New Record is Added thank you");
						window.location = "sp.php";
					</script>
					<?php
//close of connection
mysqli_close($conn);
?>