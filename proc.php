<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');