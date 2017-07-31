<?php

class AdminIndexModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function action($name,$content) {
        $date = date('d.m.Y H:i');
        
        $sth = $this->db->prepare("INSERT INTO news "
                . "VALUES (NULL,:name,:content,:date)");
        $sth->execute(array(
            ':name' => $name,
            ':content' => $content,
            ':date' => $date
        ));
    }
    
    function getNews() {
        $sth = $this->db->prepare("SELECT * FROM news");
        $sth->execute(array());
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function delete($id){
        $sth = $this->db->prepare("DELETE FROM news "
                . "WHERE newsid = :id");
        $sth->execute(array(
            ':id' => $id
        ));
    }
}