<?php
/* nested or multidimensional array */
$foods = [
    'vegetables' => explode( ', ', 'brinjal, brocolli, carrot, capsicam' ),
    'fruits'     => explode( ', ', 'orange, banana, apple' ),
    'drinks'     => explode( ', ', 'water, milk' ),
];

print_r( $foods );

array_push( $foods['drinks'], 'orange juice' );
print_r( $foods );

echo $foods['vegetables'][3];

//another array example
$sample = [
    'test' => [
        'test-again' => [
            'a',
            'b',
            'c',
            'd',
        ],
    ],
];

echo $sample['test']['test-again'][2];

//Another One
$sample2 = [
    [1, 2, 3, 4],
    [11, 22, 33, 44],
    [111, 222, 333, 444],
    [1111, 2222, 3333, [5, 6, 7]],
];

print_r( $sample2 );
echo $sample2[3][3][1];