<?PHP

function CreateImage($size,$source,$dest,$border=0) {
	$sourcedate = 0;
	$destdate = 0;
	$ImageTool = "im";
	$convert="c:\\ImageMagick-5.5.7-Q8\\convert.exe";

	if (file_exists($dest)) {
		clearstatcache();
		$sourceinfo = stat($source);
		$destinfo = stat($dest);
		$sourcedate = $sourceinfo[10];
		$destdate = $destinfo[10];
	}
	if (!file_exists("$dest") or ($sourcedate > $destdate)) {
		//global $ImageTool;
		$imgsize = GetImageSize($source);
		$width = $imgsize[0];
		$height = $imgsize[1];

		$new_width = $size;
		$new_height = ceil($size * $height / $width);
		if ($ImageTool == "gd") {
			$im = ImageCreateFromJPEG($source);
			$new_im = ImageCreate($new_width,$new_height);

			ImageCopyResized($new_im,$im,0,0,0,0,$new_width,$new_height,ImageSX($im),ImageSY($im));

			ImageJPEG($new_im,$dest,75);
		} elseif ($ImageTool == "im") {
			//echo "$convert -quality 80 -antialias -sample $new_width" . "x" . "$new_height -bordercolor black -border $border \"$source\" \"$dest\" 2>&1 <br><br>";
			system("$convert -quality 80 -antialias -sample $new_width" . "x" . "$new_height -bordercolor black -border $border \"$source\" \"$dest\" 2>&1");
		}
	}
}



?>