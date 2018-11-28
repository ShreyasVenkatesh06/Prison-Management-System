
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOGIN</title>
</head>

<body>
<?php
session_start();
$name=$_POST['name'];
$password=$_POST['password'];
$UserType=$_POST['cmbUser'];
if ($UserType=="Admin")
{
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,"prison") or die("Cannot connect to database");
$sql = "select * from Admin_Tbl where name='".$name."' and password='".$password."'";
$result = mysqli_query($conn,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo $records;
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login2.php\';</script>';
} 
else 
{
header("location:adminpanel.php");

}
mysqli_close($conn);
}
else if($UserType=="Police")
{

$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,"prison") or die("Cannot connect to database");
$sql = ("select * from police where name='".$name."' && password='".$password."'");
$result = mysqli_query($conn,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo $records;
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login2.php\';</script>';
} 
else 
{
$_SESSION['ID']=$row['Station_Id'];
$_SESSION['Name']=$row['Station_Name'];
header("location: officerpanel.php");

}
mysqli_close($conn);
}


?>

</body>
</html>
