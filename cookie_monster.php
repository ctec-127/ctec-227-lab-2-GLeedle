<?php
session_start();
setcookie("username", "BettyW", time() - 3600);
setcookie("firstname", "Betty", time() - 3600);
setcookie("lastname", "white", time() - 3600);
setcookie("cookie[institution]", "Clark", time() - 3600);
setcookie("cookie[city]", "Vancouver", time() - 3600);
setcookie("cookie[state]", "WA", time() - 3600);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Lab 2 - Bake Cookies - Garth Leedle</title>
</head>

<body>
    <div class="container">
        <div class="wrapper bg-primary mt-5 rounded shadow">
            <div class="session-details p-5">
                <h1>Cookie Monster</h1>
                <hr>
                <img src="img/cookie-monster.png" alt="Cookie Monster">
            </div>
            <?php
            include "inc/footer.inc.php"
            ?>
        </div>
    </div>


</body>

</html>