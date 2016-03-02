<?php
ob_start();
require './init.php';
require LIB_DIR.'functions.php';
G('start');

doStripslashes();
$act=getSubmit('act');
$act=($act=='')?'show':$act;
switch($act)
{
	case 'show':
	$title='QR code';
	break;

	case 'index':
	$title='功能选择';
	break;

	case 'upload':
	$title='本地文件上传';
	break;

	case 'urlupload':
	$title='远程文件上传';
	break;

	case 'manager':
	$title='文件管理';
	break;
	
	case 'login':
	$title='用户登入';
	break;
	
	case 'reg':
	$title='用户注册';
	break;
	
	case 'player':
	$title='文件预览';
	break;
	
	default:
	$title='';
	break;
}
require VIEW_DIR.'header.php';
if($title!='' && file_exists(VIEW_DIR.$act.'.php'))
{
	require VIEW_DIR.$act.'.php';
}else{
	echo '404';
}
require VIEW_DIR.'footer.php';



ob_end_flush();
?>