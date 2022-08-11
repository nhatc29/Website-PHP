
<?php 
    include 'connect.php';

    $sql = "select * from sanpham where masp= '$_GET[masp]' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);


        $sql = "select * from danhmucsanpham";
        $danhmuc = mysqli_query($conn,$sql); 
        

        if (isset($_POST["btsuasp"]))
        {   
            $masp =mysqli_escape_string($conn,$_POST["masp"]);
            $madm = mysqli_escape_string($conn,$_POST["madm"]);
            $tensp =mysqli_escape_string($conn, $_POST["tensp"]);
            $gia =mysqli_escape_string($conn, $_POST["gia"]);
            $baohanh =mysqli_escape_string($conn,$_POST["baohanh"]);
            $chitietsp =mysqli_escape_string($conn,$_POST["chitietsanpham"]);
            $anh = $_FILES['c_img']['name'];


            if($anh != null)
				{


				$path = "../hinhanh/";
				$tmp_name = $_FILES['c_img']['tmp_name'];
				$anh = $_FILES['c_img']['name'];

				move_uploaded_file($tmp_name,$path.$anh);
					$sql = "update sanpham set hinhanh = '$anh' where masp ='$_GET[masp]'";
					mysqli_query($conn,$sql);
					header('location:danhsachsanpham.php');
				}

					$sql = "UPDATE sanpham set masp = '$masp', madm = '$madm', tensp = '$tensp' , gia = '$gia',baohanh = '$baohanh', chitietsanpham='$chitietsp' where masp = '$_GET[masp]' ";
					mysqli_query($conn,$sql);
					header('location:danhsachsanpham.php');

        }

	    
        

        ?>
<?php include_once 'inc/header.php'?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
<?php include_once 'inc/sidebar.php' ?>
  
  
  
         <div class="container" style="width:50%">
                    <h2 style="text-align:center">Sửa sản phẩm: </h2>
                    <form action="" method="POST" enctype="multipart/form-data">


                    <div class="form-group">
                        <label for="fullname">Mã sản phẩm</label>
                        <input type="text" class="form-control" value="<?php echo $row['masp'];?>" id="fullname" placeholder="Tên sản phẩm" name="masp" readonly>
                        </div>
                        
                         <div class="form-group">
                         <label for="fullname1">Danh mục</label>
                        <select name="madm" class="form-control">
                        <?php
                            while($dm = mysqli_fetch_array($danhmuc)) {
                            echo "<option value='".  $dm['madm']."'>" .  $dm['tendm'] ."</option>";
                            }
                            ?>
                            </select>
                            </div>

                        <div class="form-group">
                        <label for="fullname">Tên sản phẩm</label>
                        <input type="text" class="form-control" value="<?php echo $row['tensp'];?>" id="fullname" placeholder="Tên sản phẩm" name="tensp">
                        </div>
                        

                        <div class="form-group">
                        <label for="address">Giá</label>
                        <input type="text" class="form-control" value="<?php echo $row['gia'];?>" id="gia"  placeholder="Giá" name="gia">
                        </div>
                       
                        <div class= "form-group">
                            <label for="sel1">Bảo Hành</label>
                            <input type="text" class="form-control" value="<?php echo $row['baohanh'];?>" id="baohanh"  placeholder="Bảo hành" name="baohanh">
                        </div>
        
                        <div class="form-group">
                        <label for="comment">Chi Tiết Sản Phẩm</label>
                        <textarea class="form-control" value= "<?php echo $row['chitietsanpham'];?>" rows="5" id="chitietsp" name="chitietsanpham"></textarea>
                        </div>


                        <div class="form-group">
                        <label for="image">Hình Ảnh</label>
                        <input type="file" class="form-control" id="hinhanh" placeholder="Hình ảnh" name="c_img">
                        <td><img src="../hinhanh/<?php echo $row['hinhanh']; ?>" style="max-width: 100px;"></td>

                        </div>
                        <button type="submit" class="btn btn-primary" name="btsuasp">Sửa</button>
                    </form>
            </div>            
            <?php include_once 'inc/footer.php' ?>