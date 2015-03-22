<?php # HOME PAGE ?>

<!-- begin main slideshow -->
<script type="text/javascript">

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

	<!-- <div id="main_slideshow_nav">
		<a href="#" onclick="jump_to_id_main('main_slideshow','l'); stop_main(); return false;" id="main_slideshow_nav_l" style="position: absolute; left: 0px; top: 0px; width: 47px; height: 46px;" onmouseover="main_slideshow_arrow_left.src='img/home/main_slideshow/arrow_left_r.gif';" onmouseout="main_slideshow_arrow_left.src='img/home/main_slideshow/arrow_left.gif';">
			<img src="img/home/main_slideshow/arrow_left.gif" alt="" title="" border="0" name="main_slideshow_arrow_left">
		</a>
		<a href="#" onclick="jump_to_id_main('main_slideshow','r'); stop_main(); return false;" id="main_slideshow_nav_r" style="position: absolute; right: 0px; top: 0px; width: 43px; height: 46px;" onmouseover="main_slideshow_arrow_right.src='img/home/main_slideshow/arrow_right_r.gif';" onmouseout="main_slideshow_arrow_right.src='img/home/main_slideshow/arrow_right.gif';">
			<img src="img/home/main_slideshow/arrow_right.gif" alt="" title="" border="0" name="main_slideshow_arrow_right">
		</a>
	</div> -->


	<div id="main_slideshow" style="position: relative; float: left; overflow: hidden; width: 930px; height: 321px; margin: 0 0 0 47px; border: 5px solid #d0d0d0; background: #fff;">

		<!-- <div id="slide_controls" style="position: absolute; left: 15px; top: 295px; width: 140px; height: 13px; text-align: left; margin: 0; padding: 0; z-index: 10000;">
			<a href="#" onclick="jump_to_id(1); return false;" onmouseover="ball1.src='img/home/main_slideshow/ball_on.png';" onmouseout="ball1.src=((main_slideshow_id == 1) ? 'img/home/main_slideshow/ball_on.png' : 'img/home/main_slideshow/ball.png');"><img src="img/home/main_slideshow/ball_on.png" alt="" title="" border="0" style="position: relative; float: left; margin-right: 7px;" name="ball1" id="ball1"></a>
			<a href="#" onclick="jump_to_id(2); return false;" onmouseover="ball2.src='img/home/main_slideshow/ball_on.png';" onmouseout="ball2.src=((main_slideshow_id == 2) ? 'img/home/main_slideshow/ball_on.png' : 'img/home/main_slideshow/ball.png');"><img src="img/home/main_slideshow/ball.png" alt="" title="" border="0" style="position: relative; float: left; margin-right: 7px;" name="ball2" id="ball2"></a>
			<a href="#" onclick="jump_to_id(3); return false;" onmouseover="ball3.src='img/home/main_slideshow/ball_on.png';" onmouseout="ball3.src=((main_slideshow_id == 3) ? 'img/home/main_slideshow/ball_on.png' : 'img/home/main_slideshow/ball.png');"><img src="img/home/main_slideshow/ball.png" alt="" title="" border="0" style="position: relative; float: left; margin-right: 7px;" name="ball3" id="ball3"></a>
			<a href="#" onclick="pause_click(); return false;" onmouseover="pausebutton.src='img/home/main_slideshow/'+((main_slide_play) ? 'pause' : 'play')+'_on.png';" onmouseout="pausebutton.src='img/home/main_slideshow/'+((main_slide_play) ? 'pause' : 'play')+'.png';"><img src="img/home/main_slideshow/pause.png" alt="" title="" border="0" style="position: relative; float: left; margin-right: 7px;" name="pausebutton" id="pausebutton"></a>
		</div> -->

		<div id="main_slideshow_inner">

			<div class="slide_container">
				<div class="slide_img">
					<img src="img/home/main_slideshow/slides/1-photo.jpg" alt="" title="" border="0">
				</div>
				<div class="slide_text">
					<!-- <h2> no basic healthcare :(</h2> -->
					<img src="img/home/main_slideshow/slides/1-type.jpg" alt="" title="" border="0">
				</div>
			</div>

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
			<a href="#" onclick="gonav(1); return false;"><img src="img/home/content_boxes/1.jpg" alt="Building Clinics" title="" border="0"></a>
			<h2><a href="#" onclick="gonav(1); return false;">Building Clinics</a></h2>
<p>Assuring basic health infrastructure and supporting systems work effectively<!--
<br>
<a href="#" onclick="gonav(1); return false;">Learn More &raquo;</a>
-->
</p>
</div>
<!-- begin box 2 -->
<div class="box_mid">
	<a href="#" onclick="gonav(1); return false;"><img src="img/home/content_boxes/3.jpg" alt="Who We Are" title="" border="0"></a>
	<h2><a href="#" onclick="gonav(1); return false;">Health Worker Capacity</a></h2>
<p>Training, mentoring, and supervision of front-line health workers<!--
<br>
<a href="#" onclick="gonav(2); return false;">Learn More &raquo;</a>
-->
</p>
</div>
<!-- begin box 3 -->
<div class="box_last">
	<a href="#" onclick="gonav(1); return false;"><img src="img/home/content_boxes/4.jpg" alt="Mobilizing Communities" title="" border="0"></a>
	<h2><a href="#" onclick="gonav(1); return false;">Mobilizing Communities</a></h2>
<p>Linking local communities to the health system<!--
<br>
<a href="#" onclick="gonav(5); return false;">Learn More &raquo;</a>
-->
</p>
</div>
</div>
<div class="box_lg">
	<!-- <h2>About Us</h2> -->
	<p>Wild4life's mission is to expand the reach of health services to underserved rural communities in sub-Saharan Africa. Partnering with local organizations and leadership, the Ministry of Health, and other NGOs providing health services, to establish a working rural health system. The focus is on building the basic physical infrastructure and human capacity necessary to deliver essential services.</p>
</div>

</div>
<!-- end home content boxes -->

<!-- begin home news & program -->
<div class="home_news_program_container">
	<p>Most people in sub-Saharan Africa live in rural areas, often remote, where even basic healthcare is unavailable or hard to reach. The few health facilities that are in these areas face dire shortages of equipment and trained health professionals. Typically, the problem is compounded by people living long distances from the available health resources. Rural communities in these regions are severely impacted by diseases such as HIV, TB, malaria, diarrhea, and childhood pneumonia. Wildlife has developed a model for an effective rural health system that has demonstrated dramatic improvements in health outcomes. </p>

</div>
<!-- end home news & program -->


