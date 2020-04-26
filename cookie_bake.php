<?php
session_start();
setcookie("username", "BettyW", time() + 7200);
setcookie("firstname", "Betty", time() + 7200);
setcookie("lastname", "white", time() + 7200);
setcookie("cookie[institution]", "Clark", time() + 7200);
setcookie("cookie[city]", "Vancouver", time() + 7200);
setcookie("cookie[state]", "WA", time() + 7200);
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
                <h1>Cookie Baked</h1>
                <hr>
                <img src="img/cookie.png" alt="Cookie">
            </div>
            <?php 
            include "inc/footer.inc.php"
            ?>
        </div>
    </div>


</body>

</html>