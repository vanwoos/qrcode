<?php
require './init.php';
require './lib/phpqrcode.php';
require './lib/functions.php';
$text=getSubmit('text');//文本
$text=mb_substr($text,0,MAX_LENGTH,'utf-8');
$level=getSubmit('level');//容错率（0-3）
$level=intval($level);
$level=($level=='' || $level<0 || $level>3)?0:$level;
$levels=array(QR_ECLEVEL_L,QR_ECLEVEL_M,QR_ECLEVEL_Q,QR_ECLEVEL_H);
$level=$levels[$level];
$size=getSubmit('size');//图片大小
$size=intval($size);
$size=($size<=0)?3:$size;
$margin=getSubmit('margin');//周围的外边距
$margin=intval($margin);
$margin=($margin<=0)?3:$margin;
QRcode::png($text,false,$level,$size,$margin);
?>