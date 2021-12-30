<?php
    class quanlydiadiem extends DController{
        
        public function __construct()
        {
            $data = array();
            parent::__construct();
            
        }
        public function list_category($id){ 

            $storemodel = $this->load->model('storemodel');
            $sql = 'SELECT * FROM store,devvn_tinhthanhpho,devvn_quanhuyen,devvn_xaphuongthitran
            WHERE store.WARD_code_store = devvn_xaphuongthitran.xaid
            AND devvn_xaphuongthitran.maqh = devvn_quanhuyen.maqh
            AND devvn_quanhuyen.matp =  devvn_tinhthanhpho.matp
            AND nature_store =1
            ORDER BY id_store DESC';

            $sql1 = "SELECT * FROM client WHERE id_client = '$id'";
            $data['account'] = $storemodel->category($sql1);
            $data['CH'] = $storemodel->category($sql);
            $this->load->view('View_giaodien/quanlydiadiem',$data);
    }
    }
?>