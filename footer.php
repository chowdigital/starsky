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
                    <a href="mailto:info@vanguardcamden.co.uk"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/mail.svg"></img>info@vanguardcamden.co.uk</a>
                </li>
                <li>
                    <a href="tel:02080929044"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.svg"></img>020 8092
                        9044</a>
                </li>
                <li>
                    <a href="https://what3words.com/Cycle.Waters.Patch"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/map.svg"></img>What Three
                        Words: Cycle, Waters, Patch</a>
                </li>

            </ul>
        </div>
        <div class="col-12 col-lg-6 col-xl-3 offset-xl-3">
            <ul>
                <li>
                    <a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy Policy</a>
                </li>
                <li>
                    <a href="<?php echo get_home_url(); ?>/cookie-policy">Cookie Policy</a>

                </li>
                <li>
                    <a href="<?php echo get_home_url(); ?>/terms">Terms & Conditions</a>

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

</body>

</html>