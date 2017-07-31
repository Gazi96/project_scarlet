<form action="<?php echo URL; ?>adminboard/settings/action" method="post">
    <table>
        <tr>
            <td>Old password:</td>
            <td><input type="password" name="oldPassword"></td>
        </tr>
        <tr>
            <td>New password:</td>
            <td><input type="password" name="newPassword"></td>
        </tr>
        <tr>
            <td>Re-password:</td>
            <td><input type="password" name="rePassword"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Zmień"></td>
        </tr>
    </table>
</form>

