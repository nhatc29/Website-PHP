<?php 
	
	    include 'connect.php';
		$err=[];
		session_start();

	if(isset($_POST['dangnhap']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "SELECT * FROM admin WHERE username='$username'";
			$query= mysqli_query($conn,$sql);
			$data = mysqli_fetch_assoc($query);
			$checkuser= mysqli_num_rows($query);
			
			if($checkuser==1) 
			{
				if($password==$data['password'])
					{
						if($data['quyen']==1)
							{	
								$_SESSION['user'] = $data;
								header('Location:admin/admin.php');
							}
						else 
							{	
								$_SESSION['user']=$data;
								header('Location:index.php');
							}
							
					}
				else 
					{	
						$login=0;
						{ $err['password'] = 'Mật khẩu không chính xác';}
					}
			}
			else 
			{
				{ $err['username'] = 'Tên đăng nhập không tồn tại';}
			}
		
		}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<style> 
    .has-error{
        color:red
    }
    </style> 

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Đăng Nhập</div>
				<div class="panel-body">
					<form action = "" method="POST" role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Tên đăng nhập" name="username" type="text" autofocus="">
								<div class="has-error">
                                    <span> <?php echo (isset($err['username']))?$err['username']:'' ?> </span>
                                </div>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
								<div class="has-error">
                                    <span> <?php echo (isset($err['password']))?$err['password']:'' ?> </span>
                                </div>
							</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;
							<button type="submit" class="btn btn-primary" name="dangnhap">Đăng Nhập</button>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="dangky.php"> <u>Đăng ký tài khoản tại đây </u> </a>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
