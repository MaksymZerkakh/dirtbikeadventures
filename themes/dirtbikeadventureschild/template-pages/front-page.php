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
 * Template Name: Front Page
 *
 * @package Portfolio
 */

get_header();
?>

<div class="hero-section">
    <div class="row wrapper">
        <div class="column">
            <div class="hero-text-con">
                <h1>Your one-stop rental shop <br/> <span class="hr-element">for your dirt bike riding adventures</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                <button class="btn-cta btn-with">
                    <a href="#">Make a reservation</a>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="adventure-section">
    <div class="row flex wrapper">
        <div class="column-50 padding-20">
            <h2>Find your adventure today</h2>
            <div class="sub-heading">Find out more about us!</div>
            <div class="adventure-img"></div>
        </div>

        <div class="column-50 padding-top-70">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>

        <button class="btn-cta ">
			<a href="#">Learn More</a>
        </button>
            
        </div>


    </div>
</div>


<div class="ride-section">
    <div class="row wrapper">
        <h2>Get your ride on</h2>
        <div class="sub-heading">Find out more about our rentals!</div>

        <div class="flex justify-content desktop-gallery">
            <div class="gallery-img-one"></div>
            <div class="gallery-img-two"></div>
            <div class="gallery-img-three"></div>
        </div>

        <div class="mobile-text">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
        </div>

        <button class="btn-cta">
			<a href="#">View Our Rentals</a>
        </button>

    </div>

</div>




<?php
get_footer();