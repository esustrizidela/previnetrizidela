<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');