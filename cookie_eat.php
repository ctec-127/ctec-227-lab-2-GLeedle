<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Lab 2 - Eat Cookies </title>
</head>

<body>
    <div class="container">
        <div class="wrapper bg-primary mt-5 rounded shadow">
            <div class="session-details p-5">
                <h1>Eat Cookie</h1>
                <hr>
                <?php 
                if (!isset($_COOKIE['username'])){
                    $_COOKIE['username'] = "";
                }
                if (!isset($_COOKIE['firstname'])){
                    $_COOKIE['firstname'] = "";
                }
                if (!isset($_COOKIE['lastname'])){
                    $_COOKIE['lastname'] = "";
                }

                echo '<p>Username: <br><span class="info">' . $_COOKIE['username'] . '</span></p>';
                echo '<p>First Name: <br><span class="info">' . $_COOKIE['firstname'] . '</span></p>';
                echo '<p>Last Name: <br><span class="info">' . $_COOKIE['lastname'] . '</span></p>';
                if (isset($_COOKIE["cookie"])){
                    foreach ($_COOKIE["cookie"] as $key=>$val) {
                    echo '<p>' . $key.': <br><span class="info">'.$val."</span></p>\n";
                    } // end foreach
                    } // end if                
                ?>
            </div>
            <?php
            include "inc/footer.inc.php"
            ?>
        </div>
    </div>

</body>

</html>