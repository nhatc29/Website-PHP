<?php
    
    include 'connect.php';
    session_start(); 
    if(isset($_GET['masp']))
         {
             
            $masp=$_GET['masp'];
        }
        //   session_destroy();
        //   die();

        $action = (isset($_GET['action'])) ? $_GET['action']:'add' ;
        $soluong = (isset($_GET['soluong'])) ? $_GET['soluong']: 1 ;

        if($soluong<=0)
        {
            $soluong=1;
        }

    
     
          $query= mysqli_query($conn, "SELECT * FROM sanpham WHERE masp = $masp"); 
          if($query) 
          {
              $product=mysqli_fetch_assoc($query);
          }
        
        $item = [
            'masp' => $product['masp'],
            'tensp' => $product['tensp'],
            'hinhanh' => $product['hinhanh'],
            'gia' => $product['gia'],
            'soluong' => 1
        ];
        if(isset($_SESSION['cart'][$masp]))
            {
                $_SESSION['cart'][$masp]['soluong'] +=1;
            }
        else 
            {
                $_SESSION['cart'][$masp] = $item;

            }

        if($action=='update')
        {
            $_SESSION['cart'][$masp]['soluong'] = $soluong;
        }



         header('Location:cart.php');
     
?>
