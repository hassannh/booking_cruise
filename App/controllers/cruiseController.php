<?php

class cruiseController extends Controller
{
    private $cruiseModel;
    private $bookingModel;
    private $type_roomModel;
    private $roomModel;
    private $reservationModel;
    private $portModel;
    public function __construct()
    {
        $this->cruiseModel = $this->model('Cruise');
        $this->bookingModel = $this->model('booking');
        $this->type_roomModel = $this->model('RoomTypes');
        $this->roomModel = $this->model('Room');
        $this->reservationModel = $this->model('reservation');
        
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
            return $this->Admin();
        }else{
            $this->view('add_cruise');
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
        $cruise = $this->cruiseModel->getCruise($id);
        $reservation = $this->bookingModel->getBooking($id);
        $data=[
            'cruise'=> $cruise,
            'reservation' => $reservation
        ];
     
        $this->view('ticket',$data);

    }


    public function order($id)
    {
        $cruise = $this->cruiseModel->getCruise($id);
        $room_type = $this->type_roomModel->getRoomTypes();
        $data = [
            'cruise'=>$cruise,
            'roomType'=> $room_type
        ];
        $this->view('addReservation',$data);
    }



    public function insertAllinfo()
    {
            // header('location:'.URLROOT."usersController/login");
        // var_dump($_POST);
        $room = $_POST['id_roomType_price'];
        $roomTypeArray = explode(" ", $room);
        $id_roomType = $roomTypeArray[0];
        $priceRoomType = $roomTypeArray[1];
        $bookingDate = $_POST["date"];
        $totalPrice = (float)$_POST["Price"] + (float)$priceRoomType;
        $id_cruise = $_POST["id_cruise"];
        $id_user =  1;
        $this->reservationModel->insertReservation($id_user,$bookingDate,$totalPrice,$id_roomType, $id_cruise);
        die;
        }


        public function getPort()
{
    $port = $this->portModel->getport();
    $data=[
        'port'=>$port
    ];
    $this->view('booking',$data);
}
    


    public function delete_ticket($id)
    {
        $this->bookingModel->deleteBooking($id);
        $this->view('booking');
    }
}


