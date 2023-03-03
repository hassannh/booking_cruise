

<?php


class Pages extends Controller
{
    public $User;
    public $portModel;
    public $shipModel;
    public function __construct()
    {
        $this->portModel = $this->model('port');
        $this->shipModel = $this->model('ship');
        $this->User = $this->model('user');
    }

    public function home()
    {

        $data = [
            'title' => 'HomePage'
        ];

        $this->view('home', $data);
    }

    
    public function home2()
    {

        $data = [
            'title' => 'HomePage2'
        ];

        $this->view('home2', $data);
    }

    


    public function booking()
    {
        $data = [
            'title' => 'booking'
        ];
        $this->view('booking', $data);
    }


    public function add()
    {
        $port = $this->portModel->getport();
        $ship = $this->shipModel->getship();
        $data = [
            'title' => 'add',
            'port' => $port,
            'ship'=>$ship
        ];

        $this->view('add', $data);
    }


    public function Admin()
    {
        $data = [
            'title' => 'Admin'
        ];
        $this->view('Admin', $data);
    }

    public function ticket()
    {
        $data = [
            'title' => 'ticket'
        ];
        $this->view('ticket', $data);
    }
    
    public function add_port()
    {
        $data = [
            'title' => 'add_port'
        ];
        $this->view('add_port', $data);
    }

    public function edite()
    {
        $data = [
            'title' => 'edite'
        ];
        $this->view('edite', $data);
    }


    public function Contact()
    {
        $data = [
            'title' => 'Contact'
        ];
        $this->view('Contact', $data);
    }


    
    
    public function Admin_ports()
    {
        $data = [
            'title' => 'Admin_ports'
        ];
        $this->view('Admin_ports', $data);
    }



    
    public function admin_ships()
    {
        $data = [
            'title' => 'admin_ships'
        ];
        $this->view('admin_ships', $data);
    }


    public function login()
    {
        $data = [
            'title' => 'login'
        ];
        $this->view('login', $data);
    }




    public function register()
    {
        $data = [
            'title' => 'register'
        ];
        $this->view('register', $data);
    }
    public function book_now()
    {
        $data = [
            'title' => 'book_now'
        ];
        $this->view('book_now', $data);
    }



    public function index()
    {
        echo 'hey';
    }
}
