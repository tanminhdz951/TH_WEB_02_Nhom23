<?php
    class read_qr extends DController{

        public function __construct()
        {
            $data = array();
            $data1 = array();
            $message = array();
            parent::__construct();
        }


        public function list_category(){ 
            $ordermodel = $this->load->model('ordermodel');
            $sql = 'SELECT * FROM scan_history,devvn_tinhthanhpho,devvn_quanhuyen,devvn_xaphuongthitran,store,client
            WHERE store.WARD_code_store = devvn_xaphuongthitran.xaid
            AND devvn_xaphuongthitran.maqh = devvn_quanhuyen.maqh
            AND devvn_quanhuyen.matp =  devvn_tinhthanhpho.matp
            AND scan_history.id_store_scan = store.id_store
            AND scan_history.id_client_scan = client.id_client
            ORDER BY id_scan_history DESC';
            $data['or'] = $ordermodel->category($sql);
           
           
            $this->load->view('admin/Giaodien/admin_thongtin',$data);
       }
       public function categorybyid(){ 
         
            $id =3 ;
            $categorymodel = $this->load->model('categorymodel');
            $table = 'category_list_product';
            $data['categorybyid'] = $categorymodel->categorybyid($table,$id);
            $this->load->view('categorybyid', $data);
        }

        public function scan_qr($id){
            $storemodel = $this->load->model('storemodel');
            $sql1 = "SELECT * FROM client WHERE id_client = '$id'";
            $data['account'] = $storemodel->category($sql1);
            $this->load->view('View_giaodien/read_maqr',$data);
        }

      
        
        public function insert_category($id){
            $table = "scan_history";

            $text = '';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["post_name"])) {
                    $text = $_POST['post_name'];
                }
            }
            $store = explode('/', $text);
            $id_store = strtolower(end($store));
            

            date_default_timezone_set("Asia/Ho_Chi_Minh");      

            $date = getdate();

            $time =  $date['hours'].':'.$date['minutes'].':'.$date['seconds'];
            $today = $date['year'].'-'.$date['mon'].'-'.$date['mday'];
           
            $table = "scan_history";
            $data = array(
                'id_store_scan'=> $id_store,
                'id_client_scan'=> $id,
                'day_scan' => $today,
                'time_scan'=> $time
               
            );
            $storemodel = $this->load->model('storemodel');
            $result = $storemodel->insert_category($table, $data);
            
            $sql = "SELECT * FROM client WHERE id_client = $id";
            $data['account'] = $storemodel->category($sql);
            $data['tb'] = $storemodel->category($sql);


            if ($result == 1){

                $message['qtc'] = "$id";
                $this->load->view("View_giaodien/read_maqr",$data);
            }
            else{
                $message['mgs'] = "Thêm danh mục sản phẩm thất bại";
                header("Location:../category_list_product/list_addcategory?mgs=".urldecode(serialize($message)));
            }  
         }

       
       
    }

?>