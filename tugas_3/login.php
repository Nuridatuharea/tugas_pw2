<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
</head>
<body>
    <?php include "navbar.php"; ?>

    <div class="content-wrapper">
        <section class="content">
            <h1>Login</h1>
            <form action="proces_login.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>

                <input type="submit" value="Login">
            </form>
        </section>
    </div>

    <?php include "footer.php"; ?>

</body>
</html>