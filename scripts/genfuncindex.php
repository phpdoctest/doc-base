<?php 
/*
# +----------------------------------------------------------------------+
# | PHP Version 4                                                        |
# +----------------------------------------------------------------------+
# | Copyright (c) 1997-2002 The PHP Group                                |
# +----------------------------------------------------------------------+
# | This source file is subject to version 2.02 of the PHP licience,     |
# | that is bundled with this package in the file LICENCE and is         |
# | avalible through the world wide web at                               |
# | http://www.php.net/license/2_02.txt.                                 |
# | If uou did not receive a copy of the PHP license and are unable to   |
# | obtain it through the world wide web, please send a note to          |
# | license@php.net so we can mail you a copy immediately                |
# +----------------------------------------------------------------------+
# | Authors:    Hartmut Holzgraefe <hartmut@six.de>                      |
# +----------------------------------------------------------------------+
# 
# $Id$
*/
?>
 <index id='index.functions'>
  <title>Function Index</title>
<?php
$letter=" ";
$functions = file($HTTP_SERVER_VARS['argv'][1]);
usort($functions,"strcasecmp");
foreach ( $functions as $funcentry ) {
	list($function,$description) = explode(" - ",$funcentry);
	$function=strtolower(trim($function));
	if(!ereg("^[[:alnum:]]",$function)) continue;
	if($function{0}!=$letter) {
		if($letter!=" ") {
			echo "  </indexdiv>\n";
		}
		$letter=$function{0};
		echo "  <indexdiv>\n";
		echo "   <title>".strtoupper($letter)."</title>\n";
	}
	echo "   <indexentry><primaryie><function>$function</function></primaryie></indexentry>\n";
}
?>
  </indexdiv>
 </index>
