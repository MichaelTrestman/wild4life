<form id='payPalWidget' class='display-none' action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="AKTM5KXH67J9U">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


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
    if (site[0] !== 'Donate') {
      newNavItem.addEventListener('click', function(){ gonav(i)});
      // newNavItem.className = 'payPalButton'
    }

    var text = document.createTextNode(site[0]);
    if (site[0] === 'Donate'){ renderPayPalDonateButton(newNavItem); }

    var leftImage = document.createElement('IMG');
    leftImage.setAttribute('src', "img/nav/off/l.gif")
    leftImage.className = 'l';
    leftImage.id = 'nav_l_' + i.toString();

    var rightImage = document.createElement('IMG');
    rightImage.className = 'r';
    rightImage.id = 'nav_r_' + i.toString();
    rightImage.setAttribute('src', "img/nav/off/r_last.gif")

    newNavItem.appendChild(leftImage);

    if (site[0] !== 'Donate') {
      newNavItem.appendChild(text);
    }

    newNavItem.appendChild(rightImage);
    navUl.insertBefore(newNavItem, navUl.firstChild);
  });

  function renderPayPalDonateButton(el){
    var payPalWidget = document.getElementById('payPalWidget');
    payPalWidget.parentNode.removeChild(payPalWidget);
    payPalWidget.className = 'payPalButton';
    el.appendChild(payPalWidget);
  }


</script>







<?php
// for($i=count($sitemap)-1;$i>=1;$i--) {
// echo '<li class="nav_item" id="nav_'.$i.'" onmouseover="nav_over('.$i.');" onmouseout="nav_out('.$i.');" onclick="gonav('.$i.');"><img src="img/nav/off/l.gif" alt="" title="" border="0" class="l" id="nav_l_'.$i.'">'.$sitemap[$i][0].'<img src="img/nav/off/r_last.gif" alt="" title="" border="0" class="r" id="nav_r_'.$i.'"></li>'."\n";
// }
?>

</ul>

</div>
