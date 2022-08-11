<?php include_once 'inc/header.php'?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->

        <?php include_once 'inc/sidebar.php' ?>

        <!-- End of Sidebar -->



        <!-- Content Wrapper -->
        

                <!-- End of Topbar --> 

                 <!-- bắt đầu  Nội Dung -->
    <?php 
    include 'connect.php';
        $mand=$_GET["mand"];
        $sql = "select * from admin where mand='$mand'"; 
        $result= mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result))
        {
            
            $quyen =$row["quyen"];
        }
    ?>

         <div class="container" style="width:50%">
                    <h2 style="text-align:center">SỬA QUYỀN NGƯỜI DÙNG</h2>
                    <form action="xulysuathanhvien.php?mand=<?php echo $mand;?>" method="post">
                        
                        

                        <div class="form-group">
                        <label for="fullname">Sửa quyền người dùng</label>
                        <input type="text" class="form-control"value="<?php echo $quyen;?>" id="fullname" placeholder="quyền" name="txt_quyen">
                        </div>
                        <button type="submit" class="btn btn-primary" name="btsua2">Sửa</button>
                    </form>
            </div>            
            <?php include_once 'inc/footer.php' ?>