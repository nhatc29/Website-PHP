<?php include_once 'inc/header.php'?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once 'inc/sidebar.php' ?>
        <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="timkiemthanhvien.php" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" name="noidung" placeholder="Tìm kiếm..."
                         aria-label="Search" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                             <button class="btn btn-primary" type="submit" name="timkiemthanhvien" value="Tìm kiếm">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
            <br> <br>
        
                 <table  class="table table-hover">
                    <tr >
                        <th> Mã Thành Viên  </th>  
                        <th> Họ Tên  </th> 
                        <th> Email  </th> 
                        <th> Quyền </th> 
                        
                    </tr>
                            <?php 
                               
                                 if(isset($_POST['timkiemthanhvien']))
                                     {
                                         $noidung=$_POST['noidung'];
                                       
                                     }
                            
    
                               
                                 include "connect.php"; 
                                 
                                 $sql = "SELECT * FROM nguoidung WHERE( hoten LIKE '%$noidung%' or quyen LIKE '%$noidung%' or email LIKE '%$noidung%' ) ";
                                 $result =mysqli_query($conn,$sql);
                                 while($row= mysqli_fetch_array($result)) 
                                     {
                                        
                                        echo"<tr>";
                                        echo"<td>".$row["mand"]."</td>";
                                        echo"<td>".$row["hoten"]."</td>";
                                        echo"<td>".$row["email"]."</td>";
                                        echo"<td>".$row["quyen"]."</td>";
                                        echo"<td>";
                                        ?> 
                                        <a onclick="return confirm('Bạn có thật sự muốn xóa thành viên này?')" href="xulyxoathanhvien.php?mand=<?php echo $row["mand"];?>">Xóa</a>
                                        <?php
                                        ?>
                                        <a href="suanguoidung.php?mand=<?php echo $row['mand']; ?>">Sửa</a>
                                        <?php
                                        echo"</td>";
                                        echo"</tr>";
                                     }

               
                    
                            ?> 
                        </table>
                        <a href="danhsachthanhvien.php" > Xem toàn bộ danh sách </a>


                   <!--  kết thúc Nội Dung -->  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
            
            
         
        
            

            
            <?php include_once 'inc/footer.php' ?>