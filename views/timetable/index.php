<form action="<?php echo URL; ?>timetable/action" method="post">
    <table>
<?php

$timetable = $this->timetable;
$courses = $this->courses;
$number = $this->number;

if ($timetable == null) {
    $timetable[0]['couid'] = -1;
} else {
    $key = array_search($timetable[0]['couid'], array_column($courses, 'couid'));
    echo '<h3>Aktualnie jesteś zapisany na kurs:'.$courses[$key]['name'].'</h3>';
    echo '<input type="hidden" name="actual" value="'.$timetable[0]['timid'].'">';
}
            foreach ($courses as $course) {
                echo '<tr><td><input type="radio" name="course" value="'.$course['couid'];
                if($timetable[0]['couid'] == $course['couid']){
                    echo '" checked="checked">';
                } else {
                    echo '">';
                }
                echo $course['name'].'</td><td>';
                if(isset($number[$course['couid']])){
                    echo count($number[$course['couid']]).'/'.COU.'</td>';
                } else {
                    echo '0/'.COU.'</td>';
                }
                
            }
        ?>
        <tr>
            <td></td>
            <td><input type="submit" value="Zapisz"</td>
        </tr>
    </table>
</form>