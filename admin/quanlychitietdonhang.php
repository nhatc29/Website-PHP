
         <?php  
                        include 'connect.php';

                        $sql_tt="SELECT * FROM dondathang WHERE oder_code='$_GET[code]'";
                        $query_tt=mysqli_query($conn,$sql_tt);
                        $row_tt=mysqli_fetch_array($query_tt);

                    if(isset($_POST['sltrangthai']) && $row_tt['trangthai'] !=4 )
                    {
                        $sltrangthai=$_POST['sltrangthai'];
                        mysqli_query($conn,"UPDATE dondathang SET trangthai=$sltrangthai WHERE oder_code='$_GET[code]'");
                        header('Location:quanlydonhang.php');
                    }
                         
                        ?>  
<?php include_once 'inc/header.php'?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once 'inc/sidebar.php' ?>

                <!-- End of Topbar --> 

                <!-- bắt đầu  Nội Dung -->

               


                <?php 
                    include 'connect.php';
                    $sql_lietke_dh="SELECT * FROM chitietdonhang,sanpham WHERE chitietdonhang.masp=sanpham.masp 
                    AND chitietdonhang.oder_code='$_GET[code]'   ORDER BY chitietdonhang.mactdh DESC";
                    $query_lietke_dh = mysqli_query($conn,$sql_lietke_dh);

                ?> 
                <table class="table table-hover" style="align:center">
                                <thead style="align:center">
                                    <th>STT</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Tên sản phẩm </th>
                                    <th>Số lượng </th>
                                    <th>Giá</th>
                                    <th>Thành tiền </th>
                            

                                    
                                </thead>
                                    
                    
                        
                                <tbody>
                                <?php
                            $i=0;
                            $tongtien1=0;
                            while($row=mysqli_fetch_array($query_lietke_dh))
                                {
                                    $i++;
                                    $tongtien1 +=  $row['gia']*$row["soluongmua"];
                                    
                        
                        ?> 
                                    <tr>
                                        <td><?php echo $i ?> </td> 
                                        <td><?php echo $row['oder_code'] ?> </td>
                                        <td><?php echo $row['tensp']?> </td> 
                                        <td><?php echo $row['soluongmua']?> </td> 
                                        <td> <?php echo number_format( $row['gia'],0,',','.').'vnđ'  ?></td>
                                        <td> <?php echo number_format( $row['gia']*$row["soluongmua"],0,',','.').'vnđ'  ?></td>
                                    </tr> 
                                    <?php } ?>
                                    <tr>
										<td> <strong>Tổng tiền:</strong>    <?php echo number_format($tongtien1,0,',','.').'vnđ' ?>  </td>
									</tr>
                                    
                                </tbody>
                                
                            
                              

                            </table>
                        
                         <form action="" method="POST">
                              <div class="form-group">
                             <select class="form-control" id="sel1" name="sltrangthai" style="width:20%">
                                <option value="1" style="color:red">Chưa xử lý</option>
                                <option value="2">Đã nhận đơn</option>
                                <option value="3">Đang giao</option>
                                <option value="4">Đã giao hàng</option>
                            </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Cập nhật trạng thái đơn hàng </a></button> 
                            
                        </form>
                       
                                 
                           

                <!--  kết thúc Nội Dung -->  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'inc/footer.php' ?>