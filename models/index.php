<?php

class IndexModel extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function getNews() {
        $sth = $this->db->prepare("SELECT * FROM news");
        $sth->execute(array());
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}