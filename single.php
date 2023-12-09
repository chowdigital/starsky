<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Cloudsdale_Theme
 */

get_header();
?>

<main id="blog-main" class="">
    <div class="row">
        <div class="col-10 col-md-7 col-lg-8 round-br lg-img shadow"
            style="background-image:  url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
        </div>
        <div class="offset-4 col-7 offset-md-0 col-md-4 col-lg-3 logo-landing appear2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sunset.svg" alt="">
        </div>
    </div>

    <section class="row">
        <div class="col-10 offset-1 col-lg-8 offset-lg-2 mb-5">









            <?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				

				

			endwhile; // End of the loop.
			?>



        </div>
    </section>

</main><!-- #main -->

<?php
get_footer();