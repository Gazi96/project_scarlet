<?php

class Admin_skarlet extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('a2adebdt39$0');
        
        if ($logged == true) {
            header('location: '.URL.'adminboard');
            exit;
        }
    }
    
    function index() {
        $this->view->title = 'Login';
        $this->view->render('login/index', false);
    }
    
    function action(){
        $flag = $this->model->action();
        
        if($flag){
            header('location: '.URL.'adminboard');
        } else {
            $this->view->error = 'Błędny login i/lub hasło';
            $this->index();
        }
    }
}