<?php

class Gallery extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Galeria';
        $this->view->render('gallery/index');
    }
}
