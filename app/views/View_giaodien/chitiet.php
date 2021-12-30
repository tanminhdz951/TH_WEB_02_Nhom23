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


    <link rel="stylesheet" href="../../public/style_cu/style_for_header.css">
   <link rel="stylesheet" href="../../public/style_cu/style_for_footer.css">

   <link rel="stylesheet" href="../../public/style_for_header.css">
   <link rel="stylesheet" href="../../public/style_for_CT.css">

   
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
    
    <div class="content_all">
    <div class="content" >
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style="text-align: left;">
					<div class="panel-body" style="text-align: center;">
                       <h3>Đăng ký thành công Mã QR địa điểm</h3>
						<div class="col-md-6">
                <div class="main_left">
                <div class="page" id="print">
                  <div class="row">
                      <div class="col s12">
                          <div class="khung_qr">
                              <div id="qrcode" class="qrcode" style="margin:10px;">
                        <!-- <img src="lib/logo.png" class="logo"> -->
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="main_right">
                <?php 
                  foreach($store as $key => $store){
                ?>
                <div class="thongtin_home">
                  <div  class="font-tt" > 
                    <i class="material-icons" >house</i>
                    <p style="margin-left: 10px;"> <?php echo $store['name_store'] ?> <p>
                  </div>
                  <div  class="font-tt" > 
                    <i class="material-icons">phone</i>
                    <p style="margin-left: 10px;"> <?php echo $store['phone_store'] ?> <p>
                  </div>
                  <div  class="font-tt" > 
                    <i class="material-icons" >email</i>
                    <p style="margin-left: 10px;"> <?php echo $store['email_store'] ?> <p>
                  </div>
                  <div  class="font-tt" > 
                    <i class="material-icons" >place</i>
                    <p style="margin-left: 10px;"> <?php $xa = $store['name']; 
											$diachi = $store['address_store'];
											$quanhuyen = $store['name_quanhuyen'];
											$thanhpho = $store['name_tinhthanh'];
											$gt= $diachi.' '.$xa.' '. $quanhuyen .' '. $thanhpho;
											echo $gt; ?> <p>
                  </div>
                </div>
                <?php 
                  }
                ?>

              </div>
          </div>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div>	<!--/.main-->
</div>


<?php include 'app/views/View_giaodien/header_foter/footer_DN.php' ?>

</body>
<script type="text/javascript" src="../../../QR_Project/createQR/jquery.min.js"></script>
  	<script type="text/javascript" src="../../../QR_Project/createQR/qrcode.js"></script>
  	<script type="text/javascript" src="../../../QR_Project/materialize/js/materialize.min.js"></script>
  <!-- create qr code -->
  <script type="text/javascript">
    var qrcode = new QRCode(document.getElementById("qrcode"), {
      width : 200,
      height : 200
    });

    function makeCode () {        
      var elText ='http://localhost/myweb/Do_an_web_2/category/list_updatecategory/'
      qrcode.makeCode(elText);
    }

    makeCode();
	$("#btnin").click(function(event) {
      window.print();
    });
  </script>
</html>

