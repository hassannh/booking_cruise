

<?php


class Pages extends Controller
{
    public function __construct()
    {
        //  $this->postmodel = $this->model('Post');
        $this->User = $this->model('user');
    }

   /*  public function index()
    {
        echo "hi";
    } */

    public function home()
    {

        $data = [
            'title' => 'HomePage'
        ];

        $this->view('home', $data);
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
        $data = [
            'title' => 'add'
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

    public function index(){
        echo 'hey';
    }
}
