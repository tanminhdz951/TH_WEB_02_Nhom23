<?php 
class home extends DController{
    public function __construct()
    {
        $data = array();
        $message = array();
        parent::__construct();
    }
  

    public function homepage(){   
        if(!empty($_GET['mgs'])){
            $mgs = unserialize(urldecode($_GET['mgs']));
            foreach($mgs as $key => $user_name){
                $tb =$user_name;
            }
            $storemodel = $this->load->model('storemodel');
            $sql = "SELECT * FROM client WHERE id_account_client = '$tb'";
            $data['account'] = $storemodel->category($sql);
            $data['thongbao'] = $storemodel->category($sql);
            $this->load->view('View_Giaodien/home',$data);
        }
        
    }
        public function home_page($id){   
       
            $storemodel = $this->load->model('storemodel');
            $sql = "SELECT * FROM client WHERE  id_client = '$id'";
            $data['account'] = $storemodel->category($sql);
            $this->load->view('View_Giaodien/home',$data);
        }
      


}

?>