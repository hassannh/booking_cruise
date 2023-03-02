<?php

class usersController extends Controller
{
    private $userModel;
    function __construct()
    {
        $this->userModel = $this->model('user');
    }

    public function login()
    {
        // echo '<pre>';
        // var_dump('hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh');
        // echo '</pre>';
        // exit;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $_POST = filter_input_array(INPUT_POST);
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => ''
            ];

            if(!$this->userModel->getUserByEmail($data['email'])){
                $data['email_err'] = 'User not exist';
            }
            if(empty($data['email'])) $data['email_err'] = 'Please enter email';
            if(empty($data['password'])) $data['password_err'] = 'Please enter password';

            if(empty($data['email_err']) && empty($data['password_err'])){

                $loggedInUser = $this->userModel->login($data['email'],$data['password']);
                if($loggedInUser){
                    // set The sessions
                  
                    $this->createUserSession($loggedInUser);
                    redirect('pages/home');
                }else {
                    // password incorrect
                    $data['password_err'] = 'Password Incorrect';
                    $this->view('login', $data);
                }
            }else{
                // user register failed
                $this->view('register', $data);
            }

        }
    }

    public function createUserSession($user)
    {
        $_SESSION['Id'] = $user->Id;
        $_SESSION['email'] = $user->email;
        $_SESSION['name'] = $user->name;
        $_SESSION['role'] = $user->role;
    }

    public function logOut()
    {

        $_SESSION['Id'] = null;
        $_SESSION['email'] = null;
        $_SESSION['name'] = null;
        $_SESSION['role'] = null;

        session_destroy();

        $this->view('login');
    }


    /////////////////////////////////////////////////////////////////


    public function register()
    {

        

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $_POST = filter_input_array(INPUT_POST);

            //init data
            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm-password' => trim($_POST['confirm-password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm-password_err' => ''
            ];
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter name';
            }

            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            }

            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            } elseif (strlen($data['password']) < 3) {
                $data['password_err'] = 'password must be at least 3 characters';
            }

            if (empty($data['confirm-password'])) {
                $data['confirm-password_err'] = 'Please confirm password';
            } else {
                if ($data['password'] != $data['confirm-password']) {
                    $data['confirm-password_err'] = 'password do not match';
                }
            }
            if($this->userModel->getUserByEmail($data['email'])){
                $data['email_err'] = 'Email exist';
            }

            //make sure that errors are empty
            if (
                empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err'])
                && empty($data['confirm_password_err'])
            ) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // Register User
                if ($this->userModel->register($data)) {
                    $this->view('login');
                } else {
                    die('Something went wrong');
                }
            } else {
                //load view with errors
                $this->view('register', $data);
            }
        } else {
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm-password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm-password_err' => ''
            ];
            // load the view
            $this->view('register', $data);
        }
    }
    public function index()
    {
        $this->view('home');
    }
}
