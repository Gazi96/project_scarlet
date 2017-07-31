<?php

class DashboardModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function getUserDetails($id) {
        $sth = $this->db->prepare("SELECT u.login, d.name, d.surname, d.course, u.activation "
                . "FROM users u INNER JOIN userdetails d ON u.userid=d.userid"
                . " WHERE u.userid = :userid");
        $sth->execute(array(
            ':userid' => $id
        ));
        
        $data = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $data[0];
    }
    
    function updateUserDetails($id, $name, $surname, $email){
        $sth = $this->db->prepare("UPDATE userdetails SET name = :name, surname = :surname WHERE userid = :userid");
        $sth->execute(array(
            ':userid' => $id,
            ':name' => $name,
            ':surname' => $surname
        ));
        
        $std = $this->db->prepare("UPDATE users SET login = :email "
                    . "WHERE userid = :userid");
        $std->execute(array(
            ':userid' => $id,
            ':email' => $email
        ));
    }
}