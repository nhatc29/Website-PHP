
<?php
include 'connect.php';
 session_start();



 $cart=(isset($_SESSION['cart']))? $_SESSION ['cart'] :[];
 $user=(isset($_SESSION['user']))? $_SESSION ['user'] :[];



 $sql = "SELECT * FROM danhmucsanpham ORDER BY madm ASC"; 
 $result= mysqli_query($conn,$sql);

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dụng cụ thể thao Liberty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="js/jquery-3.1.1.js" type="text/javascript"></script>
    <script src="../js/jquery.jcarousel.pack.js" type="text/javascript"></script>
    <script src="../js/jquery-func.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
    p.gia_sanpham {
        text-align: center;
        color: red;
        font-size: 15px;
        font-weight: bold;
    }
    .list_trang{
        padding:0;
        margin:0;
        list-style:none;
    }

    ul.list_trang li {
       float:left;
       padding:5px;
       margin:5px;
       background:lightblue;
    }
    .chitietsanpham
			{
				height:auto;
				width:90%;
				margin: 0 auto;
			}
		.hinhanh_ctsanpham
			{
				float:left; 
				width:50%;
			}
		.ctsp
			{
				float:right;
				width:45%;
			

			}


    </style>
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top: 3px;height: 125px">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 clearpadding">
                <a href="#"><img src="upload/1.jpg" alt="" class="img-responsive"></a>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 clearpadding">
                <a href="#"><img src="upload/bannerr.jpg" alt="" class="img-responsive"></a>
            </div>
        </div>
        <div class="row">
            <nav class="navbar navbar-info re-navbar">
                <div class="container-fluid re-container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">--- Menu ---</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse re-navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"
                                        aria-hidden="true"></span> Trang Chủ<span class="sr-only">(current)</span></a>
                            </li>
                                                       
                            <?php
                             while($row_danhmuc=$result->fetch_assoc()	) {
                            ?>
                                <li><a href="danhmuc.php?madm=<?php echo $row_danhmuc['madm'] ?>"><?php  echo $row_danhmuc['tendm']?></a></li>
                           
                            <?php }
                           ?>
                         
                         

                         <?php if(isset($user['name'])) { ?> 
                            </ul>
                        <ul class="nav navbar-nav navbar-right">
                        <li>
                                <a href="cart.php" class="dropdown-toggle"  role="button"
                                    aria-haspopup="true" aria-expanded="false"> <span
                                        class="glyphicon glyphicon-shopping-cart"></span>
                                    Giỏ Hàng</span></a>
                            </li>

                            
                            <li>
                        
                            <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>Tài khoản</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    Họ Tên: <?php echo $user['name'] ?>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="dangxuat.php" >  
                                    Đăng Xuất
                                </a>
                            </div>
                        </li>
                        </li>
                        </ul>
                        
                            <?php } else {?> 


                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="dangky.php">Đăng ký</a></li>
                            <li><a href="dangnhap.php">Đăng nhập</a></li>
                        </ul>
                        <?php } ?>
                    </div><!-- /.navbar-collapse -->

                </div><!-- /.container-fluid -->
            </nav>
        </div>