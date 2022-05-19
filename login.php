<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>

    <body>

    <?php
      session_start();
      session_destroy();
    ?>

    <form id="login" name="login"method="post" action="condition.php">
       Username: <input type="text" name="username"id="username" required autofocus><br>
       Password: <input type="password" name="password"id="password" required><br>
       <button type="submit"name="login"> Log In</button>
    </form>
    </body>
</html>