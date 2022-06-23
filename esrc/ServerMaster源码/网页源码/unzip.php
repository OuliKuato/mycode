<?php
if(empty($_GET['name']) || empty($_GET['name'])) exit('您的变量为空');
$zip = new ZipArchive;
if ($zip->open($_GET['name']) === TRUE)
{
$zip->extractTo('./');
$zip->close();
}
?>