<?php 
require_once 'config/connect.php';
$texts = mysqli_query($connect, "SELECT * FROM `texts`");
$texts = mysqli_fetch_all($texts);
?>
<?php
// $name = 'help-title';
// GetInnerByName($name, $texts);
function GetInnerByName($name, $texts){
    foreach($texts as $text){
        foreach($text as $textName){
            if($textName == $name){
                echo $text[2];
                // return $text[2];
                return;
            }
        }
    }
    echo 'Элемент не найден.';
}
?>