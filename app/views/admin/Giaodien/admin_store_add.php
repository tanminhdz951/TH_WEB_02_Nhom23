<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Widgets</title>
	<link href="../app/views/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="../app/views/admin/css/font-awesome.min.css" rel="stylesheet">
	<link href="../app/views/admin/css/datepicker3.css" rel="stylesheet">
	<link href="../app/views/admin/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<?php
	include 'header.php'
	?>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="../admin_tc"><em class="fa fa-dashboard">&nbsp;</em>Trang chủ</a></li>
			<li  class="active"><a href="../store/list_category"><em class="fa fa-calendar">&nbsp;</em>Cửa hàng</a></li>
			<li><a href="../staff/list_category"><em class="fa fa-clone">&nbsp;</em>Nhân viên</a></li>
			<li><a href="../custommer/list_category"><em class="fa fa-toggle-off">&nbsp;</em>Khách hàng</a></li>
			<li><a href="../order/list_category"><em class="fa fa-clone">&nbsp;</em>Quản lý quét mã</a></li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em>Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

	<section class="content" style="margin-left: 18%;width:79%">
	<div style="margin-top:10px">
			<ol style="list-style-type:none; display:flex;margin-top:10px; margin-left:-20px">
			<li><a href="../admin_tc" style="text-decoration: none;">   
					<em class="fa fa-home" style="font-size: 20px; color:lightskyblue; margin-top:1px">  </em>
					</a> </li>
				<li class="active" style="font-size: 20px; color:lightskyblue; display: flex;"> <p style="color: gray;font-size:20px;">&ensp;&#62;&ensp; </p><a href="../store/list_category" style="text-decoration: none;">Cửa hàng</a></li>
				<li class="active" style="font-size: 20px; color:lightskyblue; display: flex;"> <p style="color: gray;font-size:20px;">&ensp;&#62;&ensp; </p> Thêm Cửa hàng</li>
			</ol>
			<h1 class="page-header" style="margin-top: 0px; margin-bottom :0px;font-weight: bold;">Quản lý Cửa hàng</h1> 


			<div class="row">
			<div class="col-lg-12">

				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<div class="col-md-6">

							<form role="form" action="../store/insert_category" method="POST">
								<div class="form-group">
									<label>Tên cửa hàng</label>
									<input name ="name_store" class="form-control">
								</div>
								<div class="form-group">
									<label>Tỉnh thành</label>
									<select  name = "id_client" class="id_client form-control" id="id_client">
										<option>--Chọn khách hàng--</option>
										<?php
										foreach($account as $key => $id_client)
										{
										?>
										<option value="<?php echo $id_client['id_client']; ?>"><?php echo $id_client['name_client'] ?></option>
										<?php
											}
										?>
										</select>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input name="email_store" class="form-control" >
								</div>
								<div class="form-group">
									<label>Số điện thoại</label>
									<input name="phone_store" class="form-control" >
								</div>
								<div class="form-group">
									<label>Tỉnh thành</label>
									<select  name = "tinhthanh" class="tinhthanh form-control" id="tinhthanh">
										<option>--Chọn Thành Phố--</option>
										<?php
										foreach($store as $key => $tt)
										{
										?>
										<option value="<?php echo $tt['matp']; ?>"><?php echo $tt['name_tinhthanh'] ?></option>
										<?php
											}
										?>
										</select>
								</div>
								<div class="form-group">
									<label>Quận huyện</label>
									<select name = "quanhuyen" class="quanhuyen form-control" id=QuanHuyen>
										
									</select>
								</div>
								<div class="form-group">
								<label>Xã phường</label>
								<select name = "phuongxa" class="phuongxa form-control" id="PhuongXa">
									<option value="00001">xã 1</option>
									<option value="00004">xã 2</option>
									<option value="00006">xã 3</option>
									<option value="00007">xã 4</option>
									<option value="00008">xã 5</option>
								</select>
								</div>
								<div class="form-group">
									<label>Địa chỉ</label>
									<input name="address_store" class="form-control" >
								</div>
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-primary">Thêm cửa hàng</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div>	<!--/.main-->
    </section>

	<script type="text/javascript" src="../../QR_Project/createQR/jquery.min.js"></script>
  	<script type="text/javascript" src="../../QR_Project/createQR/qrcode.js"></script>
  	<script type="text/javascript" src="../../QR_Project/materialize/js/materialize.min.js"></script>

	<script type="text/javascript">
    var qrcode = new QRCode(document.getElementById("qrcode"), {
      width : 150,
      height : 150
    });

    function makeCode () {        
      var elText ='http://localhost/myweb/Do_an_web_2/category/list_updatecategory/'+'<?php echo $store['id_store']?>'
      qrcode.makeCode(elText);
    }

    makeCode();
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#tinhthanh").change(function(){
				var tinhthanh_id = $("#tinhthanh").val();
				$.ajax({
					url: "../quanhuyen/index",
					method : "POST",
					data : {tinhthanh_id : tinhthanh_id},
					
					success :function(data){
						$(".quanhuyen").html(data);
					}
				})
			})
		})
	</script>
</body>
</html>
