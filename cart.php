
<?php include_once 'include/header.php'?>
<?php include_once 'include/slidebar.php'?>

					
						  <div class="panel-body">
						  	<table class="table table-hover" style="text-align:center">
								<thead style="text-align:center">
									<th>STT</th>
									<th>Tên sản phẩm</th>
									<th >Hình ảnh</th>
									<th>Số lượng</th>
									<th>Giá</th>
									<th>Thành tiền</th>
									<th>Xóa </th>
									
								</thead>

								<tbody>
									<?php $tongtien = 0; 
										
										$stt=1;?> 
									<?php foreach($cart as $key => $value): 
										$tongtien += ( $value['gia']*$value["soluong"])
										
									?>
										<tr>
											<td style="width:5%"><?php echo $stt++ ?></td>
											<td style="width:15%;"> <?php echo $value["tensp"]; ?></td>
											<td style="width:20%;"> <img src="hinhanh/<?php echo $value["hinhanh"];?>" style="width:50%"> </td>
											
											<form action="themgiohang.php">
											<td style="width:20%;"> 
											<input type="hidden" name="action" value="update">
											<input  type="hidden" name="masp" value="<?php echo $value["masp"]; ?>">
											<input style="width:25%; text-align:center" type="number" name="soluong" value="<?php echo $value["soluong"]; ?>">
											 <button type="submit" class=" btn-info"> Cập Nhật </button></td>
											</form>

											<td> <?php echo number_format( $value['gia'],0,',','.').'vnđ'?></td>
											<td> <?php echo number_format( $value['gia']*$value["soluong"],0,',','.').'vnđ'  ?></td>
											
											<td><a onclick="return confirm('Bạn có thật sự muốn xóa sản phẩm này?')" href="xoagiohang.php?masp=<?php echo $value["masp"];?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
										</tr>
										<?php endforeach ?>
										<tr>
										<td colspan="3">Tổng tiền:<?php echo number_format($tongtien,0,',','.').'vnđ' ?>  </td>
										<td colspan="3" style="text-align:left"><a onclick="return confirm('Bạn có thật sự muốn xóa tất cả sản phẩm khỏi giỏ hàng?')" href="xoagiohang.php"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Xóa tất cả </a></td>
										<td pan="3"><a class="btn btn-info" href="dathang.php"> Đặt hàng </a> </td>
										
									</tr>
									<tr> 
									<td pan="3"><a class="btn btn-info" href="camon.php"> Xem đơn hàng </a> </td>

									</tr>
								</tbody>

							</table>
						  	
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include_once 'include/footer.php'?>	