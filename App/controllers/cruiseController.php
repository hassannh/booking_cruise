<?php

class cruiseController extends Controller
{
    private $cruiseModel;
    public function __construct()
    {
        $this->cruiseModel = $this->model('Cruise');
        
    }

         public function Admin()
     {
        // get the Cruise
        $cruises = $this->cruiseModel->getCruises();


        if ($cruises) {
            $data = [
                'cruises' => $cruises
                    ];
            $this->view('Admin',$data);
        } else {
            echo('cruise not found');
        }
    }

    public function delete_cruise($id){
        $this->cruiseModel->deletecruise($id);
        // header('location:'.URLROOT.'Admin');
        // $this->view('Admin',$data);
        return $this->Admin();
    }


    public function add_cruise()
    {
        if (isset($_POST['submit'])) {
        
            $name = $_POST['name'];
            $ship = $_POST['ship'];
            $price = $_POST['price'];
            $nights = $_POST['nights'];
            $ports = $_POST['ports'];
           
            
            $this->cruiseModel->insertCruise($name,$ship ,$price ,$nights,$ports);
            $this->view('add');
        }else{
            $this->view('add');
        }
        
    
    }


    public function booking()
    {
        $cards = $this->cruiseModel->getCruises();
        $data=[
            'cards'=>$cards
        ];
        $this->view('booking',$data);
    }


    public function book_now($id)
    {   
        $this->view('ticket');

    }
}


