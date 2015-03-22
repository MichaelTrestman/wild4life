<?php # HOME PAGE ?>

<!-- begin main slideshow -->
<script type="text/javascript">

function init_main_slideshow() {
	var wndo_main_slideshow = new dw_scrollObj('main_slideshow', 'main_slideshow_inner');
	wndo_main_slideshow.setUpScrollControls('main_slideshow_nav');
	wndo_main_slideshow.setUpScrollControls('slide_controls');
	dw_scrollObj.scrollToId('main_slideshow', 'main_slideshow_1', 'main_slideshow_inner', 0);
}
	if ( dw_scrollObj.isSupported() ) {
	dw_Event.add( window, 'load', init_main_slideshow);
	}


var main_slideshow_count = 7;

main_slideshow_id = 1;

slide_pause = 5000;


function jump_to_id_main(type,direction) {

	if (main_slideshow_id == 1) {
		if (direction == 'r') {
		main_slideshow_id = 2;
		} else {
		main_slideshow_id = main_slideshow_count-1;
		dw_scrollObj.scrollToId('main_slideshow', 'main_slideshow_'+(main_slideshow_count), 'main_slideshow_inner', 0);
		}
	} else if (main_slideshow_id == main_slideshow_count) {
		if (direction == 'r') {
		main_slideshow_id = 2;
		dw_scrollObj.scrollToId('main_slideshow', 'main_slideshow_1', 'main_slideshow_inner', 0);
		} else {
		main_slideshow_id--;
		}
	} else if (main_slideshow_id < main_slideshow_count && main_slideshow_id != 1) {
		if (direction == 'r') {
		main_slideshow_id++;
		} else {
		main_slideshow_id--;
		}
	} else {
	main_slideshow_id = 1;
	dw_scrollObj.scrollToId('main_slideshow', 'main_slideshow_1', 'main_slideshow_inner', 0);
	}

	ball_num = (main_slideshow_id == main_slideshow_count) ? 1 : main_slideshow_id;
	highlight_ball(ball_num);

	setTimeout("dw_scrollObj.scrollToId('main_slideshow', 'main_slideshow_'+main_slideshow_id)",10);


//	get_el('debug').innerHTML = main_slideshow_id;

}

function highlight_ball(num) {
	for(i=0;i<main_slideshow_count-1;i++) {
	get_el('ball'+(i+1)).src = 'img/home/main_slideshow/ball.png';
	}
	get_el('ball'+num).src = 'img/home/main_slideshow/ball_on.png';
}

function jump_to_id(id) {
	main_slideshow_id = id;
	setTimeout("dw_scrollObj.scrollToId('main_slideshow', 'main_slideshow_'+main_slideshow_id)",10);
	highlight_ball(id);
	stop_main();
}


var main_slide_play = true;

var main_play;
var main_start;


function start_main() {
main_start = setTimeout("play_main()",slide_pause);
}

function play_main() {
	clearTimeout(main_start);
	main_play = setTimeout("play_main()",slide_pause);
	jump_to_id_main('main_slideshow','r');
	get_el('pausebutton').src = 'img/home/main_slideshow/pause.png';
	main_slide_play = true;
}

function stop_main() {
	clearTimeout(main_start);
	clearTimeout(main_play);
	get_el('pausebutton').src = 'img/home/main_slideshow/play.png';
	main_slide_play = false;
}

function pause_click() {
	if (main_slide_play) {
	stop_main();
	} else {
	play_main();
	}
}

</script>

<div class="main_slideshow_container">

<div id="main_slideshow_nav"><a href="#" onclick="jump_to_id_main('main_slideshow','l'); stop_main(); return false;" id="main_slideshow_nav_l" style="position: absolute; left: 0px; top: 0px; width: 47px; height: 46px;" onmouseover="main_slideshow_arrow_left.src='img/home/main_slideshow/arrow_left_r.gif';" onmouseout="main_slideshow_arrow_left.src='img/home/main_slideshow/arrow_left.gif';"><img src="img/home/main_slideshow/arrow_left.gif" alt="" title="" border="0" name="main_slideshow_arrow_left"></a><a href="#" onclick="jump_to_id_main('main_slideshow','r'); stop_main(); return false;" id="main_slideshow_nav_r" style="position: absolute; right: 0px; top: 0px; width: 43px; height: 46px;" onmouseover="main_slideshow_arrow_right.src='img/home/main_slideshow/arrow_right_r.gif';" onmouseout="main_slideshow_arrow_right.src='img/home/main_slideshow/arrow_right.gif';"><img src="img/home/main_slideshow/arrow_right.gif" alt="" title="" border="0" name="main_slideshow_arrow_right"></a></div>


