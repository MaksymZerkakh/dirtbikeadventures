<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template Name: Contact
 *
 * @package Portfolio
 */

get_header();
?>

<div class="contact-hero-section">
    <div class="row wrapper">
        <div class="column">
            <div class="hero-text-con">
                <h1>Contact</h1>
            </div>
        </div>
    </div>
</div>

<div class="contact-section">
    <div class="row wrapper ">
        <h2>Contact us for help with your reservation needs</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut blandit mi urna, eu bibendum mauris imperdiet et. Phasellus sagittis tempor erat, a finibus neque placerat id. Integer vel nibh elementum ipsum consequat consectetur nec non velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris semper bibendum nisl, quis pellentesque nibh condimentum in. Vestibulum sed augue id magna viverra tempus in et felis. Donec ac metus sem. In lobortis consequat sapien, ac auctor eros. Aenean ut mi porta arcu semper scelerisque lobortis in ante.</p>


        <?php echo do_shortcode( '[contact-form-7 id="53" title="Contact form 1"]' ); ?>

    </div>
</div>


<?php
get_footer();