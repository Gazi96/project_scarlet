<?php
if(!isset($_COOKIE['counter'])){
    setcookie("counter", "1", time()+36000);

    $db = new Database();
    
    $sth = $db->prepare("UPDATE counters SET count = count+1 "
                . "WHERE name = :name");
    $sth->execute(array(
        ':name' => 'countViewers'
    ));
    
    unset($db);
}



