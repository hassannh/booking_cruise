<?php


class portcontroller extends Controller{

public $portModel;


public function __construct()   
{
    $this->portModel = $this->model('port');
}

// public function getPort()
// {
//     $port = $this->portModel->getport();
//     $data=[
//         'port'=>$port
//     ];
//     $this->view('booking',$data);
// }

public function add_port()
    {
        if (isset($_POST['submit'])) {
        
            $name = $_POST['name'];
          
            $this->portModel->insertport($name);
            return $this->view('admin');
        }else{
            $this->view('add_port');
        }
        
    }


}

?>