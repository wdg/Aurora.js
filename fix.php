<?php

 $replace = "/_.js_data\//";

 $thisDir = opendir('.');

 while ( ($file = readdir($thisDir)) !== false) 
 {
 	if ( is_dir ( $file ) )
 	{
 		if ( is_numeric ( $file ) )
 		{
 			$file = $file . "/index.html";
 			$read = file_get_contents($file);
 			$read = preg_replace($replace, null, $read);
 			file_put_contents($file, $read);
 		}
 	}
 }

 //.. index
 $file = "index.html";
 $read = file_get_contents($file);
 $read = preg_replace($replace, null, $read);
 file_put_contents($file, $read);

?>