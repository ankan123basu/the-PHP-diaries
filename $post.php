
<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label for="name">Please enter your name: </label>
<input name="name" type="text"><br>
<label for="age">Please enter your age: </label>
<input name="age" type="text"><br>
<button type="submit">SUBMIT</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    // check if both name and age are provided
    if(isset($_POST['name']) && isset($_POST['age'])){
        $nm=htmlspecialchars($_POST['name']);
        $age=htmlspecialchars($_POST['age']);
        
        // validate age input(ensure its a valid number)
        if(is_numeric($age)){
                echo "<strong>". $nm . " is $age years old.</strong>";
            }else{
                echo "<strong>Age must be a valid number.</strong>";
            }
    }
}

?>
</body>
</html>
