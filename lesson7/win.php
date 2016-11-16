<?php
include 'functions7.php';
if (isset($_GET['text'])) {
    $text = $_GET['text'];
}
createImageWin($text);
    
?>