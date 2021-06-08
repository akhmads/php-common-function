<?php

/**
 * Number Separator
 * @return numeric
 */
if( ! function_exists('numsep') )
{
	function numsep( $num, $decimal = 0)
	{
		if(empty($num)) return '';
		$num = preg_replace('#[^0-9\.]#i', '', $num);
		return number_format($num, $decimal, '.', ',');
	}
}