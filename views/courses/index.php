<?php

$data = $this->data;

foreach($data as $row){
    echo '<h3>'.$row['name'].'</h3>';
    echo '<p>W każdy: '.$row['day'].' w godzinach: '.$row['hour'].'</p>';
    echo '<p>Zajęcia prowadzone przez: '.$row['firstname'].' '.$row['lastname'].' w sali:'.$row['room'].'</p>';
    echo '<p>'.$row['coursdescribe'].'</p>';
    echo '<hr>';
}