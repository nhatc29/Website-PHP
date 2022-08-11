<?php 
include_once("connect.php"); 
if (isset($_POST["btsua2"]))
{
    $mand = $_GET["mand"];
    $quyen = $_POST["txt_quyen"];
}
    $sql = "UPDATE admin SET quyen='$quyen' where mand='$mand'";
    if(mysqli_query($conn,$sql))
    {
        header("Location:danhsachthanhvien.php");
    }
    else 
    {
        $result = "cập nhật chưa thành công". mysqli_error($conn);
    }
?> 