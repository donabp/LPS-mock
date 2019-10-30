<?php get_header(); ?>

<?php
    $model = get_query_var( 'model' );
    if ( !$model ) {
        do_action( 'cws_content' );
    }
?>

<?php do_action( 'cws_showrooms' ); ?>

<?php get_footer(); ?>
