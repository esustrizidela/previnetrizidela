<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');