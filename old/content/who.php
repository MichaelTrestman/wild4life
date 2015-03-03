<?php # WHO WE ARE ?>



<?php

if (!$q_two_type) {

?>

<div class="main_slideshow_container">

<div id="main_slideshow" style="position: relative; float: left; overflow: hidden; width: 930px; height: 321px; margin: 0 0 0 47px; border: 5px solid #d0d0d0; background: #fff;">

<div id="main_slideshow_inner" style="position: relative; float: left; padding: 0; margin: 0; left: 0px; z-index: 1;">
<div class="slide_container">
<div class="slide_img"><img src="img/who/photo.jpg" alt="" title="" border="0"></div>
<div class="slide_text_sub">
<h1>Our Story</h1>
<p>Wild4life started when Kel Sheppey, a wildlife biologist and Zimbabwean, witnessed the high HIV prevalence rates among conservation workers in rural Africa. Working with Charles Knowles, CEO of Wildlife Conservation Network, he realized that many conservation workers were HIV-positive, but were not getting treatment because they had no local access to care and they did not have the means or time to travel five hours on a regular basis to a health facility. As a result, in 2008, Kel decided to leave his role as a senior executive at Oracle to address gaps in HIV testing and treatment. Working alongside local partners and leaders, we discovered that once high-priority health needs such as HIV had been met and communities were mobilized around health services, demand for other services followed.</p>
</div>
</div>
</div>
</div>

<div class="shadow_bottom"></div>
<div class="shadow_right"></div>


</div>
<!-- end main slideshow -->

<div class="sub_content_container" style="margin-bottom: 100px;">

<div class="who_section_container">
<p>Wild4life started when Kel Sheppey, a wildlife biologist and Zimbabwean, witnessed the high HIV prevalence rates among conservation workers in rural Africa. Working with Charles Knowles, CEO of Wildlife Conservation Network, he realized that many conservation workers were HIV-positive, but were not getting treatment because they had no local access to care and they did not have the means or time to travel five hours on a regular basis to a health facility. As a result, in 2008, Kel decided to leave his role as a senior executive at Oracle to address gaps in HIV testing and treatment. Working alongside local partners and leaders, we discovered that once high-priority health needs such as HIV had been met and communities were mobilized around health services, demand for other services followed.</p>
</div>

<div class="subnav">
<ul>
<li><a href="#" onclick="gonav(2,0); return false;">Our Team &raquo;</a></li>
<li><a href="#" onclick="gonav(2,1); return false;">Governing Board &raquo;</a></li>
<li><a href="#" onclick="gonav(2,2); return false;">Advisory Board &raquo;</a></li>
</ul>
</div>


<?php

/*
<div style="position: relative; float: left; width: 250px; height: auto; margin: 0 20px 0 0; padding: 20px; border: 5px solid #d0d0d0; cursor: pointer;" onclick="gonav(2,0); return false;" onmouseover="get_el('who_nav_0').style.textDecoration='underline';" onmouseout="get_el('who_nav_0').style.textDecoration='none';">
<h2 style="position: relative; float: left; margin: 0; padding: 0;" id="who_nav_0">Meet the Team &raquo;</h2>
</div>

<div style="position: relative; float: left; width: 250px; height: auto; margin: 0 20px 0 0; padding: 20px; border: 5px solid #d0d0d0; cursor: pointer;" onclick="gonav(2,1); return false;" onmouseover="get_el('who_nav_1').style.textDecoration='underline';" onmouseout="get_el('who_nav_1').style.textDecoration='none';">
<h2 style="position: relative; float: left; margin: 0; padding: 0;" id="who_nav_1">Governing Board &raquo;</h2>
</div>

<div style="position: relative; float: left; width: 250px; height: auto; margin: 0; padding: 20px; border: 5px solid #d0d0d0; cursor: pointer;" onclick="gonav(2,2); return false;" onmouseover="get_el('who_nav_2').style.textDecoration='underline';" onmouseout="get_el('who_nav_2').style.textDecoration='none';">
<h2 style="position: relative; float: left; margin: 0; padding: 0;" id="who_nav_2">Advisory Board &raquo;</h2>
</div>
*/
?>

</div>

<?php } else { ?>

<!-- begin sub content -->
<div class="sub_content_container">

<!-- <h2 class="lines">Who We Are</h2> -->

<!-- begin content -->
<div class="content_container_full">

<div class="subnav">
<ul>
<?php
echo '<li>'.(($q_two_type && $page_id != '0') ? '<a href="#" onclick="gonav(2,0); return false;">' : NULL).'Our Team'.(($q_two_type && $page_id != '0') ? ' &raquo;</a>' : NULL).'</li>';
echo '<li>'.(($page_id != '1') ? '<a href="#" onclick="gonav(2,1); return false;">' : NULL).'Governing Board'.(($page_id != '1') ? ' &raquo;</a>' : NULL).'</li>';
echo '<li>'.(($page_id != '2') ? '<a href="#" onclick="gonav(2,2); return false;">' : NULL).'Advisory Board'.(($page_id != '2') ? ' &raquo;</a>' : NULL).'</li>';
?>
</ul>
</div>

<div class="who_container">


<script type="text/javascript">

var team_remove = [1,2,3,19];

function change_who(bionum) {
;

is_team = <?php echo ($page_id == 0) ? 'true' : 'false'; ?>;
is_govern = <?php echo ($page_id == 1) ? 'true' : 'false'; ?>;
	if (is_team)
	dont_change = (bionum !== false && (bionum == 1 || bionum == 2 || bionum == 3 || bionum == 19));
	if (is_govern)
	dont_change = (bionum !== false && (bionum == 0));

if (!dont_change) {
get_el('whobioheader').innerHTML = biocontent[bionum]['name'];
get_el('whobiocontent').innerHTML = biocontent[bionum]['bio'];
}

	if (is_team) {
		for(i=0;i<biocontent.length;i++) {
			if (is_team)
			do_change = (i != 1 && i != 2 && i != 3 && i != 19);
			if (is_govern)
			do_change = (i != 0);

			if (do_change) {
			navid = 'whonav'+i;
/*
			<?php if ($page_id != 2) { ?>
			get_el(navid).className = 'whonavoff';
			get_el(navid).innerHTML = biocontent[i]['name']+' &raquo;';
			<?php } ?>
*/
			bioimg = 'img'+i;
			get_el(bioimg).src = 'img/who/'+who_dir+'/'+i+'.jpg';
			}
		}
	} else {
		for(i=0;i<biocontent.length;i++) {
			if (is_govern)
			do_change = (i != 0);
			if (do_change) {
			navid = 'whonav'+i;
			<?php if ($page_id != 0) { ?>
			get_el(navid).className = 'whonavoff';
			get_el(navid).innerHTML = biocontent[i]['name']+' &raquo;';
			<?php } ?>
			bioimg = 'img'+i;
			get_el(bioimg).src = 'img/who/'+who_dir+'/'+i+'.jpg';
			}
		}
	}
	
navid = 'whonav'+bionum;
<?php if ($page_id != 0) { ?>
get_el(navid).innerHTML = biocontent[bionum]['name'];
get_el(navid).className = 'whonavon';
<?php } ?>

	if (!dont_change) {
	get_el('mainimg').src = 'img/who/'+who_dir+'/'+bionum+'-lrg.jpg';
	bioimg = 'img'+bionum;
	get_el(bioimg).src = 'img/common/x.gif';
	}
}

/*
var whopreload;
whopreload_count = 0;

function preload_who_imgs() {
whopreloadimg_lrg = new Image();
whopreloadimg_lrg.src = 'img/who/'+who_dir+'/'+whopreload_count+'-lrg.jpg';
whopreloadimg = new Image();
whopreloadimg.src = 'img/who/'+who_dir+'/'+whopreload_count+'.jpg';
		
	if (whopreload_count < biocontent.length-1	) {
	whopreload = setTimeout('preload_who_imgs()',1000);
	whopreload_count++;
	} else {
	clearTimeout(whopreload);
	}
}

function start_whopreload() {
whopreload = setTimeout('preload_who_imgs()',1000);
}
*/

</script>


<?php 

}

