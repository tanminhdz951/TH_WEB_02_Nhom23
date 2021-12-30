<?php
    class index extends DController{
        
        public function __construct()
        {
            $data = array();
            parent::__construct();
            
        }
        public function index(){
            $this->home_page();
        }

        public function home_page(){ 
           
             $this->load->view('index');
   
        }

        public function notfound(){
                $this->load->view('404');
        }

    }

?>