<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');