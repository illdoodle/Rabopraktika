<?php 
require_once 'config/connect.php';
// require_once 'index.php';
$texts = mysqli_query($connect, "SELECT * FROM `texts`");
$texts = mysqli_fetch_all($texts);
?>
<pre>
    <?php
    print_r($texts);
    ?>
</pre>