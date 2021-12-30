<?php
    class login extends DController{
        
        public function __construct()
        {
            $message = array();
            $data = array();
            $data1 = array();
            $data2 = array();
            parent::__construct();
            
        }
        public function index(){
            $this->login();
        }

        public function login(){ 
            //  Session::init();
            //  if(Session::get('login')==true){
            //     Session::checkSession(); header("Location:http://localhost/img/TH_WEB_QRCODE/home/homepage");
            //  }
            
            $this->load->view('../../app/views/file_login/sign-in');
           
        }

        public function dashboard(){
            Session::checkSession(); header("Location:http://localhost/img/TH_WEB_QRCODE/home/homepage");
        }

        public function authentication_login(){
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            
            $table_admin = 'account';
           
           

            $loginmodel = $this->load->model('loginmodel');
            $count = $loginmodel->login($table_admin, $username, $password);
           
            if ($count == 0){
                $message['mgs'] = "User hoặc mật khẩu không chính xát";
                header("Location:../../TH_WEB_QRCODE/login?mgs=".urldecode(serialize($message)) );
            }
            else{

                $storemodel = $this->load->model('storemodel');
            $sql = "SELECT * FROM account WHERE username = '$username'";
            $data = $storemodel->category($sql);
            $role = 0;
                foreach($data as $key => $value){
                    $user = $value['id_account'];
                    $role = $value['role'];
                }
                $result =  $loginmodel->login($table_admin, $username, $password);
                Session::init();
                Session::set('login',true);
                Session::set('usernsme', $result[0]['username']);
                Session::set('userid', $result[0]['ad_admin']);

                if($role == 3){
                    $message['mgs'] = $user;
                    header("Location:../../TH_WEB_QRCODE/home/homepage/?mgs=".urldecode(serialize($message)) );
                }
                else{
                    $message['mgs'] = $value['username'] ;
                    header("Location:../../TH_WEB_QRCODE/admin_tc?mgs=".urldecode(serialize($message)) );
                }
            
                 
            }
        }

        public function logout(){
            Session::init();
            Session::destroy();
            $this->load->view('../../app/views/file_login/sign-up');
        }

        public function sign_up(){
            $this->load->view('../../app/views/file_login/sign-up');
        }
        public function forgot(){
            $this->load->view('../../app/views/file_login/forgot-password');
        }

        public function add_sign_up(){
            $username = $_POST['namesurname'];
            $email =  $_POST['email'];
            $password = md5($_POST['password']);
            $confirm = md5($_POST['confirm']);
            
            if($confirm != $password){
                $message['mgs'] = "Xát nhận lại mật khẩu không chính xát";
                header("Location:../../TH_WEB_QRCODE/login/sign_up?mgs=".urldecode(serialize($message)) );
            }
            else{


                $table = 'client';
                $table_admin = 'account';
                $loginmodel = $this->load->model('loginmodel');
                $storemodel = $this->load->model('storemodel');

                $data = array(
                    'username'=> $username,
                    'password'=> $password,
                    'role' => 3
    
                );
                $result = $loginmodel->insert_category($table_admin, $data);

                $sql2 = "SELECT * FROM $table_admin";
                $data2 = $storemodel->category($sql2);
                    foreach($data2 as $key => $id_tk){
                        $id_account_client = $id_tk['id_account'];
                    }
                
                $data1 = array(
                    'id_account_client' => $id_account_client,
                    'email_client'=> $email
                );
              
                
               
                $result1= $loginmodel->insert_category($table, $data1);
                if ($result == 1 and  $result1 == 1 ){
                    $message['mg'] = "Đăng kí thành công";
                    header("Location:../../TH_WEB_QRCODE/login?mg=".urldecode(serialize($message)) );
                }
                else{
                    $message['mg'] = "Đăng kí không thành công";
                    header("Location:../../TH_WEB_QRCODE/login/sign_up?mg=".urldecode(serialize($message)) );
                }
            }

         
        }

    }

?>