<div id="main_slideshow" style="position: relative; float: left; overflow: hidden; width: 930px; height: 321px; margin: 0 0 0 47px; border: 5px solid #d0d0d0; background: #fff;">

<div id="slide_controls" style="position: absolute; left: 15px; top: 295px; width: 140px; height: 13px; text-align: left; margin: 0; padding: 0; z-index: 10000;">
<a href="#" onclick="jump_to_id(1); return false;" onmouseover="ball1.src='img/home/main_slideshow/ball_on.png';" onmouseout="ball1.src=((main_slideshow_id == 1) ? 'img/home/main_slideshow/ball_on.png' : 'img/home/main_slideshow/ball.png');"><img src="img/home/main_slideshow/ball_on.png" alt="" title="" border="0" style="position: relative; float: left; margin-right: 7px;" name="ball1" id="ball1"></a>
<a href="#" onclick="jump_to_id(2); return false;" onmouseover="ball2.src='img/home/main_slideshow/ball_on.png';" onmouseout="ball2.src=((main_slideshow_id == 2) ? 'img/home/main_slideshow/ball_on.png' : 'img/home/main_slideshow/ball.png');"><img src="img/home/main_slideshow/ball.png" alt="" title="" border="0" style="position: relative; float: left; margin-right: 7px;" name="ball2" id="ball2"></a>
<a href="#" onclick="jump_to_id(3); return false;" onmouseover="ball3.src='img/home/main_slideshow/ball_on.png';" onmouseout="ball3.src=((main_slideshow_id == 3) ? 'img/home/main_slideshow/ball_on.png' : 'img/home/main_slideshow/ball.png');"><img src="img/home/main_slideshow/ball.png" alt="" title="" border="0" style="position: relative; float: left; margin-right: 7px;" name="ball3" id="ball3"></a>
<a href="#" onclick="jump_to_id(4); return false;" onmouseover="ball4.src='img/home/main_slideshow/ball_on.png';" onmouseout="ball4.src=((main_slideshow_id == 4) ? 'img/home/main_slideshow/ball_on.png' : 'img/home/main_slideshow/ball.png');"><img src="img/home/main_slideshow/ball.png" alt="" title="" border="0" style="position: relative; float: left; margin-right: 7px;" name="ball4" id="ball4"></a>
<a href="#" onclick="jump_to_id(5); return false;" onmouseover="ball5.src='img/home/main_slideshow/ball_on.png';" onmouseout="ball5.src=((main_slideshow_id == 5) ? 'img/home/main_slideshow/ball_on.png' : 'img/home/main_slideshow/ball.png');"><img src="img/home/main_slideshow/ball.png" alt="" title="" border="0" style="position: relative; float: left; margin-right: 7px;" name="ball5" id="ball5"></a>
<a href="#" onclick="jump_to_id(6); return false;" onmouseover="ball6.src='img/home/main_slideshow/ball_on.png';" onmouseout="ball6.src=((main_slideshow_id == 6) ? 'img/home/main_slideshow/ball_on.png' : 'img/home/main_slideshow/ball.png');"><img src="img/home/main_slideshow/ball.png" alt="" title="" border="0" style="position: relative; float: left; margin-right: 7px;" name="ball6" id="ball6"></a>
<a href="#" onclick="pause_click(); return false;" onmouseover="pausebutton.src='img/home/main_slideshow/'+((main_slide_play) ? 'pause' : 'play')+'_on.png';" onmouseout="pausebutton.src='img/home/main_slideshow/'+((main_slide_play) ? 'pause' : 'play')+'.png';"><img src="img/home/main_slideshow/pause.png" alt="" title="" border="0" style="position: relative; float: left; margin-right: 7px;" name="pausebutton" id="pausebutton"></a>
</div>

<div id="main_slideshow_inner" style="position: relative; float: left; margin-right: -9999px; padding: 0; margin: 0; left: 0px; z-index: 1;">
<table cellpadding="0" cellspacing="0" border="0" class="common" style="height: 321px; overflow:hidden;">
<tr>

