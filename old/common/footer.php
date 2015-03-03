<!-- begin bottom -->
<div class="bottom_container">
<div class="footer_content">

<!-- begin footer nav -->
<div class="nav_container">
<div class="nav">
<?php
for($i=0;$i<count($sitemap);$i++) {
echo '<a href="#" onclick="gonav('.$i.'); return false;">'.$sitemap[$i][1].'</a> &nbsp;|&nbsp; ';
}
?>
<a href="#">Intranet</a>
</div>
Wild4life<br>
160 Montcalm Street<br>
San Francisco, CA 94110<br>
United States<br>
Telephone: (+1) 650 823 3476<br>
Email: <a href="mailto:info@wild4life.org">info@wild4life.org</a>

<div class="wcn">
<img src="img/bottom/logo-footer.gif" alt="Wild4life" title="" border="0"><br>
Wild4life is a registered 501(c)(3)) non-profit organization.<br>
&copy;2011 Wild4life
</div>

</div>
<!-- end footer nav -->

<!-- begin footer social media -->
<div class="social_media">
<h4>Follow Us On:</h4>
<div class="row"><a href="http://www.facebook.com/pages/Wild4life/165807653453205?sk=wall" target="_blank"><img src="img/bottom/icon_facebook.gif" alt="Facebook" title="" border="0" style="float: left;"><div class="text">Facebook</div></a></div>
<div class="row"><a href="http://www.twitter.com/wild4life_org" target="_blank"><img src="img/bottom/icon_twitter.gif" alt="Twitter" title="" border="0" style="float: left; clear: both;"><div class="text">Twitter</div></a></div>
<div class="row"><a href="http://www.youtube.com/user/Wild4lifeChannel" target="_blank"><img src="img/bottom/icon_youtube.gif" alt="YouTube" title="" border="0" style="float: left; clear: both;"><div class="text">YouTube</div></a></div>
<div class="row"><a href="http://www.flickr.com/photos/wild4life_org" target="_blank"><img src="img/bottom/icon_flickr.gif" alt="Flickr" title="" border="0" style="float: left; clear: both;"><div class="text">Flickr</div></a></div>
</div>
<!-- end footer social media -->

<!-- begin signup -->
<div class="signup">
<iframe src="newsletter.php" scrolling="no" frameborder="0" height="88" width="230px" name="signupframe"></iframe>
<a href="#" onclick="gonav(5); return false;" onmouseover="donatebutton.src='img/bottom/button_donate_r.gif';" onmouseout="donatebutton.src='img/bottom/button_donate.gif';"><img src="img/bottom/button_donate.gif" alt="Donate Now" title="" border="0" name="donatebutton"></a>
</div>
<!-- end signup -->

</div>
</div>
