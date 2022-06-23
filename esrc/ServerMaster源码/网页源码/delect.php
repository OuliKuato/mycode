<?php
if(empty($_GET['name']) || empty($_GET['name'])) exit('您的变量为空');
unlink($_GET['name']);
?>