<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Login</title>
    <link rel="stylesheet" href="css/login_st.css">
</head>

<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <form action="check_login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
</body>

</html>