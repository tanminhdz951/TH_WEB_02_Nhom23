<!DOCTYPE html>
<html>

<head>
	<title>Đồ án 2 nề</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

   <link href="app/views/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="app/views/admin/css/styles.css" rel="stylesheet">

    <link rel="stylesheet" href="public/style_cu/style_for_header.css">
   <link rel="stylesheet" href="public/style_cu/style_for_footer.css">
   <link rel="stylesheet" href="public/style_cu/style.css">

   <link href="../../app/views/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../app/views/admin/css/styles.css" rel="stylesheet">

    <link rel="stylesheet" href="../../public/style_cu/style_for_header.css">
   <link rel="stylesheet" href="../../public/style_cu/style_for_footer.css">
   <link rel="stylesheet" href="../../public/style_cu/style.css">
   <link rel="stylesheet" href="../../public/style_for_header.css">
 
	<style>
        body{
            margin-top: -50px;
        }
		.form-line{
			font-size: 20px; 
			padding-top:20px;
			color: rgb(44, 44, 44);
		}
		.form-line .the_a{
			
			color: rgb(44, 44, 44);
		}
		.form-line .the_a:hover + .account{
			display: block;
		
		}

    </style>

</head>
<body >
    <?php include 'app/views/View_giaodien/header_foter/header_DN.php' ?>
<div class="content_all">
    <div class="content" >
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-6">

							<form role="form" action="../../chitiet/list_category/<?php echo $client['id_client'] ?>" method="POST">
								<div class="form-group">
									<label>Tên cửa hàng</label>
									<input name ="name_store" class="form-control">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input name="email_store" class="form-control" >
								</div>
								<div class="form-group">
									<label>Số điện thoại</label>
									<input name="phone_store" class="form-control" >
								</div>
                                <div class="form-TT">
								<div class="form-group">
									<label>Tỉnh thành</label>
									<select  name = "tinhthanh" class="tinhthanh form-control" id="tinhthanh">
										<option>--Chọn Thành Phố--</option>
										<?php
										foreach($TT as $key => $tt)
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
								<div class="form-group" style=" padding-right: 0%;">
								<label>Xã phường</label>
								<select name = "phuongxa" class="phuongxa form-control" id="PhuongXa" >
									<option value="00001">xã 1</option>
									<option value="00004">xã 2</option>
									<option value="00006">xã 3</option>
									<option value="00007">xã 4</option>
									<option value="00008">xã 5</option>
								</select>
								</div>
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
</div>
</div>

<?php include 'app/views/View_giaodien/header_foter/footer_DN.php' ?>

</body>


</html>

