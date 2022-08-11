
<?php 
include 'connect.php';
 session_start();
 $cart=(isset($_SESSION['cart']))? $_SESSION ['cart'] :[];
 $user=(isset($_SESSION['user']))? $_SESSION ['user'] :[];

                       
                        $makhachhang=$user['mand'];
						$order_code= rand(0,9999);
                        $trangthai= '1';
                        $ghichu=$_POST['ghichu'];
                        $insert_cart="INSERT INTO dondathang(mand,oder_code,ghichu,trangthai) VALUES('$makhachhang','$order_code','$ghichu','$trangthai')"; 
                        $cart_query=mysqli_query($conn,$insert_cart);
                      
                        if($cart_query)
                            {
                                foreach($cart as $key => $value)
                                    { 
                                        $masp=$value['masp'];
                                        $soluong=$value['soluong'];
                                        $insert_oder_detail="INSERT INTO chitietdonhang(masp,oder_code,soluongmua) VALUES('$masp'
                                        ,'$order_code','$soluong')"; 
                                        mysqli_query($conn,$insert_oder_detail);
                                        unset($_SESSION['cart']);
                                       header('Location:camon.php');
                                    }
                            }
                        
					  
?> 

			