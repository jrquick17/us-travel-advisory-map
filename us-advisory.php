<?php
header('Content-type: application/xml');

echo file_get_contents('https://travel.state.gov/_res/rss/TAsTWs.xml');