<td valign="top" align="left" id="main_slideshow_1">
<div class="slide_container">
<div class="slide_img"><img src="img/home/main_slideshow/slides/1-photo.jpg" alt="" title="" border="0"></div>
<div class="slide_text"><img src="img/home/main_slideshow/slides/1-type.png" alt="" title="" border="0"></div>
<div class="slide_text_active">
<h1>Connecting <span class="highlight">Rural</span> communities to health services.</h1>
<p>At Wild4life, we focus on rural African communities outside the reach of traditional health services, connecting these unserved communities to much needed services.</p>
</div>
</div>
</td>

<td valign="top" align="left" id="main_slideshow_2">
<div class="slide_container">
<div class="slide_img"><img src="img/home/main_slideshow/slides/2-photo.jpg" alt="" title="" border="0"></div>
<div class="slide_text"><img src="img/home/main_slideshow/slides/2-type.png" alt="" title="" border="0"></div>
<div class="slide_text_active">
<h1>Reaching the other <span class="highlight">70%</span></h1>
<p>In Africa, most of the population &mdash; 70% &mdash; live in rural areas and have little or no access to health services. These are the people we reach.</p>
</div>
</div>
</td>
<td valign="top" align="left" id="main_slideshow_3">
<div class="slide_container">
<div class="slide_img"><img src="img/home/main_slideshow/slides/3-photo.jpg" alt="" title="" border="0"></div>
<div class="slide_text"><img src="img/home/main_slideshow/slides/3-type.png" alt="" title="" border="0"></div>
<div class="slide_text_active">
<h1>Creating <span class="highlight">Demand</span> for health services</h1>
<p> Unlike most programs, we focus on rural, not urban, areas. We create demand in areas most health providers don't reach on their own.</p>
</div>
</div>
</td>

<td valign="top" align="left" id="main_slideshow_4">
<div class="slide_container">
<div class="slide_img"><img src="img/home/main_slideshow/slides/4-photo.jpg" alt="" title="" border="0"></div>
<div class="slide_text"><img src="img/home/main_slideshow/slides/4-type.png" alt="" title="" border="0"></div>
<div class="slide_text_active">
<h1>A<span class="highlight">grassroots</span> approach</h1>
<p>We mobilize communities, create demand, and connect them to a network of health providers, then co-ordinate providers to deliver an array of health services.</p>
</div>
</div>
</td>

<td valign="top" align="left" id="main_slideshow_5">
<div class="slide_container">
<div class="slide_img"><img src="img/home/main_slideshow/slides/5-photo.jpg" alt="" title="" border="0"></div>
<div class="slide_text"><img src="img/home/main_slideshow/slides/5-type.png" alt="" title="" border="0"></div>
<div class="slide_text_active">
<h1>Just <span class="highlight">$10</span> per person</h1>
<p>The best part is that it's cheap, it costs less than $10 a year to give someone a chance of a better life.</p>
</div>
</div>
</td>

<td valign="top" align="left" id="main_slideshow_6">
<div class="slide_container">
<div class="slide_img"><img src="img/home/main_slideshow/slides/6-photo.jpg" alt="" title="" border="0"></div>
<div class="slide_text"><img src="img/home/main_slideshow/slides/6-type.png" alt="" title="" border="0"></div>
<div class="slide_text_active">
<h1>Over <span class="highlight">85%</span> tested for HIV</h1>
<p>In the areas we reach, over 85% of the community voluntarily gets tested for HIV. It's an important first step in mobilizing communities around health.</p>
</div>
</div>
</td>

<!-- last is duplicate of first-->
<td valign="top" align="left" id="main_slideshow_7" style="padding-right: 20px;">
<div class="slide_container">
<div class="slide_img"><img src="img/home/main_slideshow/slides/1-photo.jpg" alt="" title="" border="0"></div>
<div class="slide_text"><img src="img/home/main_slideshow/slides/1-type.png" alt="" title="" border="0"></div>
<div class="slide_text_active">
<h1>Connecting <span class="highlight">Rural</span> communities to health services.</h1>
<p>At Wild4life, we focus on rural African communities outside the reach of traditional health services, connecting these unserved communities to much needed services.</p>
</div>
</div>
</td>

</tr>
</table>
</div>
</div>

<div class="shadow_bottom"></div>
<div class="shadow_right"></div>

</div>
<!-- end main slideshow -->