# advisory board

if ($page_id == '2') { ?>


<script type="text/javascript">

who_dir = 'advisory';

var biocontent = new Array();

biocontent[0] = new Array();
biocontent[0]['name'] = 'Dr Arthur J. Ammann';
biocontent[0]['bio'] = "President of Global Strategies for HIV Prevention and Clinical Professor of Pediatrics at the University of California, San Francisco Medical Center. In 1982, Dr. Ammann described two of the three ways that HIV is transmitted, including the first cases of transmission of AIDS from mother to infant and the first blood transfusion AIDS patients. Among his many awards and honors, Dr. Ammann has received the United States Surgeon General Award for Research, the United States Public Health Service Fellowship Award, AmFAR World AIDS Day Recognition Award for contributions to pediatric HIV/AIDS, and Heroes in Medicine Award by the International Association of Physicians in AIDS Care. He is the past Director of the Pediatric Immunology and Clinical Research Center at the University of California Medical Center, San Francisco. In 1998, he founded Global Strategies for HIV Prevention to respond to the needs of HIV infected women and children globally.";
biocontent[1] = new Array();
biocontent[1]['name'] = 'Dr Paul Volberding';
biocontent[1]['bio'] = " is a Professor and Vice Chair of the Department of Medicine at the University of California, San Francisco, and Chief of the Medical Service at the San Francisco Veterans Affairs Medical Center. He is the Principal Investigator and Co-Director of the UCSF-GIVI Center for AIDS Research and Chairs the Scientific Advisory Board of the Infectious Disease Institute of Makerere University in Kampala Uganda. He received his undergraduate and medical degrees at the University of Chicago and the University of Minnesota, respectively, and finished training at the University of Utah and the University of California, San Francisco, where he studied for two years as a research fellow in the virology laboratory of Dr. Jay Levy, later a co-discoverer of HIV. For twenty years, Dr. Volberding's professional activities centered at San Francisco General Hospital where he established a model program of AIDS patient care, research, and professional education. He became the Chief of the Medical Service at the San Francisco VA Medical Center in 2001. His research career began with investigations of HIV-related malignancies, especially Kaposi's Sarcoma. His primary research focus, however, shifted to clinical trials of antiretroviral drugs. He has been instrumental in testing many compounds, including early studies in asymptomatic infection that lead to the concept of HIV disease, not simply AIDS as the target of treatment. Dr. Volberding has written many research and review articles. He is the co-editor in chief of the Journal of Acquired Immune Deficiency Syndrome, and a founder of HIV InSite, a comprehensive source of HIV information. He served as Co-Editor of the major textbook, Global HIV/AIDS Medicine. He is the founder and Chair of the Board of the International AIDS Society - USA. He has served as the President of the HIV Medical Association of the IDSA and of the International AIDS Society. He was elected a member of the Institute of Medicine of the National Academy of Sciences in 1999.";
biocontent[2] = new Array();
biocontent[2]['name'] = 'Dr Philippa Musoke';
biocontent[2]['bio'] = " is Associate Professor in the department of Paediatrics and Child Health, Makerere University. She is also Principal investigator for site MUJHU Care Ltd. She previously served as the head of the Paediatrics department and an Investigator at the Makerere University-Johns Hopkins University Research Collaboration based at Mulago Hospital. Her medical degree was obtained from Makerere University. She received her training at Case Western Reserve University, Cleveland Ohio and University of Louisville Kentucky and is board certified in Pediatric Infectious diseases. She is the recipient of an award for Outstanding Contributions to Advancing the Prevention of Perinatal HIV Transmission presented by the Second Conference on Global Strategies for the Prevention of HIV Transmission From Mothers to Infants, and an International Leadership Award presented by the Elizabeth Glaser Pediatric AIDS Foundation. Her research interests include; Prevention of Mother to Child HIV transmission (PMTCT), paediatric HIV in resource poor settings, and childhood TB.";
biocontent[3] = new Array();
biocontent[3]['name'] = 'Dr James Deutsch ';
biocontent[3]['bio'] = "directs the Wildlife Conservation Society's Africa Program, a $25 million/year conservation program employing over 1100 staff in the field. He has studied and published on Uganda kob behavioral ecology (for a Cambridge Ph.D.), Malawi cichlid evolution, and primate behavior, has lectured in ecology and conservation biology at Imperial College, London, and the University of East Anglia, has led courses for the Tropical Biology Association in Uganda and Kenya, and taught high school in Kenya. From 1997-2002, Dr Deutsch worked as an AIDS activist, running the UK's national fundraising charity for HIV & AIDS, Crusaid.";
biocontent[4] = new Array();
biocontent[4]['name'] = 'Dr Scott Hammer';
biocontent[4]['bio'] = "is the Harold C. Neu Professor of Medicine, Professor of Epidemiology and Chief of the Division of Infectious Diseases at the Columbia University Medical Center (CUMC). Dr. Hammer's major investigative interest is the treatment and prevention of HIV disease. He is an investigator in the National Institutes of Health sponsored AIDS Clinical Trials Group (ACTG), a multicenter organization which performs clinical trials designed to improve the understanding and treatment of HIV infection and its complications. As an ACTG investigator, Dr. Hammer chaired the two largest national trials of antiretroviral therapy carried out by that group in the 1990's, studies which contributed to the current standard of care of HIV infection. In addition to his interest in the treatment of persons with established HIV infection, Dr. Hammer is an investigator in the National Institutes of Health sponsored HIV Vaccine Trials Network (HVTN), a multicenter organization whose mission is to develop an effective preventive HIV vaccine. He is the current protocol chair of HVTN 505, an advanced phase II study of the preventive HIV vaccine regimen developed by NIAID's Vaccine Research Center. He is a former Chair of the AIDS Vaccine Research Working Group of the Division of AIDS, NIAID, and the Antiviral Products Advisory Committee of the Food and Drug Administration and currently serves on the Editorial Board of the New England Journal of Medicine. Dr. Hammer is Chair of the International AIDS Society-USA's Antiretroviral Guidelines Panel and is Vice Chair of the World Health Organization's Strategic and Technical Advisory Committee for HIV/AIDS. He formerly chaired the Guidelines Development Group of the WHO's Antiretroviral Guidelines for Resource Limited Settings and co-chaired the Steering Committee of the WHO's Global HIV Drug Resistance Surveillance Program. He has served as a member of the International Advisory Committees of the Swiss HIV Cohort Study, the French National Association for AIDS Research and the HIV-NAT (Netherlands-Australia-Thailand) Collaborative Research Network.";
biocontent[5] = new Array();
biocontent[5]['name'] = 'Dr Elaine Abrams';
biocontent[5]['bio'] = "Professor of Epidemiology at Columbia University Mailman School of Public Health, and Professor of Pediatrics at the College of Physicians and Surgeons at the same university. She is the director of the MTCT-Plus Initiative, a care and treatment program for HIV-infected women and their families in resource constrained settings. Currently, there are 13 programs at 42 sites in nine countries in Sub-Saharan Africa and Thailand. Dr. Abrams is also a member of the leadership group of ICAP, the International Center for AIDS Care and Treatment Programs, where she is responsible for the development and implementation of pediatric and perinatal prevention initiatives. Within this context, Dr. Abrams is supporting the development of Centers of Excellence in Pediatric and Family Care in several African countries. Dr. Abrams has been an active investigator in the field of maternal-infant HIV transmission and the natural history of HIV disease in infants and children since the recognition of the epidemic in the United States. She has developed a comprehensive research and care program for woman and children with HIV infection in Central Harlem, the Family Care Center; has been actively involved in the development of national and local policies for care and treatment; and has conducted multiple clinical trials of antiretroviral agents and other associated medications. She has been an investigator in a longstanding study examining risk factors for perinatal transmission and is now the principal investigator of a multi-site follow-up study. Dr. Abrams has an active clinical practice and continues to provide care for a large group of HIV-infected children and their families.";
biocontent[6] = new Array();
biocontent[6]['name'] = 'Dr Sten Vermund';
biocontent[6]['bio'] = "Director of the Institute for Global Health at Vanderbilt University School of Medicine, Professor of Pediatrics, Professor of Medicine, Professor of Preventive Medicine, and Professor of Obstetrics and Gynecology, at Vanderbilt University. He has served as chief of the epidemiology branch of the AIDS division of the National Institute of Allergy and Infectious Diseases (NIAID), and as United States' chair of the U.S.-Japan Panel on AIDS. He is the recipient of the Public Health Service's (PHS) Superior Service Award and the NIAID/National Institutes of Health (NIH)/PHS Meritorious Service Award, among numerous other honors. His research interests lie in infectious disease control and prevention with a focus on developing countries. Dr. Vermund works closely with the Vanderbilt-Meharry Center for AIDS Research, the Vanderbilt University Program in Medicine, Society, and Health, the Center for Epidemiology, and the Institute for Medicine and Public Health. He serves as principal investigator of a Family Health International-Vanderbilt grant for the HIV Prevention Trials Network Leadership Group sponsored by the NIAID and collaborating NIH organizations. Dr. Vermund also spearheads the Vanderbilt-Merharry Global Framework Program to develop global health training and curricular content throughout the curricula of both institutions.";
</script>

<ul class="who_nav">
<li class="header">Advisory<br>Board</li>
<script type="text/javascript">
for(i=0;i<biocontent.length;i++) {
document.write('<li><a href="#" onclick="change_who('+i+'); return false;" id="whonav'+i+'" class="whonav'+((i == 5) ? 'on' : 'off')+'">'+biocontent[i]['name']+((i == 5) ? '' : ' &raquo;')+'</a></li>');
}
</script>
</ul>

<div class="main_photo"><img src="img/who/advisory/5-lrg.jpg" alt="" title="" border="0" width="216" height="216" id="mainimg"></div>
<div class="box light">&nbsp;</div>
<div class="box dark"><a href="#" onclick="change_who(1); return false;"><img src="img/who/advisory/1.jpg" alt="" title="" border="0" id="img1"></a></div>
<div class="box light"><a href="#" onclick="change_who(5); return false;"><img src="img/common/x.gif" alt="" title="" border="0" id="img5"></a></div>

<div class="box dark"><a href="#" onclick="change_who(3); return false;"><img src="img/who/advisory/3.jpg" alt="" title="" border="0" id="img3"></a></div>
<div class="box light"><a href="#" onclick="change_who(6); return false;"><img src="img/who/advisory/6.jpg" alt="" title="" border="0" id="img6"></a></div>
<div class="box light">&nbsp;</div>

<div class="box light">&nbsp;</div>
<div class="box dark">&nbsp;</div>
<div class="box dark"><a href="#" onclick="change_who(4); return false;"><img src="img/who/advisory/4.jpg" alt="" title="" border="0" id="img4"></a></div>
<div class="box light">&nbsp;</div>
<div class="box dark"><a href="#" onclick="change_who(2); return false;"><img src="img/who/advisory/2.jpg" alt="" title="" border="0" id="img2"></a></div>
<div class="box light">&nbsp;</div>
<div class="box dark"><a href="#" onclick="change_who(0); return false;"><img src="img/who/advisory/0.jpg" alt="" title="" border="0" id="img0"></a></div>

<h3 id="whobioheader" style="margin: 8px 0 0 6px; clear: both;"><script type="text/javascript">document.write(biocontent[5]['name']);</script></h3>
<div id="whobiocontent">
<script type="text/javascript">document.write(biocontent[5]['bio']);</script>
</div>

<?php } ?>




