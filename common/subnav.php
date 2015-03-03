<div class="subnav_container">
<?php
for($i=0;$i<count($sitemap);$i++) {
	if ($sitemap[$i][2]) {
		echo '<ul style="position: absolute; top: 0px; left: '.$sitemap[$i][3].'px; display: none;" id="subnav_'.$i.'" onmouseover="nav_over('.$i.');" onmouseout="nav_out('.$i.');">';
		for($j=0;$j<count($sitemap[$i][2]);$j++) {
		$subnav_on = ($section_id == $i && ($q_two_type && $page_id == $j)) ? '_on' : NULL;
		echo '<li class="nav_item'.$subnav_on.'" id="subnav_'.$i.'_'.$j.'" onclick="gonav('.$i.','.$j.'); return false;">'.$sitemap[$i][2][$j].'</li>';
		}
		echo '</ul>';
	}
}
?>
</div>
