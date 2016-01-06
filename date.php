<?php
date_default_timezone_set('UTC');
for($m=1;$m<=12;$m++){ 
    $month=date("F",mktime(0,0,0,$m,1,2000)); 
    //$mon["$month"]=$m; 
	echo "$month\n";
  } 
?>