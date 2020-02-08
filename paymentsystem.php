<?php
	session_start();

?>
<html>
<head>
<title>Payment System</title>
<style>
*{
    margin:0px;
    padding:0px;
}
h2{
    background-color:maroon;
    color:white;
    text-align:center;

}
#right{
    position:absolute;
    right:20px;
    margin:0px;
    padding:0px;
}

</style>
</head>
<body>
<h2>Payment System</h2>
<div id="left">
<form action="chekout.php" method="POST">
<select name="amount">
<option>100</option>
<option>200</option>
<option>300</option>
<option>400</option>
<option>500</option>
<option>600</option>
<option>700</option>

</select>
<input type="submit"value="Procced">

</form>

</div>
<div id="right">
<iframe src="http://localhost/shopping/paytam/PaytmKit/TxnStatus.php"height="180"></iframe>

</div>



</body>
</html>