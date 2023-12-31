<?php
/*
 * Created on Apr 6, 2006
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 $mlsnum = $HTTP_GET_VARS['mlsnum'];
 $serialnum = $HTTP_GET_VARS['serial'];
 
 if (!isset($serialnum) || $serialnum == "") {
 	$serialnum = 1;	
 }
 
 
 
 
if(file_exists("../media/MLSImages/".$mlsnum."_".$serialnum.".jpg")){
		
	//CreateImage(100,"c:\\wamp\\www\\bsafeed\\media\\MLSImages\\".$mlsnum."_".$serialnum.".jpg","c:\\wamp\\www\\bsafeed\\media\\MLSThumbnails\\".$mlsnum."_1.jpg");
	$imageLink = "<img  src='../media/MLSImages/".$mlsnum."_".$serialnum.".jpg'></a>" ;
} else {
		$imageLink = "&nbsp;";	
}





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

		/*
		$new_width = $size;
		$new_height = ceil($size * $height / $width);
		*/
		$new_height = $size;
		$new_width = ceil($size * $width / $height);
		
		
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

for($iter=0; $iter<20; $iter++){
	/*
	if(file_exists("MLSImages/".$mlsnum."_".$iter.".jpg")) {
		echo "<a href='?mlsnum=".$mlsnum."&serial=".$iter."'>Image " . $iter . "</a> &nbsp;";
	}
	*/
	
   	if(file_exists("../media/MLSThumbnails/".$mlsnum."_".$iter.".jpg")){
	
		$imageLinkTn = "<a href='?mlsnum=".$mlsnum."&serial=".$iter."'><img height=75 src='../media/MLSThumbnails/".$mlsnum."_".$iter.".jpg'></a>" ;
	
	} else if(file_exists("../media/MLSImages/".$mlsnum."_".$iter.".jpg")){
			
		CreateImage(75,"c:\\wamp\\www\\bsafeed\\media\\MLSImages\\".$mlsnum."_".$iter.".jpg","c:\\wamp\\www\\bsafeed\\media\\MLSThumbnails\\".$mlsnum."_".$iter.".jpg");
		$imageLinkTn = "<a href='?mlsnum=".$mlsnum."&serial=".$iter."'><img height=75 src='../media/MLSThumbnails/".$mlsnum."_".$iter.".jpg'></a>" ;
	} else {
			$imageLinkTn = "&nbsp;";	
	}
	
	echo $imageLinkTn;
	
	
}
echo "<br>";

echo $imageLink;

?>



