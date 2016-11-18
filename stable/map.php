<?php
include('pageContent.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title>Map - The Valar Project</title>
  <?php head(); ?>
  <style>
#map-wrapper {
 border-color: #e8ac3e #e8ac3e #39290a #39290a;
 border-style: solid;
 border-width: 2px;
}

#map {
 width: 949px;
 height: 400px;
 border-color: #39290a #39290a #e8ac3e #e8ac3e;
 border-style: solid;
 border-width: 2px;
}

.button-wrapper {
  float: right;
}

.button-wrapper,.button-wrapper > input {
  border-top: none;
}
  </style>
  <script type="text/javascript">
$(document).ready(function() {
  var map = $("#map")[0];
  $("#fullscreen").click(function() {
    if(map.requestFullscreen) {
      map.requestFullscreen();
    } else if(map.mozRequestFullScreen) {
      map.mozRequestFullScreen();
    } else if(map.webkitRequestFullscreen) {
      map.webkitRequestFullscreen();
    } else if(map.msRequestFullscreen) {
      map.msRequestFullscreen();
    } else {
      window.location = $(map).attr("src");
    }
  });
});
  </script>
 </head>
 <body>
  <?php bodyStart(); ?>
  <div id="map-wrapper">
    <iframe src="http://<?php echo gethostbyname('server.tvp.elementfx.com') == $_SERVER['REMOTE_ADDR'] ? 'localhost' : "server.tvp.elementfx.com"; ?>:8123" id="map" allowfullscreen></iframe>
  </div>
  <div class="button-wrapper"><input type="button" value="Fullscreen" id="fullscreen" /></div>
  <?php bodyEnd(); ?>
 </body>
</html>
