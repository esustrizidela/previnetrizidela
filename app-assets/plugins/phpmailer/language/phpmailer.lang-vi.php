<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');