<div class="container flex gap-12 max-lg:flex-col">
    <!-- first description  -->
    <div class="w-1/2 max-lg:w-full">
        <!-- Title -->
        <h2 class="text-h2 max-lg:text-h4 text-primary-20">
            <?php echo get_field('description_title1') ?>
        </h2>

        <div class="py-2"></div>

        <!-- Txt -->
        <div class="text-body-s leading-8 text-primary-40">
            <?php echo get_field('description_txt1') ?>
        </div>
    </div>



    <!-- second description  -->
    <div class="w-1/2 max-lg:w-full">
        <!-- Title -->
        <h2 class="text-h2 max-lg:text-h4 text-primary-20">
            <?php echo get_field('description_title2') ?>
        </h2>

        <div class="py-2"></div>

        <!-- Txt -->
        <div class="text-body-s leading-8 text-primary-40">
            <?php echo get_field('description_txt2') ?>
        </div>
    </div>
</div>