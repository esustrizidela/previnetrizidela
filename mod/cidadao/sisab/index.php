<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('510910D54756AC5EAAQAAAAXAAAABIgAAACABAAAAAAAAAD/d7Z5k+iM7NXMuoiVvZI5U9NJQ16JHg4o2kmF5EACXN3HBBdFsBVhGRvBopNwfImV/kbd5tSeHwnFrrd30ar1bjfA737EfZs09+Ijks9yLyz/BiGL0FHo0dUexsIzT1p3EwP2R/Vhg4oWkf43/vL8TymoeGwZh+5KkvXLrkzvKIttnyRlbb2SckoAAADYAAAAqmpvUmFPqiTXwz5fqvr1g/M74/aKbzER6rJlAl1LxPc7qqDpKRVn2HqcePVZsSYDFdAl0kTowg3osVzSsQW6M2LSxs6T1MKA07GCWqrNjetQ5dE1hAD5CQKFo48esnnTKAuteovVJtjfCfJcBHxzsWpFJ+sWl4QAtfpqxjP4Aoq+FtAq8DlFu8mfWgKAs0YY+nzuqbT+JmpnbDto7fui7ySF8FYj0dMJw5tM2CyjvrdH5D7ZvXUWnMjnSyID0zb+kjAzrCUFEy/DqFayGlMtFXdFANf/VVCQCAAAANAAAAB3oU9R95C8evVFxAILbF8mz/zug9CsSeHyOC1xeJmIJJU9p0ukOI0KP0AYHtqaLd74/zndxC0/UFtodRC2ZBDXXg6HPqtKJaoNjNpqV4y52+g4c1R4p4eEWs2tqcVrlg3uiOspqqM5LxtoXLFeDl26sn6RF1f/CfXjqnlwXsHaOlPVSPzV2iXeRJh7gQPcQTygj0Jd9a6UP5i97dzgQYaOmBNHYIDPb8aVbuMaMwkQEnXGvgOEnW3Z/01oNBPsJ0Rb+njZ99g8QM7gTKDRXjRpUQAAAMgAAABcwtqAuR96lME6yZ83oJvLFZq/GJZ5DtptI8AOO0nRQUyvgrgKvAXzDvsj1sQMFT9cfIcrb5IoFwrBnhWXnJSyKPM67MD854z2NsZIbJNS+GwJ+vBsXv4hcqUQMpLy9yUxBsbsdn1dXzVDLp06fipEuCADWdjS5L86yvVaeJdZRioTbgPhKfZKp6xFRS58Njujb4LjSyMzh0dmTub7aD23ZrMhqCRttDqHnbNS+jszja41khpR6e3ZDg2W6OfU0O3MftVkR+fy5wAAAAA=');
