<?php

class Errorpage extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Error';
        $this->view->render('errorpage/index');
    }
}
