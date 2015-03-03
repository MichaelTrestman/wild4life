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

$domain = "http://www.wild4life.org";

$localdev = false;
# must also be changed in common/scripts.js

# duplicated in sripts.js

$sitemap = array();

$sitemap[0] = array();
$sitemap[0][0] = false; // has subs?
$sitemap[0][1] = 'Home';

$sitemap[1] = array();
$sitemap[1][0] = true;
$sitemap[1][1] = 'About Us';
$sitemap[1][2] = array();
$sitemap[1][2][0] = 'What We Do';
$sitemap[1][2][1] = 'Who We Are';
$sitemap[1][2][2] = 'How It Works';

$sitemap[2] = array();
$sitemap[2][0] = false; // has subs?
$sitemap[2][1] = 'Results';

$sitemap[3] = array();
$sitemap[3][0] = false;
$sitemap[3][1] = 'Where We Work';

$sitemap[4] = array();
$sitemap[4][0] = true;
$sitemap[4][1] = 'Partners';
$sitemap[4][2] = array();
$sitemap[4][2][0] = 'Field Partners';
$sitemap[4][2][1] = 'Venture Partners';

$sitemap[5] = array();
$sitemap[5][0] = false;
$sitemap[5][1] = 'Donate';

$sitemap[6] = array();
$sitemap[6][0] = false;
$sitemap[6][1] = 'Contact Us';


$who_subnav = array();
$who_subnav[0] = 'Advisory Board';
$who_subnav[1] = 'Founders';
$who_subnav[2] = 'Out Team';

?>
