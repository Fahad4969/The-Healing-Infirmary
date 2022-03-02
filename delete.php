<?php
$conn=mysqli_connect($host,$username,$password,"$doctor-finder");
if(!$conn)
    {
      die('Could not Connect MySql Server:' .mysql_error());
    }

$sql = "DELETE FROM doucument WHERE email='$udoc'" ;
$data=mysqli_query($conn,$sql);
if($data){

echo "data deleted successfully";
header("Location:view-document.php");
}
else{

echo "Something is wrong!";
}

?>


