<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');