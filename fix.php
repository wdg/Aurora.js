<?php

 // $replace = "/_.js_data\//";
 $replace = "/_.js.data\//";
 $repalso = "/src='_.js'/";
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
 			$read = preg_replace($repalso, "src='https://raw.githubusercontent.com/wdg/_.js/master/".substr($file, 0, 3)."/_.js'", $read);
 			file_put_contents($file, $read);
 		}
 	}
 }

 //.. index
 $file = "index.html";
 $read = file_get_contents($file);
 $read = preg_replace($replace, null, $read);
 $read = preg_replace($repalso, "src='https://raw.githubusercontent.com/wdg/_.js/master/latest/_.js'", $read);
 file_put_contents($file, $read);

?>