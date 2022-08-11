
<?php include_once 'inc/header.php'?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->

        <?php include_once 'inc/sidebar.php' ?>

        <!-- End of Sidebar -->

<div class="container">
                    <h2>Thêm danh mục</h2>
                    <form action="xulythemdanhmuc.php" method="post" style="width:50%">

                        <div class="form-group">
                        <label for="fullname">Tên danh mục</label>
                        <input type="text" class="form-control" id="fullname" placeholder="Tên danh mục" name="txt_danhmuc">
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>

                        
                    </form>
                    </div>           
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'inc/footer.php' ?>