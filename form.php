<!DOCTYPE html>
<html>
<head>
    <title>Vote Eligibility Checker</title>
</head>
<body>
    <form method="POST" action="">
        <label for="age">Enter your age:</label>
        <input type="text" id="age" name="age" required>
        <button type="submit">SUBMIT</button>
        <button type="reset">RESET</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { // Check if the form is submitted
      //  if (isset($_POST["age"])) {  
            $age = $_POST["age"]; // Get the input value

            // Validate if the input is numeric
           // if (is_numeric($age)) {
                if ($age >= 18) {
                    echo "Eligible to vote";
                } else {
                    echo "Grow up!";
                }
           // } else {
           //     echo "Please enter a valid numeric age.";
           // }
       // }
    }
    ?>
</body>
</html>
