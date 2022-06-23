<?php
   $num=0;    //用来记录目录下的文件个数
   $dirname='./r18'; //要遍历的目录名字
   $dir_handle=opendir($dirname);




   while($file=readdir($dir_handle))
   {
   	 if($file!="."&&$file!="..")
   	 {
   	 	$dirFile=$dirname."/".$file;
   	 	echo '<tr bgcolor='.$bgcolor.'>';

   	 	echo '<td><a href="r18/'.$file.'" target="_blank">'.$file.'</a><br></td>'; //名称 链接


   	 	echo '</tr>';
   	 }
   }
   echo '</table>';
   closedir($dir_handle);

?>