<!-- begin home content boxes -->
<div class="home_content_boxes_container">
<div class="home_content_boxes">
<!-- begin box 1 -->
<div class="box">
<a href="#" onclick="gonav(1,0); return false;"><img src="img/home/content_boxes/1.jpg" alt="What We Do" title="" border="0"></a>
<h2><a href="#" onclick="gonav(1,0); return false;">What We Do &raquo;</a></h2>
<p>We bring health services to rural African communities and create demand<br>
<a href="#" onclick="gonav(1,0); return false;">Learn More &raquo;</a>
</p>
</div>
<!-- begin box 2 -->
<div class="box">
<a href="#" onclick="gonav(1,2); return false;"><img src="img/home/content_boxes/2.jpg" alt="How It Works" title="" border="0"></a>
<h2><a href="#" onclick="gonav(1,2); return false;">How It Works &raquo;</a></h2>
<p>We partner with organizations already established in remote areas to deliver much needed health services<br>
<a href="#" onclick="gonav(1,2); return false;">Learn More &raquo;</a>
</p>
</div>
<!-- begin box 3 -->
<div class="box">
<a href="#" onclick="gonav(3); return false;"><img src="img/home/content_boxes/3.jpg" alt="Where We Work" title="" border="0"></a>
<h2><a href="#" onclick="gonav(3); return false;">Where We Work &raquo;</a></h2>
<p>We operate in sub-Saharan Africa in areas that conventional providers don't reach<br>
<a href="#" onclick="gonav(3); return false;">Learn More &raquo;</a>
</p>
</div>
<!-- begin box 4 -->
<div class="box_last">
<a href="#" onclick="gonav(5); return false;"><img src="img/home/content_boxes/4.jpg" alt="Donate" title="" border="0"></a>
<h2><a href="#" onclick="gonav(5); return false;">Donate &raquo;</a></h2>
<p>Join Wild4life to give someone a chance of a better life<br>
<a href="#" onclick="gonav(5); return false;">Learn More &raquo;</a>
</p>
</div>
</div>
<div class="shadow_bottom"></div>
<div class="shadow_right"></div>
</div>
<!-- end home content boxes -->

<!-- begin home news & program -->
<div class="home_news_program_container">

<!-- begin news -->
<div class="news_container">

<h3>A Model for Rural Health</h3>
<div class="header_divider"></div>

<!-- paragraph 1 -->
<img src="img/home/news/1.jpg" alt="" title="" border="0" align="left" class="subphoto">
<h4>Reaching the other 70%</h4>
<p>Like most of the world, healthcare in Africa is organized around regional hospitals in the cities and a system of satellite clinics. But in Africa, most of the population &mdash; 70% &mdash; live in rural areas outside the reach of this system, often with little or no access to health services. These are the people that we reach.</p>

<div id="home1">
<p>Health service providers in Africa are typically urban-based, and not geared to deliver health programs to dispersed populations in rural areas, where they often are most needed. Wild4life bridges the gap by building a rural platform to deliver health programs to these unserved communities in hard-to-reach areas. We establish strong relationships and mobilize rural communities around HIV to deliver an array of health services.</p>
</div>

<a href="#" rel="toggle[home1]" data-openimage="img/common/expander_button.gif" data-closedimage="img/common/expander_button.gif">Keep Reading <img src="img/common/expander_button.gif" alt="" title="" border="0" class="expander"></a>


<div class="divider"></div>

<!-- paragraph 2 -->
<img src="img/home/news/2.jpg" alt="" title="" border="0" align="left" class="subphoto">
<h4>A cost-effective alternative</h4>
<p>Wild4life is a rural health program working in sub-Saharan Africa. We've developed a cost-effective alternative to connect rural communities to health service providers and generate demand &mdash; by leveraging the resources of field partners already there, e.g. wildlife conservation or agricultural NGOs, or safari companies. It's a cheaper option because it makes use of the resources and established relationships that our field partners already have, to reach local communities.</p>

<div id="home2">
<p>We enable existing health providers to increase their reach and impact by providing a ready-made delivery infrastructure, connecting them with rural communities, and generating demand. Our field partners benefit through the improved health of their staff and gain a critical new service to provide to communities where they operate.</p>

<p>The program is community driven and makes good use of resources and an infrastructure that already exists in rural areas &mdash; to deliver health services. It complements the efforts of state health services and other NGO health providers and integrates these into a co-ordinated approach. We bridge the gap between where resources are and where the need is. The best part is that it's cheap, at less than <br>
$10 / person.</p>
</div>

<a href="#" rel="toggle[home2]" data-openimage="img/common/expander_button.gif" data-closedimage="img/common/expander_button.gif">Keep Reading <img src="img/common/expander_button.gif" alt="" title="" border="0" class="expander"></a>

