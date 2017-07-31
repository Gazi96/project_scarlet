<?php

class Admin_skarletModel extends Model {

    function __construct() {
        parent::__construct();
        
    }
    
    function action(){
        $login = htmlentities(filter_input(INPUT_POST, 'login', 
                        FILTER_SANITIZE_STRING),ENT_QUOTES);
        
        $password = htmlentities(filter_input(INPUT_POST, 'password', 
                        FILTER_SANITIZE_STRING),ENT_QUOTES);
        
        $sth = $this->db->prepare("SELECT userid, role FROM users "
                . "WHERE login = :login AND password = :password");
        
        $sth->execute(array(
            ':login' => $login,
            ':password' => md5($password)
        ));
        
        $count = $sth->rowCount();
        if($count > 0) {
            Session::destroy();
            Session::init();
            Session::set('a2adebdt39$0', true);
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            Session::set('userID', $data[0]['userid']);
            if($data[0]['role'] == 'admin') {
                Session::set('37b421#lcas$oo0$e', true);
                header('location: '.URL.'adminboard');
            } else {
                return true;
            }
        } else {
            return false;
        }
    }
}