<?php # founders
if ($page_id === '3') { ?>

<script type="text/javascript">

who_dir = 'founders';

var biocontent = new Array();

biocontent[0] = new Array();
biocontent[0]['name'] = 'Kel Sheppey';
biocontent[0]['bio'] = "A Zimbabwean, biologist, and MBA from the University of Cape Town, with a deep understanding from first-hand experience of rural Africa and the issues its communities face. He has a background in immunology, and more recently, program implementation as Oracle Corporation's Applications IT Implementation Director for Latin America. Kel left a successful corporate career to start Wild4life where he now serves as Managing Director.";
biocontent[1] = new Array();
biocontent[1]['name'] = 'Charles Knowles';
biocontent[1]['bio'] = "A successful Stanford-educated Silicon Valley entrepreneur. He founded the software company Rubicon Technology and later, as co-founder with Akiko Yamazaki, the Wildlife Conservation Network, to identify, qualify and invest in the best and brightest conservationists around the world. The Wildlife Conservation Network has since become a model program for supporting conservation efforts around the world.";
biocontent[2] = new Array();
biocontent[2]['name'] = 'Akiko Yamazaki';
biocontent[2]['bio'] = "Co-founder of the Wildlife Conservation Network, was an early convert to recognizing the impact of HIV/ AIDS on wildlife conservation in Africa. Akiko and her husband, Jerry Yang, founder of Yahoo, are active supporters of a number of philanthropic organizations in the San Francisco Bay Area. Akiko serves on the boards of a number of prominent Bay Area organizations, including the Wildlife Conservation Network, The Asian Art Museum and San Francisco Ballet (Trustee Emeritus). Additionally, she and her husband are ardent supporters of their alma mater, Stanford University, having co-chaired the $1 billion Campaign for Undergraduate Education and provided the naming gift for the Environment and Energy Building. A horsewoman for life, Akiko also serves on the United States Equestrian Team Foundation Board.";
biocontent[3] = new Array();
biocontent[3]['name'] = 'Dr Kevin Starr';
biocontent[3]['bio'] = "Managing Director of the Mulago Foundation and founder and director of the Rainer Arnhold Fellows Program. Mulago works like a social impact venture fund to seed and grow the most promising solutions in health, development, and conservation in the Third World. The Fellows program is an outgrowth of the Foundation, and works with some of the best social entrepreneurs working in the developing world to maximize their impact through a structured evolution of project design.";
biocontent[4] = new Array();
biocontent[4]['name'] = 'Dr Clive Evian';
biocontent[4]['bio'] = "A medical specialist in community health and HIV/AIDS. He initiated the City of Johannesburg Health Department's AIDS Program and established its first community AIDS centre. Dr Evian has published extensively on AIDS, including a widely used reference for medical practitioners in the field, Primary HIV Clinical Care, now in its 5th edition. He is an Associate of Public Health Medicine, College of Medicine of South Africa, and was Director of the Health Services Development Unit, a rural outreach program of the University of the Witwatersrand, focusing on rural healthcare in underserved areas. Dr Evian serves as Wild4life's Chief Medical Practitioner in the field and brings outstanding practical experience and insight to the program.";

</script>


<ul class="who_nav">
<li class="header">Founders</li>
<script type="text/javascript">
for(i=0;i<biocontent.length;i++) {
document.write('<li><a href="#" onclick="change_who('+i+'); return false;" id="whonav'+i+'" class="whonav'+((i === 0) ? 'on' : 'off')+'">'+biocontent[i]['name']+((i === 0) ? '' : ' &raquo;')+'</a></li>');
}
</script>
</ul>

<div class="main_photo"><img src="img/who/founders/0-lrg.jpg" alt="" title="" border="0" width="216" height="216" id="mainimg"></div>
<div class="box light">&nbsp;</div>
<div class="box dark">&nbsp;</div>
<div class="box light"><a href="#" onclick="change_who(3); return false;"><img src="img/who/founders/3.jpg" alt="" title="" border="0" id="img3"></a></div>

<div class="box dark">&nbsp;</div>
<div class="box light"><a href="#" onclick="change_who(0); return false;"><img src="img/common/x.gif" alt="" title="" border="0" id="img0"></a></div>
<div class="box light">&nbsp;</div>

<div class="box light">&nbsp;</div>
<div class="box dark">&nbsp;</div>
<div class="box dark"><a href="#" onclick="change_who(1); return false;"><img src="img/who/founders/1.jpg" alt="" title="" border="0" id="img1"></a></div>
<div class="box light">&nbsp;</div>
<div class="box dark"><a href="#" onclick="change_who(4); return false;"><img src="img/who/founders/4.jpg" alt="" title="" border="0" id="img4"></a></div>
<div class="box light">&nbsp;</div>
<div class="box dark"><a href="#" onclick="change_who(2); return false;"><img src="img/who/founders/2.jpg" alt="" title="" border="0" id="img2"></a></div>

<h3 id="whobioheader" style="margin: 8px 0 0 6px; clear: both;"><script type="text/javascript">document.write(biocontent[0]['name']);</script></h3>
<div id="whobiocontent">
<script type="text/javascript">document.write(biocontent[0]['bio']);</script>
</div>

<?php } ?>


