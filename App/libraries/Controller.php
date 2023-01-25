<?php

//base controller 
//load the models and views

class Controller 
{
    //load model
    public function model($model){
        //require model file
        require_once '../App/models/'.$model.'.php';

        //instatiate model
        return new $model();
    }

    //load view
    public function view($view ,$data = [])
    {
        //check for view file
        if(file_exists('../App/views/'.$view.'.php'))
        {
            require_once '../App/views/'.$view.'.php';
        }
        else{
            die('view does not exist');
        }
    }
}


?>