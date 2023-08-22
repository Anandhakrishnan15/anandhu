<?php

@session_start()
?>
<body>

    <div class="topnav" id="myTopnav">
        <div class="logo">
            <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Upwork-logo.svg/2560px-Upwork-logo.svg.png" alt=""></a>
        </div>
        <div class="lsit">
            <a href="#">Home</a>
            <a href="#">News</a>
            <a href="#">Contact</a>
            <a href="#about">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa-solid fa-bars"></i></a>
        </div>
        <div id="nav-searchbar">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" name="searchbar" placeholder="search here...">
           <!-- <?php 
            if(!isset($_SESSION['username'])):
            ?>-->
            <a href="signup.php" id="navbuttonlogin"><button class="navbutton">sign-up</button></a>
            <!--<?php else: ?>-->
            <a href="logout.php" id="navbuttonlogout"><button class="navbutton">log-out</button></a>
           <!-- <?php endif;?>-->
        </div>
    </div>
   
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>