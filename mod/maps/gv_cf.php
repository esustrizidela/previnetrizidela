<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');