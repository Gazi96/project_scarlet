<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Home';
        $this->view->data = $this->model->getNews();
        $this->view->render('index/index');
    }
}
