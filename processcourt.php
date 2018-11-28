<?php
//set up for mysql Connection

$conn=mysqli_connect("localhost", "root","") or die(mysqli_error());
//test if the connection is established successfully then it will proceed in next process else it will throw an error message
if(! $conn )
{
  die('Could not connect: ' . mysqli_error());
}

//we specify here the Database name we are using
mysqli_select_db($conn,'prison');
$Nationalid=$_POST['Nationalid'];
$Filenum=$_POST['Filenum'];
$dot=$_POST['dot'];
$sentence=$_POST['sentence'];
$location=$_POST['location'];

if (!$Nationalid || !$Filenum  || !$dot  || !$sentence || !$location )
	{
	echo'<body bgcolor="green">';
	echo'<center>';
	echo "<h2>Please enter the required details</h2>";
	echo "<br/>";
	echo "<br/>";
	echo "<font size='5'>"."Click" . "<a href='court.php'>"."  ". "here"  . "</a>"  . "  " . "to court  "."</font>";
	echo'</center>';
	echo'</body>';

	exit;
	}

//It wiil insert a row to our employee_details`
$sql = "INSERT INTO `prison`.`court` (`National_id`,`File_number`, `Dateoftrial`, `Sentence`, `Location`) 
	VALUES ('{$Nationalid}', '{$Filenum}', '{$dot}', '{$sentence}', '{$location}');";
//we are using mysql_query function. it returns a resource on true else False on error
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
  die('Could not enter data: ' . mysqli_error($conn));
}
?>
					<script type="text/javascript">
						alert("New Record is Added thank you");
						window.location = "court.php";
					</script>
					<?php
//close of connection
mysqli_close($conn);
?>