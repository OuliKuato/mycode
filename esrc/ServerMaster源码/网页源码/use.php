<?php
   $num=0;    //用来记录目录下的文件个数
   $dirname='./'; //要遍历的目录名字
   $dir_handle=opendir($dirname);


  
   while($file=readdir($dir_handle))
   {
   	 if($file!="."&&$file!="..")
   	 {
   	 	$dirFile=$dirname."/".$file;


   	 	echo ''.$file.'<br>'; //名称 链接

   	 }
   }
   echo '</table>';
   closedir($dir_handle);
?>
