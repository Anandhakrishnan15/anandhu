<?php

include 'head.php';

include 'header.php';
include 'server.php';
include 'datafetch.php';
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: signup.php');
  }
?>

<section id="profildash">
    <div class="profil">
        <div class="profilimg">
            <img src="https://cdn.pixabay.com/photo/2019/08/11/18/59/icon-4399701_1280.png" alt="">
            <div class="profilname">
            <h1>
            
                <?php echo $_SESSION['username'] ; // responsiv name showwn ?>
            </h1>
            <h2><?php echo $user_apply ; // responsiv name showwn ?></h2>
            </div>
        </div>
        <div class="profildes">
            <h1><?php echo $_SESSION['username']; // responsiv name showwn ?>
        </h1>
            <h2><?php echo $user_apply; // responsiv name showwn ?></h2>
            <p contenteditable="true" > Hello, Im (name) , I have 2 years of Experience in web developement
                and goof knowleg in php and python programing language,
                I have made 2 website and 1 blog page and 1 ecommeres website.
                If you have any consern to make web site or to write a blog contact me here.</p>
            <p class="follows">16 follow</p>

        </div>
    </div>
    <div class="profil-tab">
        <div class="container w-25 ">
            <div class="col-md-3 w-100 mt-5 mb-5 ">

                <ul class="nav nav-pills nav-stacked ">
                    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
                </ul>

            </div>
        </div>



        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <div class="profil-container">
                <?php include('errors.php'); ?>
                    <form action="#" method="post" id="profile_update">
                        <label for="fname"> Name</label>
                        <input type="text" id="fname" name="upname" placeholder="<?php echo $user ;?>">
                        
                        <label for="lname">email</label>
                        <input type="text" id="email" name="upemail" placeholder="<?php echo $user_email ;?>">

                        <label for="lname">new password</label>
                        <input type="password" id="UPWD" name="uppwd" placeholder="pwd...">

                        <label for="lname">conform new password</label>
                        <input type="password" id="UPWD" name="uprepwd" placeholder="pwd...">

                        <label for="lname">mobile number</label>
                        <input type="text" id="lname" name="upmobil" placeholder="<?php echo $user_mobile;?>">

                        <label for="subject">about</label>
                        <textarea id="subject" name="about" placeholder="Write something about you.." style="height:200px"></textarea>
                        <div class="profil-but">
                        <button type="submit" name="update_user" class="profile-update">update</button>
                        <button type="reset" name="clear" class="profile-update">clear</button>
                        </div>
                    </form>
                </div>
            </div>
            <div id="menu1" class="tab-pane fade">
                <h3>Menu 1</h3>
                <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
            </div>
            <div id="menu3" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
            </div>
        </div>
    </div>
    </div>
    <?php
    include 'footer.php'
    ?>
</section>


<?php

include "upworkdb.php";
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
      $_SESSION['username'] = $upname;

      if ($rq) {
        echo " <script> alert('updated succusfully plz reload the page');</script>";
       
        exit(); 
      }

    }
    else{
      echo " <script> alert('plz fill all the update details');</script>";
      
    } 
  }

?>