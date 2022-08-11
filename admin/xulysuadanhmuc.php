<?php 
include_once("connect.php"); 
if (isset($_POST["btsua"]))
{
    $madm = $_GET["madm"];
    $tendm = $_POST["txt_tendm"];
}
    $sql = "UPDATE danhmucsanpham SET tendm='$tendm' where madm='$madm'";
    if(mysqli_query($conn,$sql))
    {
        header("Location:quanlydanhmuc.php");
    }
    else 
    {
        $result = "cập nhật chưa thành công". mysqli_error($conn);
    }
?> 