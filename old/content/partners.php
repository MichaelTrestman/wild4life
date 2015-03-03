<?php # FIELD PARTNERS ?>

<!-- begin sub content -->
<div class="sub_content_container">

<h2 class="lines"><?php echo $sitemap[$section_id][0]; ?></h2>

<!-- begin content -->

<style>
.partner_box {
	position: relative;
	float: left;
	margin: 30px 0 20px 0;
	overflow: hidden;
	}

.sub_content_container table {
	position: relative;
	float: left;
	width: 235px;
	height: 125px;
	margin: 0;
	padding: 0;
	border-left: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
	text-align: center;
	display: block;
	}

/*
.sub_content_container table.first {
	border-right: 0px;
	}

*/
.sub_content_container table.first {
	border-left: 0px;
	}

.sub_content_container td {
	width: 235px;
	height: 125px;
	vertical-align: middle;
	text-align: center;
	}

.sub_content_container td img {
	margin-left: 4px;
	max-width: 170px;
	max-height: 90px;
	display: inline-block;
	vertical-align: middle;
	}


</style>

<?php 

$partners = array();
array_push($partners, array('Wildlife Conservation Network','wcn_logo.gif'));
array_push($partners, array('Wildlife Conservation Society','wcs_logo.gif'));
array_push($partners, array('Wilderness Safaris','wildernesssafaris_logo.gif'));
array_push($partners, array('Gorongosa Restoration Project','gorongosa_logo.gif'));
array_push($partners, array('Olifants Game Reserve','olifantsriver_logo.gif'));
array_push($partners, array('Lewa Conservancy','lewawildlife_logo.gif'));
array_push($partners, array('Painted Dog Conservation','painteddog_logo.gif'));
array_push($partners, array('Pangaea','pangaea_logo.jpg'));
array_push($partners, array('The Mulago Foundation','mulago_logo.gif'));
array_push($partners, array('Draper Richards Kaplan Foundation','draper_logo2.gif'));
array_push($partners, array('Boehringer Ingelheim','boehringer_logo.gif'));
array_push($partners, array('One Acre Fund','oneacre_logo.gif'));
array_push($partners, array('Planet Wheeler','planetwheeler_logo.gif'));
array_push($partners, array('Global Strategies','globalstrategies_logo2.gif'));
array_push($partners, array('The Bohemian Foundation','bohemian_logo.gif'));
array_push($partners, array('The Positive Action for Children Fund','positiveaction_logo.gif'));
array_push($partners, array('Snell & Wilmer','snellwilmer_logo.gif'));
array_push($partners, array('Merc','merck_logo.gif'));
array_push($partners, array('West Foundation','westfoundation_logo.gif'));
array_push($partners, array('The Goggio Family Foundation','goggio_logo.gif'));

$partner_rows = ceil(count($partners)/4);
echo '<div class="partner_box" style="height: '.(($partner_rows*126)-1).'px;">';
	for($i=0;$i<count($partners);$i++) {
	echo '<table border="0" cellpadding="0" cellspacing="0"'.(($i % 4 == 0) ? ' class="first"' : NULL).'><tr><td align="center"><img src="img/partners/'.$partners[$i][1].'" alt="'.$partners[$i][0].'" title="" border="0"></td></tr></table>'.LS;
	}
echo '</div>';

?>



</div>

<!-- end sub content -->


