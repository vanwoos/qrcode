<?php
/*公共函数库*/




/**
*自动加载类
*/
function __autoload($class)
{
	$class=strtolower($class);
	if(file_exists(LIB_DIR.$class.'.class.php'))
	{
		require_once LIB_DIR.$class.'.class.php';
	}else{
		exit($class.'加载失败。');
	}
}


function getSubmit($k,$type='REQUEST')//获取用户提交的表单
{
	switch($type)
	{
		case 'REQUEST':
		return isset($_REQUEST[$k])?$_REQUEST[$k]:'';
		break;
		case 'POST':
		return isset($_POST[$k])?$_POST[$k]:'';
		break;
		case 'COOKIE':
		return isset($_COOKIE[$k])?$_COOKIE[$k]:'';
		break;
		case 'GET':
		return isset($_GET[$k])?$_GET[$k]:'';
		break;
		default:
		exit('error');
		break;
	}
}



/**
 * 记录和统计时间（秒）
 */
function G($s) {
    static $_info=array();
    if($s=='start' || $s=='end'){// 记录开始或结束时间
		if(!isset($_info['start'])){
			$s='start';
		}
        $_info[$s]=microtime(true);
    }else if($s>=0 && isset($_info['start'])){// 输出时间统计的结果
		if(!isset($_info['end'])){
			$_info['end']=microtime(true);
		}
        return round(($_info['end']-$_info['start']),$s);
    }
    return -1;//出现错误
}






/**
 * 去除用户提交上的数据中的多余的转义字符
 */
function doStripslashes() {
	if (get_magic_quotes_gpc()) {
		$_GET = stripslashesDeep($_GET);
		$_POST = stripslashesDeep($_POST);
		$_COOKIE = stripslashesDeep($_COOKIE);
		$_REQUEST = stripslashesDeep($_REQUEST);
	}
}



/**
 * 递归去除转义字符
 */
function stripslashesDeep($value) {
	$value = is_array($value) ? array_map('stripslashesDeep', $value) : stripslashes($value);
	return $value;
}



/**
*把内容递归地转换成可以用于显示在网页中的格式
*/
function con2html($c) {
	if(is_array($c)){
		$c=array_map('con2html',$c);
	}else{
		$c=htmlentities($c,ENT_QUOTES,'utf-8');
		$c=str_replace(' ','&nbsp;',$c);
		$c=str_replace("\t",'&nbsp;&nbsp;&nbsp;&nbsp;',$c);
		$c=str_replace("\n",'<br />',$c);
	}
	return $c;
}



?>