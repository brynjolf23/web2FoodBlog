<?php
/**
 * The Template for displaying all posttype items.
 *
 * 
 * @package    Auxin
 * @author     averta (c) 2014-2020
 * @link       http://averta.net
 */

$term = get_queried_object();
$cat = $term->slug;

$recipe = array("creole_cusine", "spanish_cusine", "italian_cusine", "indian_cusine", "chinese_cusine");
$review = array("arima", "chagunas", "mayaro", "port_of_spain", "san_fernando", "sangre_grande", "siparia", "tobago");

if (in_array($cat, $recipe)) {
include(TEMPLATEPATH . '/category-recipe.php');
} else {
if (in_array($cat, $review)) {
include(TEMPLATEPATH . '/category-review.php');
}
}
?>