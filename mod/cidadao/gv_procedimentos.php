<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');