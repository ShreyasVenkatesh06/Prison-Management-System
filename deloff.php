<html>
<head>
  <title>Delete Officer</title>
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
$result=mysqli_query($conn,"select * from police");
?>


<?php

//To delete:
if(isset($_POST["delete"])){
$Officer_Id=$_POST["Officer_Id"];
$delete=mysqli_query($conn,"delete from police where Officer_Id='$_POST[Officer_Id]'");
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deloff.php\"
	</script>";
}
else{
print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"deloff.php\"
	</script>";
}
}
?>



<?php

print "<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='black'>
<caption><b><h3>DELETE OFFICER RECORD</h3></b></caption>
<tr bgcolor='white'>
<th width='3%'>Sl.No</th>
<th width='5%'>Officer Id </th>
<th width='5%'>Station Id  </th>
<th width='10%'>Station Name</th>
<th width='10%'>Name</th>
<th width='10%'>Address</th>
<th width='10%'>City</th>
<th width='10%'>Email</th>
<th width='10%'>Mobile</th>


<th width='5%'>Delete </th>


</tr>";
$i=1;
while($row=mysqli_fetch_array($result)){

print "<form method=POST>";
print"<tr bgcolor='white'>
<td>$i<input type=\"hidden\" name=\"Officer_Id\" value=\"$row[Officer_Id]\"></td>
<td>$row[Officer_Id]</td>
<td>$row[Station_Id]</td>
<td>$row[Station_Name]</td>
<td>$row[name]</td>
<td>$row[Address]</td>
<td>$row[City]</td>
<td>$row[Email]</td>
<td>$row[Mobile]</td>




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
		  <td align="center" height='8%'>
			<a href="sp.php" target="_parent">Back<b></b></a>
			
		
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

