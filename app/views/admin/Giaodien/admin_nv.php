<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Jquery DataTable | Bootstrap Based Admin Template - Material Design</title>

	<link href="../app/views/admin/plugins/css/style.css" rel="stylesheet">
	<link href="../app/views/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="../app/views/admin/css/font-awesome.min.css" rel="stylesheet">
	<link href="../app/views/admin/css/datepicker3.css" rel="stylesheet">
	<link href="../app/views/admin/css/styles.css" rel="stylesheet">
	<link href="../app/views/admin/css/css/style.css" rel="stylesheet">
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="../app/views/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

   

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
			<li class="active"><a href="../staff/list_category"><em class="fa fa-clone">&nbsp;</em>Nhân viên</a></li>
			<li><a href="../custommer/list_category"><em class="fa fa-toggle-off">&nbsp;</em>Khách hàng</a></li>
			<li><a href="../order/list_category"><em class="fa fa-clone">&nbsp;</em>Quản lý quét mã</a></li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em>Logout</a></li>
		</ul>
	</div><!--/.sidebar-->


    <section class="content" style="margin-top: 0px;">
        <div class="container-fluid">
			<ol class="breadcrumb">
				<li><a href="../admin_tc">   
					<em class="fa fa-home" style="font-size: 20px; color:lightskyblue">  </em>
					&ensp; </a> </li>
				<li class="active" style="font-size: 20px; color:lightskyblue">  Nhân viên</li>
			</ol>
			<h1 class="page-header" style="margin-top: -20px; margin-bottom :0px;">Quản lý Nhân viên</h1> 
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
						<div class="the_a"> <a href="../staff/list_addcategory" class="submit"  style="text-decoration: none">Thêm Nhân viên</a></div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
								<thead>
                                        <tr >
                                            <th style="width:3%; text-align: center;">STT</th>
                                            <th style="width:10%; text-align: center;">Tên Nhân viên</th>
                                            <th style="width:15%;text-align: center;">Mã QR</th>
                                            <th style="width:10%;text-align: center;">Số điện thoại</th>
                                            <th style="width:10%;text-align: center;">Email</th>
											<th style="width:25%;text-align: center;">Địa chỉ</th>
                                            <th style="width:12%;text-align: center;">Cập nhập </th>
											<th style="width:12%;text-align: center;">Trạng thái</th>
                                        </tr>
                                    </thead>
									
									<tbody>
									<?php 
									$i=1;
									$staff_id = array();
									$j = 1;
									foreach($NV as $key => $staff){
										$staff_id[$j] = $staff['id_staff'];
										$j++;
									?>
										<tr>
										<td><?php echo $i ?></td>
										<td><?php echo $staff['name_staff']; ?></td>
										<td>
										<div id="qrcode<?php echo $i ?>" class="qrcode" >
                    					</div>
										</td>
										<td><?php echo $staff['phone_staff']; ?></td>
										<td><?php echo $staff['email_staff']; ?></td>
										<td><?php 
											$xa = $staff['name']; 
											$diachi = $staff['address_staff'];
											$quanhuyen = $staff['name_quanhuyen'];
											$thanhpho = $staff['name_tinhthanh'];
											$gt= $diachi.' '.$xa.' '. $quanhuyen .' '. $thanhpho;
											echo $gt;
										
										?></td>
										<td><a href="../staff/list_updatecategory/<?php echo $staff['id_staff'] ?>">Cập nhập</a></td>
										<td></td>
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
<script type="text/javascript" src="../../QR_Project/createQR/jquery.min.js"></script>
  	<script type="text/javascript" src="../../QR_Project/createQR/qrcode.js"></script>
  	<script type="text/javascript" src="../../QR_Project/materialize/js/materialize.min.js"></script>

	  <script type="text/javascript">
		var i = '<?php echo  count($NV); ?>';
		var id_client = new Array();

		var js_array = [<?php echo '"'.implode('","', $staff_id).'"' ?>];


		var arr = new Array();
		for(j=1;j<=i;j++){
		
			arr[j] = new QRCode(document.getElementById("qrcode"+j), {
			width : 150,
			height : 150
			});
		}
		
		function Code () {
			for(j=1;j<=i;j++){
				var elText ='http://localhost/myweb/Do_an_web_2/category/list_updatecategory/'+js_array[j-1]
				arr[j].makeCode(elText);
			}
		}

		Code();
	</script>

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
