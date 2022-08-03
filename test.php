<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$item_name = mobile;
$price = 87;
// to change a session variable, just overwrite it
$_SESSION = array('Product_name' => $_POST['item_name'], 'Product_Price' => $_POST['price'], 'Quantity' =>1);
		    print_r( $_SESSION);
?>

</body>
</html>