<div class="divider"></div>

<!-- paragraph 3 -->
<img src="img/home/news/3.jpg" alt="" title="" border="0" align="left" class="subphoto">
<h4>Why start with HIV?</h4>
<p>In most of the areas that we work, HIV is the big health issue. Also, we've found that communities will mobilize around HIV&mdash; for both these reasons, this is our initial focus. We start by establishing a comprehensive HIV prevention and treatment program. This creates momentum and gets the community organized. We follow this with a second wave of programs, targeting other common maladies such as TB and malaria, maternal and child health, reproductive health, and other related activities like family planning. It's an integrated approach to rural health that starts with mobilizing communities around HIV.</p>

<div id="home3">

</div>

<!--<a href="#" rel="toggle[home3]" data-openimage="img/common/expander_button.gif" data-closedimage="img/common/expander_button.gif">Keep Reading <img src="img/common/expander_button.gif" alt="" title="" border="0" class="expander"></a>-->

</div>
<!-- end news -->

<script type="text/javascript">
function gosite(sitenum) {
document.program_sites_form.site.value = sitenum;
document.program_sites_form.submit();
}
</script>

<form name="program_sites_form" method="post" action="<?php echo ($localdev) ? 'index.php?s=3' : 'wherewework'; ?>#maplink">
<input type="hidden" name="site" value="">
</form>

<div class="program_sites_container">
<h3>Program Sites</h3>
<div class="header_divider"></div>
<h4><a href="#" onclick="gonav(3); return false;">See All Programs &raquo;</a></h4>
<ul>
<li><div class="box" style="background: #4ca03d;"></div><a href="#" onclick="gosite(0); return false;">Botswana</a></li>
<li><div class="box" style="background: #a867ab;"></div><a href="#" onclick="gosite(1); return false;">Cameroon</a></li>
<li><div class="box" style="background: #5248a5;"></div><a href="#" onclick="gosite(2); return false;">Ethiopia</a></li>
<li><div class="box" style="background: #71be64;"></div><a href="#" onclick="gosite(3); return false;">Gabon</a></li>
<li><div class="box" style="background: #b11e46;"></div><a href="#" onclick="gosite(4); return false;">Kenya</a></li>
<li><div class="box" style="background: #0075b1;"></div><a href="#" onclick="gosite(5); return false;">Mozambique</a></li>
<li><div class="box" style="background: #981a6b;"></div><a href="#" onclick="gosite(6); return false;">Nigeria</a></li>
<li><div class="box" style="background: #885321;"></div><a href="#" onclick="gosite(7); return false;">Rwanda</a></li>
<li><div class="box" style="background: #715f51;"></div><a href="#" onclick="gosite(8); return false;">South Africa</a></li>
<li><div class="box" style="background: #f0624f;"></div><a href="#" onclick="gosite(9); return false;">Tanzania</a></li>
<li><div class="box" style="background: #04b9ca;"></div><a href="#" onclick="gosite(10); return false;">Zambia</a></li>
<li><div class="box" style="background: #fed042;"></div><a href="#" onclick="gosite(11); return false;">Zimbabwe</a></li>
</ul>
</div>
<div class="shadow_bottom"></div>
<div class="shadow_right"></div>
<!--<img src="img/home/program_sites.png" alt="Program Sites" title="" border="0" class="program_sites">-->

</div>
<!-- end home news & program -->


<!-- begin home gallery-->
<div class="home_gallery_container">

<div class="gallery_header">
<h3>Gallery</h3>
<div class="header_divider"></div>
</div>

<!-- begin gallery slideshow -->
<script type="text/javascript">

function init_gallery_slideshow() {
	var wndo_gallery_slideshow = new dw_scrollObj('gallery_slideshow', 'gallery_slideshow_inner');
	wndo_gallery_slideshow.setUpScrollControls('gallery_slideshow_nav');
	dw_scrollObj.scrollToId('gallery_slideshow', 'gallery_slideshow_1', 'gallery_slideshow_inner', 0);
}



var gallery_slideshow_count = 11;
var gallery_visible = 7;

gallery_slideshow_id = 1;


