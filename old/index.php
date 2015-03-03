<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?php include('common/shared.php');?>
<meta name="msvalidate.01" content="DD7CBD3C8A5E1CB1B9F5F1C946BEEE62">
<meta name="robots" content="index,follow,noodp,noydir">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="imagetoolbar" content="false">
<meta name="description" content="Wild4life has developed a model to get health services to communities that are off-the-grid that address the major health issues in sub-Saharan Africa: HIV, TB, malaria, maternal and child health, and family planning. Wild4life addresses the huge unmet need for health services in rural areas in sub-Saharan Africa.">
<meta name="keywords" content="Wild4life, wildforlife, wild 4 life, wild for life, HIV, AIDS, TB, Tuberculosis, Malaria, global health, public health, Africa, rural, rural health, off-the-grid, rural communities, health services, HIV testing and treatment, sub-Saharan Africa, rural health programme, Zimbabwe, Kenya, Rwanda, South Africa, Mozambique, Tanzania, Nigeria, Ethiopia, Cameroon, Gabon, Botswana, Zambia">
<title>Wild4life</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="common/animatedcollapse.js"></script>
<?php # about, main
 if ($q_one_var == 1 && !$q_two_type) { ?>
<script type="text/javascript" src="common/AC_QuickTime.js"></script>
<script type="text/javascript" src="common/AC_RunActiveContent.js"></script>
<script type="text/javascript" src="common/AC_ActiveX.js"></script>
<?php } ?>

<script type="text/javascript">

<?php # home
if ($q_one_var == 0 && !$q_two_type) { ?>
animatedcollapse.addDiv('home1', 'fade=0,speed=400,group=subcontent,hide=1');
animatedcollapse.addDiv('home2', 'fade=0,speed=400,group=subcontent,hide=1');
animatedcollapse.addDiv('home3', 'fade=0,speed=400,group=subcontent,hide=1');
<?php } ?>

<?php # about, main
if ($q_one_var == 1 && !$q_two_type) { ?>
animatedcollapse.addDiv('about1', 'fade=0,speed=400,group=subcontent,hide=1');
//animatedcollapse.addDiv('about2', 'fade=0,speed=400,group=subcontent,hide=1');
animatedcollapse.addDiv('about3', 'fade=0,speed=400,group=subcontent,hide=1');
<?php } ?>

<?php # about, what we do 
if ($q_one_var == 1 && $q_two_var === '0') { ?>
animatedcollapse.addDiv('what1', 'fade=0,speed=400,group=subcontent,hide=1');
animatedcollapse.addDiv('what2', 'fade=0,speed=400,group=subcontent,hide=1');
animatedcollapse.addDiv('what3', 'fade=0,speed=400,group=subcontent,hide=1');
<?php } ?>

<?php # results
if ($q_one_var == 2 && !$q_two_type) { ?>
animatedcollapse.addDiv('results1', 'fade=0,speed=400,group=subcontent,hide=1');
animatedcollapse.addDiv('results2', 'fade=0,speed=400,group=subcontent,hide=1');
animatedcollapse.addDiv('results3', 'fade=0,speed=400,group=subcontent,hide=1');
animatedcollapse.addDiv('results4', 'fade=0,speed=400,group=subcontent,hide=1');
<?php } ?>

<?php # where we work
if ($q_one_var == 3 && !$q_two_type) { ?>
animatedcollapse.addDiv('botswana', 'fade=0,speed=400,group=subcontent,hide=<?php echo ($_POST['site'] === '0') ? '0' : '1'; ?>');
animatedcollapse.addDiv('cameroon', 'fade=0,speed=400,group=subcontent,hide=<?php echo ($_POST['site'] === '1') ? '0' : '1'; ?>');
animatedcollapse.addDiv('ethiopia', 'fade=0,speed=400,group=subcontent,hide=<?php echo ($_POST['site'] == '2') ? '0' : '1'; ?>');
animatedcollapse.addDiv('gabon', 'fade=0,speed=400,group=subcontent,hide=<?php echo ($_POST['site'] == '3') ? '0' : '1'; ?>');
animatedcollapse.addDiv('kenya', 'fade=0,speed=400,group=subcontent,hide=<?php echo ($_POST['site'] == '4') ? '0' : '1'; ?>');
animatedcollapse.addDiv('mozambique', 'fade=0,speed=400,group=subcontent,hide=<?php echo ($_POST['site'] == '5') ? '0' : '1'; ?>');
animatedcollapse.addDiv('nigeria', 'fade=0,speed=400,group=subcontent,hide=<?php echo ($_POST['site'] == '6') ? '0' : '1'; ?>');
animatedcollapse.addDiv('rwanda', 'fade=0,speed=400,group=subcontent,hide=<?php echo ($_POST['site'] == '7') ? '0' : '1'; ?>');
animatedcollapse.addDiv('southafrica', 'fade=0,speed=400,group=subcontent,hide=<?php echo ($_POST['site'] == '8') ? '0' : '1'; ?>');
animatedcollapse.addDiv('tanzania', 'fade=0,speed=400,group=subcontent,hide=<?php echo ($_POST['site'] == '9') ? '0' : '1'; ?>');
animatedcollapse.addDiv('zambia', 'fade=0,speed=400,group=subcontent,hide=<?php echo ($_POST['site'] == '10') ? '0' : '1'; ?>');
animatedcollapse.addDiv('zimbabwe', 'fade=0,speed=400,group=subcontent,hide=<?php echo ($_POST['site'] == '11') ? '0' : '1'; ?>');

animatedcollapse.addDiv('story1', 'fade=0,speed=400,group=stories,hide=1');
animatedcollapse.addDiv('story2', 'fade=0,speed=400,group=stories,hide=1');
animatedcollapse.addDiv('story3', 'fade=0,speed=400,group=stories,hide=1');
<?php } ?>


animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
	//$: Access to jQuery
	//divobj: DOM reference to DIV being expanded/ collapsed. Use "divobj.id" to get its ID
	//state: "block" or "none", depending on state
}

animatedcollapse.init()

</script>
<?php
$q_string = $_SERVER['QUERY_STRING'];
$q_string = explode("&", $q_string);
$q_one = explode("=", $q_string[0]);
$q_one_type = $q_one[0];
$q_one_var = $q_one[1];
$q_two = explode("=", $q_string[1]);
$q_two_type = $q_two[0];
$q_two_var = $q_two[1];
$q_three = explode("=", $q_string[2]);
$q_three_type = $q_three[0];
$q_three_var = $q_three[1];

$section_id = (!$q_one_var) ? 0 : $q_one_var;
$category_id = ($q_two_type) ? $q_two_var : 'null';
$page_id = ($q_three_type) ? $q_three_var : 'null';

?>

<script type="text/javascript">
var section_id = <?php echo ($q_one_var) ? $q_one_var : 0; ?>;
var category_id = <?php echo ($q_two_type) ? $q_two_var : 'null'; ?>;
var page_id = <?php echo ($q_three_type) ? $q_three_var : 'null'; ?>;

var nav_on = <?php echo ($q_one_var) ? $q_one_var : 0; ?>;
var subnav_on = <?php echo ($q_two_type) ? $q_two_var : 'null'; ?>;
var pagenav_on = <?php echo ($q_two_type) ? 'true' : 'false'; ?>;


</script>

<script type="text/javascript" src="common/scripts.js"></script>
<script type="text/javascript" src="common/scroll/dw_event.js"></script>
<script type="text/javascript" src="common/scroll/dw_scroll.js"></script>
<script type="text/javascript" src="common/scroll/dw_scrollbar.js"></script>
<script type="text/javascript" src="common/scroll/scroll_controls.js"></script>

<script type="text/javascript" src="common/lightbox/prototype.js"></script>
<script type="text/javascript" src="common/lightbox/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="common/lightbox/lightbox.js"></script>
<link rel="stylesheet" href="common/lightbox.css" type="text/css" media="screen">

<link rel="stylesheet" type="text/css" href="common/styles.css">

</head>

<body onload="init(<?php echo $section_id.','.$category_id.','.$page_id; ?>);<?php echo ($section_id === 0) ? ' start_main();' : NULL; ?><?php echo ($section_id == 3) ? ' preload_maps();' : NULL; ?><?php if ($section_id === '1' && $category_id === '1') { echo ' start_whopreload();'; } ?>">





<div class="container">


<!-- begin top -->
<div class="top_container">
<div class="top_content">
<!-- logo -->
<a href="#" onclick="gonav(0); return false;"><img src="img/common/logo.gif" alt="Wild4life" title="" border="0" class="logo"></a>

<!-- tagline -->
<div class="tagline">Bringing health services to rural communities</div>

<!-- begin nav -->
<?php include('common/nav.php');?>
<!-- end nav -->

</div>
</div>
<!-- end top -->





<!-- begin mid -->
<div class="mid_container">
<div class="mid_content">

<!-- begin subnav -->
<?php include('common/subnav.php');?>
<!-- end subnav -->


<?php

# home
if (!$q_one_var || $q_one_var === '0') {
include('content/content_0.php');
}

# about
if ($q_one_var == 1 && !$q_two_type) {
include('content/content_1.php');
}

# about, what
if ($q_one_var == 1 && $q_two_var === '0') {
include('content/content_1.0.php');
}

# about, who
if ($q_one_var == 1 && $q_two_var == '1') {
include('content/content_1.1.php');
}

# about, how
if ($q_one_var == 1 && $q_two_var == '2') {
include('content/content_1.2.php');
}

# results
if ($q_one_var == 2 && !$q_two_type) {
include('content/content_2.php');
}

# where
if ($q_one_var == 3 && !$q_two_type) {
include('content/content_3.php');
}

# field partners
if ($q_one_var == 4 && (!$q_two_type || $q_two_var === '0')) {
include('content/content_4.0.php');
}

# venture partners
if ($q_one_var == 4 && $q_two_var === '1') {
include('content/content_4.1.php');
}

# donate
if ($q_one_var == 5 && !$q_two_type) {
include('content/content_5.php');
}

# contact
if ($q_one_var == 6 && !$q_two_type) {
include('content/content_6.php');
}



?>



</div>
</div>
<!-- end mid -->




<!-- begin bottom -->
<?php include('common/footer.php'); ?>
<!-- end bottom -->






</div>
<!--<div style="position: absolute; bottom: 0px; left: 0px; width: 100px; height: 40px; background: #fff; border: solid 1px; padding: 10px; z-index: 10;" id="debug">test</div>-->
</body>
</html>
