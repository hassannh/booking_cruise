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
        return $this->Admin();
    }


    public function add_cruise()
    {
        if (isset($_POST['submit'])) {
        
            $name = $_POST['name'];
            $ship = $_POST['ship'];
            $price = $_POST['price'];
            $picture = $_POST['picture'];
            $nights = $_POST['nights'];
            $ports = $_POST['ports'];
           
            
            $this->cruiseModel->insertCruise($name,$ship ,$price,$picture ,$nights,$ports);
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


    public function reservation()
    {
        if(isset($_POST['submit'])){

        $ID_cruise = (int)$_POST['id_cruise'];
       

        $Price = (float)$_POST['Price'];
        $date_reservation = $_POST['date'];

        $id_roomType_price = $_POST['id_roomType_price'];
        $roomTypeArray = explode(' ',$id_roomType_price);

        $id_type_room=(int)$roomTypeArray[0];
        $price_room=(float)$roomTypeArray[1];

        $price_reservation = (float)$Price+(float)$price_room;
        
        $this->roomModel->insertRoomTypes($id_type_room);
        $room = $this->roomModel->getRoom($id_type_room);
        $id_Room = $room->id;

        $ID_user = $_SESSION['Id'];

        $this->reservationModel->insertReservation($ID_user, $date_reservation ,$price_reservation ,$id_Room,$ID_cruise); 
        
        $this->book_now($ID_cruise);
        }else{
            $this->view('booking');
        }
    }

    public function ticket()
    {
       
        $ID_user = $_SESSION['Id'];
    
        $reservation = $this->reservationModel->getreservationByUserID($ID_user);
  
        
        
        $data=[
          
            'reservations'=>$reservation
        ];
        
    
        $this->view('ticket',$data);
        
    }

    public function book_now($id)
    {  
            $ID_user = $_SESSION['Id'];

            $reservation = $this->reservationModel->getreservationByUserID($ID_user);

            // $cruise = $this->cruiseModel->getCruise($id);
                  
            $data=[
                // 'cruise'=> $cruise,
                'reservations' => $reservation
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
        $this->view('book_now',$data);
    }



    public function insertAllinfo()
    {
        
        $room = $_POST['id_roomType_price'];
        $roomTypeArray = explode(" ", $room);
        $id_roomType = $roomTypeArray[0];
        $priceRoomType = $roomTypeArray[1];
        $bookingDate = $_POST["date"];
        $totalPrice = (float)$_POST["Price"] + (float)$priceRoomType;
        $id_cruise = $_POST["id_cruise"];
        $id_user =  1;
        $this->reservationModel->insertReservation($id_user,$bookingDate,$totalPrice,$id_roomType, $id_cruise);
        
        $this->view('home');
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
        $this->ticket();
    }
}


