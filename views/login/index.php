<div id="login">
    <h1>Login</h1>
    <form action="<?php echo URL; ?>admin_skarlet/action" method="post">
        <table>
            <?php if(isset($this->error)): ?>
            <tr><td><?php echo $this->error; ?></td></tr>
            <?php //unset($this->error); ?>
            <?php endif; ?>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="login"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Login!"></td>
            </tr>
        </table>
    </form>
</div>
