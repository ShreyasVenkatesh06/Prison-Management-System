<html>
<head>
  <title> OFFICER  </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='BLACK' width='100%' height='100%' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='WHITE' valign='top'>



<?php 

  //connect to database
  $conn=mysqli_connect("localhost", "root","") or die(mysqli_error());
  mysqli_select_db($conn,"prison") or die("Cannot connect to database");

  //run the store proc
  $result = mysqli_query($conn,"CALL example") or die("Query fail: " . mysqli_error($conn));
  echo"<table align='top' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='black'>
<caption><h3>OFFICER INFORMATION</h3></caption>
<tr bgcolor='white'>
<th width='5%'>Officer Id</th>
<th width='5%'>Station Id</th>
<th width='12%'>Station Name</th>
<th width='10%'>Name</th>
<th width='10%'>Address</th>
<th width='10%'>City</th>
<th width='15%'>Email</th>
<th width='5%'>Mobile</th>



</tr>";

  //loop the result set
  while ($row = mysqli_fetch_array($result)){   
    echo "<tr bgcolor='white'>";
echo  "<td width='3%'>".$row ['Officer_Id']."</td>";
echo  "<td width='3%'>".$row ['Station_Id']."</td>";
echo  "<td width='7%'>".$row ['Station_Name']."</td>";
echo  "<td width='8'>".$row ['name']."</td>";
echo  "<td width='10%'>".$row ['Address']. "</td>";
echo  "<td width='10%'>".$row ['City']."</td>";
echo  "<td width='10%'>" .$row ['Email']."</td>";
echo  "<td width='8%'>".$row ['Mobile']."</td>";

//echo  "<td width='8'>".$row ['password']."</td>";
echo "</tr>";		
  }
echo"</table>";
?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center" height='8%' bgcolor='black'><a href="adminpanel.php" target="_parent" >BACK <b> | </b></a>
			<a href="addoff.php" target="_parent">ADD<b> |</b></a>
			<a href="deloff.php" target="_parent">DELETE<b></b></a>
			
		
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
