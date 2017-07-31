<?php

class Settings extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        require 'views/adminboard/header.php';
        $this->view->render('adminboard/settings/index', false);
        require 'views/adminboard/footer.php';
    }
    
    function action(){
        $flag = true;
        
        $pass_1 = htmlentities(filter_input(
                        INPUT_POST, 'newPassword', FILTER_SANITIZE_STRING), ENT_QUOTES);
        $pass_2 = htmlentities(filter_input(
                        INPUT_POST, 'rePassword', FILTER_SANITIZE_STRING), ENT_QUOTES);

        if (!preg_match('/[a-z]/', $pass_1) || !preg_match('/[A-Z]/', $pass_1) || !preg_match('/[0-9]/', $pass_1)) {
            $flag = FALSE;
            $this->view->error['e_pass'] = "Hasło musi zawiersć przynajmniej jedną wielką literę oraz cyfrę";
        }

        if ((strlen($pass_1) < 8) || (strlen($pass_1) > 64)) {
            $flag = FALSE;
            $this->view->error['e_pass'] = "Hasło musi posiadać od 8 do 64 znaków.";
        }

        if (strlen($pass_1) == 0) {
            $flag = FALSE;
            $this->view->error['e_pass'] = "Wpisz swoje hasło.";
        }

        if ($pass_1 !== $pass_2) {
            $flag = FALSE;
            $this->view->error['e_pass'] = "Hasła muszą być takie same.";
        }
        
        
        $password = htmlentities(filter_input(
                        INPUT_POST, 'oldPassword', FILTER_SANITIZE_STRING), ENT_QUOTES);
        $flag = $this->model->checkPassword($password);
        
        if($flag) {
            $this->model->action($pass_1);
            header('location: '.URL.'adminboard');
        } else {
            $this->index();
        }
    }
}