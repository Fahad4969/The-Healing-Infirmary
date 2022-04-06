<head>
<title>User Dashbord | Healing Infirmary</title>
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
 
$result = mysqli_query($conn,"SELECT * FROM ambulance");


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
      <h1><i class="fa fa-th-list"></i>Ambulance list </h1>
     
    </div>
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Dashbord</li>
      <li class="breadcrumb-item active"><a href="#">Ambulance List</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <tr>
            <td>Contact</td>
            <td>Driver Name</td>
            <td>License Number</td>
        </tr>
        <?php

        require_once('include/conn.php');

        foreach ($dbh->query('SELECT * FROM ambulance') as $row) {
            echo "
                <tr>
                    <td>" . $row["Contact_Number"] . "</td>
                    <td>" . $row["Driver_Name"] . "</td>
                    <td>" . $row["License_No"] . "</td>
                </tr>
            ";
        }

        ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </main>

<?php
include_once('include/footer.php');
// include_once('include/Hfooter.php');
}
}
?>