<?php
class TimetableAdmin extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        require 'views/adminboard/header.php';
        #$this->view->data = $this->model->getNews();
        $this->view->render('adminboard/timetable/index', false);
        require 'views/adminboard/footer.php';
    }

    /*function action() {
        $flag = true;
        $name = htmlentities(filter_input(
                        INPUT_POST, 'name', FILTER_SANITIZE_STRING), ENT_QUOTES);

        if (strlen($name) > 50) {
            $flag = FALSE;
            $name = '';
            $this->view->error['e_name'] = "Podana nazwa jest zbyt długa.";
        } else {

            if (strlen($name) == 0) {
                $flag = FALSE;
                $name = '';
                $this->view->error['e_name'] = "Wpisz nazwę.";
            }
        }
        
        $content = htmlentities(filter_input(
                        INPUT_POST, 'content', FILTER_SANITIZE_STRING), ENT_QUOTES);

        if (strlen($content) > 512) {
            $flag = FALSE;
            $content = '';
            $this->view->error['e_content'] = "Podana nazwa jest zbyt długa.";
        } else {

            if (strlen($name) == 0) {
                $flag = FALSE;
                $content = '';
                $this->view->error['e_content'] = "Wpisz nazwę.";
            }
        }
        
        if ($flag) {
                $this->model->action($name, $content);
                header('location: ' . URL . 'adminboard/index');
            } else {
                $this->index();
            }
    }
    
    function delete() {
        $id = htmlentities(filter_input(
                    INPUT_GET, 'id', FILTER_SANITIZE_STRING), ENT_QUOTES);
        
        $this->model->delete($id);
        header('location: ' . URL . 'adminboard/index');
    }
    */
}
