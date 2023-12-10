<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cloudsdale_Theme
 */

?>



<!-- Footer -->
<footer id="footer" class="pt-5">
    <div class="row">
        <div class="col-12 col-lg-6">
            <ul>
                <li>
                    <a href="mailto:hello@starskyandhatch.co.uk "><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/mail.svg"></img>hello@starskyandhatch.co.uk
                    </a>
                </li>

                <li>
                    <a
                        href="https://www.google.com/maps/place/Starsky+%26+Hatch/@50.8525715,0.5679427,15z/data=!4m2!3m1!1s0x0:0x4b18c26d36aef492?sa=X&ved=2ahUKEwiwmcHy14KDAxUySkEAHaRNCuMQ_BJ6BAhKEAA"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/map.svg"></img>
                        Eversfield Pl, Hastings, Saint Leonards-on-sea TN37 6FD</a>
                </li>

            </ul>
        </div>
        <div class="col-12 col-lg-6 col-xl-3 offset-xl-3">
            <ul>
                <li>
                    <a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy Policy</a>
                </li>

                <li>
                    <a href="<?php echo get_home_url(); ?>/join-the-team">Join our team</a>

                </li>

            </ul>
        </div>
    </div>
    <!-- Cloudsdale -->


</footer>
<div class="text-center" style="background: #000;">
    <a href="https://cloudsdale.co.uk/"> <img class="m-2"
            src="https://cloudsdale.co.uk/wp-content/themes/Cloudsdale_2.0/assets/img/cloudsdale_logo.svg"
            alt="Cloudsdale" style="height:20px">
</div></a>
</div>


<?php wp_footer(); ?>
</div>
</body>

</html>