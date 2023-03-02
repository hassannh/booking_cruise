
<?php
class navire extends Controller{

    public $navireModel;

    public function __construct()
    {
        $this->navireModel = $this->model('ship');
        
    }

    public function admin_ships()
    {
        echo '<pre>';
        var_dump('hhhhhhhhhhhhhhhhhh');
        echo '</pre>';
        exit;
       // get the ship
       $ships = $this->navireModel->getship();



       if ($ships) {
           $data = [
               'ships' => $ships
                   ];
           $this->view('admin_ships',$data);
       } else {
           echo('ship not found');
       }
   }

   public function delete_ship($id){
    $this->navireModel->delete_ships($id);
    return $this->admin_ships();
}


}