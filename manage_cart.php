<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['Add_to_cart']))
	{
		if(isset($_SESSION['cart']))
		{
			array
			$count=count($_SESSION['cart']);
			$_SESSION['cart'][$count]=array('Product_name'=>$_POST['Item_Name'],'Product_Price'=>$_POST['Price'],'Quantity'=>1);
		    print_r( $_SESSION['cart']);
		}
		else{
			$_SESSION['cart'][0]=array('Product_name'=>$_POST['Item_Name'],'Product_Price'=>$_POST['Price'],'Quantity'=>1);
		    print_r( $_SESSION['cart']);
		}
	}
}
?>