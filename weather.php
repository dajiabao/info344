<?php
$response = http_get("http://api.openweathermap.org/data/2.5/weather?q=Seattle,us&units=imperial&appid=2de143494c0b295cca9337e1e96b00e0", array("timeout"=>1), $info);
print_r($info);
?>