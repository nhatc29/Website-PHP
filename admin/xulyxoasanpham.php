<?php 
include_once("connect.php"); 
$masp=""; 
if(isset($_GET["masp"]))
    {
        $masp=$_GET["masp"]; 
        $sql="delete from sanpham where masp='$masp'";
    } 

    if ($conn->query($sql) ===true )
    {
        header("Location:danhsachsanpham.php");
    }
    else 
    {
        echo"Có lỗi khi xóa sản phẩm ".$conn->error;
    }
?> 