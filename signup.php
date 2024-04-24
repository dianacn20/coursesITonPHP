<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Registration</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="register-container">
        <h1>Sign up</h1>
        <form action="register_manager_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <button type="submit">Sign up</button>
        </form>
    </div>
</body>
</html>
