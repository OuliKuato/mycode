<?php
   $num=0;    //������¼Ŀ¼�µ��ļ�����
   $dirname='./r18'; //Ҫ������Ŀ¼����
   $dir_handle=opendir($dirname);




   while($file=readdir($dir_handle))
   {
   	 if($file!="."&&$file!="..")
   	 {
   	 	$dirFile=$dirname."/".$file;
   	 	echo '<tr bgcolor='.$bgcolor.'>';

   	 	echo '<td><a href="r18/'.$file.'" target="_blank">'.$file.'</a><br></td>'; //���� ����


   	 	echo '</tr>';
   	 }
   }
   echo '</table>';
   closedir($dir_handle);

?>
