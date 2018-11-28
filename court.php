<html>
<head>
<title>Court form</title>
<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<table border="0" width='100%' height='100%' bgcolor="#FFFFFF" align="center" >
<tr bgcolor="white">
<td align="center">
<h1> COURT </h1>
<font size="5">

</font>
</td>
</tr>
<tr>
<td>
<form action="processcourt.php" method="post">
<table bgcolor="white" height="500" border="0" align="center" width="50%">
<td width="34%" bgcolor="#FFFFFF"><b>National ID:</b></td>
<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Nationalid" /></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><b>File Number:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="Filenum" /></td>
</tr>
<tr>
<td bgcolor="#FFFFFF"><b>Date Of Trial:</b></td>
<td bgcolor="#FFFFFF"><input type="text" placeholder="YYYY-MM-DD" name="dot" /></td>
</tr>
<tr><td bgcolor="#FFFFFF"><b>Sentence:</b></td>
        <td> <select name="sentence">
		 <option>2 Weeks</option>
        <option>1 to 3 Months</option>
		<option>1year</option>
		<option>5 to 10 Years</option>
        <option>15 Years</option>
		<option>Life Sentence</option></td></tr>
		
<tr><td bgcolor="#FFFFFF"><b>Court Location:</b></td>
        <td> <select name="location">
		 <option>Mysuru Court</option>
        <option>Bengaluru Court</option>
		<option>Hassan Court</option>
		<option>Madikeri Court</option>
        <option>Mandya Court</option>
		<option>Managaluru Court</option>	</td></tr>

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