<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');