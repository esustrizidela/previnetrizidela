<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');