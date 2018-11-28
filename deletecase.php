<html>
<head>
  <title>Delete the case</title>
  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='black' width='100%' height='100%' cellpadding='8' cellspacing='0' height='200'>
        
          <tr>
            <td colspan="3" bgcolor='white' valign='top'>

<?php
ob_start();
$conn=mysqli_connect("localhost", "root","") or die(mysqli_error());
mysqli_select_db($conn,"prison");
$result=mysqli_query($conn,"select * from court");
?>


<?php

//To delete:
if(isset($_POST["delete"])){
$National_id=$_POST["National_id"];
$delete=mysqli_query($conn,"delete from court where National_id='$_POST[National_id]'");
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deletecase.php\"
	</script>";
}
else{
print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"deletecase.php\"
	</script>";
}
}
?>



<?php

print "<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='black'>
<caption><h2><b>DELETE COURT RECORD</h2></b></caption>
<tr bgcolor='white'>
<th width='3%'>Sl.No</th>
<th width='10%'>National id</th>
<th width='10%'>File Number</th>
<th width='15%'>Date of Trial</th>
<th width='15%'>Sentence</th>
<th width='10%'>Location</th>
<th width='4%'>Delete</th>


</tr>";
$i=1;
while($row=mysqli_fetch_array($result)){
print "<form method=POST>";
print"<tr bgcolor='white'>
<td>$i<input type=\"hidden\" name=\"National_id\" value=\"$row[National_id]\"></td>
<td>$row[National_id]</td>
<td>$row[File_number]</td>
<td>$row[Dateoftrial]</td>
<td>$row[Sentence]</td>
<td>$row[Location]</td>


<td align='center'><input type=submit name=delete value=delete></td>
</tr>";
print "</form>";
$i++;
}
print"</table>";
?>

<br/>

			</td>
          </tr>
          <tr>
		  <td align="center" height='4%'><b></b></a>
			
			<a href="viewcase.php" target="_parent">Back</a></td>
		
          </tr>
           <tr>
            <td colspan='3' align='center' bgcolor='white' height='1'>
					&copy; <strong>
                YS2</strong></td>
          </tr>
	</table>
</body>
</head>
</html>

