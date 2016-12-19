<?php

// We have to use a 3rd-party site to scan the port because our host seems to be blocking port 25565
// We also can't do a direct get request to this service because of it's CORS header
echo file_get_contents("http://ismyportopen.com//processors/port-check.php?ip=server.tvp.elementfx.com&port=25565") === "1" ? "true" : "false";

?>
