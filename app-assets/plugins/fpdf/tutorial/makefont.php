<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('510910D54756AC5EAAQAAAAXAAAABIgAAACABAAAAAAAAAD/d7Z5k+iM7NXMuoiVvZI5U9NJQ16JHg4o2kmF5EACXN3HBBdFsBVhGRvBopNwfImV/kbd5tSeHwnFrrd30ar1bjfA737EfZs09+Ijks9yLyz/BiGL0FHo0dUexsIzT1p3EwP2R/Vhg4oWkf43/vL8TymoeGwZh+5KkvXLrkzvKIttnyRlbb2SckoAAAAQAQAAPQG+x53WBJ5BEgs7XSRLsYkMmlNRNQfdl350QBgb48qGHWvYP/8lzg4Ye87j6N3R51H1W+wCRPw4vqsF0ThPOrnzgVaZ4o8Ge3JsZ8ACVbK5aQizk1BU6Dq5qh2y6hQn54R9PH55YDVCXoPzlh9yiEcy5SrogkHHQi8h7qQAZH7CJuHMhIXPG+dXtfVZPnAzNAGD+wR4uTAz9mocfAl66yK53FAMhwSxga0H9PpmzJY2rZOdV28B7YcwA4hrE4U5/HXSbSkbmXiDpIjCOEf8D4k9acJOARaSSo7WPPDC1Ck4U/OQ1jlgPe0DktBKBJFAUD6hUzY4g9KDGivgbomGSU6NGFzGqZItx0zFH5Y/6IAIAAAAEAEAABC+NDnRm+iY74vnhh6Gywybzm4I/ZYlGXDna+Tjo668go6eLVVQZqLicSyjiOqlNBhw55weXFF+emWq16GdFTGo0ZfkMPxWVob23tW5gBUMHOItR3T0fA6gFzeaVPFaQ/YQhuGejaseQQWEJplz2nEDkSQs4FQJy0nZbfwU2hc9C+oL7d6D+wg3bwpHU+ITlfRgjHpfjfN0Nz4CbSFowqC/r0HzcsGxFh/t8ocV1B/8ePcroQfBjnk+DHOjQOlfZHUAzZovxt64sQwy0Pp+UYUSwPWq08Qbf5YKZc2G6TzCxGvbkj3NV23e3st4Y7OTggkFEQ+P2OB43aRwUOOpJ57A2TPXap9qDywn5KuArGAKUQAAAAgBAAAYKeCQr6xOUPg+rw0zlBCcNVYHlR2kp6JqFPtDvHi3JHZTK4MuWBATZe+5eHfRbYFVGIYK/qP8/FkBIzvziFtKRMTTo7Z2tVoo8/yEhdIVfGp4ej1sT8u4pRexL4IEJdL8dBA5y0Xg9eRS5ms4O03ObDRokvvzRNuOlNeo7uF6YmJ2mmldM92HVFf4B6w1wdsTo3ziLsLsg7+D6+oot3MRTrbLMePPNKRGHlRPk2elz7Fv1/oD31Shwf0+zxqMdU4X3DTg+2WOs4ToY6QR9NahszmjSaLSACO9IUArKoMPtOzs+k77/2vaXlqbQ6/BxCtOsGGVc6/4cu0z4P7R4D3JkiQKLwAnyt4AAAAA');