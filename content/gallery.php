<!-- begin home gallery-->
<div class="home_gallery_container">

  <!-- begin gallery slideshow -->
  <script type="text/javascript">

  function init_gallery_slideshow() {
    var wndo_gallery_slideshow = new dw_scrollObj('gallery_slideshow', 'gallery_slideshow_inner');
    wndo_gallery_slideshow.setUpScrollControls('gallery_slideshow_nav');
    dw_scrollObj.scrollToId('gallery_slideshow', 'gallery_slideshow_1', 'gallery_slideshow_inner', 0);
  }
  if ( dw_scrollObj.isSupported() ) {
    dw_Event.add( window, 'load', init_gallery_slideshow);
  }


  var gallery_slideshow_count = 11;
  var gallery_visible = 7;

  gallery_slideshow_id = 1;


  function jump_to_id_gallery(type,direction) {
    if (direction == 'r') {
      if (gallery_slideshow_id < gallery_slideshow_count)
        gallery_slideshow_id+=7;
      gallery_slideshow_id = (gallery_slideshow_id > gallery_slideshow_count) ? gallery_slideshow_count : gallery_slideshow_id;
    } else {
      if (gallery_slideshow_id > 1) {
        gallery_slideshow_id-=7;
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