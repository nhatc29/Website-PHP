	<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding" style="margin-top: 15px;">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 clearpaddingl">
					<div class="panel panel-info" style="margin-bottom: 5px;">
						<div class="panel-heading">
						    <h3 class="panel-title">Tìm kiếm</h3>
						</div>

					    <div class="panel-body">
					  	    <form action ="timkiem.php" method="POST" class="form-horizontal text-center">
								<div class="form-group form-group-sm">
									<label class="col-sm-5 control-label" for="formGroupInputSmall">Giá từ:</label>
									<div class="col-sm-7" style="padding-left: 0px">
									<input class="form-control"> </input>
								    </div>
								</div>
								<div class="form-group form-group-sm">
									<label class="col-sm-5 control-label" for="formGroupInputSmall">đến:</label>
									<div class="col-sm-7" style="padding-left: 0px">
									<input class="form-control"> </input>
								    </div>
								</div>
								<button class="btn btn-info" type="submit" name='timkiemtheogia'>TÌm kiếm</button>
 							</form>
					    </div>
					</div>
					<div class="panel panel-info">
					  <div class="panel-body" style="padding:0px">
					  	<div class="list-group">
						  <a href="#" class="list-group-item active">
						    Danh mục sản phẩm
						  </a>
                          <?php
						  include 'connect.php';
						  $sql = "SELECT * FROM danhmucsanpham ORDER BY madm ASC"; 
						  $result= mysqli_query($conn,$sql);

                             while($row_dm=$result->fetch_assoc()	) {
                            ?>
                              <a href="danhmuc.php?madm=<?php echo $row_dm['madm'] ?>" class="list-group-item"><?php  echo $row_dm['tendm']?></a>
                            <?php }
                           ?>
						 
						</div>
					  </div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 clearpaddingr">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding">
						<ol class="breadcrumb">
						  <li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Trang chủ</a></li>
						  <li><a href="#">Danh mục sản phẩm</a></li>
						</ol>
						<div class="panel panel-info " style="margin-bottom: 15px">
						  <div class="panel-heading">
						    <h3 class="panel-title">Xem chi tiết sản phẩm</h3>
						  </div>