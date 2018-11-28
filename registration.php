<html>
<head>
<title>registration  form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table border="0" bgcolor="white" align="center" width='100%' height='100%'>
<tr bgcolor="white">
<td align="center" height='8%'>
<font size="5">
<h2>Register Prisoner</h2>
</font>
</td>
</tr>
<tr>
<td>

<form action="procereg.php" method="post">
<table bgcolor="white" height="450" border="0" align="center" width="50%">
<tr>
<tr>		
<td width="34%" bgcolor="#FFFFFF"><b>National Id:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Nid" />
<span class="required_notification"> Required</span></td>

</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Full Name:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Fname" /></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Date of Birth:</b></td>
<td bgcolor="#FFFFFF"><input type="text" placeholder="YYYY-MM-DD" name="dob"/>

</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Address:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="address" /></td>
</tr>
<tr><td bgcolor="#FFFFFF"><b>County:</b></td>
        <td> <select name="county">
		<option>MYSURU</option>
		<option>BENGALURU</option>
		<option>HASSAN</option>
		<option>MADIKERI</option>
		<option>MANDYA</option>
		<option>MANGALURU</option></td></tr>
		<tr>
 <td><b>Gender</b></td>
        <td><b><input type="radio" name="Gender" value="Male" checked="checked">
        Male <input type="radio" name="Gender" value="Female"></b>
	   <b>Female</b></td>
	      </tr>
		  
 <tr><td bgcolor="#FFFFFF"><b>Education Level:</b></td>
        <td> <select name="education">
		<option>Never</option>
		<option>Pre University</option>
		<option>Diploma</option>
        <option>Bachelor Degree</option>
		</td></tr>
		
<tr><td bgcolor="#FFFFFF"><b>Marital Status:</b></td>
        <td> <select name="status">
		<option>Divorced</option>
		<option>Married</option>
		<option>Single</option></td></tr>
		
<tr><td bgcolor="#FFFFFF"><b>Offence:</b></td>
        <td> <select name="offence">
        <option>Killing</option>
		<option>Robbery</option>
		<option>Forgery</option>
        <option>Raping</option>
		<option>Other</option></td></tr>
		
		<tr>
<td bgcolor="#FFFFFF"><b>Date Of Imprisonment:</b></td>
<td bgcolor="#FFFFFF"><input type="text" placeholder="YYYY-MM-DD" name="di"/>
</tr>

<tr>
<td bgcolor="#FFFFFF"><b>File Number:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Filenum" /></td>
</tr>

   <td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="SAVE" /></td>
 </tr>
</table>
</form>
</td>
</tr>
<tr bgcolor="black">
<td align="center" height='4%'>
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