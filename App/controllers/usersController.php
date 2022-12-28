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
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $_POST = filter_input_array(INPUT_POST);
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_error' => '',
                'password_error' => ''
            ];

            

            if (empty($data['email'])) {
                $data['email_error'] = 'please enter your email';
            }
        
            if (empty($data['password'])) {
                $data['password_error'] = 'please enter your password';
            }
        
            if ($this->userModel->getUserByEmail($data['email'])) {
                // user found
                
            } else {
                // User not found
                $data['email_error'] = 'No user found';
            }
        
            if (empty($data['email_error']) && empty($data['password_error'])) {
                // Validated
                // Check and set logged in user
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);
        
                if ($loggedInUser) {
                    // Create session
                      $this->createUserSession($loggedInUser);
                      $this->view('home');
                } else {
                    $data['password_error'] = 'Incorrect password';
                    $this->view('login', $data);
                }
            } else {
                // Load view with errors
                $this->view('login', $data);
            }
        
            $email = $data['email'];
            $password = $data['password'];
            // $role = $this->user->dbform($email, $password);
            // echo $role;
            // if ($role == 'Admin') {
            //     die('welcome Admin');
            // } else {
            //     $user =  $this->user->getUserByEmail($email);
            //     die($user);
            // }
        } else {
            // here we load the form
            // init data
            $data = [
                'email' => '',
                'password' => '',
                'email_error' => '',
                'password_error' => ''
            ];
        
            // Load view
            $this->view('booking', $data);
        }
        
        }
        public function createUserSession($user){
            $_SESSION['Id'] = $user->Id;
            $_SESSION['email'] = $user->email;
            $_SESSION['name'] = $user->name;
            
            // $_SESSION['user_role'] = $user->role;
            // $_SESSION['is_admin'] = 'block';
            // $_SESSION['is_user'] = 'block';
          }

          public function logOut(){

           unset($_SESSION['id'] ) ;
           unset($_SESSION['email']) ;
           unset($_SESSION['name']) ;

           session_destroy();
           $this->view('login');

          }


    /////////////////////////////////////////////////////////////////


    public function register()
    {


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // die('heyyyyyy');

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
}


            
    

            
            
            
            
        
      