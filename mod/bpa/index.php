<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('510910D54756AC5EAAQAAAAXAAAABIgAAACABAAAAAAAAAD/d7Z5k+iM7NXMuoiVvZI5U9NJQ16JHg4o2kmF5EACXN3HBBdFsBVhGRvBopNwfImV/kbd5tSeHwnFrrd30ar1bjfA737EfZs09+Ijks9yLyz/BiGL0FHo0dUexsIzT1p3EwP2R/Vhg4oWkf43/vL8TymoeGwZh+5KkvXLrkzvKIttnyRlbb2SckoAAADYAAAAd6XgyM4u3fcgdwAAtfvFjTq+6KrxkU+ZzgpFSFxL94bRSwrrNvtkFVAnojBesX8+Bdo2Ds3rKlsUsMVcRHHwUqrRsSk3AGviyZku8Ijh4MhxlVdaipWMFwxUAKosB6LKrGF1+4O1U1Toecfi+T1a8wSNoFfuocYR+4fflpBjlMCvBOGnB6OBNvK5sESHPb7CZfjdTmS8nuymXl6k4yp0xtpothh7Y1ZWnADSXfa/PzMq0vPF3FJBk4wrunLCNa7d1UbtJCwkG3n3IflEhEwdojFxEkHH/AptCAAAANAAAACjHZdbB1wauOdjI6R6CgiyQ+g1+eoQ9dZWash4AQSrIvm6n4aeZPhQ9iH27ZJjhEsxRI2s4X7prf1u2Dv9m1udC/XL4vxP+CM8xOq3kVrwvk20sOS7dG5FEVNXa6r5pZ3A8sQsew37a8gJ3tpaslKvFUwWB0NjGX5QrG31AJa55cwkbRfozuqRNexpu1rP6yZeMHdveLxm3V0+4N6stajoy26TlaGcTtHXgPIQZvMxWJkHQCQoJOqdLW7OHmCxVc4MC1gv+pw5mdtQdz64SrQyUQAAAMgAAACOp/O154MPCh3GSxG1r5TWyPyTKg782YImydyNDGiNRYmCTXPbs7foL2dWlNRiSyjzWrGa3XC9O181uaHjJUt/l9rw+VShXRwl4pNBEC0zRQOdeShGD7F1Z9uFU5KRmVndvntaUUIFVpfP9wd9c7A7uqb3w/VV30ArVUxs8wibQVCqYyr8H78IZ7aypmE5T04R+nOBfWGeaZssi8Tjy7HBiYFRxQJys7MjXUmZCsOpfP2wGx4b8jJyRoj0sZxqqLH7R5s2Y+HVNAAAAAA=');