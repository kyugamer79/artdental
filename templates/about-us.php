<?php /* Template name: About Us */ ?>

<?php get_header() ?>

<!-- Bread Crumb -->
<?php cyn_get_component('breadcrumb') ?>
<!-- Hero -->
<?php cyn_get_page_template('about-us/hero') ?>
<!-- Description-->
<?php cyn_get_page_template('about-us/description') ?>
<div class="py-11"></div>
<!-- Doctors -->
<?php cyn_get_page_template('home/doctors') ?>
<div class="py-11"></div>
<!-- Crow -->
<?php cyn_get_page_template('about-us/crow') ?>
<div class="py-[52px]"></div>
<!-- Services -->
<?php cyn_get_page_template('home/services') ?>
<div class="py-[48px] max-lg:py-[32px]"></div>
<!-- History -->
<?php cyn_get_page_template('about-us/history') ?>
<div class="py-[45px]"></div>
<!-- CTA -->
<div class="container fade-in-down" anim-delay="0.8">
    <cyn-cta />
</div>

<?php get_footer() ?>