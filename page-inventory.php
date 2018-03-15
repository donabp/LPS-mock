<?php get_header(); ?>

<?php
    $model = get_query_var( 'model' );
    if ( !$model ) {
        do_action( 'cws_content' );
    }
    do_action( 'cws_inventory' );
?>

<?php get_footer(); ?>
