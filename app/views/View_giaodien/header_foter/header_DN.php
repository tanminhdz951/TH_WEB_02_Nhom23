<?php 
          if(!empty($account)){
            foreach($account as $key => $client){
                $tb = 'Đăng nhập thành công '.$client['name_client'];
            }
          }
        ?>

<?php
if(!empty($thongbao)){
    ?>
    <script>
        alert('<?php echo $tb  ?>')
        </script>
        <?php
          }
        ?>
<head>
    <div class="header">
        <div class="header_02">
            <div class="logo">
                    <div class="logo_right">  
                    <img id="logo-img" class="logo_img" src="../../public/img/logo_01.svg" alt="logo" width="60" height="60" >
                        <h1 class="the_h1">TRUNG TÂM CÔNG NGHỆ PHÒNG CHỐNG DỊCH COVID-19 QUỐC GIA</h1>
                    </div>
                </div>
                <div class="logo">
                    <div class="logo_right"> 
                        <img src="../../public/img/logo_02.svg" alt="" class="logo_img2"> 
                        <h1 class="the_h1">BỘ THÔNG TIN VÀ TRUYỀN THÔNG</h1> 
                    </div>
                   
                </div>
                <div class="logo">
                    <div class="logo_right"> 
                        <img src="../../public/img/logo_03.svg" alt="" class="logo_img2"> 
                        <h1 class="the_h1">BỘ Y TẾ</h1> 
                    </div> 
                </div>
             </div>

              
                <div class="nav">
                    <div class="nav_01">
                    <ul>
                        <li><a href="../../home/home_page/<?php echo $client['id_client'] ?>" style="text-decoration: none;">Đăng kí địa điểm </a></li>
                        <li><a href="../../quanlydiadiem/list_category/<?php echo $client['id_client'] ?>" style="text-decoration: none;">Quản lý địa điểm</a></li>
                        <li><a href="../../read_qr/scan_qr/<?php echo $client['id_client'] ?>" style="text-decoration: none;">Quét Mã</a></li>
                        <li><a href="../../lichsu/list_category/<?php echo $client['id_client'] ?>" style="text-decoration: none;">Lịch sử quét mã</a></li>
                        <li><a href="../doanphp/lienhe.php" style="text-decoration: none;">liên hệ</a></li>
                    </ul>
                </div>  
                <div class="Login">
                <div class="input-group">
                        <span class="input-group-addon " style="background: none;border:none;padding-top:20px;">
                           <a href="#"> <i class="material-icons">person</i> </a>
                        </span>
                        <div class="form-line" >
                            <a href="" style="text-decoration: none;" class="the_a"> Huỳnh Tấn Minh</a>
                        </div>
                    </div>
                    </div>
               
                    <div class="account">
                        <div  class="account_line">
                            <span><a href="" style=" text-decoration: none;color: rgb(36, 36, 36);">Cá nhân</a> </span>
                        </div>
                        <div  class="account_line">
                            <span><a href="#"  style=" text-decoration: none;color: rgb(36, 36, 36);">Trang admin</a></span>
                        </div>
                        <div  class="account_line">
                            <span> <a href="#"  style=" text-decoration: none;color: rgb(36, 36, 36);">Đăng xuất</a></span>
                        </div>
                       
                    </div>
                </div>
           
    </div>
   
</head>





   