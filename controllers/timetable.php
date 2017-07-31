<?php

class Timetable extends Controller {

    function __construct() {
        parent::__construct();
        
    }
    
    function index() {
        $this->view->title = 'Zajęcia';
        $this->view->courses = $this->model->getCourses();
        
        $date = date('W y');
        $userid = Session::get('userID');
        $this->view->timetable = $this->model->getTimetable($userid, $date);
        $this->view->number = $this->model->getNumber($date);
        
        $this->view->render('timetable/index');
    }
    
    function action(){
        $couid = htmlentities(filter_input(INPUT_POST, 'course', 
                        FILTER_SANITIZE_STRING),ENT_QUOTES);
        
        $date = date('W y');
        $userid = Session::get('userID');
        
        if(isset($_POST['actual'])){
            $this->model->deleteTimetable($_POST['actual']);
        }
        
        $this->model->setTimetable($couid, $userid, $date);
        
        header('location: '.URL.'timetable');
    }
}
