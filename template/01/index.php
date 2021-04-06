<!-- 小刀娱乐网交：www.xiaodao.biz 流学习QQ群：595526 -->
<?php
$yw=$_GET['y'];  if($yw==''){$yw='我';}
$name=$_GET['n'];   if($name==''){$name='我';}
$haoma=$_GET['h'];  if($haoma==''){$haoma='555';}
$img=$_GET['i'];
$dst_path = '1591692383.png'; 
$dst = imagecreatefromstring(file_get_contents($dst_path));
$src_image_2 = imagecreatefromstring(file_get_contents($img));
$src_image_width_2 = imagesx($src_image_2); //宽
$src_imageheight_2 = imagesy($src_image_2); //高
imagecopymerge($dst, $src_image_2, 162,240, 0, 0,117, 150,80);
$font = 'songti.ttf';//字体
$black = imagecolorallocate($dst, 124, 135, 161);
imagefttext($dst, 12, 0, 225, 438, $black, $font, $name);
imagefttext($dst, 12, 0, 220, 465, $black, $font, $yw);
imagefttext($dst, 12, 0, 210, 496, $black, $font, $haoma);

list($dst_w,$dst_h,$dst_type) = getimagesize($dst_path);
switch($dst_type){
  case 1://GIF
    header("content-type:image/gif");
    imagegif($dst);
    
    break;
  case 2://JPG
    header("content-type:image/jpeg");
    imagejpeg($dst);
    
    break;
  case 3://PNG
    header("content-type:image/png");
    imagepng($dst);
   
    break;
  default:
    break;
}
imagedestroy($dst);
?>