<?php
    class lichsu extends DController{
        
        public function __construct()
        {
            parent::__construct();
        }


        public function list_category($id){ 
            $ordermodel = $this->load->model('ordermodel');
            $sql = "SELECT * FROM scan_history,devvn_tinhthanhpho,devvn_quanhuyen,devvn_xaphuongthitran,store,client
            WHERE store.WARD_code_store = devvn_xaphuongthitran.xaid
            AND devvn_xaphuongthitran.maqh = devvn_quanhuyen.maqh
            AND devvn_quanhuyen.matp =  devvn_tinhthanhpho.matp
            AND scan_history.id_store_scan = store.id_store
            AND scan_history.id_client_scan = client.id_client
            AND client.id_client = '$id'
            ORDER BY id_scan_history DESC";

            $sql1 = "SELECT * FROM client WHERE id_client = '$id'";
            $data['account'] = $ordermodel->category($sql1);
            $data['or'] = $ordermodel->category($sql);
            $this->load->view('View_giaodien/lichsu',$data);
       }
       public function categorybyid(){ 
         
            $id =3 ;
            $categorymodel = $this->load->model('categorymodel');
            $table = 'category_list_product';
            $data['categorybyid'] = $categorymodel->categorybyid($table,$id);
            $this->load->view('categorybyid', $data);
        }

    }

?>