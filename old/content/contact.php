<?php # CONTACT US ?>

<!-- begin sub content -->
<div class="sub_content_container">

<h2 class="lines"><?php echo $sitemap[$section_id][0]; ?></h2>

<!-- begin content -->
<div class="content_container_noline">

<div class="contact_box">

<script type="text/javascript">
function valform() {
	if (document.contactform.yourname.value == '') {
	alert('Please enter your name');
	document.contactform.yourname.focus();
	return false;
	} else if (document.contactform.youremail.value == '') {
	alert('Please enter your email');
	document.contactform.youremail.focus();
	return false;
	} else if (document.contactform.subject.value == '') {
	alert('Please enter a subject');
	document.contactform.subject.focus();
	return false;
	} else if (document.contactform.message.value == '') {
	alert('Please enter a message');
	document.contactform.message.focus();
	return false;
	} else {
	document.contactform.submit();
	}
}
</script>
<?php if (!$_POST['yourname']) { ?>
<form name="contactform" method="post" action="http://www.wild4life.org/contactus" onsubmit="valform(); return false;">
<p><b>Your Name</b><br>
<input type="text" name="yourname" value="" class="field"></p>
<p><b>Your Email Address</b><br>
<input type="text" name="youremail" value="" class="field"></p>
<p><b>Subject</b><br>
<input type="text" name="subject" value="" class="field"></p>
<p><b>Message</b><br>
<textarea name="message"></textarea></p>
<p><input type="submit" value="&nbsp; &nbsp; &nbsp; &nbsp; Submit &nbsp; &nbsp; &nbsp; &nbsp;"></p>
</form>
<?php } else { 

$to = "info@wild4life.org";
$subject = "Website contact form submission";
$headers = "From: ".$_POST['youremail'];
$body = "Your Name: ".$_POST['yourname']."\n";
$body .= "Your Email Address: ".$_POST['youremail']."\n";
$body .= "Subject: ".$_POST['subject']."\n";
$body .= "Message: \n".$_POST['message']."\n";
if (mail($to, $subject, $body, $headers)) {
echo("<p><b>Your inquiry has been received.</b><br><br>Thank you for your interest in Wild4life. We will be in touch shortly. <br><br>To return to the Wild4life home page <a href=\"".$domain."\">click here</a>.</p>");
} else {
echo("<p><b>Message delivery failed. Please contact us at 650-823-3476 or <a href=\"mailto:info@wild4life.org\">info@wild4life.org</a></b></p>");
}
?>

<?php } ?>
</div>
</div>
<!-- end content -->



<!-- begin sidebar -->

<div class="sidebar_container">

<div class="contact_sidebar_content">
<h3>Locations</h3>

<h4>San Francisco</h4>
<p>160 Montcalm Street<br>
San Francisco CA 94110<br>
(+1) 650 823 3476 </p>

<h4>Zimbabwe</h4>
<p>PO Box 72<br>
Dete<br>
Zimbabwe</p>

<p>17 Hiller Road<br>
Gun Hill<br>
Harare<br>
Zimbabwe</p>


</div>
<?php /*
<div class="sidebar_outer">
<div class="sidebar_inner sidebar_bg">
<?php include('content/downloads.php'); ?>
</div>
</div>
*/ ?>





</div>
<!-- end sidebar -->


</div>

<!-- end sub content -->


