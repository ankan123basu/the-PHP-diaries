<!DOCTYPE html>
<html>
<head>
    <title>Hello</title>
</head>
<body>

    <h2>PLEASE LOG IN</h2>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>

        <button type="submit">LOGIN</button>
        <button type="reset">RESET</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"]; 
        $password = $_POST["password"];
        echo "<p>Welcome: $username</p>";

        
    }
    ?>

</body>
</html>
