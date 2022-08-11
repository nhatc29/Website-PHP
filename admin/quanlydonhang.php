	<?php include_once 'inc/header.php'?>


	<body id="page-top">

		<!-- Page Wrapper -->
		<div id="wrapper">

			<!-- Sidebar -->
			<?php include_once 'inc/sidebar.php' ?>

					<!-- End of Topbar --> 

					<!-- bắt đầu  Nội Dung -->
					<form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="timkiemdonhang.php" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" name="noidung" placeholder="Tìm kiếm..."
                         aria-label="Search" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                             <button class="btn btn-primary" type="submit" name="timkiemdonhang" value="Tìm kiếm">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
            <br> <br>

					<?php 
						include 'connect.php';
						$sql_lietke_dh="SELECT * FROM tbl_order,admin WHERE tbl_order.mand=admin.mand ORDER BY maorder DESC";
						$query_lietke_dh = mysqli_query($conn,$sql_lietke_dh);

					?> 
					<table class="table table-hover" style="align:center">
									<thead style="align:center">
										<th>STT</th>
										<th>Mã đơn hàng</th>
										<th>Tên khách hàng</th>
										<th>Địa chỉ </th>
										<th>Số điện thoại</th>
										<th>Ghi chú</th>
										<th>Trạng thái</th>

									</thead>
										
							<?php
								$i=0;
								while($row=mysqli_fetch_array($query_lietke_dh))
									{
										$i++;							
							?> 
							
									<tbody>
										<tr>
											<td><?php echo $i ?> </td> 
											<td><?php echo $row['maorder'] ?> </td>
											<td><?php echo $row['name']?> </td> 
											<td><?php echo $row['diachi']?> </td> 
											<td><?php echo $row['phone']?> </td> 
											<td><?php echo $row['ghichu']?> </td> 
											<td>
												<?php
													if($row['trangthai']==1) 
													 echo "Chưa xử lý";
													else if($row['trangthai']==2) 
													echo"Đã nhận đơn";
													else if($row['trangthai']==3) 
													echo"Đang giao";
													else 
													echo"Đã giao hàng";
												?>
											</td> 

											<td><a href="quanlychitietdonhang.php?code=<?php echo $row['oder_code'] ?>">xem chi tiết</a> </td> 


 

										</tr> 
									</tbody>
									<?php } ?>

								</table>
								

					<!--  kết thúc Nội Dung -->  
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include_once 'inc/footer.php' ?>