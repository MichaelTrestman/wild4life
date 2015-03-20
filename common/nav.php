<div class="nav_container">
<ul id='nav-ul'>

<li class="end_item"><img src="img/nav/end.gif" alt="" title="" border="0"></li>


<script type="text/javascript">
  sitemap = sitemap.filter(function(site){
    return site[0] !== 'What We Do'
  });
  var navUl = document.getElementById('nav-ul')

  sitemap.forEach( function(site, i){
    var newNavItem = document.createElement('LI');
    newNavItem.id = 'nav_' + i;
    newNavItem.addEventListener('mouseenter', function(){ nav_over(i) });
    newNavItem.addEventListener('mouseleave', function(){ nav_out(i) });
    newNavItem.addEventListener('click', function(){ gonav(i)});

    var text = document.createTextNode(site[0]);

    var leftImage = document.createElement('IMG');
    leftImage.setAttribute('src', "img/nav/off/l.gif")
    leftImage.className = 'l';
    leftImage.id = 'nav_l_' + i.toString();

    var rightImage = document.createElement('IMG');
    rightImage.className = 'r';
    rightImage.id = 'nav_r_' + i.toString();
    rightImage.setAttribute('src', "img/nav/off/r_last.gif")

    newNavItem.appendChild(leftImage);
    newNavItem.appendChild(text);
    newNavItem.appendChild(rightImage);
    navUl.insertBefore(newNavItem, navUl.firstChild);
  });

</script>


<?php
// for($i=count($sitemap)-1;$i>=1;$i--) {
// echo '<li class="nav_item" id="nav_'.$i.'" onmouseover="nav_over('.$i.');" onmouseout="nav_out('.$i.');" onclick="gonav('.$i.');"><img src="img/nav/off/l.gif" alt="" title="" border="0" class="l" id="nav_l_'.$i.'">'.$sitemap[$i][0].'<img src="img/nav/off/r_last.gif" alt="" title="" border="0" class="r" id="nav_r_'.$i.'"></li>'."\n";
// }
?>

</ul>

</div>
