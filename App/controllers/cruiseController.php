<?php

class cruiseController extends Controller
{
    public function __construct()
    {
        $this->cruiseModel = $this->model('Cruise');
        
    }

         public function booking()
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
        header('location:'.URLROOT.'Admin');
    }


    public function add_cruise()
    {
        $this->cruiseModel;
    }
}








// if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//     // die('heyyyyyy');

//     $_POST = filter_input_array(INPUT_POST);

//     //init data
//     $data = [
//         'name' => trim($_POST['name']),
//         'email' => trim($_POST['email']),
//         'password' => trim($_POST['password']),
//         'confirm-password' => trim($_POST['confirm-password']),
//         'name_err' => '',
//         'email_err' => '',
//         'password_err' => '',
//         'confirm-password_err' => ''
//     ];
//     if (empty($data['name'])) {
//         $data['name_err'] = 'Please enter name';
//     }

//     if (empty($data['email'])) {
//         $data['email_err'] = 'Please enter email';
//     }

//     if (empty($data['password'])) {
//         $data['password_err'] = 'Please enter password';
//     } elseif (strlen($data['password']) < 3) {
//         $data['password_err'] = 'password must be at least 3 characters';
//     }

//     if (empty($data['confirm-password'])) {
//         $data['confirm-password_err'] = 'Please confirm password';
//     } else {
//         if ($data['password'] != $data['confirm-password']) {
//             $data['confirm-password_err'] = 'password do not match';
//         }
//     }

//     //make sure that errors are empty
//     if (
//         empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err'])
//         && empty($data['confirm_password_err'])
//     ) {
        
//         // Hash password
// $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

// // Register User
// if ($this->userModel->register($data)) {
//     $this->view('login');
// } else {
//   die('Something went wrong');
// }
//     } else {
//         //load view with errors
//         $this->view('register', $data);
//     }
// } else {
//     $data = [
//         'name' => '',
//         'email' => '',
//         'password' => '',
//         'confirm-password' => '',
//         'name_err' => '',
//         'email_err' => '',
//         'password_err' => '',
//         'confirm-password_err' => ''
//     ];

//     // load the view
//     $this->view('register', $data);
// }
// }