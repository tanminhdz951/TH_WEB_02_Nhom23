<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Jquery DataTable | Bootstrap Based Admin Template - Material Design</title>


	<link href="../app/views/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="../app/views/admin/css/font-awesome.min.css" rel="stylesheet">
	<link href="../app/views/admin/css/datepicker3.css" rel="stylesheet">
	<link href="../app/views/admin/css/styles.css" rel="stylesheet">
	<link href="../app/views/admin/css/css/style.css" rel="stylesheet">
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="../app/views/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <link href="../app/views/admin/plugins/css/style.css" rel="stylesheet">

	<style>

	.submit{
	background: white;
	color:lightseagreen;
	border: 2px solid lightseagreen;
	padding: 5px 15px;
	outline: none;
	border-radius: 4px;
	text-transform: uppercase;
	font-weight: bold;
	animation: .3s ease;
	cursor: pointer;	
	font-size: 15px;
	float: right;
	}
	.submit:hover{
	background:lightseagreen;
	color: #fff;
	box-shadow: 2px 3px 4px rgba(30,160,60,0.3);
	}
	tr th {
	background: lightskyblue;
	}
	</style>
</head>

<body >
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
			<li><a href="../store/list_category"><em class="fa fa-calendar">&nbsp;</em>Cửa hàng</a></li>
			<li><a href="../staff/list_category"><em class="fa fa-clone">&nbsp;</em>Nhân viên</a></li>
			<li><a href="../custommer/list_category"><em class="fa fa-toggle-off">&nbsp;</em>Khách hàng</a></li>
			<li  class="active"><a href="../order/list_category"><em class="fa fa-clone">&nbsp;</em>Quản lý quét mã</a></li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em>Logout</a></li>
		</ul>
	</div><!--/.sidebar-->


    <section class="content" style="margin-top:0px">
        <div class="container-fluid">
			<ol class="breadcrumb">
				<li><a href="../admin_tc">   
					<em class="fa fa-home" style="font-size: 20px; color:lightskyblue">  </em>
					&ensp; </a> </li>
				<li class="active" style="font-size: 20px; color:lightskyblue">  Quản lý quét mã</li>
			</ol>
				<h1 class="page-header" style="margin-top: -20px; margin-bottom :0px;">Quản lý quét mã</h1> 
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
						
                        </div>
                        <div class="body">
                            <div class="table-responsive">
							<table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr >
                                            <th style="width:5%; text-align: center;">STT</th>
                                            <th style="width:15%; text-align: center;">Tên cửa hàng</th>
                                            <th style="width:20%;text-align: center;">Địa chỉ cửa hàng</th>
                                            <th style="width:20%;text-align: center;">Tên Khách hàng</th>
											<th style="width:20%;text-align: center;">Ngày quét mã</th>
											<th style="width:20%;text-align: center;">Thời gian quét mã</th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
									<?php 
									$i=1;
									$store_id = array();
									$j = 1;
									foreach($or as $key => $order){
										$store_id[$j] = $order['id_scan_history'];
										$j++;
									?>
										<tr>
										<td><?php echo $i ?></td>
										<td><?php echo $order['name_store']; ?></td>
										<td><?php 
											$xa = $order['name']; 
											$diachi = $order['address_store'];
											$quanhuyen = $order['name_quanhuyen'];
											$thanhpho = $order['name_tinhthanh'];
											$gt= $diachi.' '.$xa.' '. $quanhuyen .' '. $thanhpho;
											echo $gt;
										?></td>
										<td><?php echo $order['name_client']; ?></td>
										<td> <?php echo $order['day_scan']; ?> </td>
										<td> <?php echo $order['time_scan']; ?></td>
										</tr>
										<?php
											$i++;
												}
											?>
                                    </tbody>
									
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

</body>

	 <!-- Jquery Core Js -->
	 <script src="../app/views/admin/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../app/views/admin/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../app/views/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../app/views/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../app/views/admin/plugins/node-waves/waves.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="../app/views/admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="../app/views/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="../app/views/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="../app/views/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="../app/views/admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="../app/views/admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="../app/views/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="../app/views/admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="../app/views/admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- Custom Js -->
<script src="../app/views/admin/plugins/js/admin.js"></script>
<script src="../app/views/admin/plugins/js/pages/tables/jquery-datatable.js"></script>

<!-- Demo Js -->
<script src="../app/views/admin/plugins/js/demo.js"></script>

</html>
