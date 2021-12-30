<!DOCTYPE html>
<html>

<head>
	<title>Đồ án 2 nề</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">



    <link href="../../app/views/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <link href="../../app/views/admin/plugins/css/style.css" rel="stylesheet">
   <link href="../../app/views/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../app/views/admin/css/styles.css" rel="stylesheet">

    <link rel="stylesheet" href="../../public/style_cu/style_for_header.css">
   <link rel="stylesheet" href="../../public/style_cu/style_for_footer.css">
   <link rel="stylesheet" href="../../public/style_cu/style.css">
   <link rel="stylesheet" href="../../public/style_for_header.css">
   <link rel="stylesheet" href="../../public/style_cu/style_for_quanlydiadiem.css">


   
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

 
	<style>
        body{
            margin-top: -50px;
        }
     
    </style>

</head>
<body >
    <?php include 'app/views/View_giaodien/header_foter/header_DN.php' ?>
    <div>
<div class="content_all" style="width: 100%;">
<div class="content" style="margin-left:0px; margin-top:0px; width: 100%;">
        <div class="container-fluid" >
            <div class="row clearfix" >
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="border-radius: 10px">
                        <div class="header_table">
                            <h2>Danh sách địa điểm của bạn</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
							<table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                        <tr >
                                            <th style="width:5%; text-align: center;">STT</th>
                                            <th style="width:15%; text-align: center;">Tên cửa hàng</th>
                                            <th style="width:15%;text-align: center;">Số điện thoại</th>
                                            <th style="width:10%;text-align: center;">Email</th>
											<th style="width:30%;text-align: center;">Địa chỉ</th>
                                            <th style="width:15%;text-align: center;">Xem chi tiết</th>
											<th style="width:10%;text-align: center;">Xóa</th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
									<?php 
									$i=1;
								
									foreach($CH as $key => $store){
										
									?>
										<tr>
										<td><?php echo $i ?></td>
										<td><?php echo $store['name_store']; ?></td>
									
										<td><?php echo $store['phone_store']; ?></td>
										<td><?php echo $store['email_store']; ?></td>
										<td><?php 
											$xa = $store['name']; 
											$diachi = $store['address_store'];
											$quanhuyen = $store['name_quanhuyen'];
											$thanhpho = $store['name_tinhthanh'];
											$gt= $diachi.' '.$xa.' '. $quanhuyen .' '. $thanhpho;
											echo $gt;
										
										?></td>
										<td> <a href="../store/list_updatecategory/<?php echo $store['id_store'] ?>">Xem chi tiết</a></td>
										<td> <a href="../store/list_updatecategory/<?php echo $store['id_store'] ?>">Xóa</a> </td>
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
     </div>
</div>
</div>

<?php include 'app/views/View_giaodien/header_foter/footer_DN.php' ?>



</body>

<script src="../../app/views/admin/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../../app/views/admin/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../../app/views/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../../app/views/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../../app/views/admin/plugins/node-waves/waves.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="../../app/views/admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="../../app/views/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="../../app/views/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="../../app/views/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="../../app/views/admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="../../app/views/admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="../../app/views/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="../../app/views/admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="../../app/views/admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- Custom Js -->
<script src="../../app/views/admin/plugins/js/admin.js"></script>
<script src="../../app/views/admin/plugins/js/pages/tables/jquery-datatable.js"></script>

<!-- Demo Js -->
<script src="../../app/views/admin/plugins/js/demo.js"></script>
</html>