<?php 
# team
if ($page_id == '0') { ?>

<script type="text/javascript">

who_dir = 'team';

var biocontent = new Array();

biocontent[0] = new Array();
biocontent[0]['name'] = 'Kel Sheppey';
biocontent[0]['bio'] = "Managing Director and Founder";
biocontent[1] = new Array();
biocontent[1]['name'] = 'Anne Hector';
biocontent[1]['bio'] = "Chief Operating Officer";
biocontent[2] = new Array();
biocontent[2]['name'] = 'Molly Ronan';
biocontent[2]['bio'] = "Program Manager";
biocontent[3] = new Array();
biocontent[3]['name'] = 'Alix Grubel';
biocontent[3]['bio'] = "East Africa Regional Director";
biocontent[4] = new Array();
biocontent[4]['name'] = 'Clive Evian';
biocontent[4]['bio'] = "Chief Medical Officer, Founder, and Southern Africa Regional Director";
biocontent[5] = new Array();
biocontent[5]['name'] = 'Jonathan Levine';
biocontent[5]['bio'] = "Program Advisor";
biocontent[6] = new Array();
biocontent[6]['name'] = 'Forgie Wilson';
biocontent[6]['bio'] = "HIV Program Co-ordinator, Painted Dog Conservation, Zimbabwe";
biocontent[7] = new Array();
biocontent[7]['name'] = 'Agnes Mugo';
biocontent[7]['bio'] = "HIV Program Co-ordinator, Lewa Wildlife Conservancy, Kenya";
biocontent[8] = new Array();
biocontent[8]['name'] = 'Margaret Wambui';
biocontent[8]['bio'] = "HIV Program Co-ordinator, One Acre Fund, Kenya";
biocontent[9] = new Array();
biocontent[9]['name'] = 'Renald Rogasian Mtana';
biocontent[9]['bio'] = "HIV Program Co-ordinator, WCS Iringa, Tanzania";
biocontent[10] = new Array();
biocontent[10]['name'] = 'Sophy Machaga';
biocontent[10]['bio'] = "HIV Program Co-ordinator, WCS Mbeya, Tanzania";
biocontent[11] = new Array();
biocontent[11]['name'] = 'Lara Foley';
biocontent[11]['bio'] = "HIV Program Co-ordinator, WCS Arusha, Tanzania";
biocontent[12] = new Array();
biocontent[12]['name'] = 'Godfrey Mloka';
biocontent[12]['bio'] = "HIV Program Co-ordinator, WCS Zanzibar, Tanzania";
biocontent[13] = new Array();
biocontent[13]['name'] = 'Claudine Tuyishime';
biocontent[13]['bio'] = "HIV Program Co-ordinator, WCS Nyungwe, Rwanda";
biocontent[14] = new Array();
biocontent[14]['name'] = 'Nicolas Ntare';
biocontent[14]['bio'] = "HIV Program Co-ordinator, WCS Nyungwe, Rwanda";
biocontent[15] = new Array();
biocontent[15]['name'] = 'Andrew Dunn';
biocontent[15]['bio'] = "HIV Program Co-ordinator, WCS Cross River National Park, Nigeria";
biocontent[16] = new Array();
biocontent[16]['name'] = 'Gwendoline Kwankam';
biocontent[16]['bio'] = "HIV Program Co-ordinator, WCS Takamanda National Park, Cameroon";
biocontent[17] = new Array();
biocontent[17]['name'] = 'Alfred Chingono';
biocontent[17]['bio'] = "Zimbabwe Country Director";
biocontent[18] = new Array();
biocontent[18]['name'] = 'Brynn Reinhardt';
biocontent[18]['bio'] = "Financial Manager";
biocontent[19] = new Array();
biocontent[19]['name'] = 'Laura Washburn';
biocontent[19]['bio'] = "Communications Director";
biocontent[20] = new Array();
biocontent[20]['name'] = 'Dominic Nyathi';
biocontent[20]['bio'] = "Assistant Program Coordinator, Painted Dog Conservation, Zimbabwe";
biocontent[21] = new Array();
biocontent[21]['name'] = 'Stephanie Stuart Trinder';
biocontent[21]['bio'] = "Chief Operating Officer";
biocontent[22] = new Array();
biocontent[22]['name'] = 'Jennifer O\'Connor';
biocontent[22]['bio'] = "Communications and Development Director";

</script>

<ul class="who_nav">
<li class="header">Our Team</li>
</ul>

<div class="main_photo"><img src="img/who/team/8-lrg.jpg" alt="" title="" border="0" width="216" height="216" id="mainimg"></div>

<div class="box dark"><a href="#" onclick="change_who(9); return false;"><img src="img/who/team/9.jpg" alt="" title="" border="0" id="img9"></a></div>
<div class="box dark"><a href="#" onclick="change_who(22); return false;"><img src="img/who/team/22.jpg" alt="" title="" border="0" id="img22"></a></div>
<div class="box light"><img src="img/common/x.gif" alt="" title="" border="0" id="img19"></div>

<div class="box light"><a href="#" onclick="change_who(21); return false;"><img src="img/who/team/21.jpg" alt="" title="" border="0" id="img21"></a></div>
<div class="box light"><a href="#" onclick="change_who(0); return false;"><img src="img/who/team/0.jpg" alt="" title="" border="0" id="img0"></a></div>
<div class="box light"><a href="#" onclick="change_who(13); return false;"><img src="img/who/team/13.jpg" alt="" title="" border="0" id="img13"></a></div>

<div class="box light"><a href="#" onclick="change_who(16); return false;"><img src="img/who/team/16.jpg" alt="" title="" border="0" id="img16"></a></div>
<div class="box light"><a href="#" onclick="change_who(18); return false;"><img src="img/who/team/18.jpg" alt="" title="" border="0" id="img18"></a></div>
<div class="box light"><a href="#" onclick="change_who(7); return false;"><img src="img/who/team/7.jpg" alt="" title="" border="0" id="img7"></a></div>
<div class="box light"><a href="#" onclick="change_who(8); return false;"><img src="img/common/x.gif" alt="" title="" border="0" id="img8"></a></div>
<div class="box dark"><a href="#" onclick="change_who(17); return false;"><img src="img/who/team/17.jpg" alt="" title="" border="0" id="img17"></a></div>
<div class="box dark"><a href="#" onclick="change_who(11); return false;"><img src="img/who/team/11.jpg" alt="" title="" border="0" id="img11"></a></div>
<div class="box dark"><a href="#" onclick="change_who(4); return false;"><img src="img/who/team/4.jpg" alt="" title="" border="0" id="img4"></a></div>

<div class="box dark"><a href="#" onclick="change_who(6); return false;"><img src="img/who/team/6.jpg" alt="" title="" border="0" id="img6"></a></div>
<div class="box light"><a href="#" onclick="change_who(14); return false;"><img src="img/who/team/14.jpg" alt="" title="" border="0" id="img14"></a></div>
<div class="box light"><a href="#" onclick="change_who(5); return false;"><img src="img/who/team/5.jpg" alt="" title="" border="0" id="img5"></a></div>
<div class="box dark"><a href="#" onclick="change_who(10); return false;"><img src="img/who/team/10.jpg" alt="" title="" border="0" id="img10"></a></div>
<div class="box dark"><a href="#" onclick="change_who(20); return false;"><img src="img/who/team/20.jpg" alt="" title="" border="0" id="img20"></a></div>
<div class="box dark"><a href="#" onclick="change_who(15); return false;"><img src="img/who/team/15.jpg" alt="" title="" border="0" id="img15"></a></div>
<div class="box light"><a href="#" onclick="change_who(12); return false;"><img src="img/who/team/12.jpg" alt="" title="" border="0" id="img12"></a></div>

<h3 id="whobioheader" style="margin: 8px 0 0 6px; clear: both;"><script type="text/javascript">document.write(biocontent[8]['name']);</script></h3>
<div id="whobiocontent">
<script type="text/javascript">document.write(biocontent[8]['bio']);</script>
</div>
<?php } ?>






