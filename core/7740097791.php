<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');