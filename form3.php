<!DOCTYPE html>
<html>
<head>
    <title>Hello</title>
    <script>
        function clearMessage() {
            document.getElementById("welcome-message").innerHTML = ""; 
        }
    </script>
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
        <button type="reset" onclick="clearMessage()">RESET</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = htmlspecialchars($_POST["username"]); 
        echo "<p id='welcome-message'>Welcome: $username</p>";
    }
    ?>

</body>
</html>
