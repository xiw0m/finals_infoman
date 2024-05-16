<!DOCTYPE html>
<html>
<head>
    <title>order ka rawr</title>
</head>
<body>

<h2>Welcome to the canteen! Here are the prices</h2>
<table>
  <li>Fishball - 30 PHP</li>
  <li>Kikiam - 40 PHP</li>
  <li>Corndog - 50 PHP</li>
</table>
<p> </p>
    <form method="post" action="">
  <label for="order">Choose your order:</label>
  <select id="order" name="order">
    <option value="fishball">Fishball</option>
    <option value="kikiam">Kikiam</option>
    <option value="corndog">Corndog</option>
  </select>
  <br>
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="1" required><br><br>
    
    <label for="cash">Cash:</label>
    <input type="number" id="cash" name="cash" min="1" required><br><br>
    
    <input type="submit" name="submit" value="Place Order">
</form>

<?php
if(isset($_POST['submit'])){
    $order = $_POST['order'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];
    
    $menu = array(
        "fishball" => 30,
        "kikiam" => 40,
        "corndog" => 50,
    );
    
    $total_cost = $menu[$order] * $quantity;
    $change = $cash - $total_cost;
    
    if($cash < $total_cost) {
        echo "<p style='color:red;'>Insufficient payment! Please input sufficient cash.</p>";
    } else {
        echo "<h3>Order Summary:</h3>";
        echo "Item: $order<br>";
        echo "Quantity: $quantity<br>";
        echo "Total Cost: ₱$total_cost<br>";
        echo "Cash Paid: ₱$cash<br>";
        echo "Change: ₱$change<br>";
        echo "<p>Thank you for ordering! rawr</p>";
    }
}
?>

</body>
</html>