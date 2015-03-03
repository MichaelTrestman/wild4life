
var is_msie = (navigator.appName == "Microsoft Internet Explorer") ? true : false;

var localdev = false;


// duplicated in shared.php

var sitemap = new Array();

sitemap[0] = new Array();
sitemap[0][0] = false; // has subs?
sitemap[0][1] = 'Home';

sitemap[1] = new Array();
sitemap[1][0] = true;
sitemap[1][1] = 'About Us';
sitemap[1][2] = new Array();
sitemap[1][2][0] = 'What We Do';
sitemap[1][2][1] = 'Who We Are';
sitemap[1][2][1][0] = new Array();
sitemap[1][2][2] = 'How It Works';

sitemap[2] = new Array();
sitemap[2][0] = false; // has subs?
sitemap[2][1] = 'Results';

sitemap[3] = new Array();
sitemap[3][0] = false;
sitemap[3][1] = 'Where We Work';

sitemap[4] = new Array();
sitemap[4][0] = true;
sitemap[4][1] = 'Partners';
sitemap[4][2] = new Array();
sitemap[4][2][0] = 'Field Partners';
sitemap[4][2][1] = 'Venture Partners';

sitemap[5] = new Array();
sitemap[5][0] = false;
sitemap[5][1] = 'Donate';

sitemap[6] = new Array();
sitemap[6][0] = false;
sitemap[6][1] = 'Contact Us';

who_subnav = new Array();
who_subnav[0] = 'Advisory Board';
who_subnav[1] = 'Founders';
who_subnav[2] = 'Our Team';
who_subnav[3] = 'Governing Board';

var map_names = new Array('botswana','cameroon','ethiopia','gabon','kenya','mozambique','nigeria','rwanda','southafrica','tanzania','zambia','zimbabwe');

map_count = 0;
var timedmapload;

function preload_maps() {
map_img = new Image();
map_img.src = 'img/where/map/'+map_names[map_count]+'.gif';
	if (map_count < map_names.length-1)
	timedmapload = setTimeout('preload_maps()',500);
map_count++;
}


function make_page_title(section_id,category_id,page_id) {
section_title = sitemap[section_id][1];
if (pagenav_on)
page_title = sitemap[section_id][2][category_id];
	
	if (page_id != null)
	page_title += ' : '+who_subnav[page_id];

document.title = 'Wild4life | '+((pagenav_on) ? section_title+' : '+page_title : section_title);
}


function go_page(page_name) {
top.window.location.href=page_name;
}

function go_page_replace(page_name) {
top.window.location.replace(page_name);
}

function go_frame_replace(page_name) {
this.location.replace(page_name);
}



function get_el(d) {
	return document.getElementById(d);
}

function hide_div(d) {
	document.getElementById(d).style.display = "none";
}

function show_div(d) {
	document.getElementById(d).style.display = "block";
}


function show_hide_div(id,zindex) {
var el = document.getElementById(id);
	if (el.style.display != "none") {
	el.style.display = "none";
		if (zindex) {
		el.style.zIndex = "0";
		}
	}
	else {
	el.style.display = "";
		if (zindex) {
		el.style.zIndex = zindex;
		}
	}
}




// nav

function gonav(section_id,category_id,page_id) {

	navtitle = (category_id >= 0 && category_id !== null) ? sitemap[section_id][2][category_id] : sitemap[section_id][1];
	navtitle = (category_id >= 0 && category_id !== null) ? sitemap[section_id][2][category_id] : sitemap[section_id][1];
	
	navtitle = (section_id == '1' && category_id == '1' && page_id !== false) ? who_subnav[page_id] : navtitle;
	
	navtitle = navtitle.split(' ').join('').toLowerCase();
	navlink = 'index.php?s='+section_id+((category_id >= 0 && category_id !== null) ? '&c='+category_id : '')+((page_id >= 0 && page_id  !== null) ? '&p='+page_id : '');
	
	if (section_id == 5) {
		window.open('https://www.networkforgood.org/donation/MakeDonation.aspx?ORGID2=454281064&vlrStratCode=3sxGCCOPB6xAbk5w96iBGzQ5CPM5hTkVNQ%2bwzLSZHBE2BD04dgfG7BJKIJ%2bvRGDm');
	} else {
	if (localdev)
	go_page(navlink);
	else
	go_page(navtitle);
	}
}



