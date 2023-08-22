<?php
include 'server.php';
include 'head.php';
?>

<body>
        <div class="signform">
            <h2> hello <?php echo $_SESSION['username'] ?> Are You sure </h2><br>
           
                <a href=" logout.inc.php"><button class="sigupbutton">log out</button></a>
          
        </div>

    </body>
</html>

<?php


