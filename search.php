<?php defined('ABSPATH') || exit;
global $wp_query;


$inputs = [
    [
        'label' => __('همه', 'cyn-dm'),
        'value' => 'all'
    ],
    [
        'label' => __('بلاگ ها', 'cyn-dm'),
        'value' => 'post'
    ],
    [
        'label' => __('خدمات', 'cyn-dm'),
        'value' => 'service'
    ],
    [
        'label' => __('پزشکان', 'cyn-dm'),
        'value' => 'doctor'
    ],
]
?>


<!-- header  -->
<?php get_header() ?>
<!-- Bread Crumb -->
<section class=" bg-noise bg-primary-80 py-7 space-y-2 max-lg:space-y-13">
    <div class="container">
        <P>Salam man bread crumb hastam bia mano bekhooon</P>
    </div>
</section>
<div class="py-3"></div>


<main class="container">
    <!-- search part -->
    <div class="bg-primary-100 max-lg:flex flex-col p-5 rounded-3xl  divide-y space-y-3 divide-primary-90">
        <!-- filters  -->
        <form action="/" class="flex justify-between items-center  max-lg:flex-col max-lg:gap-3" id="formSearch">

            <div class=" max-lg:order-2 flex gap-2 flex-wrap">
                <div>
                    <?php _e('جستجو در:', 'cyn-dm') ?>
                </div>
                <div class="flex gap-6 flex-wrap">
                    <?php foreach ($inputs as $index => $input) : ?>
                    <div class="flex items-center gap-1 ">
                        <input type="radio" name="search-filter" id="<?php echo $input['value'] ?>">
                        <label for="<?php echo $input['value'] ?>"><?php echo $input['label'] ?></label>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>



            <!-- serch box  -->
            <div class="max-lg:order-0 flex justify-end">
                <div class="flex gap-1 py-2 px-3 border border-primary-50 rounded-full">
                    <button type="submit">
                        <svg class="icon size-4">
                            <use href="#icon-search-loupe" />
                        </svg>
                    </button>

                    <div>
                        <input type="search" value="<?php the_search_query() ?>" id="search" name="s"
                            placeholder="جستجو">
                    </div>
                </div>
                <div class="divide-y divide-primary-70"></div>
            </div>
        </form>


        <div class="flex justify-center items-center py-3 text-primary-30 text-caption">

            <span id='postsCount'>
                <?php echo $wp_query->found_posts ?>
            </span>

            <span>
                <?php _e('نتیجه', 'cyn-dm') ?>
            </span>
        </div>

    </div>
    <div class="py-6"></div>


    <!-- posts  -->
    <div class="divide-y divide-primary-70 py-4" id='postsWrapper'>
        <?php if ($wp_query->have_posts()) : ?>


        <?php
            while ($wp_query->have_posts()) :
                $wp_query->the_post();
                cyn_get_card('search-result');
            endwhile;
        else :

            cyn_get_component('search-not-found') ?></div>
    <!--search not found-->
    <?php endif; ?>



</main>



<!-- pagination  -->
<!-- faraz mizane  -->



<?php get_footer() ?>