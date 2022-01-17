<?php
/**
 * Шаблон личного кабинета
 * ================
 * $text - текст статьи
 */

if(empty($_SESSION)):?>
    <a href="index.php?act=auth&c=User"> <button>Вы не авторизированы Вход</button></a>
<?php
else:
?>



<h1>Hello! <?= $user ?></h1>
    <a href="index.php?act=exit&c=User"> <button>Выход</button></a>
<?php
endif;