<?php
# governing board
if ($page_id == '1') { ?>

<script type="text/javascript">

who_dir = 'governing';

var biocontent = new Array();

biocontent[0] = new Array();
biocontent[0]['name'] = 'Anne Marie Burgoyne';
biocontent[0]['bio'] = "Anne Marie Burgoyne is the Portfolio Director at the Draper Richards Kaplan Foundation and served as Executive Director at United Cerebral Palsy of the Golden Gate. She was Director of Business Enterprises at Community Gatepath and Vice President of Service at Digital Impact. She holds an MBA from Stanford University and BA and BS degrees from the University of Pennsylvania.";
biocontent[1] = new Array();
biocontent[1]['name'] = 'Gertrude Khumalo-Sakutukwa';
biocontent[1]['bio'] = "Gertrude Khumalo-Sakutukwa is a Research Specialist at the Department of Medicine's Center for AIDS Prevention Studies at UCSF. She has broad experience in public health, including managing a NIMH multi-country randomized controlled trial of community mobilization, HIV testing and treatment in sub-Saharan Africa and Thailand. She has advised HIV programs in the Caribbean, Namibia, and South Africa, and is a technical adviser on a study of communities in rural districts of Uganda and Kenya investigating the impact of HIV, TB, Malaria, and maternal and child health initiatives on productivity and economic development. Ms. Khumalo-Sakutukwa's research interest focuses is on community-based HIV prevention programs, and the adaptation of public health intervention models for low resourced communities. She holds MSW and MMed.Sc degrees.";
biocontent[2] = new Array();
biocontent[2]['name'] = 'Richard Goold';
biocontent[2]['bio'] = "Richard Goold is Founder and CEO at Station X, a genomics information company. Previously,  he was Founder and President at Prospect Genomics and SVP of Research Genomics at Incyte Pharmaceuticals. Dr. Goold's training is in pharmacology and genomics. He holds a PhD in Medical Biochemistry from the University of Cape Town and a Masters in Pharmacology from Rhodes University. He grew up in Zimbabwe and is an active supporter of several wildlife conservation organizations.";
biocontent[3] = new Array();
biocontent[3]['name'] = 'Naheed Misfeldt';
biocontent[3]['bio'] = "Naheed Misfeldt is a Partner at Aberdare Ventures. Her specialty is in biopharmaceutical product companies. She has been active in Aberdare's investments in Clovis Oncology, Conatus Pharmaceuticals, Mpex Pharmaceuticals, and KAI Pharmaceuticals. Prior to joining Aberdare Ventures, Ms. Misfeldt worked at Bay City Capital, where she was responsible for evaluating investment opportunities in biopharmaceuticals and assisting portfolio companies in their fundraising activities. She was involved, also, in transforming a molecular diagnostics initiative into a new private company, focused on providing clinical trials testing and assay development services to pharmaceutical partners. Previously, Ms. Misfeldt worked for the Healthcare Group at Chase H&Q, on advisory and capital raising activities for the bank's clients. She is a Member of the Board of HemaQuest Pharmaceuticals, and a mentor to companies incubating at Rock Health. Ms. Misfeldt holds an MPH from Columbia University and a BA from UC Berkeley. She is a graduate of the Kauffman Fellows Program.";
biocontent[4] = new Array();
biocontent[4]['name'] = 'Ross Bersot';
biocontent[4]['bio'] = "Ross Bersot is an Investment Partner at Bay City Capital and serves on the Pritzker Research Consortia Business Strategy Team, working to commercialize IP, derived from the groups' academic research in neuropsychiatric disorders and neurogenesis. Previously, as an analyst at Jackson Square Partners, L.P., he evaluated investment opportunities within the healthcare and technology sectors, and at Payden & Rygel Investment Counsel in Los Angeles, as an equity and fixed-income analyst and trader managing $1.5 billion equity and equity derivatives accounts, as well as sitting on the management team a $5 billion global fixed income portfolio. Mr. Bersot is President of ReSet Therapeutics and a member of that firm's Board of Directors.  He is an observer on the board of Epizyme, Inc. He is a certified financial accountant and holds a BA in Economics from the UCLA.";
biocontent[5] = new Array();
biocontent[5]['name'] = 'Megan Dunbar';
biocontent[5]['bio'] = "Megan Dunbar is Vice President of Research and Programs at Pangaea Global AIDS Foundation, with responsibility for the planning and management of Pangaea's programs. Her expertise is in designing and evaluating interventions that address the social and economic factors which increase HIV vulnerability. The major objectives of her research portfolio are to increase access to HIV prevention, care and treatment services among at-risk populations. Dr.Dunbar has served as principal investigator on federally and privately funded research projects in Tanzania, Zimbabwe, and California, and holds an MPH and DrPH from UC Berkeley. Her research focuses on international maternal and child health, research design, and policy evaluation. Dr.Dunbar was awarded the International AIDS Society Young Investigators award at the XIV International AIDS Conference in Barcelona in 2005, and a bronze medal at the 17th International Society for Sexually Transmitted Diseases Research in 2007, for her work in Zimbabwe. She teaches at the UC Berkeley School of Public Health.";
biocontent[6] = new Array();
biocontent[6]['name'] = 'Justin Lichterman';
biocontent[6]['bio'] = "Justin Lichterman, a South African, is a senior associate at Orrick. His law practice focuses on complex commercial and intellectual property litigation for technology and other public and private companies. He has extensive experience in high stakes litigation at both the trial and appellate court levels, representing clients in both jury and bench trials in Federal and state courts across the country.<br><br>Mr. Lichterman has represented numerous technology clients in all forms civil litigation. Mr. Lichterman also spent time as a prosecutor in a Trial Unit of the San Francisco District Attorneys' Office, where he first chaired several criminal jury trials. In addition to complex commercial and technology cases, Mr. Lichterman has defended many companies and their directors and senior officers against allegations of securities fraud brought by private investors and the Securities and Exchange Commission. His experience in corporate governance litigation includes defending claims of breach of fiduciary duty under Delaware, California and other state laws, merger cases and shareholder disputes in both private and publicly-traded companies. <br><br>Prior to joining Orrick in 2004, Mr. Lichterman was an associate with the San Francisco office of Clifford Chance US LLP. Before joining Clifford Chance, Mr. Lichterman was a judicial clerk for the Honorable Arthur P. Roy on the Colorado Court of Appeals.";
biocontent[7] = new Array();
biocontent[7]['name'] = 'Charmaine Pattinson';
biocontent[7]['bio'] = "Charmaine Pattinson is the Global Director of the Human Resources for Health Initiative at the Clinton Health Access Initiative (CHAI), having served previously as the Country Director for CHAI in Zambia. During her tenure at CHAI she led teams in Haiti, Lesotho, Liberia, Malawi, Tanzania and Zambia, and helped create the President's Emergency Plan for AIDS Relief (PEPFAR) Nursing Education Partnership Initiative. Prior to joining CHAI, Ms Pattinson worked as a manager in market development at Genentech, and previously for Bristol-Myers Squibb and RBC Capital Markets. She holds an MBA from Harvard and a Bachelors in Honors Business Administration from the University of Western Ontario. She has worked as a volunteer for Habitat in Humanity in San Francisco and Ghana, and has been involved with social sector projects in several countries over the years.";
biocontent[8] = new Array();
biocontent[8]['name'] = 'Kel Sheppey';
biocontent[8]['bio'] = "Kel Sheppey is a Zimbabwean who grew up in southern Africa where through first-hand experience he developed a deep empathy for the needs of rural African communities. He is trained biologist and worked for several years on spotted hyaenas in the Kruger and Kalahari Gemsbok National Parks in South Africa. He holds an MBA from the University of Cape Town and his career has spanned several diverse areas, including as a research scientist at the Mammal Research Institute (University of Pretoria) and the Department of Immunology (Medical School, University of Cape Town). He started a successful adventure travel company, served as the Operations Director for a national adult literacy program in South Africa, and most recently, as Oracle Corporation's Applications IT Implementation Director for Latin America. In 2008, Kel left a successful corporate career in San Francisco to focus his efforts full-time on establishing Wild4life, where he now serves as Managing Director. He has travelled widely, having worked in Africa, Europe, Latin America, the US, and Japan. His travels have included driving a Landrover overland from Cape Town to London on his own.";


</script>


<ul class="who_nav">
<li class="header">Governing<br>Board</li>
<script type="text/javascript">
for(i=0;i<biocontent.length;i++) {
if (i != 0)
document.write('<li><a href="#" onclick="change_who('+i+'); return false;" id="whonav'+i+'" class="whonav'+((i == 1) ? 'on' : 'off')+'">'+biocontent[i]['name']+((i == 1) ? '' : ' &raquo;')+'</a></li>');
}
</script>
</ul>

<div class="main_photo"><img src="img/who/governing/1-lrg.jpg" alt="" title="" border="0" width="216" height="216" id="mainimg"></div>
<div class="box light"><a href="#" onclick="change_who(8); return false;"><img src="img/who/governing/8.jpg" alt="" title="" border="0" id="img8"></div>
<div class="box dark"><a href="#" onclick="change_who(1); return false;"><img src="img/common/x.gif" alt="" title="" border="0" id="img1"></a></div>
<div class="box light"><a href="#" onclick="change_who(5); return false;"><img src="img/who/governing/5.jpg" alt="" title="" border="0" id="img5"></a></div>

<div class="box dark"><a href="#" onclick="change_who(3); return false;"><img src="img/who/governing/3.jpg" alt="" title="" border="0" id="img3"></a></div>
<div class="box light"><a href="#" onclick="change_who(6); return false;"><img src="img/who/governing/6.jpg" alt="" title="" border="0" id="img6"></a></div>
<div class="box light">&nbsp;</div>

<div class="box light">&nbsp;</div>
<div class="box dark"><a href="#" onclick="change_who(7); return false;"><img src="img/who/governing/7.jpg" alt="" title="" border="0" id="img7"></a></div>
<div class="box dark"><a href="#" onclick="change_who(4); return false;"><img src="img/who/governing/4.jpg" alt="" title="" border="0" id="img4"></a></div>
<div class="box light">&nbsp;</div>
<div class="box dark"><a href="#" onclick="change_who(2); return false;"><img src="img/who/governing/2.jpg" alt="" title="" border="0" id="img2"></a></div>
<div class="box light">&nbsp;</div>
<div class="box dark"><img src="img/common/x.gif" alt="" title="" border="0" id="img0"></div>

<h3 id="whobioheader" style="margin: 8px 0 0 6px; clear: both;"><script type="text/javascript">document.write(biocontent[1]['name']);</script></h3>
<div id="whobiocontent">
<script type="text/javascript">document.write(biocontent[1]['bio']);</script>
</div>


<?php } ?>



<?php if ($q_two_type) { ?>
</div>

</div>
<!-- end content -->
</div>
<!-- end sub content -->


<?php } ?>