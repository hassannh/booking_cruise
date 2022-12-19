

<?php


class Pages extends Controller
{
    public function __construct()
    {
        // var_dump('pages loaded');

    }

    public function home(){

        $data = [
            'title' => 'HomePage'
        ];

         $this->view('home',$data);
    }


    public function booking(){
        $data = [
            'title' => 'booking'
        ];
        $this->view('booking', $data);
    }


    public function add(){
        $data = [
            'title' => 'add'
        ];
        $this->view('add', $data);
    }


    public function Admin(){
        $data = [
            'title' => 'Admin'
        ];
        $this->view('Admin', $data);
    }


    public function edite(){
        $data = [
            'title' => 'edite'
        ];
        $this->view('edite', $data);
    }


    public function Contact(){
        $data = [
            'title' => 'Contact'
        ];
        $this->view('Contact', $data);
    }
    

    public function login(){
        $data = [
            'title' => 'login'
        ];
        $this->view('login', $data);
    }
}



?>