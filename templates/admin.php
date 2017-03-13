<?php include ("sesion.php"); ?>
<!doctype html>
<html lang="en">
    <head>
        <title>admin</title>
        <meta charset="UTF-8">
    </head>
<body>
Welcome: <?php echo $_SESSION["user"]; ?>
<p />
<a href="logout.php">logout</a>
</body>
</html>