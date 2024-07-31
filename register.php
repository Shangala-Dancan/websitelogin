<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        
            <form action="registerbackend.php" method="post">
            <h2>Register</h2>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="email">Email:</label>
                <input type="email" id="emil" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <label for="confirm_password">Confrm password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
                <button type="submit">Register</button>
            </form>
    </body>
</html>