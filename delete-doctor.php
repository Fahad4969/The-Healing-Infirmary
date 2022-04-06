<head>
<title>Admin Dashboard | Healing Infirmary</title>
<link rel="icon" href="assets/img/mlogo.png">
</head>
<?php
$host='localhost';
$username='root';
$password='';
$dbname = "healing-infirmary";
$conn=mysqli_connect($host,$username,$password,"$dbname");
if(!$conn)
    {
      die('Could not Connect MySql Server:' .mysql_error());
    }

$sql = "DELETE FROM doctor_reg WHERE id='$id'" ;
$data=mysqli_query($conn,$sql);
if($data){

echo "data deleted successfully";
header("Location:view-doctor-profile.php");
}
else{

echo "Something is wrong!";
}

?>


