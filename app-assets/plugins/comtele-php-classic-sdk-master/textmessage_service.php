<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');