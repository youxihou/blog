<?php
class Crop_img{
	private $url;
	private $src;
	private $filename;
    public function __construct($props = array()){
        if (count($props) > 0){
        	$this->url = $props['url'];
        	$this->src = './uploads/'.preg_replace('/_(\d+)_(\d+)/', '', $this->url);
        	$this->filename = './uploads/'.$this->url;
            $this->check_file($this->filename);
        }

    }

    private function  check_file($filename){
        if (file_exists($filename)){
            ob_start();
            header('Content-type:image/jpeg');
            readfile($filename);
            ob_flush();
            flush();
        }else{

            if(!preg_match('/_(\d+)\*(\d+)/', $this->url, $wh)){
                $this->default_crop();
                exit();
            }
            $width = $wh[1];
            $height = $wh[2];
            $this->thumb(realpath($this->src), $width, $height, $filename, 'crop', '85');
        }               
    }

}



private function thumb($src, $width, $height, $filename, $mode = 'scale', $quality = '100') {
try {
$imageValue = getimagesize($src);
$sourceWidth = $imageValue[0]; //原图宽
$sourceHeight = $imageValue[1]; //原图高
$thumbWidth = $width; //缩略图宽
$thumbHeight = $height; //缩略图高
$_x = 0;
$_y = 0;
$w = $sourceWidth;
$h = $sourceHeight;
if ($mode == 'scale') {
if ($sourceWidth <= $thumbWidth && $sourceHeight <= $thumbHeight) {
$_x = floor(($thumbWidth - $sourceWidth) / 2);
$_y = floor(($thumbHeight - $sourceHeight) / 2);
$thumbWidth = $sourceWidth;
$thumbHeight = $sourceHeight;
} else {
if ($thumbHeight * $sourceWidth > $thumbWidth * $sourceHeight) {
$thumbHeight = floor($sourceHeight * $width / $sourceWidth);
$_y = floor(($height - $thumbHeight) / 2);
} else {
$thumbWidth = floor($sourceWidth * $height / $sourceHeight);
$_x = floor(($width - $thumbWidth) / 2);
}
}
} else if ($mode == 'crop') {
if ($sourceHeight < $thumbHeight) { //如果原图尺寸小于当前尺寸 
$thumbWidth = floor($thumbWidth * $sourceHeight / $thumbHeight);
$thumbHeight = $sourceHeight;
}
if ($sourceWidth < $thumbWidth) {
$thumbHeight = floor($thumbHeight * $sourceWidth / $thumbWidth);
$thumbWidth = $sourceWidth;
}

$s1 = $sourceWidth / $sourceHeight; //原图比例
$s2 = $width / $height; //新图比例
if ($s1 == $s2) {

} else if ($s1 > $s2) { //全高度 
$y = 0;
$ax = floor($sourceWidth * ($thumbHeight / $sourceHeight));
$x = ($ax - $thumbWidth) / 2;
$w = $thumbWidth / ($thumbHeight / $sourceHeight);

} else { //全宽度 
$x = 0;
$ay = floor($sourceHeight * ($thumbWidth / $sourceWidth)); //模拟原图比例高度
$y = ($ay - $thumbHeight) / 2;
$h = $thumbHeight / ($thumbWidth / $sourceWidth);
}

}
switch ($imageValue[2]) {
case 2: $source = imagecreatefromjpeg($src);
break;
case 1: $source = imagecreatefromgif($src);
break;
case 3: $source = imagecreatefrompng($src);
break;
case 6: $source = imagecreatefromwbmp($src);
break;
default: $this->default_crop();
return;
}
header("Content-type: image/jpeg");
$thumb = imagecreatetruecolor($width, $height);
imagefill($thumb, 0, 0, imagecolorallocate($thumb, 255, 255, 255));
imagecopyresampled($thumb, $source, 0, 0, $x, $y, $width, $height, $w, $h);
imagejpeg($thumb, null, $quality);
// if ($_SERVER['HTTP_REFERER'] || false !== stripos($_SERVER['HTTP_REFERER'], 'http://' . $_SERVER['SERVER_NAME'])) {
imagejpeg($thumb, $filename, $quality);
// }
imagedestroy($thumb);
imagedestroy($source);
} catch (Exception $ex) {
    $this->default_crop();
}
}

function default_crop() {
$default_img = realpath('media/images/nopic.jpg');
ob_start();
header('Content-type:image/jpeg');
readfile($default_img);
ob_flush();
flush();
}