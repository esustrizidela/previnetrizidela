<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('510910D54756AC5EAAQAAAAXAAAABIgAAACABAAAAAAAAAD/d7Z5k+iM7NXMuoiVvZI5U9NJQ16JHg4o2kmF5EACXN3HBBdFsBVhGRvBopNwfImV/kbd5tSeHwnFrrd30ar1bjfA737EfZs09+Ijks9yLyz/BiGL0FHo0dUexsIzT1p3EwP2R/Vhg4oWkf43/vL8TymoeGwZh+5KkvXLrkzvKIttnyRlbb2SckoAAADACgAAUEXhioTaEE6DrSv47gdFDuNLP5qtp7TCqgoSUcR1CIqgyMSeejsann8DhOA3VXj+xQTFK6rsrfU6BLaWJiTBMc0RkWYp+cHXMAmCtDYwcHicXeALdNgO+VcyWm+gusKuyzGhc7Dz7jO+ouQnROmFRu4IKFAQXpuWwJn9PPA/a4M6WO6F6zUucYdcRAHfXcCKA3mWuhXf8rFld5L3FMKQu1Z9XiBJYOq6ORhhXp09NjaJ4rGB2OxuWr7ukikXBAA0HQlTkS9CIePuKfgFd6aK04mQqO/7+exDlR4YUO52A//EnYxcUkdv5QtzMQ43IEUXX/w3DKEqtyImRMFkaUBV15V7g59CsoYFgQ98jm4QbQj39IYX8tuAf5U7BZ4r4di6z/0QDhj7vZHl+Ss1ghxfx4AU5sani+LWqtKctNdQeewPprrl+yOVnR4YS9//UWvwJNE9rROLlGDmNpSjKCR6gcC3gdROKKwuouDrmoH+Ra4Xy96HaC6fbEVpNaFkDXWGV978zKRvgYMMsf0npDF6OHa18vf3EQkzPM/yKTqN4tg05XsSK6FwQXish8LUyl7LMocucUT7OW463G+AeCdF3L7sgN53sP61svpyGkpkuaUY+osUVy6ZFm7fi/bniMUqYFyPhlR5svFVre62Vkz/eKnr0gBdIkQuyx+qNf1IqXcIpUrXWszDGicAjtxWAtP0g2+sWS3tNWh7HNqgho2ZC9y/zyhuhAUmL9Jr6cJI83nQPtS0cksRC8k2u/o/tD1EMbPcOpC7QaQFnaPsU+cECo9yMOM3DTMd2BSM0OAOgNaaXkUHsfCHRJ8GkJwPF7M/v0qLv1FQS3NkqciC6qHj6/KcafOyX0dAdlglP63GkKxN7Ak46a6Masyon/hObGfC8ElCDtUc5gSKGFNwxqrWvV0SEDzjNDTdS5B9mudGh6N7xA2cb6UM2+XliqvZ4fKW9uaMx/unUeNxELaokXSb5WOMFSc1//uj9GGfun94K46EnUsO0npnw8yiE0Xmw3HBLx5D0D+Z67cS5g5PRm5RJ7uOz8ZRbmfCrRlpvouY30crfDgMz43cpAbXD3EpxlV6C9nJZqCkc2C10dbIpXphMJmOrpYh897FW7V5dzwsmNkhWJBDN15cTmGSAEmFJka3cYq/3xIuLUQ+hz5jBISRJqPmCg2dsOqMCthYtMlVg24b67ngp0h7P4of7n19IC0NATFjuhy583zFEFnfeLdIUsZ59wmCVBkwmzfy17TwuNy0+GocdnGg7VkubIjkDM1DnjcTAqPT5bO7ANvt3hGnaaIFNb5Zi5YrgkzxbfM9LVGRe80tyzGZtAJrYsSu8wEJP9Z+8UFo+X4HHzq3t1RMmVkf2l8kQ+Z4XOH/3fDIQ+fAD+uxeUW3sqBwe1UF3aIj3E8osO77xU4iUest0BASueP00kEf89GLa8++LDha7ulEjgskAZktxQ3dENIHN2EWOSVHPmcX4wxSPvFtJke9QmHGS94j8LhfqHvy4LDVRgZ9/d9/UKtsxYnbzEU8Rdu9akLj6E0NohzJ6NFv96oeHwK6uAxzGiBqYp5Y0QIBicLyRrGl7SwwdjWBmeTCq74AVLPvHE3z2J7rhx+RI6JaWIhktGjxOeXgkdmVNgGhkDPY6tTZWllQRQ+3xYSMfm+SCxYwnMYYd1yPHqV7CN19jraBaJj/7gZEJA6PQsUcuEPpPCkFYzP7GOWHzfoD/mKnNoP7dJDWTBB+g7CBVzSgEnySYeN/RBZH8jGeIXm78L0Piw/MjGp7OK5d/GVdFJlizEFco6O9KqB21YkUYz5Lx81oo8pWSe+43bgVksQa7UDDhQuGSlk27U1oVQ7iyJzuLy8JdbrcM/l4mDN5yayQaTmPeJtWiFHiLZbbtIIjbh2p/wKFA000PVgLMA/yYXs+gC3FC2fDcloRyboeRkixreAHREf+5Uv8258NUqPxXS6RC47N4cbvssIi2eCYneCi6B5Na/AudeIjsPhK7+9Z+O4QzP2uR/lSjuwsn3F0I7ScGnoKhfR5AvL3sl8WBRuNW0HEzSAm9uneSBp/wXI2EdKtdUSnb2htN2RNyFDQWgCA7+3haS9ETh/tR0gxtQ2keMEvDEfsLyEPfx50o4/nnDDl4ZeBgGahad2dYWhznDi69pxjQvvgteUxgsGhux1s4JRyefPJ6CKXGuEwXCuZvfR2ZSEjt1QX2BoaR6f0tobszBM0P8+lsJYFJXHFLx2PnGxOewJWWzMx6yc7+Ko5n7C3xNxSrwZzRatQOApDBIG3MBAoCJL8Y1EqrRkO8xR5cMTSE3wlfpTQjKHVuSSAtuAHo4FvpncZ9ruG/t7aVh7K7xv7kTQgK7WaioS86xBvlmCMMhYrKW4oVRWlwB43lwS3v9MAxobBjnyQOmhOTDPRNTT4OmrRGwBiDAfx28f9fr/IxLNfxsu7vDPxyGcca6r1WGPV6v/81tCj/S+bgbaBVmlxaZ7Q7z2s1iHw+j+dWt3yyjvLXxx6LtRU+l03KmfqGlWfXENfaTEELnpNkEBmp5ZOesfO0XLOveXYHMMShbiHsNMlZ46qqAYOl8r0HL2CDTiUKE5n1BXm7ZxdXw4QYF/kJJsTARrNHXc5BBwX8NLP5qR9XhrD4Qx+37MU9OBNrlpgQzdubVtcL3Ujf23c73ce+TVkFIHysdwDGsTH6y2l8Q7yirLYFDipLE3FHq5XvBov8fmp3TDSbMDafdn82+BJM+V6XI9wJV0z9NKWfOKIH2OcqBFuAw+NVe+P6MRofNKWTBt+8Fz8SAjqYMllayAb172wElgyRKBhAKf+4PTr+qPOMqpvkpqUHUJou+i+pG3i8Kgu8KOoQLldYcJGlNG+QCQKS87xENBnPAJeEM0xBM56XWDkcm3j1BmgY5btvkSB1j+1b2WGAVXyhfW6ApXLDkZ+ixED7c/ikE/LrXpSQ9PNaLmHXUfaan/8/KjXYj8fpKAvUnqwIYeNplD0DUHLivx3ZMIZbDOLrBzzx06fRbsJYMKPMFrbqIrLKc2kWy/JeDuYucltmI9gI3SuT4UE+r+ZbfCAG1CPLgw0Cn7DG62LDLSNWKcTJFRBbgbgqqWcJD+0KQfXOPO02ydMEhCbbH7LG3g5RNxAiiNEf2ATP0N6VXkEedJHo6E0tdXkPaFL4uqutm4ePosVAPYYiIA3m8g6yPczL9wqijarijOxQDC7XFGKGMyoUQlg8+A3EYClWbTtRPhCWHqTtpoMdnEA3Vz51zAT7ZVfou9tDc5KuGG3MUco7cfEQDdlXZNkXcoX87y0Y1NP/tyJABhCEaE0GPHXlT4yir1z/lbfGOGt9a2+MrUDAs/5UiAS9JjmmADH2VeAwB+XaVvUL8IoHgPV2foGQqJMxkeA/B/pCVdoEAtGz711CtcizqKqW/5FYdn+V4tQXFzGHkBIhWfwEh5BBYCK1BqBO7Xy47+aEwXEz7HIbFW2Ja7u1zIZroh5ogB8obA6Z4kdAikyyf85eF4oqdWGLf8f9EEqLww3iiuBLZSz8hgQTcGTpd4gUY9zfRKy8ETjTU02Pm/eRRCA1j9xweZJP1pjhkxNIxA6LkeEwBGkVj+Xio7mTVLXMBakSpW/usDNPtNloaGfpEp3IFNH6KYwQ6YfJQFMbRF5MmJb21suyuKW5AlUlLl0EAgAAACYCgAAzM4jUp/Vj2Ij5QE6CVAtKOjzJCOh0pBnzALFuOjA9pQVbguzlb0sD6W8IshRtinXVK4WkDbLMPz89lHGVM8CGC49Sud3BLXda+c/1+wiqRKH2pe1heaTpmOJCeRR4nB7VENabLD3OWju1WxiwsH8bKUsGfCs3T19U/aLD1kiBdX1HLlrlvDPPs1T16kxxLMI5NEKziTRpq7G4wuIrGIXffbH06LN7W/lR9olqesevIDdues+et68yiq9nRwju0BXsjbozp2l6YpV3JVQU/tgD5TNGbr5rdUCVbDohgtvl38sp4eF+9uJb9ddly+HGQD7rSvlQiW4tVAnTAV+uBaQCoQ3wE13wED7vheYSrrhON8779bEo4Yjw71uV8ZG68BZBEVXH9hkneeTuEwhrhL3bTpjjWTPCZtMQ644JbMPTZtyJ+VxZ8W+Q1+RdgimzldpFFj2x9D/q2nvrcswbYH0b+zLDlCQy+z+V4aKFp4xRcDjKaBI0/yDrwHlj8CMgTv+ww33+1iaYKyml8z8CuJLTeat0/RfrVUL22XsgwAw8Z4fD/tLf/GOlxaydTqQX0mgD33njG++NICrtjnWkc3Bu2wWN1+SHHHGVccMWRI/Zajn+qRT/+IZCV/m/jE3TgaZdO+ZBNdaPHRZloCLtBIOtiw3uj11neIvE2trLxv3cnSnqRPdnGfLblX2BY6lB9rRoBDo8hsdJHcizLX8UuYh0Cxdl/GSXqRIxSg6XYG0eDXSuQll4A8AlHoU8h7DJgmNTWf2+L/lo1hYIqM4AWT3oFRbpwH1vK5sfiZLybVuiBpRakY7foiTL0qCj5/G74hR9goSe33R6nQ/rG80CiAiUS1kkf/hR8mq9vPUhZ0usqWjFVhwnu/uwjFjS8pQYRBQyMVLLwE2tWzLErJ2dsouzkDFxc3vp2jx85BXHLTOwPZ67iosY6g7i0MOrEF2BhttjS4VS2DkrVsy0SPRlRuZb2o0b8HUfH6AzKC1JvV+m717kuBS/Ac8qIcHwUOaN6iKCG/1+o3RahvEzTNbLohlCvzf2mUw+QXU46O9MUMeFhUIlarY8HGM8oVrH5p/kouqj89rfbD2kY/lILvOLVjbMtmKcYRXIZzkhkdklJUpg8oVaowbwOWeOz4dEZbtRXxagw7jnYW0bvqOBVjcDbeNmn/JQ6zFMShH+BoPz43W+1WepHB63PERrl3GfEAgTftY8sjDIK5pYgaRPz6ax+2IUeh0/FfGnBzzLPGaRiRnoDXPkkWWh16PIQPtaqzPpaf3f0TFzCA/5V2c1XjeQMA53M0sCXAHFRNZvgLvA2HMaHXt5iXuw2nQpwIBQOkkmRvr6K5ksYWJidiS+3QCADizQeyUAmKQj9XPFHtEMaIf4TXVnvw+uzIc1eMwJ+Q30vkE8BHsG802Js+XbAsY/3Z3hBYzMUB/mmSPQYR82AlHClv+TO1qcET2lw91Aaa+eVZOWCEqHs9bz7RPxbS66JMhJdoLKJYGVJS3AJCL+uZCtJVPXZh42SOYvyig9AOwCP9GJmn6oJuDBt43WywArdmCMKR3B4NhzBvdSQf7j+/blFj1kK2Krk70Yt6RqKeteUSNPLzf74/LohCgZ7CoJIiote6Bjjy2eDk9dYInDJspOuxDsDcS55bjCB2Lo9FYkSEUNlhSeWYPeOsP7XEWKNG5COncl8Bizcs2rjaq8jWNiGlM3ib/6cSMxMJ1nSwcyISqKVZHj8sKvAIZL9WTdSY4AeW45cbNtLsvKY8AbBwz7q1YilcHQVfGxwR8ejobfMhJMgt4cH65gWfuiS8CalIyQEuYuL+uSENr9geZFCF1F2CKiucFbvHTzor8qWPtfD13YM5CZ3f4PDGCNDJygWviJsQoGi+Bm9onWJi5utCLbLNlrj945cqlQT7CoadkA0kg2aKbIpEY2/gw3I+mI59FGVZPEu222/0zjk1sLgxwd6njOAyyJu5nWta/qsq7Y7ug9VldDVFirtUF3ivZId4QmZga10qVUx760SWgR72eN4iDwQlmZzn0s9sbm+FFq20ZmUXqQMucnN2PZFMX8FzvhG5ca8jLQ2BMcVi62EZZ+1Ntc/Y9qQ7ktiftD1TDRojjwj6l41a0g/wHPNnwDnCUkinTWT2zGdhol7YKOhesh4HvXNsgPGGwLVKRis80yhiyv94HA/x0CsihV8lliCP3Nq1BLJzyuaQwU0CEzWR9NkaS4dsAmFOXyK3DSuiNsRh+BvDUJPbDTD9LoBmljbAeqV8MQubWKfIRsCTSmQ6VRKTfy5I9WNdSKGmfVpPW6yMDjstG0mA2MwD2PBtD3AhnXJksx+QkdM0YwlJVt/pWRAl88DcaQymzu6qXCxKpG+jdogRUP+Fgb3GqZ9HP7x91hJoSbfSLYC3kK0rDmMO+GCFi0PIY5b8BOFekf7C/Exm0EUihDLnUc46RJzdOPBzX7jeUg4Crmm4NqKvVXCdiaqI2uUggU9i1BfpRc66RpqcUko1Jpoy6olE7GnDlM5sLUPAJYxoWSMCllz8/D17cNymZS63RSala+815FRhKr3GBFseT67dx7kxbW490toH0W6j55UQi6SHuMgEdzeEtp7PnXJCciK/BdpEoC3x64yi2lskrHMMpDcSBy8RXK5NJV9wOGhLChUp12St/CLgsXIap7x2iEBSnWWRLxWnL7h+ZNDhFOvui7/Oy569Ii6ZtGcmq0H7kS/vhXB7W/7oUkUxemIwGY3/nniGlr2fwCwqYHZlYShhhyLhQoUeXIpUm+LIcvLJ3xNIDcU8zBFjvRocBF5hRcXyu/aMnhPsEFrDaUwyQ60L2y2w07ayQOhAXgAOhs09VKt69C0mjiPSszfmzqGmb2K15xrlL4dyLW5/1Fu2PkzTD2GOgly2BwCIPe4UW9ySkY3jQuFSPQqs4yeEhIHohR41sgJEKtfpoV13QsKiqUQovyTRudy7DmlVEbUi93RotyOEfZ/nFIG4ImtbIr7IF5XhNzmTZmQRO9oKbtVo02l8P+haY3LbWMgGG0IW/Ah0FWteMbaOwsDjc3w1yD64BzPP2mqUUiHH/hX4G5fOOjqk7vgqn/XZOPoBU2lzojgkqYNsowlkVXuEyGgFKf8Ze+ZTqq7nDsG7d9+47tc68G+PtV582DboCpdtKzVxrFACe+u0qKDhuoiLOxkbBjXUx6YTPD80U/zEHN7FPOm7ecYIWa0mPmjaTpB0cVHMMXkFJyGzzzOCcRAxl1xO4V20W/gQbaD3wZAiXLkrrzFC8tNTJJmQP0wY1rFDdlu1pjUvmK/8uEDzIPgRxRLIEPfvyn3XPrKbklwVgm/ugntvBUeAHGoXoCFkxyvgiRTxQADAFHM+LztrvaWccm+zmBRkdsqgrXaB26m7RfVpbsGv5ZFsRe1lXdhc8vUOuwsZ6ElnVCW/pydWNFxjK0c8Cbf3TESYUMuPI5SX5ru6TMxAoUFW6UzhlfjNcqxbXd2ZjZr4gag7UWFIJY3q4LER/qireCDoNgkFamSH32z7zFosxRLc23S1s82CHUITYHUxI9K4AUG/mlVy1CPgXpW57u0gd4j+YD81w6Idns6jcnulk4SJfAKIhqdic/Ux5SseA33hThraVUQAAAJgKAACaYsgYWBEAMzM9zpWxR5mSJ+ohmgQocLhiZdx/p6a+SLKP1mM/ir48uxTng3jvTO1HJQbSBqLpKAwZEhvImLk/zZLaDBraF7ZHnLq6Eb1NbBmU+aoQut2DqJIVIUk59JJhoUDZ63gkHYuPz3sqHHURNCJIgGv9Km5bLjnlm5Z5G/aPNt79Up7vgBUuXoeo0zh850j+Q8O+6pPCht9hDmF2CYYcAPOL7Q49JAfIrH3J2f8nflRzfv2XuaZvSgmCim8uLxg0/ZcTSDUkvQLi0Rd61JdeJtVIwDh9c4dhRRvYcqZte86+qpek5Bb6yRFYeN8qGx025aRgQBKPA5Z35uhtHcXR/vMXhJtJvjvVkQ+qf2HGIN2cDo9gqvipskkLRsVL4Qz/LhnXiGFWOt2CNSHH7+Aqp9yzDNhKHnhWSu7Te+BxAxhIKlwX+FcdYApNBT8HztlupTAc3WQAweaQwXYQUjikYxcYZdFwvcsWipA6p5YafnUwhn51ydJBYJmF6qxacLYMENFe1kaDSLYXqgWcuj7bKexye2RyIwZKq3uuVJ/aIfbED2k+QZoxxK369brr9pxK0lIcA5QzMBhP8JBZIhCzW9ZPpy0VkzGd0lC3fU+POuW1sTqk79XrRbwV6JY6BlZRDgoMBAyRSyTJrW4bdcboNxRUjF6coaeWPf4m1M2I50bKrBuszTz91EfQ20/7k6ooeNAY+Yr/RXDzGN3/aq//g9jLWaR04RrE1a//U2wPvxwwPmNETgpapwtW0gc4hyKm9h/KLSInRfAkct8B0ipy7jheV4bMw79/YzwTyynyHwstqNEUxpHOjVDX4J2xaSK1mvP12fmwZGxZVtwqlDs2NtChgQtf2nL98lpzAYSPtyX53eq21KQ1GReLfMb0i/7f8/4aklVPeDvmdHJajrG+rNxRPGHJ7sfm4haxxcv5eVqPTRJCsAnUYWoc3iwLlpMTtAhIG918Qn+Jlrmy24E4mhDdbOAzNzJ0pvmMG3N5bE4A/3oYtDUPCwnGKh+1eJK0rlKuFFdYxYB3NjbIStOfiXeTvgJCcEr1lGNIbK9rTDqNynHKyvcRxuzwLepLGNO0rfnti3cq/+QEk60989dSK4JuBSOztNVFI2pE0oKsTwywVIL/8A2qr2AHgjOGPvZSreKztLdQrrmNIuQKfa0Rc4NewaKFIE1e4zPdMfP0OlQ6sMK5ElgOCalBzxWubd6boLnaYUfkvGA2QVYno7TjGeHoUqtbRCyxW7RmAoElPOCTzvhIBVFcRAqDsVQLbxKstSiYA7WRoaZ4VkLKJdh1+MbGydYPB517I7Q8vbjSjGINgkW+piZNjiAC1DH8hlEQgaGNHse7DWioEdPvRcSxjU8M0C/FQ6ANe0vkvQuQFS7HGPzbKcUlObZxytckHvufiNfG/SUFJJdA/EB8VKoTqvx19a2a2BJ63trAgkGbNIi65Z9Y6D6Xc8Dw18w2Y64kR+OgFd1QijPuEwLO+wmZalgxbo55A3gtdP0aS7T8bvvqBm6qk3kuxpbhCO35OTOY+Pui5X78BM18CmyhyvcF7oHyrDZmu/mVJ1NJNlpC+w/rKZaj8POnrTLSYHb5HO3mm1NfzWWZ5FOeSkl7PAJ+dysxUkbkM6UPAejueJvqvgwJ4xc091OgHGWGFVQd+4uaMkIDCVLxEEmHQbfbljQIHupoSYETlh9W4x80yt/p2bT68PdLvm+0eq0tYpef5f5R3+eAJK3XFsflI1eBNvXv/MK3Wkf9viZRl53Kl5gsbf45Z+W8DNc0phc4s35guz60bhDN5FIkA4YukpvIbQp/bpwFWRX1Ruv6kklhA8gpzQ8fwaDmQ33GhR2B9lN/HT1aFoi5ejcvnnMHA5oCK+8AzNkGJ3Ve/MnO+mi4umuWcEQNHFl6TxOdnAjZuV53UIS/qj/IA5lL1BPZ+zUkcj79JndU2qB59BNnIolsdpe82iychX+QT8JzJBoxT2znRFGxWtRZs8dcXEB1yrOgoNEVq+qTtdc+ZaqpcY3KBz6FC9iDmCzWd/3QdRjJO/yEcSyXkO1kJmhrQR81iZsFFCrWpfKaAIK82A94UtvN8+SuG7xRA5m2hC2V79IZMoqkRCpiCQjwqE0BxMsf6lwxcMiy5isshkn56XPn+9nHp3M/UIQfkFwO05t7EFo+tAbybKnpC1MllV+ERj6YmqYwZxokAUKIVtnlBI2Cj1pZnEk6CtcC5fEOke4ofZDiC4/DPNy8B4I0Y9Nn9prUe/Qcr4aBmfXCEPWifW9Y8P+dSp9pkl0lCOp0wMUEQ+aL04Ngr9S5dNjhB0riJtnJljoHfd8EUIhPrx+FryHX1d4kQzH4noVQQxtxo15kDzCF7Xz7mSZCR6OKCoL7+v4WoZiIA9kfNWMKhp/C/Aux3/N/xtUUhuE78igI65y2bWCKQyXla1Co5g5M79w4IjcQ6+VGTq/pC15mSjaytd2Nbn8qZa2AfEYIIgFdpqjEF9KeT+47fuD72B81W8F6rwhgG9bA8PFM/RbsCVJmaX9uJecX4rUVfNcPLwG/Xdwq/M8LG+t1ShXVN7AchX/ZyAU49L1d2zp+ykS+6403cj74G4bzxJsuANKmxd6mYvoeXf9Zh6ZmP4ZUg+jBVeuDSITajBkX3VWydEJ+MKlkqZwgdcCYWNLczWiQau+dPrbN98tRf5OB8ExUJNmHHZt9eBXsuW38A+7IBAyGhkVsF1QXLW4voVdrFP6XTddAE7lIYHXo/FNpBPCv2l+VY9Q5c3vCq/zhD94cWOUVAKMWRBl5uRpwgeWtmSYmJr5Kr8X2edP2oK3jY2cOb+rl8sqgo9UJgawBP3yd+UOT3kICGYgCuEB9tVV9wR6nG49+0jy9FV25ibTRkuWRada2kkPrF73Zx6R+125eWbe98GBXR7gfpnMWrgIex0AOgRM2fWXiMmpy5YAgAmjgZmt5oSPQEy7nY3p6Tap/xaIknkxxbBNNFj88ytDxCA4rst7yy/ODL/RNBZnsxdhtGiFFDvfZQQKIqGdLQOAE0bz5ka4paCGAHlNFYWv91sgAX60TOPU4JW5+icYHZzivBPfpQwvFjLLhrjReVG9u/zDrLTBEZyf1HezlYGpB7SStp/PvueTK3tsYxciEtX5YpMYIoyItvIJdj0q4AydoqXhIkilxuw5i5jZswprYUAb5WSiq1+Tb8BFX/GsxLltG56hrCNiBGGpUeXyjphPDQ1KEkeka7ZIQ5II4XxodB9xdNF03b8ORSndO181BP4jqQJB24eYAhfbzeN2ItfYN73MpFluKUQv92A8R01+aeZ+Phm6AgG8EO4cmFt2LptxQ+IPmwTBZlWJOmM+ulhl+xDhk+YHt1FUxZ7mpVffgSlxOnztgZa4LYU6POCXr1FveyhAFctpGPePavyyKMEizEv+9EKfDINIZA34GTJvTar0wLTRlmL6zlyus9HE7wrfDTXIuHggfglp4rn9DQQHnlopkQ0gZlZGssmS9MPp/wf0SJHWYrKIakbsa505L7HjQ/U5gRLvuI7T/P81Qs5q09K2x3p4tGjN8J0TYg6kcaiG/WmCVry4yKI0cgsz0c4P7/vN+NLsVI+H6rtP0dFFgozfumrEAAAAA');