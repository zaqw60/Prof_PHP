<?php
//var_dump($_POST);
//var_dump($_GET);
?>

<div>
            <h1 style="margin: 0"><?= $info ?></h1>
          <form method="post">
            <input type="text" name="login" placeholder="Login">
            <p>Password</p>
            <input type="password" name="pass">
            <input type="submit" name="auth"  value="<?= $act ?>">
<!--            <input type="submit" name="auth" value="Авторизация">-->
<!--            <input type="submit" name="exit" value="Выход">-->
          </form>
</div>