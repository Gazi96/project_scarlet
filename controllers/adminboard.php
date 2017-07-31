<?php

class Adminboard extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('a2adebdt39$0');
        $adm = Session::get('37b421#lcas$oo0$e');
        
        if ($logged == false || $adm == false) {
            Session::destroy();
            header('location: '.URL.'errorpage');
            exit;
        }
    }
    
    function index($func = '') {
        require 'controllers/adminboard/index.php';
        $controller = new Index();
        $controller->loadModel('adminIndex');
        if ($func != '') {
            $controller->{$func}();
        } else {
            $controller->index();
        }
    }
    
    function settings($func = '') {
        require 'controllers/adminboard/settings.php';
        $controller = new Settings();
        $controller->loadModel('settings');
        if ($func != '') {
            $controller->{$func}();
        } else {
            $controller->index();
        }
    }
    
    function timetable($func = '') {
        require 'controllers/adminboard/timetable.php';
        $controller = new TimetableAdmin();
        $controller->loadModel('settings');
        if ($func != '') {
            $controller->{$func}();
        } else {
            $controller->index();
        }
    }
    
    function logout(){
        Session::destroy();
        header('location: '.URL);
        exit;
    }
}
