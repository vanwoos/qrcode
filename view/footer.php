<?php
defined('_ROOT') or exit('error');
/*if($pan->from=='')
{
echo <<<HTML
<div class="cpy">
Copyright：CFUNC
</div>
HTML;
}*/
echo <<<HTML
<div class="cpy">
执行用时：
HTML;
echo G(5);
echo <<<HTML
秒
</div>
HTML;
echo '</body></html>';
?>