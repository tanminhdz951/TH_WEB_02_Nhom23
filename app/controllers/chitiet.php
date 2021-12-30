<?php
    class chitiet extends DController{
        
        public function __construct()
        {
            $data = array();
            parent::__construct();
            
        }
        public function list_category($id){ 

            // $name_store = $_POST['name_store'];
            // $id_client = $id;
            // $phone_store = $_POST['phone_store'];
            // $email_store = $_POST['email_store'];
            // $ward_store = $_POST['phuongxa'];
            // $address_store = $_POST['address_store'];
            // $table = "store";
            // $data = array(
            //     'id_client'=> $id_client,
            //     'name_store'=> $name_store,
            //     'email_store'=> $email_store,
            //     'phone_store'=> $phone_store,
            //     'ward_code_store'=>$ward_store,
            //     'address_store'=> $address_store
            // );

          
            $storemodel = $this->load->model('storemodel');
            // $result = $storemodel->insert_category($table, $data);

            // $sql2 = "SELECT * FROM store";
            // $data2 = $storemodel->category($sql2);
            //     foreach($data2 as $key => $id_tk){
            //         $id_store = $id_tk['id_store'];
            //     }

            $sql = "SELECT * FROM store,devvn_tinhthanhpho,devvn_quanhuyen,devvn_xaphuongthitran
            WHERE store.WARD_code_store = devvn_xaphuongthitran.xaid
            AND devvn_xaphuongthitran.maqh = devvn_quanhuyen.maqh
            AND devvn_quanhuyen.matp =  devvn_tinhthanhpho.matp 
            AND id_store = 7";

            $sql1 = "SELECT * FROM client WHERE id_client = '$id'";
            $data['account'] = $storemodel->category($sql1);
            $data['store'] = $storemodel->category($sql);
            $this->load->view('View_giaodien/chitiet',$data);
    }
    }
?>