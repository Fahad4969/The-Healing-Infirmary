<head>
<title>User Dashboard | Healing Infirmary</title>
<link rel="icon" href="assets/img/mlogo.png">
</head>
<?php
session_start();
include('include/conn.php');
include_once('sql.php');

if(strlen($_SESSION['email'])==0)
  { 
header('location:login.php');
}
else{ 
$_SESSION['email'];

$eamil=$_SESSION['email'];
 
$result = mysqli_query($conn,"SELECT * FROM users Where email='$eamil'");


if (mysqli_num_rows($result) > 0) {

  $i=0;
  $row = mysqli_fetch_array($result);

  
  }
  else{
  echo "No result found";
  }
  
  
  
$mail=$_SESSION['email'];

//Flash Message
$message="";
if(isset($dbh)){
//connection check
if(isset($_POST['submit'])){



$stmt = $dbh->prepare("INSERT INTO `donation_request`(`name`,`nidno`,`description`,`donationamount`,`moneytransfermethod`) VALUES (:name, :nidno, :description,:donationamount,:moneytransfermethod)");

//bindParam
//$stmt->bindParam(':date', $date);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':nidno', $nidno);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':donationamount', $donationamount);
$stmt->bindParam(':moneytransfermethod', $moneytransfermethod);


//$doc_type= $_POST['date'];
$name = $_POST['name'];
$nidno = $_POST['nidno'];
$description = $_POST['description'];
$donationamount= $_POST['donationamount'];
$moneytransfermethod = $_POST['moneytransfermethod'];
//This variable data has been assigned by us


if($stmt->execute()){
  $message="Insert Row Succcess!";
   header("Location:create-donation.php");
}
else{
 $message="Insert Row Failed!";
}

}
}

include_once('include/header.php');
include_once('include/user-sidebar.php');


?>



<?php
session_start();
require_once('sql.php');

if(strlen($_SESSION['email'])==0)
  { 
header('location:login.php');
}
else{ 
$_SESSION['email'];

$eamil=$_SESSION['email'];
 
$result = mysqli_query($conn,"SELECT * FROM user_helth_status Where email='$eamil'");


if (mysqli_num_rows($result) > 0) {

	$i=0;
	$row = mysqli_fetch_array($result);

	
	}
	else{
	echo "No result found";
	}

?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> User Dashboard</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
     
    
    <div class="col-md-6 m-auto">
      <div class="tile">
        <h3 class="tile-title">Request For Donation </h3>
        <div class="tile-body">
          <form action="create-donation.php" method="post" class="form-horizontal" enctype="multipart/form-data">

    
	      <div class="form-group">
            <label class="control-label">Name:<span class="text-danger">*</span></label>
            <input type="name" name="name" id="" class="form-control" placeholder="Full Name" autocomplete="off">
          </div>
			
          <div class="form-group">
            <label class="control-label">NID No:<span class="text-danger">*</span></label>
            <input type="nid_no" name="nidno" id="" class="form-control" placeholder=" NID No." autocomplete="off">
          </div>
        
          <div class="form-group">
            <label class="control-label">Description:<span class="text-danger">*</span></label>
            <input type="description" name="description" id="" class="form-control" placeholder="Describe something..." autocomplete="off">
          </div>
		  
		  <div class="form-group">
            <label class="control-label">Donation Amount(৳):<span class="text-danger">*</span></label>
            <input type="donationamount" name="donationamount" id="" class="form-control" placeholder="Donation amount (৳)..." autocomplete="off">
          </div>

          <div class="form-group">
            <label class="control-label text-dark" > Money Transfer Method: <span class="text-danger">*</span></label>
			  <select id="moneytransfermethod" name="moneytransfermethod" class="form-control">
			    <option value="Cash">Cash</option>
			    <option value="Check">Check</option>
			    <option value="Credit_Card">Credit Card</option>
			    <option value="Mobile_Banking">Mobile Banking</option>
			  </select>
		  </div>

          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit" name="submit" value="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Submit Donation Request</button>
          </div>            
        </form>
      </div>
    </div>
    
  </div>
      

<?php
include_once('include/footer.php');
// include_once('include/Hfooter.php');
}
}
?>