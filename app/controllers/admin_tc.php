<?php 
class admin_tc extends DController{
    public function __construct()
    {
        $data = array();
        $message = array();
        parent::__construct();
    }

    public function index(){
        $this->home_page();
    }

    public function home_page(){   
        $this->load->view('admin/Giaodien/index');
   }

}

?>