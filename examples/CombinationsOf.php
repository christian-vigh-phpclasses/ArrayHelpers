<?php
	/***********************************************************************************************************

		The following example demonstrates the use of the ArrayHelpers::CombinationsOf function.

	 ***********************************************************************************************************/
	require ( '../ArrayHelpers.phpclass' ) ;

	if  ( php_sapi_name ( )  !=  'cli' )
		echo ( "<pre>" ) ;

	$array		=  [ [ 'a', 'b', 'c' ], 1, 2, [ 'x', 'y', 'z' ] ] ;

	echo "********** Combinations of the following array :\n" ;
	print_r ( $array ) ;
	echo "---------- Result :\n" ;
	print_r ( ArrayHelpers::CombinationsOf ( $array ) ) ;

	echo "********** Combinations of an empty array :\n" ;
	print_r ( ArrayHelpers::CombinationsOf ( [] ) ) ;

	$array		=  [ 1, 2, 3, 4 ] ;

	echo "********** Combinations of a flat array :\n" ;
	print_r ( $array ) ;
	echo "---------- Result :\n" ;
	print_r ( ArrayHelpers::CombinationsOf ( $array ) ) ;
