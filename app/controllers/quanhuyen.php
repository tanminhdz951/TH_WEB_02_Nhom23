<?php
class quanhuyen extends DController{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $id = $_POST['tinhthanh_id'];
        
        $quanhuyenmodel = $this->load->model('storemodel');
            $sql = "SELECT * FROM devvn_quanhuyen
            WHERE matp =1";
                $data = $quanhuyenmodel->category($sql);
        ?>
        <select name="quanhuyen" class=" form-control">
            <option value=""> id lỗi<?php echo $id ?></option>
            <?php
            foreach($data as $key => $value){
            ?>
            <option value=""><?php echo $value['name_quanhuyen'] ?></option>
            <?php
            }
       
}
}
?>
