<!doctype html>
<html>
    <head>
        <title>Panel Administracyjny - <?php  ?></title>
        <link rel="stylesheet" href='<?php echo URL; ?>private/css/default.css'/>
    </head>
    <body>
        <div id='header'>
            
            <?php Session::init();if(Session::get('a2adebdt39$0') == true): ?>
            <div align="right" ><a href="<?php echo URL; ?>adminboard/logout">Wyloguj</a></div>
            <?php endif; ?>
            
            <a href="<?php echo URL; ?>adminboard/index">Aktualności</a>
            <a href="<?php echo URL; ?>adminboard/timetable">Grafik</a>
            <a href="<?php echo URL; ?>adminboard/settings">Ustawienia</a>
            
        </div>
        <div id="content">