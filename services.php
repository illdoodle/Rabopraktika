<?php 
require_once 'config/connect.php';
// $query = $connect->query("SELECT * FROM `texts`");
// $texts = $query->fetchAll(PDO::FETCH_ASSOC);

$texts = mysqli_query($connect, "SELECT * FROM `texts`");
$texts = mysqli_fetch_all($texts);
?>
<?php
function GetInnerByName($name, $texts){
    foreach($texts as $text){
        foreach($text as $textName){
            if($textName == $name){
                // return $text[2];
                echo $text[2];
                return;
            }
        }
    }
    echo 'Элемент не найден.';
}
?>