var subnav_timer;

function nav_over(section_id) {
clearTimeout(subnav_timer);
reset_nav();
reset_subnav();
get_el('nav_'+section_id).className = 'nav_item_on';
get_el('nav_l_'+section_id).src = 'img/nav/on/l.gif';
get_el('nav_r_'+section_id).src = 'img/nav/on/r.gif';
	if (nav_on != section_id) {
	get_el('nav_'+nav_on).className = 'nav_item';
	get_el('nav_l_'+nav_on).src = 'img/nav/off/l.gif';
	get_el('nav_r_'+nav_on).src = 'img/nav/off/r.gif';
	}
show_subnav(section_id);
}

function nav_out(section_id) {
	if (section_id != nav_on) {
	get_el('nav_'+section_id).className = 'nav_item';	
	get_el('nav_l_'+section_id).src = 'img/nav/off/l.gif';
	get_el('nav_r_'+section_id).src = 'img/nav/off/r.gif';
	}
get_el('nav_'+nav_on).className = 'nav_item_on';
get_el('nav_l_'+nav_on).src = 'img/nav/on/l.gif';
get_el('nav_r_'+nav_on).src = 'img/nav/on/r.gif';
reset_subnav();
subnav_timer = setTimeout('reset_subnav('+section_id+')',1000);
}

function reset_nav() {
	for (i=0;i<sitemap.length;i++) {
	get_el('nav_'+i).className = 'nav_item';
	get_el('nav_l_'+i).src = 'img/nav/off/l.gif';
	get_el('nav_r_'+i).src = 'img/nav/off/r.gif';
	}
}

// subnav

function show_subnav(section_id) {
	if (sitemap[nav_on][0]) {
		for(i=0;i<sitemap.length;i++) {
			if (sitemap[i][0]) {
			hide_div('subnav_'+i);
			}
		}
	}
	if (sitemap[section_id][0]) {
	show_div('subnav_'+section_id);
	}
}

function subnav_over(section_id,category_id) {
	if (section_id == nav_on && (pagenav_on && category_id == subnav_on)) {
	} else {
	get_el('subnav_'+section_id+'_'+category_id).className = 'nav_item_hover';
	}
	nav_over(section_id);
}

function subnav_out(section_id,category_id) {
	if (section_id == nav_on && (pagenav_on && category_id == subnav_on)) {
	} else {
	get_el('subnav_'+section_id+'_'+category_id).className = 'nav_item';	
	}
//nav_out(section_id);
subnav_timer = setTimeout('reset_subnav('+section_id+')',1000);
}

function subnav_active(section_id,category_id) {
	get_el('subnav_'+section_id+'_'+category_id).className = 'nav_item_on';
}


function reset_subnav(section_id) {
	for(i=0;i<sitemap.length;i++) {
		if (sitemap[i][0]) {
		hide_div('subnav_'+i);
		}
	}
	if (sitemap[nav_on][0]) {
	show_div('subnav_'+nav_on);
	} else {
	//show_div('subnav_'+nav_on);
	}
	
	if (section_id)
	nav_out(section_id);
clearTimeout(subnav_timer);
}





function init(section_id,category_id,page_id) {
	
	nav_over(section_id);
	
	if (pagenav_on)
	subnav_active(section_id,category_id)
	
	if (sitemap[section_id][0])
	show_div('subnav_'+section_id);

make_page_title(section_id,category_id,page_id);

}




function eval_signup_form() {
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
var address = document.forms['signup_form'].elements['email'].value;
	if(reg.test(address) == false) {
	alert('Please enter a valid email address.');
	return false;
	} else {
	document.signup_form.submit();
	}
}














