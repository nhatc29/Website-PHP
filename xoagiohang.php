<?php
session_start();
$masp=$_GET['masp'];
if(array_key_exists($masp,$_SESSION['cart']))
    {
        unset($_SESSION['cart'][$masp]);
        header('Location:cart.php');
    }
else 
    {
        unset($_SESSION['cart']);
        header('Location:cart.php');
    }
    
?> 