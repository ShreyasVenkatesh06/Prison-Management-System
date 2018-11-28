<html>
<head>
  <title>Prisoner Search  </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='BLACK' width='100%' height='100%' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='white' valign='top'>

<?php

//capture search term and remove spaces at its both ends if the is any
$searchTerm = trim($_GET["keyname"]);

//check whether the name parsed is empty
if($searchTerm == "")
{
	echo "Enter name you are searching for.";
	exit();
}

//database connection info


//connecting to server and creating link to database
$conn=mysqli_connect("localhost", "root","","prison") or die(mysqli_error()); 

//MYSQL search statement
$query ="SELECT * FROM registration_bkp WHERE id LIKE '$searchTerm'";

$results = mysqli_query($conn,$query)or die("MySQL error: " . mysqli_error($conn));

/* check whethere there were matching records in the table
by counting the number of results returned */
if(mysqli_num_rows($results) >=1)
{
	$output = "";
	
echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='black'>
<caption><h3>PRISONER INFORMATION</h3></caption>
<tr bgcolor='white'>
<th width='3%'>National id</th>
<th width='12%'>Full Name</th>
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

   while($row=mysqli_fetch_array ($results))
{
echo "<tr bgcolor='white'>";

echo  "<td width='3%'>".$row ['id']."</td>";
echo  "<td width='7%'>".$row ['Full_Name']."</td>";
echo  "<td width='10%'>".$row ['DOB']."</td>";
echo  "<td width='15%'>".$row ['Address']. "</td>";
echo  "<td width='10%'>".$row ['County']."</td>";
echo  "<td width='3%'>" .$row ['Gender']."</td>";
echo  "<td width='8%'>".$row ['Education']."</td>";
echo  "<td width='8'>".$row ['Marital']."</td>";
echo  "<td width='8%'>".$row ['Offence']. "</td>";
echo  "<td width='15%'>".$row ['Date_in']."</td>";
echo  "<td width='6%'>".$row ['File_num']."</td>";


echo "</tr>";
}
echo"</table>";
  }
else
{
	echo'<body bgcolor="black">';
	echo'<center>';
	echo "<h2>No record found please check your ID </h2>";
	echo "<br/>";
	echo "<br/>";
	echo'</center>';
	echo'</body>';
	echo "<font size='5' align='center'>"."Click" . "<a href='search-form.php'>"."  ". "here"  . "</a>"  . "  " . "to verify your ID"."</font>";
}
	 ?>
	 
	 <br/>
			</td>
          </tr>
          <tr>
			<td align="center" height='4%' bgcolor='black'><a href="search-form.php" target="_parent" >BACK <b> </b></a>
			
			
		
          </tr>
           <tr>
            <td colspan='3' align='center'  bgcolor='white' height='1'>
					&copy; <strong>
                YS2</strong></td>
          </tr>
	</table>
</body>
</head>
</html>
