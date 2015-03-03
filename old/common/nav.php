<div class="nav_container">
<ul>

<li class="end_item"><img src="img/nav/end.gif" alt="" title="" border="0"></li>

<?php
for($i=count($sitemap)-1;$i>=0;$i--) {
echo '<li class="nav_item" id="nav_'.$i.'" onmouseover="nav_over('.$i.');" onmouseout="nav_out('.$i.');" onclick="gonav('.$i.(($i == 4) ? ',0' : NULL).');"><img src="img/nav/off/l.gif" alt="" title="" border="0" class="l" id="nav_l_'.$i.'">'.$sitemap[$i][1].'<img src="img/nav/off/r_last.gif" alt="" title="" border="0" class="r" id="nav_r_'.$i.'"></li>'."\n";
}
?>

</ul>

</div>
