<?php 
require_once 'config/connect.php';
// require_once 'index.php';
?>
<pre>
    <?php
    //todo здесь должна была быть функция получения текста по имени
    $texts = mysqli_query($connect, "SELECT * FROM `texts`");
    $texts = mysqli_fetch_all($texts);
    print_r($texts);
    ?>
</pre>