<html>
<head>
    <title>Welcome</title>
</head>

<body>
<div id="inputContainer">
    <form id="loginForm" action="register.php" method="post">
        <h2>Login to your account</h2>
        <p>
            <label for="loginUsername">Username</label>
            <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. Bart Simpson" required>
        </p>
        <p>
            <label for="loginPassword">Password</label>
            <input id="loginPassword" name="loginPassword" type="password" required>
        </p>

        <button type="submit" name="loginButton">LOG IN</button>
    </form>


</div>
</body>
</html>

