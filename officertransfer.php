<html>
<head>
<title> Officer Transfer Form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table width="100%" height="100%" border="0" align="center" bgcolor="white">
<tr>
<td height="33" align="center" bgcolor="white">
<font size="5">
<h2>Officer Transfer</h2>
</font>
</td>
</tr>
<td border="0" style="margin-top:0px;" align="center" id="container" height="5" bgcolor="#FFFFFF"><tr>
<td>
<form action="processofficer.php" method="post">
<table bgcolor="white" height="431" border="0" align="center" width="50%">
<td width="34%" bgcolor="#FFFFFF"><b>Officer Id:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Nid" /></td>
</tr>
<td width="34%" bgcolor="#FFFFFF"><b>Station Id:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Sid" /></td>
</tr>
<td width="34%" bgcolor="#FFFFFF"><b>Telephone Number:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Phone" /></td>
</tr>

<tr><td bgcolor="#FFFFFF"><b>From Prison:</b></td>
        <td> <select name="From">
        <option>MYSURU</option>
		<option>BENGALURU</option>
		<option>HASSAN</option>
		<option>MADIKERI</option>
		<option>MANDYA</option>
		<option>MANGALURU</option></td></tr>
	<tr><td bgcolor="#FFFFFF"><b>To Prison:</b></td>
        <td> <select name="To">
		<option>MYSURU</option>
		<option>BENGALURU</option>
		<option>HASSAN</option>
		<option>MADIKERI</option>
		<option>MANDYA</option>
		<option>MANGALURU</option></td></tr>
        
<tr>
<td bgcolor="#FFFFFF"><b>Date of Transfer:</b></td>
<td bgcolor="#FFFFFF"><input type="text" placeholder="YYYY-MM-DD" name="dot" /></td>

</tr>

  <td height="26" bgcolor="white" align="center">
  <input type="submit" value="Add" /></td>
 </tr>
</table>
</form>
</td>
<tr>
<td height="33" align="center" bgcolor="black">
<font size="5">
<a href="adminpanel.php">BACK</a> 
</font>
</td>
</tr>

 <tr>
            <td colspan='3' align='center' bgcolor='white' height='1'>
					&copy; <strong>
                YS2</strong></td>
          </tr>
</table>
</body>
</html>