<?php
	/***********************************************************************************************************

		The following example demonstrates the use of the ArrayHelpers::Multisort function.

	 ***********************************************************************************************************/
	require ( '../ArrayHelpers.phpclass' ) ;

	if  ( php_sapi_name ( )  !=  'cli' )
		echo ( "<pre>" ) ;

	// A first example, using an array of associative arrays
	$array	=
	   [
		[ 'prop1' => 1 , 'prop2' => 2  , 'prop3' => 10 ],
		[ 'prop1' => 17, 'prop2' => 1  , 'prop3' => 11 ],
		[ 'prop1' => 1 , 'prop2' => 900, 'prop3' => 12 ],
		[ 'prop1' => 17, 'prop2' => 600, 'prop3' => 11 ],
		[ 'prop1' => 18, 'prop2' => 1  , 'prop3' => 11 ]
	    ] ;

	echo "********** Sorting the following array of associative arrays using ASC sort order on 'prop1', and DESC on 'prop2' :\n" ;
	print_r ( $array ) ;
	echo "Result :\n" ;
	ArrayHelpers::MultiSort ( $array, [ 'prop1' => true, 'prop2' => false ] ) ;
	print_r ( $array ) ;

	// A second example, using the same data, but with an array of objects
	class TestItem 
	   {
		public		$prop1, $prop2, $prop3 ;

		public function  __construct ( $prop1, $prop2, $prop3 ) 
		   {
			$this -> prop1	=  $prop1 ;
			$this -> prop2	=  $prop2 ;
			$this -> prop3	=  $prop3 ;
		    }
	    }

	$array	=
	   [
		new TestItem (  1,   2, 10 ),
		new TestItem ( 17,   1, 11 ),
		new TestItem (  1, 900, 12 ),
		new TestItem ( 17, 600, 11 ),
		new TestItem ( 18,   1, 11 )
	    ] ;

	echo "********** Sorting the following array of objects using ASC sort order on 'prop1', and DESC on 'prop2' :\n" ;
	print_r ( $array ) ;
	echo "Result :\n" ;
	ArrayHelpers::MultiSort ( $array, [ 'prop1' => true, 'prop2' => false ] ) ;
	print_r ( $array ) ;
