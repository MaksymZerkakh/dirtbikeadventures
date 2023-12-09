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
 * Template Name: Rental
 *
 * @package Portfolio
 */

get_header();
?>

<div class="rentals-hero-section">
    <div class="row wrapper">
        <div class="column">
            <div class="hero-text-con">
                <h1>Rentals</h1>
            </div>
        </div>
    </div>
</div>

<div class="rentals-section">
    <div class="row wrapper ">
        <!-- FareHarbor item grid of flow #812372 -->
        <script src="https://fareharbor.com/embeds/script/items/updirtbikeadventures/?full-items=yes&fallback=simple&flow=812372"></script>
    </div>
</div>


<?php
get_footer();