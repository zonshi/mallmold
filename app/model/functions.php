<?php
/*
*	@functions.php
*	Copyright (c)2013-2016 Mallmold.com
*	
*	This program is free software; you can redistribute it and/or
*	modify it under the terms of the GNU General Public License
*	as published by the Free Software Foundation; either version 2
*	of the License, or (at your option) any later version.
*	More details please see: http://www.gnu.org/licenses/gpl.html
*/

function cookie($name, $value=null, $domain='')
{
	if($name && isset($value)){
		$_COOKIE[$name] = $value;
		return setcookie($name, $value, time()+86400, '/');
	}elseif($name){
		return $_COOKIE[$name];
	}else{
		return false;
	}
}
?>