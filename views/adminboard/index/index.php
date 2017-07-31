<h3>Dodaj wiadomość</h3>

<form action="<?php echo URL; ?>adminboard/index/action" method="post">
    <table>
        <tr>
            <td>Nazwa:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Treść:</td>
            <td><textarea class="area" name="content" rows="10"cols="40"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Dodaj"></td>
        </tr>
    </table>
</form>

<h3>Aktualności</h3>
<table>
<?php
$data = $this->data;
foreach($data as $row){
    echo '<tr><td>'.$row['name'].'</td><td>'.$row['date'].'</td>';
    echo '<td>'.$row['content'].'</td>';
    echo '<td><a href="'.URL.'adminboard/index/delete?id='.$row['newsid'].'">Usuń</a></td></tr>';
}
?>
</table>