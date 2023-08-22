<?php
include 'head.php';
?>
<?php
include 'header.php';
?>

<?php include 'server.php'; 

?>

<body>
    <div class="choose">

        <h1>Join as a client or freelancer</h1>
        <form action="login.php" method="post">
            <?php include('errors.php'); ?>
            <div class="card">
                <input type="radio" name="chooses" value="Freelancer">
                <label for="freelancer">
                    <h2>I'm a freelancer, looking for work</h2>
                </label>
            </div>
            <div class="card2">
                <input type="radio" name="chooses" value="I have a project">
                <label for="client">
                    <h2>I'm a client, hiring for a project</h2>
                </label>
            </div>
            <a href="#"><button type="submit" name="submit2">Apply For It</button></a>
        </form>
    </div>

    </div>

</body>

</html>