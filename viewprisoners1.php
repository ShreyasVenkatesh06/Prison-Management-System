<html>
<head>
  <title>View Prisoners Officer </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='100%' height='100%' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='white' valign='top'>

<?php


$db_name="prison";
$tbl_name="registration";

$conn=mysqli_connect("localhost", "root","") or die(mysqli_error());
mysqli_select_db($conn,"$db_name")or die("cannot connect");

$sel= mysqli_query($conn,"select * from $tbl_name");
echo"<table align='center' width='100%' bgcolor='black' border='0' bgcolor='black' cellpadding='3' cellspacing='2' bgcolor='white'>
<caption><h3>PRISONER INFORMATION</h3></caption>
<tr bgcolor='white'>
<th width='3%'>National id</th>
<th width='10%'>Full Name</th>
<th width='10%'>Date of Birth</th>
<th width='15%'>Address</th>
<th width='10%'>County</th>
<th width='10%'>Gender</th>
<th width='3%'>Education</th>
<th width='10%'>Status</th>
<th width='15%'>Offence</th>
<th width='10%'>Date in</th>
<th width='10%'>File Number</th>
</tr>";

   while($row=mysqli_fetch_array ($sel))
{
echo "<tr bgcolor='white'>";

echo  "<td width='3%'>".$row ['id']."</td>";
echo  "<td width='7%'>".$row ['Full_Name']."</td>";
echo  "<td width='10%'>".$row ['DOB']."</td>";
echo  "<td width='10%'>".$row ['Address']. "</td>";
echo  "<td width='10%'>".$row ['County']."</td>";
echo  "<td width='3%'>" .$row ['Gender']."</td>";
echo  "<td width='10%'>".$row ['Education']."</td>";
echo  "<td width='10%'>".$row ['Marital']."</td>";
echo  "<td width='10%'>".$row ['Offence']. "</td>";
echo  "<td width='10%'>".$row ['Date_in']."</td>";
echo  "<td width='10%'>".$row ['File_num']."</td>";


echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center" height='4%' bgcolor='black'><a href="officerpanel.php" target="_parent">BACK <b></b></a>
			
			
		
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