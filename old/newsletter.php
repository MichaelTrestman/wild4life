<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Document</title>
<script type="text/javascript" src="common/scripts.js"></script>
<link rel="stylesheet" type="text/css" href="common/styles.css">
<style type="text/css">
body html {
	padding: 		0;
	margin: 		0;
	}
</style>
</head>
<body>

<div class="signupbox">
<h4>Sign Up for Our Newsletter:</h4>
<?php
if ($_SERVER['QUERY_STRING']) {


$to = "info@wild4life.org";
$from = $_POST['email'];
$subject = "Wild4life Website Newsletter Signup";
$body = 'Please add me to the newsletter mailing list: '.$_POST['email'];
if (mail($to, $subject, $body, 'From: '.$from)) {
echo '<b>Thank you for signing up!</b>';
} else {
echo '<b style="color: #cc0000;">There was an error. Please contact us.</b>';
}
?>

<script type="text/javascript">
setTimeout("go_frame_replace('newsletter.php')",4000);
</script>

<?php
} else {
?>
<form name="signup_form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>?submit" style="display: inline;">
<input type="text" name="email" value="Your email address here" class="signup_input" onfocus="if(this.value=='Your email') { this.value='';}" onblur="if(this.value=='') { this.value='Your email'; }"><a href="#" onclick="eval_signup_form(); return false;" onmouseover="signupbutton.src='img/bottom/button_signup_r.gif';" onmouseout="signupbutton.src='img/bottom/button_signup.gif';"><img src="img/bottom/button_signup.gif" alt="&gt;" title="" border="0" style="position: relative; float: left; padding-left: 4px;" name="signupbutton"></a>
</form>

<?php } ?>
</div>

</body>
</html>
