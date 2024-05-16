<?php
if(isset($_POST['submit'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    
    $discriminant = ($b * $b) - (4 * $a * $c);
    
    echo "<h3>The discriminant of the quadratic equation is: $discriminant</h3>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quadratic Equation Discriminant Calculator</title>
</head>
<body>

<h2>Quadratic Equation Discriminant Calculator</h2>

<form method="post" action="">
    <label for="a">Value of a:</label>
    <input type="number" id="a" name="a" required><br><br>
    
    <label for="b">Value of b:</label>
    <input type="number" id="b" name="b" required><br><br>
    
    <label for="c">Value of c:</label>
    <input type="number" id="c" name="c" required><br><br>
    
    <input type="submit" name="submit" value="Submit">
</form>


</body>
</html>