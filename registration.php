<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <div class="container">

        <div class="header">
            <h2>Register</h2>

        </div>

        <form action="registration.php" method="post">

            <div>
                <label for="username">Username: </label>
                <input type="text" name="username">
            </div>
            <br>

            <div>
                <label for="email">Email: </label>
                <input type="email" name="email">
            </div>
            <br>

            <div>
                <label for="password">Password: </label>
                <input type="password" name="pass1">
            </div>
            <br>

            <div>
                <label for="password">Confirm Password: </label>
                <input type="password" name="pass2">
            </div>
            <br>

            <div>
                <button type="submit">Submit</button>
            </div>
            <br>
            <br>
            <br>

            <div>
                <p>Already a user? <a href="login.php"><b>Login</b></a></p>
            </div>



        </form>
    </div>

</body>

</html>