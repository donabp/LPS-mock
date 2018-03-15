
<?php get_header(); ?>

<?php
    $id = get_query_var('id');
    if (!$id) {
        do_action( 'cws_content' );
    }
    do_action( 'cws_promotions' );
?>

<?php get_footer(); ?>

