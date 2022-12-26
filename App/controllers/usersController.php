<?php

class userController extends Controller
{
    function __construct()
    {
        $this->user = $this->model('user');
    }

    public function login($data)
    {
        // echo ("hassssan");
        // die(print_r($data));
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $_POST = filter_input_array(INPUT_POST);
            $data=[
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_error' => '',
                'password_error' => ''
            ];

        if(empty($data['email'])){
            $data['email_error'] = 'please enter your email';
        }

        if(empty($data['password'])){
            $data['password_error'] = 'please enter your password';
        }

        if($this->user->getUserByEmail($data['email'])){
            // user found
        } else{
            // User not found
            $data['email_error'] = 'No user found';
        }

        if (empty($data['email_err']) && empty($data['password_err'])) {
            // Validated
            // Check and set logged in user
            $loggedInUser = $this->userModel->login($data['email'], $data['password']);
    
            if ($loggedInUser) {
              // Create session
            //   $this->createUserSession($loggedInUser);
            } else {
              $data['password_error'] = 'Incorrect password';
    
              $this->view('login', $data);
            }
          } else {
            // Load view with errors
            $this->view('login', $data);
          }

            // $email = $data['email'];
            // $password = $data['password'];
            // $role = $this->user->dbform($email, $password);
            // // echo $role;
            // if ($role == 'Admin') {
            //     die('welcome Admin');
            // } else {
            //     $user =  $this->user->getUserByEmail($email);
            //     die($user);
            // }
        } else{
            // here we load the form
      // init data
      $data = [
        'email' => '',
        'password' => '',
        'email_error' => '',
        'password_error' => '',
      ];

      // Load view
      $this->view('login', $data);
    }
    }


    public function register()
    {


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'name' => $_POST['userName'],
                'email' => $_POST['userEmail'],
                'password' => $_POST['userPassword'],
                'confirm-password' => $_POST['userConfirmPassword'],
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm-password_err' => ''
            ];
            if (empty($data['name'])) $data['name_err'] = 'Please enter name';
            if (empty($data['email'])) $data['email_err'] = 'Please enter email';
            if (empty($data['password'])) $data['password_err'] = 'Please enter password';
            if ($data['confirm-password'] !== $data['password']) $data['confirm-password_err'] = 'Passwords don\'t match';
            if (empty($data['confirm-password'])) $data['confirm-password_err'] = 'Please enter confirm password';
            // check if email exist
            if ($this->user->getUserByEmail($data['email'])) {
                $data['email_err'] = 'Email already exist';
            }
            if (!empty($data['name_err']) && !empty($data['email_err']) && !empty($data['password_err']) && !empty($data['confirm-password_err'])) {
                // user register failed
                $this->view('register', $data);
            } else {
                // user register success
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

            // load the register
            // $this->view('users/register',$data);
        }
    }
}















// $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);