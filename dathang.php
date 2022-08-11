
<?php include 'include/header.php' ?>


		<div id="content">
			<div class="container clearpadding" >
				<div>
                </br>
                <h4 style="color:SteelBlue"> Thông tin đơn hàng </h4>
                <div class="panel-body">
						  	<table class="table table-hover" style="align:center">
								<thead style="align:center">
									<th>STT</th>
									<th>Tên sản phẩm</th>
									<th >Hình ảnh</th>
									<th>Số lượng</th>
									<th>Giá</th>
									<th>Thành tiền</th>
									
								</thead>


						  <?php  



						   $tongtien = 0; 
										
						  $stt=1;?> 
					  			<?php foreach($cart as $key => $value): 
						 	    $tongtien += ( $value['gia']*$value["soluong"])
						  
					  ?>
								<tbody>
							
										<tr>
											<td style="width:5%"><?php echo $stt++ ?></td>
											<td style="width:15%;"> <?php echo $value["tensp"]; ?></td>
											<td style="width:20%;"> <img src="hinhanh/<?php echo $value["hinhanh"];?>" style="width:50%"> </td>
											
											<form action="themgiohang.php">
											<td style="width:20%;"> 
											<input type="hidden" name="action" value="update">
											<input  type="hidden" name="masp" value="<?php echo $value["masp"]; ?>">
											<input style="width:25%; text-align:left" type="text" name="soluong" value="<?php echo $value["soluong"]; ?>" readonly>
											</form>

											<td> <?php echo number_format( $value['gia'],0,',','.').'vnđ'?></td>
											<td> <?php echo number_format( $value['gia']*$value["soluong"],0,',','.').'vnđ'  ?></td>
			
										</tr>
										<?php endforeach ?>
										<tr>
										<td  colspan="2" >Tổng tiền</td>
										<td colspan="4"><?php echo number_format($tongtien,0,',','.').'vnđ' ?>  </td>
									</tr>
								</tbody>

							</table>
						  	
						  </div>
				<div>


					<div class="panel panel-info ">
					  <div class="panel-heading">
					    <h3 class="panel-title text-left">Thông tin đặt hàng</h3>
					  </div>
					  <div class="panel-body">
					  	<form class="form-horizontal" action="thanhtoan.php" method="POST">
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-offset-1 col-sm-2 control-label">Họ tên</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="name" value="<?php echo $user['name'] ?>" readonly>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-offset-1 col-sm-2 control-label">Địa chỉ</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="diachi" value="<?php echo $user['diachi'] ?>" readonly>
						    </div>
						    </div>
						  
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-offset-1 col-sm-2 control-label">Số điện thoại</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="phone" value="<?php echo $user['phone'] ?>" readonly>
						    </div>
						    
						  </div>
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-offset-1 col-sm-2 control-label" > Ghi chú </label>
						    <div class="col-sm-8">
						      <textarea class="form-control" rows="3" name="ghichu"></textarea>
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-offset-3 col-sm-7">
						      <button type="submit" class="btn btn-info" name="gui">Gửi</button>
						    </div>
						  </div>
						</form>				  	
					  </div>

					</div>

				</div>
			</div>
		</div>	
                                    </br>
                                    </br>
		<div id="footer">
			<div class='container'>
				<div class="row">
						<div class="col-md-6">
							<address>
                            <strong>CỬA HÀNG DỤNG CỤ THỂ THAO LIBERTY</strong><br>
					  <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Địa chỉ: Nguyễn Thiện Thành - K4 - P5 - TP.Trà Vinh<br>
					  <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Điện thoại: 0326873520<br>
							</address>
						
				</div>
			</div>
		</div>
	</div>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>