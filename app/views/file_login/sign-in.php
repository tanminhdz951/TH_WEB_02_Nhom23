<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="app/views/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="app/views/admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="app/views/admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="app/views/admin/plugins/css/style.css" rel="stylesheet">

    

    <link href="../app/views/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Waves Effect Css -->
<link href="../app/views/admin/plugins/node-waves/waves.css" rel="stylesheet" />

<!-- Animation Css -->
<link href="../app/views/admin/plugins/animate-css/animate.css" rel="stylesheet" />

<!-- Custom Css -->
<link href="../app/views/admin/plugins/css/style.css" rel="stylesheet">

<?php 
     if(!empty($_GET['mg'])){
        $mgs = unserialize(urldecode($_GET['mg']));
    ?>
    <script>
        alert('Đăng kí thành công')
    </script>
        <?php
          }
        ?>
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>Đăng Nhập</b></a>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="login/authentication_login">
                    <div class="msg"></div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <?php 
                         if(!empty($_GET['mgs'])){
                            $mgs = unserialize(urldecode($_GET['mgs']));
                           
                    ?>
                    <div class="input-group" style="margin-top:-20px">
                        
                            <?php 
                             foreach($mgs as $key => $value){
                                echo '<span style= "color: red; margin-left:25px; ; font-size:11px;" >'.$value.'</span>';
                            }
                            ?>
                    </div>
                    <?php
                         }
                    ?>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="login/sign_up">Đăng kí ngay</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="login/forgot">Quên mật khẩu?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="app/views/admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="app/views/admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="app/views/admin/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="app/views/admin/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="app/views/admin/plugins/js/admin.js"></script>
    <script src="app/views/admin/plugins/js/pages/examples/sign-in.js"></script>


     <!-- Jquery Core Js -->
     <script src="../app/views/admin/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../app/views/admin/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../app/views/admin/plugins/node-waves/waves.js"></script>

<!-- Validation Plugin Js -->
<script src="../app/views/admin/plugins/jquery-validation/jquery.validate.js"></script>

<!-- Custom Js -->
<script src="../app/views/admin/plugins/js/admin.js"></script>
<script src="../app/views/admin/plugins/js/pages/examples/sign-in.js"></script>
</body>

</html>