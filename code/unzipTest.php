<?php
/*
 * Created on Apr 6, 2006
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 
$error = unzip("/wamp/www/bsaFeed/", "gsmls_changedphotos", 1);
echo $error;

function unzip($dir, $file, $verbose = 0) {

	$dir_path = $dir."MLSImages";
	$zip_path = "$dir$file.zip";
	
	$ERROR_MSGS[0] = "OK";
	$ERROR_MSGS[1] = "Zip path $zip_path doesn't exists.";
	$ERROR_MSGS[2] = "Directory $dir_path for unzip the pack already exists, impossible continue.";
	$ERROR_MSGS[3] = "Error while opening the $zip_path file.";
	
	$ERROR = 0;
	
	if (file_exists($zip_path)) {
	
		//if (!file_exists($dir_path)) {
			mkdir($dir_path);
			
			if (($link = zip_open($zip_path))) {
				
				while (($zip_entry = zip_read($link)) && (!$ERROR)) {
					
					if (zip_entry_open($link, $zip_entry, "r")) {
						
						$data = zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
						$dir_name = dirname(zip_entry_name($zip_entry));
						$name = zip_entry_name($zip_entry);
						
						if ($name[strlen($name)-1] == '/') {
							
							$base = "$dir_path/";
							
							foreach ( explode("/", $name) as $k) {
								
								$base .= "$k/";
								
								if (!file_exists($base)) {
									mkdir($base);
								}
								
							}
							
						} else {
							
							$name = "$dir_path/$name";
							
							if ($verbose)
							echo "extracting: $name<br>";
							
							$stream = fopen($name, "w");
							fwrite($stream, $data);
							
						}
						
						zip_entry_close($zip_entry);
						
					} else {
					         $ERROR = 4;
					}
				}
				zip_close($link);
			} else {
				$ERROR = "3";
			}
		/*
		} else {
			$ERROR = 2;
		}
		*/
	} else {
		$ERROR = 1;
	}
	return $ERROR_MSGS[$ERROR];

}


 
?>
