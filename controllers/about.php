<?php

class About extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'O Nas';
        $this->view->render('about/index');
    }
}
