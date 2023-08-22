<?php
include "server.php";

/*
//update function

if (isset($_POST['update_user'])) {
  $upid = $_SESSION['userid'];
  $upname = mysqli_real_escape_string($db,  $_POST['upname']);
  $upemail = mysqli_real_escape_string($db, $_POST['upemail']);
  $uppwd = mysqli_real_escape_string($db, $_POST['uppwd']);
  $uprepwd = mysqli_real_escape_string($db, $_POST['uprepwd']);
  $upmob =  mysqli_real_escape_string($db, $_POST['upmobil']);
  $password = md5($uppwd); //encrypt the password before saving in the database

  if ($upname != "" && $upemail != "" && $uppwd != "" &&  $upmob != "" &&  $uprepwd != "") 
  {
    $updatequery = "UPDATE users SET username ='$upname', email ='$upemail' , password ='$password' , mobile ='$upmob' WHERE ID ='$upid'";
    $rq = mysqli_query($db, $updatequery);
    if ($rq) {
      echo " <script> alert('updated succusfully plz sign up agine to conform');</script>";    
      exit();  
    }
  }
  else{
    echo " <script> alert('plz fill the form');</script>";
    exit();
  }
}*/?>
<h1>
            
<?php echo $_SESSION['apply'] ; // responsiv name showwn ?>
</h1>
