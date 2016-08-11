<?php
	/***********************************************************************************************************

		The following example demonstrates the use of the ArrayHelpers::CrossReference function.

	 ***********************************************************************************************************/
	require ( '../ArrayHelpers.phpclass' ) ;

	if  ( php_sapi_name ( )  !=  'cli' )
		echo ( "<pre>" ) ;

	// Example 1 : we want to know :
	//	1) which items, present in $keys, are missing from $array
	//	2) which items, present in $array, are missing from $keys
	// $array is an associative array.
	$keys		=  [ 'a', 'b', 'd', 'e' ] ;
	$array		=  [ 'a' => 'a value', 'b' => 'b value', 'c' => 'c value', 'd' => 'd value' ] ;
	$status		=  ArrayHelpers::CrossReference ( $keys, $array, $missing, $extra ) ;

	echo "********** Example using associative array :\n" ;
	echo "Keys that are missing in array            : " ; print_r ( $missing ) ;
	echo "Values contained in array but not in keys : " ; print_r ( $extra ) ;

	// Example 2 is the same as example 1, but it uses a non-associative array instead
	$keys		=  [ 0, 1, 3, 10 ] ;
	$array		=  [ 'a value', 'b value', 'c value', 'd value' ] ;
	$status		=  ArrayHelpers::CrossReference ( $keys, $array, $missing, $extra ) ;

	echo "********** Example using associative array :\n" ;
	echo "Keys that are missing in array            : " ; print_r ( $missing ) ;
	echo "Values contained in array but not in keys : " ; print_r ( $extra ) ;
