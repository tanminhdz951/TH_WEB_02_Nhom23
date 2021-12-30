<?php
      class Load{
        public function __construct()
        {
         
        }

        public function model($fileName){
            include 'app/models/'.$fileName.'.php';
            return new $fileName();
        }

        public function view($fileName, $data = null){
          if($data == true){
            extract($data);
          }
          ?>
          <?php
          
            include 'app/views/'.$fileName.'.php';
        }
    }
?>