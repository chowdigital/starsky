<?php /* Template Name: Home */ get_header(); ?>

<main class="home">
    <div class="row">
        <div class="col-10 col-md-7 col-lg-8 round-br lg-img shadow"
            style="background-image:  url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
        </div>
        <div class="offset-4 col-7 offset-md-0 col-md-4 col-lg-3 logo-landing appear2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sunset.svg" alt="">
        </div>
    </div>

    <div class="row">

        <div class="col-10 offset-1 offset-md-1 col-md-3 col-lg-2 offset-lg-1 home-intro pt-5 pb-5">
            <h3>give them Starsky & Hatch this christmas</h3>
            <p>Taxidermy williamsburg fixie, neutral milk hotel church-key kickstarter kombucha pinterest Brooklyn chia
                vice jawn. Letterpress yr jean shorts VHS green juice banjo, vinyl slow-carb meditation same neutral
                milk hotel cray XOXO. Woke flexitarian typewriter ennui marxism.</p>
            <a class="btn btn-sunset shadow">Shop Now</a>
        </div>
        <div class="d-none d-md-block offset-1 col-md-7 col-lg-8 offset-lg-1 round-l lg-img shadow appear2"
            style="background-image:  url(<?php echo get_template_directory_uri(); ?>/assets/img/photos/2980F102-020D-42FE-AC4F-89FF098F28A7.jpg); background-repeat: no-repeat; background-position: center; background-size: cover;">

        </div>
    </div>
    <div class="col-10 offset-1 text-start">
        <h1 class="display-3">BEACH VIBES</h1>
    </div>
    <div class="row">
        <div class="col-10 round-r sml-img shadow appear2"
            style="background-image:  url(<?php echo get_template_directory_uri(); ?>/assets/img/photos/IMG_7789.jpeg); background-repeat: no-repeat; background-position: center; background-size: cover;">
        </div>
        <div class="col-10 offset-1 text-end">
            <h1 class="display-3">Speciality coffee</h1>
        </div>
        <div class="col-10 offset-2 round-l sml-img shadow appear2"
            style="background-image:  url(<?php echo get_template_directory_uri(); ?>/assets/img/photos/C4A1CA56-790C-4CF6-9FB5-10F5F8D84404.jpg); background-repeat: no-repeat; background-position: center; background-size: cover;">
        </div>
        <div class="col-10 offset-1 text-start">
            <h1 class="display-3">FRESH PLATES</h1>
        </div>
    </div>
    <div class="row">


        <div class="col-10 col-md-7 col-lg-8 round-r lg-img shadow appear2"
            style="background-image:  url(<?php echo get_template_directory_uri(); ?>/assets/img/photos/ae3437d5-273a-425d-8f72-97dc3cd4a8b5.jpg); background-repeat: no-repeat; background-position: left; background-size: cover;">
        </div>
        <div class="col-10 offset-1 offset-md-1 col-md-3 col-lg-2 offset-lg-1 home-intro pt-5 pb-5">
            <h3>About us and our hatch</h3>
            <p>Chillwave messenger bag roof party swag. Art party church-key fam migas cronut, gentrify wolf woke
                slow-carb etsy VHS cray same cupping disrupt. Affogato tacos aesthetic pabst, church-key green juice
                roof party.</p>



            <a class="btn btn-sunrise shadow">Read More</a>

        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-3">HAPPENING AT THE HATCH</h1>
        </div>
    </div>

</main>


<?php get_footer(); ?>