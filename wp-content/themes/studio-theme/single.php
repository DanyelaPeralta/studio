<!--MULTIPLES SINGLE PAGE-->
<?php
$post = $wp_query->post;
if ( in_category('trending') ) {
include(TEMPLATEPATH . '/single-trending.php'); } 


else {
include(TEMPLATEPATH . '/single-default.php');
}
?>