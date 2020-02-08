<?php
session_start();
if(isset($_POST['price'])){
    $price=$_POST['price'];
}

?>
<html>
<head>
<title>Buy Payment</title>
</head>
<body>
<form action="chekout.php" method="POST">
<input readonly name="amount" type="text"value="<?php echo $price; ?>">
<input type="submit"value="procced">
</form>
</body>
</html>