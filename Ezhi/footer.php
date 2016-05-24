 <?php  wp_footer_js_css_carry();?>
<?php wp_footer() ?>

  <script>
 var slider_w;
 var slider_h;
 var bian_w=653;
 var bian_h=400;
 slider_h=window.screen.height;
slider_w=window.screen.width;
 if(slider_w<720){
 bian_w=200;}




   $(".slider").yxMobileSlider({width:bian_w,height:bian_h,during:3000})
  </script>

</body>
</html>