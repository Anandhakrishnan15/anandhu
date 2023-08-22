<?php
include 'head.php';
?>
<?php
include 'header.php';
?>
<?php include 'server.php';
if (isset($_POST['chooses'])){
$_SESSION['apply'] = $_POST['chooses'];
}
?>

<body>
    
    <div class="addinfo">
        <h2>Sign up to find work you love</h2>
    
    <form  action="login.php" method="post">
    <?php include('errors.php'); ?>
        <div id="infoinput">
        <input type="text" name="username" placeholder="Your Name..."  value="<?php echo $user_name;?>" >
        
        <input type="text " name="email"   placeholder=  " Your email. " value="<?php echo $email; ?>" >
        
        <input type="password" name="password_1"  placeholder="enter ur password..">
        
        <input type="password" name="password_2" placeholder="re-enter your password..">

        <input type="number" name="mobile" placeholder="enter your Mobil.NO ...">
        
        </div>

        <div class="checkbox-container">
            <div class="checkboxes">
                <label><input type="checkbox" checked> <span>Send me helpful emails to find rewarding work and job leads.</span></label>
                <label><input type="checkbox"> <span>Yes, I understand and agree to the Agreement and Privacy Policy .</span></label>
              </div>
        </div>

        <button type="submit" name="reg_user">Sign-up</button>
    </form>

    </div>
</body>
</html>



