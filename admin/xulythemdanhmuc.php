<?php
//ketnoicsdl
include_once("connect.php");

$madm=$tendm=""; 

$madm = $_POST["txt_madm"];
$tendm =$_POST["txt_danhmuc"];

//ketnoicsdl
include_once("connect.php");

//viết câu truy vấn 

$sql= "insert into  danhmucsanpham(tendm) values('$tendm')";
if ($conn->query($sql) === TRUE) {
header("location:quanlydanhmuc.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>