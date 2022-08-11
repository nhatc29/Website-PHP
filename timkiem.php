

<?php include_once 'include/header.php'?>
<?php include_once 'include/slidebar.php'?>

					
		<div class="panel-body">
	<?php 
	
		 include 'connect.php';

    
         if(isset($_POST['timkiemtheogia']))
         {
             $locgia1=$_POST['locgia1'];
             $locgia2=$_POST['locgia2'];
         }

		 $sql_dmct = "SELECT * FROM sanpham WHERE sanpham.madm= '$_GET[madm]' AND (gia >=$locgia1 AND gia <=$locgia2) ORDER BY sanpham.masp ASC"; 
		 $result= mysqli_query($conn,$sql_dmct);
		 $sql_dmten = "SELECT * FROM danhmucsanpham WHERE danhmucsanpham.madm= '$_GET[madm]' LIMIT 1"; 
		 $result_dm= mysqli_query($conn, $sql_dmten);

		 $tendmm= mysqli_fetch_array($result);
		 $tendmm2= mysqli_fetch_array($result_dm);

		
		?> 
		<h3> Danh mục: <?php echo $tendmm2['tendm'] ?> </h3>
		<?php while ($row_dmct=$result->fetch_assoc()) {  ?>
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="product_item">

                    <div class="product-image">
                        <a href="product.php?masp=<?php echo $row_dmct['masp']; ?>"><img style="width:100%; height:150px;"
                                src="hinhanh/<?php echo $row_dmct["hinhanh"]; ?>" alt="" class=""></a>
                    </div>
                    <p><a href="product.php?masp=<?php echo $row_dmct['masp']; ?>"><?php echo $row_dmct["tensp"];  ?>
                        </a></p>
                    <p class="gia_sanpham"> Giá: <?php echo number_format( $row_dmct["gia"],0,',','. ').'vnđ' ?> </p>

                </div>
            </div>
            <?php } ?>
						
		</div>
		<?php include_once 'include/footer.php'?>	

