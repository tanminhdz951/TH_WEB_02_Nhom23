<!DOCTYPE html>
<html>

<head>
	<title>Đồ án 2 nề</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link href="../../app/views/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../app/views/admin/css/styles.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../../public/style_cu/style_for_header.css">
   <link rel="stylesheet" href="../../public/style_cu/style_for_footer.css">
   <link rel="stylesheet" href="../../public/style_cu/style.css">
   <link rel="stylesheet" href="../../public/style_for_header.css">
   <link rel="stylesheet" href="../../public/style_cu/style_for_quanlydiadiem.css">

   <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="../../app/views/read_qr/html5-qrcode.min.js"></script>
  <?php 
          if(!empty($tb)){
           
    ?>
    <script>
        alert('<?php echo 'Quét mã thành công'?>')
        </script>
        <?php
          }
        ?>
   
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
    .result {
    background-color: green;
    color: #fff;
    padding: 5px;
    width: 500px;
  }

  .row {
    display: flex;
    text-align: left;
    
  }
.row_01{
  display: flex;
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


    <div class="content_all" style="margin-top: 20px;">
    <div class="content" >
	
				<div class="panel panel-default">
					<div class="panel-body">
					

          <div class="row_01" style="width:100%">
            <div class="col" style="width:50%">
              <div style="width:100%;" id="reader"></div>
            </div>
            <div class="col" style="padding:30px;" style="width:50%">
              <h4>SCAN RESULT</h4>
              <form action="../../read_qr/insert_category/<?php echo $client['id_client'] ?>" method="post">
                <div id="result">Result Here</div>
                  </form>
              </div>
            </div>
							
		
			
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div>	<!--/.main-->
</div>
</div>


<?php include 'app/views/View_giaodien/header_foter/footer_DN.php' ?>



</body>
<script type="text/javascript">
  function onScanSuccess(qrCodeMessage) {
    document.getElementById('result').innerHTML = '<input class="result" type="text" name="post_name" value="' + qrCodeMessage + '">';
    setTimeout(
      () => {
        document.forms[0].submit();
      },
      2 * 1000
    );

  }

  function onScanError(errorMessage) {
    //handle scan error
  }
  var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", {
      fps: 10,
      qrbox: 250
    });
  html5QrcodeScanner.render(onScanSuccess, onScanError);
</script>

</html>

