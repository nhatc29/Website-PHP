<?php
//ketnoicsdl
include_once("connect.php");

$masp=$madm=$tensp=$gia=$baohanh=$chitietsp=$hinhanh=""; 


$madm =$_POST["danhmuc"];
$tensp = $_POST["txt_tensp"];
$gia =$_POST["txt_gia"];

$baohanh =$_POST["txt_baohanh"];

$chitietsp =$_POST["txt_chitietsp"];
$hinhanh = $_FILES['c_img']['name'];
//ketnoicsdl

//viết câu truy vấn 
if($hinhanh != null)
{
    $path ="../hinhanh/";
    $tmp_name = $_FILES['c_img']['tmp_name'];
    $hinhanh=$_FILES['c_img']['name'];
    move_uploaded_file ($tmp_name, $path.$hinhanh);
  

$sql= "insert into sanpham(masp, madm, tensp, gia, baohanh,chitietsanpham, hinhanh) values('$masp','$madm','$tensp','$gia','$baohanh', '$chitietsp','$hinhanh')";
if ($conn->query($sql) === TRUE) {
header("location:danhsachsanpham.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
} 
}
$sql_category = "SELECT madm, tendm FROM danhmucsanpham";
$result_category = $conn->query($sql_category);


$conn->close();
?>
