<?php
/* indexed and associative array difference and intersection */
$numbers1 = array( 1, 4, 3, 66, 54, 7, 23, 1, 2 );
$numbers2 = array( 88, 3, 21, 44, 3, 28, 1, 2, 7 );

$fruits1 = array( "a" => "apple", "b" => "banana", "c" => "lemon" );
$fruits2 = array( "d" => "pineapple", "b" => "malta", "d" => "grapes", "c" => "lemon" );

$commonNumbers = array_intersect( $numbers1, $numbers2 );
// $commonFruits = array_intersect( $fruits1, $fruits2 );
$commonFruits = array_intersect_assoc( $fruits1, $fruits2 ); // for checking key with value
print_r( $commonNumbers );
print_r( $commonFruits );

/* for array difference */
$diff = array_diff( $numbers1, $numbers2 );
// $diff = array_diff_assoc( $fruits1, $fruits2 );
print_r( $diff );