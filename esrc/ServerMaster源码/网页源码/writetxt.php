<?php
if(empty($_GET['name']) || empty($_GET['text'])) exit('您的变量为空');
file_put_contents($_GET['name'].'.txt', $_GET['text']);
?>