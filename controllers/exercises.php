<?php

class Exercises extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Wprawki';
        $this->view->render('exercises/index');
    }
}
