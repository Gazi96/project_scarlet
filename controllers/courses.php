<?php

class Courses extends Controller {

    function __construct() {
        parent::__construct();

    }
    
    function index() {
        $this->view->title = 'Kursy';
        $this->view->data = $this->model->getCourses();
        $this->view->render('courses/index');
    }
}
