<?php

class Pricelist extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Cennik';
        $this->view->render('pricelist/index');
    }
}
