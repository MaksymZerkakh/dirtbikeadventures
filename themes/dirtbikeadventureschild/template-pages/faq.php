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
 * Template Name: FAQ
 *
 * @package Portfolio
 */

get_header();
?>

<div class="faq-hero-section">
    <div class="row wrapper">
        <div class="column">
            <div class="hero-text-con">
                <h1>FAQ</h1>
            </div>
        </div>
    </div>
</div>

<div class="faq-section">
    <div class="row wrapper ">
        <h2>Frequently asked questions and answers</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut blandit mi urna, eu bibendum mauris imperdiet et. Phasellus sagittis tempor erat, a finibus neque placerat id. Integer vel nibh elementum ipsum consequat consectetur nec non velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris semper bibendum nisl, quis pellentesque nibh condimentum in. Vestibulum sed augue id magna viverra tempus in et felis. Donec ac metus sem. In lobortis consequat sapien, ac auctor eros. Aenean ut mi porta arcu semper scelerisque lobortis in ante.</p>

    <div class="accordion">
        <div class="accordion-item">
        <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">How old do you have to be to rent from UP Dirt Bike Adventures?</span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
            <p>You must be 21 years or older to rent and 16 years old with a valid driver's license to drive.</p>
        </div>
        </div>
        <div class="accordion-item">
        <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">How does the rental process work?</span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
            <p>Click on <a href="/how-it-works ">How It Works</a> for details on our rental process.</p>
        </div>
        </div>
        <div class="accordion-item">
        <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Do I have to make a reservation, or can we walk in to rent equipment?</span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
            <p>We highly recommend making a reservation during peak seasons, and we are usually booked out 2+ weeks in advance.</p>
        </div>
        </div>
        <div class="accordion-item">
        <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Do you do guided tours?</span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
            <p>We don't do guided tours. All our equipment is for unguided adventures. You pick up and take our equipment to any destination you choose.</p>
        </div>
        </div>
        <div class="accordion-item">
        <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">Do you require a damage deposit?</span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
            <p>We require you to provide credit card info and sign an authorization agreement in which we will only process your card for the damage deposit amount should the equipment rented be returned with damage. We do not put a "hold" on your card like many other rental companies do.</p>
        </div>
        </div>
        <div class="accordion-item">
        <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Once we know where we will be riding, how do we know where to go from there and not get lost?</span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
            <p>We will help you download Colorado's COTREX app on your smart device. COTREX is a very intuitive trail map application that provides continuous mapping even when your device looses network coverage.</p>
        </div>
        </div>
        <div class="accordion-item">
        <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">What do we need to bring to wear, and what do you provide?</span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
            <p>Dress accordingly depending on the season and type of activities you will be participating in. It's always a good idea to take a jacket as even on the sunniest days the weather can change very quickly. We provide any safety gear needed with the equipment you will be renting.</p>
        </div>
        </div>
        <div class="accordion-item">
        <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Do you offer insurance? What happens if the equipment is returned with damage?</span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
            <p>We do offer the option to purchase insurance for $45 per item rented, per day, with a $2,000 deductible. If you elect to purchase our insurance, no matter the extent of damages, the most you would pay out of pocket is $2,000. We highly recommend adding insurance to your rental.</p>
        </div>
        </div>
    </div>


    </div>
</div>

<script>

const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));

</script>


<?php
get_footer();