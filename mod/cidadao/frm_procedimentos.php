<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');