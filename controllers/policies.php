<?php

class Policies extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Regulamin';
        $this->view->render('policies/index');
    }
}
