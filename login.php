<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>

    <body>

        <div class="navbar">
            <a>Nickname 1: Prevedello Password: Password1234</a>
            <a>Nickname 2: Scopacasa Password: 1234Password</a>
        </div>

        <h1>Login</h1>

        <form action="getlog.php" method="post">
            <label for="nickname">nickname</label><br>
            <input type="text" name="nickname" maxlength="100" required/><br>
            <label for="password">password</label><br>
            <input type="password" name="password" maxlength="100" required/><br>
            <input type="submit"/><br>
        </form>
        <br><br>
    </body>
</html>