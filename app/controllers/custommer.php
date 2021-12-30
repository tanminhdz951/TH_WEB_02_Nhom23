<?php
    class custommer extends DController{

        public function __construct()
        {
            parent::__construct();
        }
        public function chitietbaiviet(){
            echo 'Sản phẩm chi tiết';
        }
        public function list_category(){ 
            $client = $this->load->model('custommermodel');
            $sql = 'SELECT * FROM client,devvn_tinhthanhpho,devvn_quanhuyen,devvn_xaphuongthitran
            WHERE client.WARD_code_client = devvn_xaphuongthitran.xaid
            AND devvn_xaphuongthitran.maqh = devvn_quanhuyen.maqh
            AND devvn_quanhuyen.matp =  devvn_tinhthanhpho.matp
            ORDER BY id_client DESC';
            $data['kh'] = $client->category($sql);
            $this->load->view('admin/Giaodien/admin_kh',$data);
       }
       public function categorybyid(){ 
            $id =3 ;
            $categorymodel = $this->load->model('categorymodel');
            $table = 'category_list_product';
            $data['categorybyid'] = $categorymodel->categorybyid($table,$id);
            $this->load->view('categorybyid', $data);
        }
        public function list_addcategory(){
            $custommermodel = $this->load->model('custommermodel');
            $sql = 'SELECT * FROM devvn_tinhthanhpho';
            $data['TT'] = $custommermodel->category($sql);
            $this->load->view('admin/GiaoDien/admin_kh_add',$data);
        }
        public function list_updatecategory($id){
            $custommermodel = $this->load->model('custommermodel');
            $sql = "SELECT * FROM client,devvn_tinhthanhpho,devvn_quanhuyen,devvn_xaphuongthitran,account
            WHERE client.WARD_code_client = devvn_xaphuongthitran.xaid
            AND devvn_xaphuongthitran.maqh = devvn_quanhuyen.maqh
            AND devvn_quanhuyen.matp =  devvn_tinhthanhpho.matp 
            AND client.id_account_client =  account.id_account 
            AND id_client = $id";
            $sql1 = 'SELECT * FROM devvn_tinhthanhpho';
            $data['TT'] = $custommermodel->category($sql1);
            $data['KH'] = $custommermodel->category($sql);
           
            $this->load->view('admin/GiaoDien/admin_kh_update',$data);
        }
        public function insert_category(){
            $name_client = $_POST['name_client'];
            $user_name = $_POST['user_name'];
            $phone_client = $_POST['phone_client'];
            $email_client = $_POST['email_client'];
            $ward_client = $_POST['phuongxa'];
            $address_client = $_POST['address_client'];
            $table = "client";
            $table_admin = 'account';
               
            $storemodel = $this->load->model('storemodel');
            $sql2 = "SELECT * FROM $table_admin";
            $data2 = $storemodel->category($sql2);
                foreach($data2 as $key => $id_tk){
                    $id_account_client = $id_tk['id_account']+1;
                }
            $data = array(
                'name_client'=> $name_client,
                'id_account_client' =>  $id_account_client,
                'email_client'=> $email_client,
                'phone_client'=> $phone_client,
                'ward_code_client'=>$ward_client,
                'address_client'=> $address_client
            );
            $table2 = "account";
            $data2 = array(
                'username'=> $user_name,
                'password'=> md5(123456),
                'role' => 3
            );
          
            $custommermodel = $this->load->model('custommermodel');
            $custommermodel->insert_category($table2, $data2);
            $result = $custommermodel->insert_category($table, $data);
            header("Location:../custommer/list_addcategory");

            if ($result == 1){

                $message['mgs'] = "Thêm danh mục sản phẩm thành công";
                // $this->list_addcategory();
                header("Location:../custommer/list_addcategory?mgs=".urldecode(serialize($message)));
                //  exit;
            }
            else{
                $message['mgs'] = "Thêm danh mục sản phẩm thất bại";
                // $this->list_addcategory();
                header("Location:../custommer/list_addcategory?mgs=".urldecode(serialize($message)));
            }  
         }

        public function update_category($id){

            $name_client = $_POST['name_client'];
            $user_name = $_POST['user_name'];
            $phone_client = $_POST['phone_client'];
            $email_client = $_POST['email_client'];
            $ward_client = $_POST['phuongxa'];
            $address_client = $_POST['address_client'];
            $table = "client";
            $cond = "id_store = '$id'";
            $data = array(
                'name_client'=> $name_client,
                'email_client'=> $email_client,
                'phone_client'=> $phone_client,
                'ward_code_client'=>$ward_client,
                'address_client'=> $address_client
            );
            $custommermodel = $this->load->model('custommermodel');
            $result= $custommermodel->update_category($table,$data,$cond);
            if ($result == 1){
                $message['mgs'] = "Cập nhập danh mục sản phẩm thành công";
                header("Location:../list_category?mgs=".urldecode(serialize($message)));
            }
            else{
                $message['mgs'] = "Cập nhập danh mục sản phẩm thất bại";
                header("Location:../list_category?mgs=".urldecode(serialize($message)));
            }  

        }
        public function delete_category($id){
            $categorymodel = $this->load->model('categorymodel');
            $table= 'category_list_product';
            $cond = "id_category_list_product = '$id'";
            $result= $categorymodel->delete_category($table,$cond);

            if ($result == 1){

                $message['mgs'] = "Xóa danh mục sản phẩm thành công";
                header("Location:../list_category?mgs=".urldecode(serialize($message)));
            }
            else{
                $message['mgs'] = "Xóa danh mục sản phẩm thất bại";
                header("Location:../list_category?mgs=".urldecode(serialize($message)));
            }  
        }

    }

?>