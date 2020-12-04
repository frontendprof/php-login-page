<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="container">

        <div class="header">
            <h2>Login</h2>

        </div>

        <form action="login.php" method="post">

            <div>
                <label for="username">Username: </label>
                <input type="text" name="username">
            </div>
            <br>


            <div>
                <label for="password">Password: </label>
                <input type="password" name="pass1">
            </div>
            <br>


            <div>
                <button type="submit">Log in</button>
            </div>
            <br>
            <br>
            <br>

            <div>
                <p>Not yet a user? <a href="registration.php"><b>Register here</b></a></p>
            </div>



        </form>
    </div>

</body>

</html>