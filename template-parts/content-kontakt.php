<?php /* Template Name: Kontakt */ 


get_header();

?>

<?php get_template_part( 'template-parts/content', 'page' ); ?>

<?php echo do_shortcode( '[contact-form-7 id="530" title="Kontaktformular"]' ); ?>


<?php   get_footer();   ?>