function jump_to_id_gallery(type,direction) {
if (direction == 'r') {
	if (gallery_slideshow_id < gallery_slideshow_count)
	gallery_slideshow_id+=3;
	gallery_slideshow_id = (gallery_slideshow_id > gallery_slideshow_count) ? gallery_slideshow_count : gallery_slideshow_id;
} else {
	if (gallery_slideshow_id > 1) {
	gallery_slideshow_id-=3;
	gallery_slideshow_id = (gallery_slideshow_id < 1) ? 1 : gallery_slideshow_id;
	}
}
setTimeout("dw_scrollObj.scrollToId('gallery_slideshow', 'gallery_slideshow_'+gallery_slideshow_id)",10);
}

function jump_to_id_galleryx(type,direction) {

	if (gallery_slideshow_id == 1) {
		if (direction == 'r') {
		gallery_slideshow_id = 2;
		} else {
		gallery_slideshow_id = gallery_slideshow_count;
		dw_scrollObj.scrollToId('gallery_slideshow', 'gallery_slideshow_'+(gallery_slideshow_count+1), 'gallery_slideshow_inner', 0);
		}
	} else if (gallery_slideshow_id == gallery_slideshow_count+1) {
		if (direction == 'r') {
		gallery_slideshow_id = 2;
		dw_scrollObj.scrollToId('gallery_slideshow', 'gallery_slideshow_1', 'gallery_slideshow_inner', 0);
		} else {
		gallery_slideshow_id--;
		}
	} else if (gallery_slideshow_id < gallery_slideshow_count+gallery_visible+1 && gallery_slideshow_id != 1) {
		if (direction == 'r') {
		gallery_slideshow_id++;
		} else {
		gallery_slideshow_id--;
		}
	} else {
	gallery_slideshow_id = 1;
	dw_scrollObj.scrollToId('gallery_slideshow', 'gallery_slideshow_1', 'gallery_slideshow_inner', 0);
	}

	setTimeout("dw_scrollObj.scrollToId('gallery_slideshow', 'gallery_slideshow_'+gallery_slideshow_id)",10);

}


</script>

<div class="gallery_slideshow_container">

<div id="gallery_slideshow_nav"><a href="#" onclick="jump_to_id_gallery('gallery_slideshow','l'); return false;" id="gallery_slideshow_nav_l" style="position: absolute; left: 0px; top: 0px; width: 30px; height: 27px;" onmouseover="gallery_slideshow_arrow_left.src='img/home/gallery/arrow_left_r.gif';" onmouseout="gallery_slideshow_arrow_left.src='img/home/gallery/arrow_left.gif';"><img src="img/home/gallery/arrow_left.gif" alt="" title="" border="0" name="gallery_slideshow_arrow_left"></a><a href="#" onclick="jump_to_id_gallery('gallery_slideshow','r'); return false;" id="gallery_slideshow_nav_r" style="position: absolute; right: 0px; top: 0px; width: 30px; height: 27px;" onmouseover="gallery_slideshow_arrow_right.src='img/home/gallery/arrow_right_r.gif';" onmouseout="gallery_slideshow_arrow_right.src='img/home/gallery/arrow_right.gif';"><img src="img/home/gallery/arrow_right.gif" alt="" title="" border="0" name="gallery_slideshow_arrow_right"></a></div>


<div id="gallery_slideshow" style="position: relative; float: left; overflow: hidden; width: 940px; height: 75px; margin: 0 0 0 47px; background: #fff;">
<div id="gallery_slideshow_inner" style="position: relative; float: left; margin-right: -9999px; padding: 0; margin: 0; left: 0px; z-index: 1;">
<table cellpadding="0" cellspacing="0" border="0" class="common" style="height: 75px; overflow:hidden;">
<tr>

<?php

for($i=1;$i<12;$i++) {
echo '<td valign="top" align="left" id="gallery_slideshow_'.$i.'"><div class="slide_container"><div class="slide_img"><a href="img/home/gallery/'.$i.'-lrg.jpg" rel="lightbox[home_gallery]" title=""><img src="img/home/gallery/'.$i.'.jpg" alt="" title="" border="0"></a></div></div></td>'."\n";
}
for($i=12;$i<19;$i++) {
echo '<td valign="top" align="left" id="gallery_slideshow_'.$i.'"><div class="slide_container"><div class="slide_img"><a href="img/home/gallery/'.($i-11).'-lrg.jpg" rel="lightbox[home_gallery]" title=""><img src="img/home/gallery/'.($i-11).'.jpg" alt="" title="" border="0"></a></div></div></td>'."\n";
}
?>



</tr>
</table>
</div>
</div>

<div class="shadow_bottom"></div>
<div class="shadow_right"></div>

</div>
<!-- end gallery slideshow -->

</div>
<!-- end home gallery-->