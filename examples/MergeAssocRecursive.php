<?php
	/***********************************************************************************************************

		The following example demonstrates the use of the ArrayHelpers::MergeAssocRecursive function.

	 ***********************************************************************************************************/
	require ( '../ArrayHelpers.phpclass' ) ;

	if  ( php_sapi_name ( )  !=  'cli' )
		echo ( "<pre>" ) ;

	$array_1	=  [ 17 => 'value 17 version 1', 18 => [ 'a' => 'value a', 'b' => 'value b version 1' ] ] ;
	$array_2	=  [ 17 => 'value 17 version 2', 18 => [ 'b' => 'value b version 2', 'c' => 'value c' ] ] ;
	$array_3	=  [ 1 => 'value 1', 19 => 'value 19', 20 => 'value 20' ] ;

	echo "***** Merging the following arrays :\n" ;
	echo "array 1 : " ; print_r ( $array_1 ) ;
	echo "array 2 : " ; print_r ( $array_2 ) ;
	echo "array 3 : " ; print_r ( $array_3 ) ;
	echo "***** Result of ArrayHelpers::MergeAssocRecursive :\n" ;
	print_r ( ArrayHelpers::MergeAssocRecursive ( $array_1, $array_2, $array_3 ) ) ;
	echo "***** Result of array_merge_recursive() :\n" ;
	print_r ( array_merge_recursive ( $array_1, $array_2, $array_3 ) ) ;