<?php
header("content-type:text/html;charset=UTF-8");
defined('_ROOT') or exit('error');
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">';
echo '<html xmlns="http://www.w3.org/1999/xhtml">';
echo <<<HTML
<head><title>{$title}</title>
<style type="text/css">
.c1{
background-color : #d2ff8d;
padding:5px;
}
.login{
float:right;
}
.hlogin{
text-align:right;
}
.cpy{
background-color:#fcffb3;
color:#aaa;
border:1px solid #ddd;
text-align:center;
}
a:link{
color:#0000ff;
text-decoration:none;
}
a:visited{
color:#e900d4;
text-decoration:none;
}
a:hover{
color:#ff0000;
text-decoration:underline;
}
hr{
height:1px;
border:1px solid #ececec;
}
.list{
text-align:left;
/*background-color:#eee;*/
border:1px solid #ececec;
border-radius:6px;
padding:7px;
margin:1px;
}
body{
width:95%;
font-size:15px;
text-align:left;
background-color:#fcfcfc;
color:#000000;
border:2px solid #ececec;
margin:3px;
padding:3px;
}
.c3{
font-size:12px;
color:#bcbcbc;
}
</style>
</head>
<body style="background:#aaa">
HTML;
?>