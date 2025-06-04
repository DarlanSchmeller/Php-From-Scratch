<?php
$favoriteColor = 'red';
$secondFavoriteColor = 'green';

// Standard Ternary
$color = isset($favoriteColor) ? $favoriteColor : 'blue';

// Null Coalescing '??'
$color = $favoriteColor ?? 'blue';  // Same as above but cleaner

// Nested Ternary
$color = isset($favoriteColor) ? $favoriteColor : (isset($secondFavoriteColor) ? $secondFavoriteColor : 'yellow');

//  Null Coalescing Operator Chain
$color = $favoriteColor ?? $secondFavoriteColor ?? 'blue';  // Same as the Nested Ternary above but using Null Coalescing

echo $color;