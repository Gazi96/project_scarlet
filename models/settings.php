<?php

class SettingsModel extends Model {

    function __construct() {
        parent::__construct();
        
    }
    
    function action($pass){
        $sth = $this->db->prepare("UPDATE users SET password = :password "
                    . "WHERE userid = :userid");
        
        $sth->execute(array(
            ':password' => md5($pass),
            ':userid' => Session::get('userID')
        ));
    }
    
    function checkPassword($pass){
        $sth = $this->db->prepare("SELECT userid FROM users "
                . "WHERE userid = :userid AND password = :password");
        
        $sth->execute(array(
            ':userid' => Session::get('userID'),
            ':password' => md5($pass)
        ));
        
        $count = $sth->rowCount();
        if($count > 0) {
            return true;
        } else {
            return false;
        }
    }
}
