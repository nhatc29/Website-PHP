<?php 
include_once("connect.php"); 
$madm=""; 
if(isset($_GET["madm"]))
    {
        $madm=$_GET["madm"]; 
        $sql="delete from danhmucsanpham where madm='$madm'";
    } 

    if ($conn->query($sql) ===true )
    {
        header("Location:quanlydanhmuc.php");
    }
    else 
    {
        echo"Có lỗi khi xóa sản phẩm ".$conn->error;
    }
?> 