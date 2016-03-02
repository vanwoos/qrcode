<?php
defined('_ROOT') or exit('error');
require './lib/phpqrcode.php';
$text=getSubmit('text');//文本
$text=mb_substr($text,0,MAX_LENGTH,'utf-8');
$level=getSubmit('level');//容错率（0-3）
$level=intval($level);
$level=($level=='' || $level<0 || $level>3)?0:$level;
$size=getSubmit('size');//图片大小
$size=intval($size);
$size=($size<=0)?3:$size;
$margin=getSubmit('margin');//周围的外边距
$margin=intval($margin);
$margin=($margin<=0)?3:$margin;
if($text!='')
{
	$data=array('text'=>$text,
	'level'=>$level,
	'size'=>$size,
	'margin'=>$margin
	);
	$data=http_build_query($data);
	$text=con2html($text);
	echo <<<HTML
	<p>文本：{$text}</p>
	<p>容错率：{$level}</p>
	<p>图片大小：{$size}</p>
	<p>外边距：{$margin}</p>
<img style="max-width:100%;align:center" src="./api.php?{$data}" />
HTML;
}
else{
	$max_length=MAX_LENGTH;
echo <<<HTML
<form action="./?act=show" method="post">
<p>文本({$max_length}个字符)：<br /><textarea name="text" style="width:97%" rows="10" cols="20"></textarea></p>
<p>容错率(0-3)(缺省0)：<input name="level" size="5" /></p>
<p>图片大小(缺省3)：<input name="size" size="5" /></p>
<p>外边距(缺省3)：<input name="margin" size="5" /></p>

<p><input type="submit" value="生成" /></p>
</form>
HTML;
}
?>