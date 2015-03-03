
var is_msie = (navigator.appName == "Microsoft Internet Explorer") ? true : false;

var localdev = true;



function make_page_title(section_id,page_id) {
section_title = sitemap[section_id][0];

if (subnav_on !== null)
page_title = sitemap[section_id][2][subnav_on];
document.title = ((subnav_on !== null) ? page_title : section_title)+' | Wild4life';
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

function gonav(section_id,page_id) {

	navtitle = (page_id >= 0 && page_id !== null) ? sitemap[section_id][2][page_id] : sitemap[section_id][0];
	navtitle = navtitle.split(' ').join('-').toLowerCase();
	navlink = 'index.php?s='+section_id+((page_id >= 0 && page_id !== null) ? '&p='+page_id : '');

	if (sitemap[section_id][1])
	window.open(sitemap[section_id][1]);
	else
		if (localdev)
		go_page(navlink);
		else
		go_page(navtitle);
}



function nav_over(section_id,init) {
reset_nav();
if (get_el('nav_'+section_id)) {
get_el('nav_'+section_id).className = 'nav_item_on';
get_el('nav_l_'+section_id).src = 'img/nav/on/l.gif';
get_el('nav_r_'+section_id).src = 'img/nav/on/r.gif';
	if (nav_on && nav_on != section_id) {
	get_el('nav_'+nav_on).className = 'nav_item';
	get_el('nav_l_'+nav_on).src = 'img/nav/off/l.gif';
	get_el('nav_r_'+nav_on).src = 'img/nav/off/r.gif';
	}
}

	if (sitemap[section_id][2] && init)
	show_div('subnav_'+section_id);
}

function nav_out(section_id) {
	if (section_id != nav_on) {
	get_el('nav_'+section_id).className = 'nav_item';
	get_el('nav_l_'+section_id).src = 'img/nav/off/l.gif';
	get_el('nav_r_'+section_id).src = 'img/nav/off/r.gif';
	}

	if (nav_on) {
	get_el('nav_'+nav_on).className = 'nav_item_on';
	get_el('nav_l_'+nav_on).src = 'img/nav/on/l.gif';
	get_el('nav_r_'+nav_on).src = 'img/nav/on/r.gif';
	}

	for (i=0;i<sitemap.length;i++) {
	if (sitemap[i][2])
	hide_div('subnav_'+i);
	}

	if (sitemap[nav_on][2])
	show_div('subnav_'+nav_on);

}

function reset_nav() {
	for (i=1;i<sitemap.length;i++) {
	get_el('nav_'+i).className = 'nav_item';
	get_el('nav_l_'+i).src = 'img/nav/off/l.gif';
	get_el('nav_r_'+i).src = 'img/nav/off/r.gif';
	}
}


function init(section_id,page_id) {
nav_over(section_id,true);
make_page_title(section_id,page_id);
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














