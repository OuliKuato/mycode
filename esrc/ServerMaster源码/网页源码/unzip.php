<?php
if(empty($_GET['name']) || empty($_GET['name'])) exit('���ı���Ϊ��');
$zip = new ZipArchive;
if ($zip->open($_GET['name']) === TRUE)
{
$zip->extractTo('./');
$zip->close();
}
?>