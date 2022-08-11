<?php 
include_once("connect.php"); 
$madm=""; 
if(isset($_GET["mand"]))
    {
        $mand=$_GET["mand"]; 
        $sql="delete from admin where mand='$mand'";
    } 

    if ($conn->query($sql) ===true )
    {
        header("Location:danhsachthanhvien.php");
    }
    else 
    {
        echo"Có lỗi khi xóa sản phẩm ".$conn->error;
    }
?> 