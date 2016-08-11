<?php
	/***********************************************************************************************************

		The following example demonstrates the use of the ArrayHelpers::SortedFind function.

	 ***********************************************************************************************************/
	require ( '../ArrayHelpers.phpclass' ) ;

	if  ( php_sapi_name ( )  !=  'cli' )
		echo ( "<pre>" ) ;

	$array	=  range ( 1000000, 2000000 ) ;

	// Find item 1500000
	$index	=  ArrayHelpers::SortedFind ( $array, 1500000 ) ;
	echo "Find item 1 500 000 in an array containing sorted values from 1 000 000 to 2 000 000 :\n" ;
	$index		=  ArrayHelpers::SortedFind ( $array, 1500000 ) ;
	echo "\tFound item at index : $index\n" ;
	echo "\tValue at index $index : " . $array [ $index ] . "\n" ;
