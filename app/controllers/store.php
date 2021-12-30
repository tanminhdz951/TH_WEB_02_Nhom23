<?php
    class store extends DController{

        public function __construct()
        {
            parent::__construct();
        }

        public function chitietbaiviet(){
            echo 'Sản phẩm chi tiết';
        }

        public function list_category(){ 
            $storemodel = $this->load->model('storemodel');
            $sql = 'SELECT * FROM store,devvn_tinhthanhpho,devvn_quanhuyen,devvn_xaphuongthitran
            WHERE store.WARD_code_store = devvn_xaphuongthitran.xaid
            AND devvn_xaphuongthitran.maqh = devvn_quanhuyen.maqh
            AND devvn_quanhuyen.matp =  devvn_tinhthanhpho.matp
            ORDER BY id_store DESC';
            $data['CH'] = $storemodel->category($sql);
           
            $this->load->view('admin/Giaodien/admin_store',$data);
       }

        public function list_addcategory(){
            $storemodel = $this->load->model('storemodel');
            $sql = 'SELECT * FROM devvn_tinhthanhpho';
            $sql1 ="SELECT * from client";
            $data['store'] = $storemodel->category($sql);
            $data['account'] = $storemodel->category($sql1);
            $this->load->view('admin/GiaoDien/admin_store_add',$data);
        }

        public function list_updatecategory($id){
            $storemodel = $this->load->model('storemodel');
            $sql = "SELECT * FROM store,devvn_tinhthanhpho,devvn_quanhuyen,devvn_xaphuongthitran
            WHERE store.WARD_code_store = devvn_xaphuongthitran.xaid
            AND devvn_xaphuongthitran.maqh = devvn_quanhuyen.maqh
            AND devvn_quanhuyen.matp =  devvn_tinhthanhpho.matp 
            AND id_store = $id";
            $sql1 = 'SELECT * FROM devvn_tinhthanhpho';
            $data['TT'] = $storemodel->category($sql1);
            $data['CH'] = $storemodel->category($sql);
           
            $this->load->view('admin/GiaoDien/admin_store_update',$data);
        }


        public function insert_category(){
            $name_store = $_POST['name_store'];
            $id_client = $_POST['id_client'];
            $phone_store = $_POST['phone_store'];
            $email_store = $_POST['email_store'];
            $ward_store = $_POST['phuongxa'];
            $address_store = $_POST['address_store'];
            $table = "store";
            $data = array(
                'id_client'=> $id_client,
                'name_store'=> $name_store,
                'email_store'=> $email_store,
                'phone_store'=> $phone_store,
                'ward_code_store'=>$ward_store,
                'address_store'=> $address_store
            );
          
            $storemodel = $this->load->model('storemodel');
            $result = $storemodel->insert_category($table, $data);
            header("Location:../store/list_addcategory");


            // if ($result == 1){

            //     $message['mgs'] = "Thêm danh mục sản phẩm thành công";
            //     // $this->list_addcategory();
            //     header("Location:../category_list_product/list_addcategory?mgs=".urldecode(serialize($message)));
            //     //  exit;
            // }
            // else{
            //     $message['mgs'] = "Thêm danh mục sản phẩm thất bại";
            //     // $this->list_addcategory();
            //     header("Location:../category_list_product/list_addcategory?mgs=".urldecode(serialize($message)));
            // }  
         }

        public function update_category($id){

            $name_store = $_POST['name_store'];
            $id_client = $_POST['id_client'];
            $phone_store = $_POST['phone_store'];
            $email_store = $_POST['email_store'];
            $ward_store = $_POST['phuongxa'];
            $address_store = $_POST['address_store'];
            $table = "store";
            $cond = "store.id_store = '$id'";
            $data = array(
                'id_client'=> $id_client,
                'name_store'=> $name_store,
                'email_store'=> $email_store,
                'phone_store'=> $phone_store,
                'ward_code_store'=>$ward_store,
                'address_store'=> $address_store

            );
            $storemodel = $this->load->model('storemodel');
            $result = $storemodel->update_category($table, $data,$cond);
            
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