<?php

class TimetableModel extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function getCourses(){
        $sth = $this->db->prepare("SELECT c.couid, c.name, c.day, c.hour,"
                . " c.room, c.coursdescribe, w.firstname, w.lastname"
                . " FROM courses c LEFT JOIN workers w ON c.woid = w.woid");
        $sth->execute(array());
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function getTimetable($userid, $week) {
        $sth = $this->db->prepare("SELECT * FROM timetable "
                . "WHERE userid = :userid AND week = :week");
        $sth->execute(array(
            ':userid' => $userid,
            ':week' => $week
        ));
        
        $count = $sth->rowCount();
        if($count > 0){
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return null;
        }
    }
    
    function setTimetable($couid, $userid, $week){
        $sth = $this->db->prepare("INSERT INTO timetable "
                . "VALUES (NULL, :couid, :userid, :week)");
        $sth->execute(array(
            ':couid' => $couid,
            ':userid' => $userid,
            ':week' => $week
        ));
    }
    
    function getNumber($week){
        $sth = $this->db->prepare("SELECT * FROM timetable "
                . "WHERE week = :week");
        $sth->execute(array(
            ':week' => $week
        ));
        
        $count = $sth->rowCount();
        $number = array();
        if($count > 0){
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            for($i = 0; $i < count($data); $i++){
                $number[$data[$i]['couid']][$i] = $data[$i];
            }
            return $number;
        } else {
            return null;
        }
    }
    
    function deleteTimetable($timid){
        $sth = $this->db->prepare("DELETE FROM timetable "
                . "WHERE timid = :timid");
        $sth->execute(array(
            ':timid' => $timid
        ));
    }
}