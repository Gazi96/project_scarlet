<?php

class Music extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Muzyka';
        $this->view->render('music/index');
    }
}
