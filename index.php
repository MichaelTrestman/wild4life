<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<?php include('common/shared.php');?>
<!-- <meta name="msvalidate.01" content="DD7CBD3C8A5E1CB1B9F5F1C946BEEE62"> -->
<!-- <meta name="robots" content="index,follow,noodp,noydir"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="imagetoolbar" content="false">
<meta name="description" content="Wild4life has developed a model to get health services to communities that are off-the-grid that address the major health issues in sub-Saharan Africa: HIV, TB, malaria, maternal and child health, and family planning. Wild4life addresses the huge unmet need for health services in rural areas in sub-Saharan Africa.">
<meta name="keywords" content="Wild4life, wildforlife, wild 4 life, wild for life, HIV, AIDS, TB, Tuberculosis, Malaria, global health, public health, Africa, rural, rural health, off-the-grid, rural communities, health services, HIV testing and treatment, sub-Saharan Africa, rural health programme, Zimbabwe, Kenya, Rwanda, South Africa, Mozambique, Tanzania, Nigeria, Ethiopia, Cameroon, Gabon, Botswana, Zambia">
<title>Wild4life</title>
<script src="common/jquery-1.11.0.min.js"></script>
<script src="common/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="common/animatedcollapse.js"></script>

<script type="text/javascript">

<?php # what we do
if ($q_one_var == 1 && !$q_two_type) { ?>
animatedcollapse.addDiv('what1', 'fade=0,speed=400,group=subcontent,hide=1');
animatedcollapse.addDiv('what2', 'fade=0,speed=400,group=subcontent,hide=1');
animatedcollapse.addDiv('what3', 'fade=0,speed=400,group=subcontent,hide=1');
<?php } ?>


<?php # about, main
/*
 if ($q_one_var == 1 && !$q_two_type) { ?>
<script type="text/javascript" src="common/AC_QuickTime.js"></script>
<script type="text/javascript" src="common/AC_RunActiveContent.js"></script>
<script type="text/javascript" src="common/AC_ActiveX.js"></script>
<?php
}*/ ?>


<?php # home
/*
if ($q_one_var == 0 && !$q_two_type) { ?>
animatedcollapse.addDiv('home1', 'fade=0,speed=400,group=subcontent,hide=1');
animatedcollapse.addDiv('home2', 'fade=0,speed=400,group=subcontent,hide=1');
animatedcollapse.addDiv('home3', 'fade=0,speed=400,group=subcontent,hide=1');
<?php }
*/ ?>

<?php # about, main
/*
if ($q_one_var == 1 && !$q_two_type) { ?>
animatedcollapse.addDiv('about1', 'fade=0,speed=400,group=subcontent,hide=1');
//animatedcollapse.addDiv('about2', 'fade=0,speed=400,group=subcontent,hide=1');
animatedcollapse.addDiv('about3', 'fade=0,speed=400,group=subcontent,hide=1');
<?php }
*/ ?>

<?php # about, what we do
/*
if ($q_one_var == 1 && $q_two_var === '0') { ?>
animatedcollapse.addDiv('what1', 'fade=0,speed=400,group=subcontent,hide=1');
animatedcollapse.addDiv('what2', 'fade=0,speed=400,group=subcontent,hide=1');
animatedcollapse.addDiv('what3', 'fade=0,speed=400,group=subcontent,hide=1');
<?php }
*/ ?>

<?php # where we work
/*
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
<?php }
*/ ?>


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

$section_id = (!$q_one_var) ? 0 : $q_one_var;
$page_id = ($q_two_type) ? $q_two_var : NULL;

?>

<script type="text/javascript">
var section_id = <?php echo ($q_one_var) ? $q_one_var : 0; ?>;
var page_id = <?php echo ($q_two_type) ? $q_two_var : 'null'; ?>;

var nav_on = <?php echo ($q_one_var) ? $q_one_var : 0; ?>;
var subnav_on = <?php echo ($q_two_type) ? $q_two_var : 'null'; ?>;
/* var subnav_on = <?php echo ($q_one_var == '3' && !$q_two_var) ? '0' : 'null'; ?>; */


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

<body onload="init(<?php echo $section_id.','.(($page_id) ? $page_id : 'null'); ?>);<?php echo ($section_id === 0) ? ' start_main();' : NULL; ?>">

<div class="container">


<!-- begin top -->
<div class="top_container">
<div class="top_content">
<!-- logo -->
<a href="/"><img src="img/common/logo.png" alt="Wild4life" title="" border="0" class="logo"></a>

<!-- tagline -->
<div class="tagline">Building Rural Health</div>

<!-- begin nav -->
<?php include('common/nav.php');?>
<!-- end nav -->

</div>
</div>
<!-- end top -->

<!-- begin mid -->
<div class="mid_container">
<div class="mid_content">

<div class="social_media">
<a href="http://www.facebook.com/pages/Wild4life/165807653453205?sk=wall" target="_blank"><img src="img/bottom/icon_facebook.gif" alt="Facebook" title="" border="0"></a><br>
<a href="http://www.twitter.com/wild4life_org" target="_blank"><img src="img/bottom/icon_twitter.gif" alt="Twitter" title="" border="0" style="float: left; clear: both;"></a><br>
<a href="http://www.youtube.com/user/Wild4lifeChannel" target="_blank"><img src="img/bottom/icon_youtube.gif" alt="YouTube" title="" border="0" style="float: left; clear: both;"></a><br>
<a href="http://www.flickr.com/photos/wild4life_org" target="_blank"><img src="img/bottom/icon_flickr.gif" alt="Flickr" title="" border="0" style="float: left; clear: both;"></a><br>
</div>




<!-- begin subnav -->
<?php include('common/subnav.php');?>
<!-- end subnav -->


<?php

# home
// if (!$q_one_var || $q_one_var === '0') {
include('content/home.php');
// }

# what we do
// if ($q_one_var == 1 && !$q_two_type) {
include('content/what.php');
// }

# who
// if ($q_one_var == 2 && !$q_two_type) {
include('content/who.php');
// }

# who
// if ($q_one_var == 2 && $q_two_var === '0') {
// include('content/who.php');
// }

// # who
// if ($q_one_var == 2 && $q_two_var == '1') {
// include('content/who.php');
// }

// # who
// if ($q_one_var == 2 && $q_two_var == '2') {
// include('content/who.php');
// }

# partners
// if ($q_one_var == 3) {
include('content/partners.php');
// }

# contact
if ($q_one_var == 4) {
include('content/contact.php');
}

?>

</div>
</div>
<!-- end mid -->

<!-- begin bottom -->
<?php include('common/footer.php'); ?>
<!-- end bottom -->

</div>
</body>
</html>
