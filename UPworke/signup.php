<?php
include 'head.php';
?>
<?php
include 'header.php';
include('server.php')
?>
<body>
        <div class="signform">
            <h2>login in to upwork</h2><br>
            <br>
            <form action="signup.php" method="post">
            <?php include('errors.php'); ?>
                <i class="fa-solid fa-user"></i>
                <input type="text" class="input" name="username" placeholder="enter uesername/name">
                <br><br>
                <i class="fa-solid fa-lock"></i>
                <input type="password" class="input" name="password" placeholder="password">
                <button class="sigupbutton1" type="submit" name="login_user">contunie with Email</button>
            </form>
                
                <p>dont have an upwork account ?</p>
                <a href="applyfor.php"><button class="sigupbutton">sign-up</button></a>        
        </div>

    </body>
</html>



