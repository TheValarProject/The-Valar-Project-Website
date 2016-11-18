<?php
include('pageContent.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title>How to Help - The Valar Project</title>
  <?php head(); ?>
  <style>
#paypalDonate {
 padding: 5px;
}
  </style>
 </head>
 <body>
  <?php bodyStart(); ?>
  <h1>How to Help</h1>
  <p>There are many ways you can help which can be broken up into three categories: share, volunteer, and donate.</p>
  <h2>Share</h2>
  <p>Spreading the work about our project is a great way to help us. The more people we have with us, the faster and better we can do builds and develop the mod. Share it with anyone who you think would be interested!</p>
  <h2>Volunteer</h2>
  <p>There is a lot of work for people of any skillset. Here are just some of the ways you can spend time helping us:</p>
  <ul>
    <li>Building things on the server</li>
    <li>Developing the mod</li>
    <li>Helping new players</li>
    <li>Planning new projects</li>
    <li>Helping with media outreach</li>
    <li>Developing promotional material</li>
    <li>Writing or performing music for the mod</li>
    <li>Creating NPC, block, item, or GUI textures for the mod</li>
    <li>Writing documentation</li>
    <li>Developing roleplay quests and adventures</li>
    <li>Coding this website</li>
  </ul>
  <p>And if none of these positions interest you, you can make your own! There are jobs that we did not list, and there are probably ones that we haven't thought of yet.</p>
  <h2>Donate</h2>
  <p>Finally, you can donate money to our project, any amount helps. All of the money we receive will go towards The Valar Project. Funding can help us to:</p>
  <ul>
    <li>Improve hosting for the server and website</li>
    <li>Increase traffic through advertising</li>
    <li>Speed up the development process</li>
  </ul>
  <p>If these aren't reason enough, if you add your in-game name to the donation message, your roleplay rank will be increased. This unlocks new features including new races to roleplay as. You can donate safely and securely using the PayPal button directly below.</p>
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
   <input type="hidden" name="cmd" value="_s-xclick">
   <input type="hidden" name="hosted_button_id" value="GACJUSR8788C8">
   <div class="button-wrapper">
    <input id="paypalDonate" type="image" src="http://tvp.elementfx.com/resources/images/donation-buttons/paypal.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
   </div>
   <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
  </form>
  <?php bodyEnd(); ?>
 </body>
</html>
