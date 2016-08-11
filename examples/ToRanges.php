<?php
	/***********************************************************************************************************

		The following example demonstrates the use of the ArrayHelpers::ToRanges function.

	 ***********************************************************************************************************/
	require ( '../ArrayHelpers.phpclass' ) ;

	if  ( php_sapi_name ( )  !=  'cli' )
		echo ( "<pre>" ) ;

	$array	=  [ 1, 10, 4, 11, 3, 12, 20, 2, 21, 5 ] ;
	print_r ( ArrayHelpers::ToRanges ( $array ) ) ;
