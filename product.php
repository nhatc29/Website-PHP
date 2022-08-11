<?php include_once 'include/header.php'?>
<?php include_once 'include/slidebar.php'?>

					
<div class="panel-body">
						  <?php 
						  	include 'connect.php';
							  $masp=$_GET["masp"];
							  $sql = "select * from sanpham where masp='$masp'"; 
							  $result= mysqli_query($conn,$sql);
							  while($row_sql=$result->fetch_assoc()	){
						  ?>
						<div class="chitietsanpham">
									<div class="hinhanh_ctsanpham">
									<img  style="width:100%;" src="hinhanh/<?php echo $row_sql["hinhanh"]; ?>"> 
									</div> 

									<div class="ctsp">
										<h3><?php echo $row_sql['tensp']?></h3>
										<p>Giá: <?php echo number_format( $row_sql['gia'],0,',','.').'vnđ'?><p>
										<p>Mô tả: <?php echo $row_sql['chitietsanpham']?><p>
										<form action="themgiohang.php?masp=<?php echo $row_sql['masp'];?>" method="POST">
										<?php if(isset($user['name'])) { ?>
  										<button type="submit" name="themgiohang" class="btn btn-info">Thêm vào giỏ hàng</button>
										</form>
										<?php }?>
									
									</div>
						</div>
						  <?php }?>



					

						  </div>
						</div>

										</br>										
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										
									


						
		<?php include_once 'include/footer.php'?>	