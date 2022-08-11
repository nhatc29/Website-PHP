<?php include_once 'inc/header.php'?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once 'inc/sidebar.php' ?>
        <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="timkiemsanpham.php" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" name="noidung" placeholder="Tìm kiếm..."
                         aria-label="Search" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                             <button class="btn btn-primary" type="submit" name="timkiem" value="Tìm kiếm">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
            <br> <br>
        
                 <table  class="table table-hover">
                    <tr >
                        <th> Mã Sản Phẩm  </th>  
                        <th> Danh Mục  </th> 
                        <th> Tên Sản Phẩm  </th> 
                        <th> Giá </th> 
                        <th> Bảo Hành  </th> 
                        <th> Chi Tiết Sản Phẩm </th> 
                        <th> Hình Ảnh  </th> 
                    </tr>
                            <?php 
                               
                                 if(isset($_POST['timkiem']))
                                     {
                                         $noidung=$_POST['noidung'];
                                     }
                            
    
                               
                                 include "connect.php"; 
                                 
                                 $sql = "SELECT * FROM sanpham,danhmucsanpham WHERE sanpham.madm = danhmucsanpham.madm and (tensp LIKE '%$noidung%' or masp LIKE '%$noidung%' or gia LIKE '%$noidung%' or tendm LIKE '%$noidung%' or baohanh LIKE '%$noidung%' or chitietsanpham LIKE '%$noidung%') ";
                                 $result =mysqli_query($conn,$sql);
                                 while($row= mysqli_fetch_array($result)) 
                                     {
                                        
                                        echo"<tr>";
                                        echo"<td>".$row["masp"]."</td>";
                                        echo"<td>".$row["tendm"]."</td>";
                                        echo"<td>".$row["tensp"]."</td>";
                                        echo"<td>".$row["gia"]."VND</td>";
                                        echo"<td>".$row["baohanh"]."</td>";
                                        echo"<td>".$row["chitietsanpham"]."</td>";
                                        echo"<td><img style='width:30%;' src='../hinhanh/".$row["hinhanh"]."'/></td>";
                                        echo"<td>";
                                         ?> 
                                                <a onclick="return confirm('Bạn có thật sự muốn xóa sản phẩm này?')" href="xulyxoasanpham.php?masp=<?php echo $row["masp"];?>">Xóa</a>
                                                <?php    
                                            ?>
                                            <a href="suasanpham.php?masp=<?php echo $row['masp']; ?>">Sửa</a>
                                            <?php
                                                echo"</td>";
                                        echo"</tr>";
                                     }

               
                    
                            ?> 
                        </table>
                        <a href="danhsachsanpham.php" > Xem toàn bộ danh sách </a>     

                   <!--  kết thúc Nội Dung -->  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
            
            
         
        
            

            
            <?php include_once 'inc/footer.php' ?>