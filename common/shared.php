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
$page_id = ($q_two_type) ? $q_two_var : 'null';

$domain = "http://www.wild4life.org";

define('LS', "\n");

$localdev = true; # must also be changed in common/scripts.js


$sitemap = array();

$sitemap[0] = array();
$sitemap[0][0] = 'Home';
$sitemap[0][1] = NULL; # external link URL
$sitemap[0][2] = false; # has sub pages
$sitemap[0][3] = NULL; # subnav position

$sitemap[1] = array();
$sitemap[1][0] = 'What We Do';
$sitemap[1][1] = NULL;
$sitemap[1][2] = false;
$sitemap[1][3] = NULL;

$sitemap[2] = array();
$sitemap[2][0] = 'Who We Are';
$sitemap[2][1] = NULL;
$sitemap[2][2] = array();
$sitemap[2][2][0] = 'Our Team';
$sitemap[2][2][1] = 'Governing Board';
$sitemap[2][2][2] = 'Advisory Board';
$sitemap[2][3] = '504';

$sitemap[3] = array();
$sitemap[3][0] = 'Partners';
$sitemap[3][1] = NULL;
$sitemap[3][2] = false;
$sitemap[3][3] = NULL;

$sitemap[4] = array();
$sitemap[4][0] = 'Contact';
$sitemap[4][1] = NULL;
$sitemap[4][2] = false;
$sitemap[4][3] = NULL;

$sitemap[5] = array();
$sitemap[5][0] = 'Donate';
$sitemap[5][1] = 'https://www.networkforgood.org/donation/MakeDonation.aspx?ORGID2=454281064&vlrStratCode=3sxGCCOPB6xAbk5w96iBGzQ5CPM5hTkVNQ%2bwzLSZHBE2BD04dgfG7BJKIJ%2bvRGDm';
$sitemap[5][2] = false;
$sitemap[5][3] = NULL;

echo '<script>'.LS;
echo 'var sitemap = new Array();'.LS;
for($i=0;$i<count($sitemap);$i++) {
echo 'sitemap['.$i.'] = new Array();'.LS;
echo 'sitemap['.$i.'][0] = \''.$sitemap[$i][0].'\';'.LS;
echo 'sitemap['.$i.'][1] = '.(($sitemap[$i][1]) ? "'".$sitemap[$i][1]."'" : 'null').';'.LS;
echo 'sitemap['.$i.'][2] = '.(($sitemap[$i][2]) ? 'true' : 'false').';'.LS;
	if ($sitemap[$i][2]) {
	echo 'sitemap['.$i.'][2] = '.(($sitemap[$i][2]) ? 'new Array();' : NULL).LS;
	for($j=0;$j<count($sitemap[$i][2]);$j++) {
	echo 'sitemap['.$i.'][2]['.$j.'] = \''.$sitemap[$i][2][$j].'\';'.LS;
	}
	}
}
echo '</script>'.LS;

?>












