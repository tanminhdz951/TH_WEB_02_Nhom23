<?php
    class staff extends DController{

        public function __construct()
        {
            parent::__construct();
        }


        public function list_category(){ 
            $staffmodel = $this->load->model('staffmodel');
            $sql = 'SELECT * FROM staff,devvn_tinhthanhpho,devvn_quanhuyen,devvn_xaphuongthitran
            WHERE staff.WARD_code_staff = devvn_xaphuongthitran.xaid
            AND devvn_xaphuongthitran.maqh = devvn_quanhuyen.maqh
            AND devvn_quanhuyen.matp =  devvn_tinhthanhpho.matp
            ORDER BY id_staff DESC';
            $data['NV'] = $staffmodel->category($sql);
           
            $this->load->view('admin/Giaodien/admin_nv',$data);
       }
       public function categorybyid(){ 
         
            $id =3 ;
            $categorymodel = $this->load->model('categorymodel');
            $table = 'category_list_product';
            $data['categorybyid'] = $categorymodel->categorybyid($table,$id);
            $this->load->view('categorybyid', $data);
        }

        public function list_addcategory(){
            $staffmodel = $this->load->model('staffmodel');
            $sql = 'SELECT * FROM devvn_tinhthanhpho';
            $data['TT'] = $staffmodel->category($sql);
            $this->load->view('admin/GiaoDien/admin_nv_add',$data);
        }

        public function list_updatecategory($id){
            $staffmodel = $this->load->model('staffmodel');
            $sql = "SELECT * FROM staff,devvn_tinhthanhpho,devvn_quanhuyen,devvn_xaphuongthitran
            WHERE staff.WARD_code_staff = devvn_xaphuongthitran.xaid
            AND devvn_xaphuongthitran.maqh = devvn_quanhuyen.maqh
            AND devvn_quanhuyen.matp =  devvn_tinhthanhpho.matp 
            AND id_staff = $id";
            $sql1 = 'SELECT * FROM devvn_tinhthanhpho';
            $data['TT'] = $staffmodel->category($sql1);
            $data['NV'] = $staffmodel->category($sql);
           
            $this->load->view('admin/GiaoDien/admin_nv_update',$data);
        }


        public function insert_category(){
            $table = "staff";
            $name_staff = $_POST['name_staff'];
            $user_name = $_POST['user_name'];
            $phone_staff = $_POST['phone_staff'];
            $email_staff = $_POST['email_staff'];
            $ward_staff = $_POST['phuongxa'];
            $address_staff=  $_POST['address_staff'];
            $data = array(
                'name_staff'=> $name_staff,
                'user_name'=> $user_name,
                'phone_staff'=> $phone_staff,
                'email_staff'=> $email_staff,
                'ward_code_staff'=>$ward_staff,
                'address_staff'=> $address_staff
            );
            $staffmodel = $this->load->model('staffmodel');
          
            $result = $staffmodel->insert_category($table, $data);
            header("Location:../staff/list_addcategory");

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

            $table = "staff";
            $name_staff = $_POST['name_staff'];
            $user_name = $_POST['user_name'];
            $phone_staff = $_POST['phone_staff'];
            $email_staff = $_POST['email_staff'];
            $ward_staff = $_POST['phuongxa'];
            $address_staff=  $_POST['address_staff'];
            $cond = "staff.id_staff = 'staff$id'";
            $data = array(
                'name_staff'=> $name_staff,
                'user_name'=> $user_name,
                'phone_staff'=> $phone_staff,
                'email_staff'=> $email_staff,
                'ward_code_staff'=>$ward_staff,
                'address_staff'=> $address_staff
            );
            $staffmodel = $this->load->model('staffmodel');
            $result = $staffmodel->insert_category($table, $data,$cond);


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