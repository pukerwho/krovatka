<?php
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'blocks/welcome', 'default' ); ?>
<?php get_template_part( 'blocks/video', 'default' ); ?>
<?php get_template_part( 'blocks/whyus', 'default' ); ?>
<?php get_template_part( 'blocks/recent', 'default' ); ?>
<?php get_template_part( 'blocks/faq', 'default' ); ?>
<?php get_template_part( 'blocks/reviews', 'default' ); ?>

<?php get_footer(); ?>