<?php

$features = get_field('features_group') ?? [];

$features = array_filter($features);

?>

<!-- Desktop -->
<div class="container space-y-8 lg:block hidden">
    <?php
    $counter = 0;
    foreach ($features as $index => $featureGroup):
        $counter++;
        ?>
        <div
            class="flex gap-5 <?php echo $counter % 2 == 0 ? 'flex-row' : 'flex-row-reverse' ?> <?php echo $counter % 2 == 0 ? 'max-lg:flex-row' : 'max-lg:flex-row-reverse' ?>">

            <div class="flex flex-col justify-center items-start flex-1 fade-in text-h6 max-lg:text-body_s"
                anim-delay="<?php echo strval($counter * 0.1) ?>">
                <div class="text-primary-90 text-h2">
                    <?php echo $featureGroup['feature_title'] ?>
                </div>

                <div class="text-primary-80 text-body_s leading-9">
                    <?php echo $featureGroup['feature_text'] ?>
                </div>
            </div>

            <div class="flex-1 transition-all duration-300">
                <?php echo wp_get_attachment_image($featureGroup['feature_image'], 'full', false, ['class' => 'w-full h-64 object-cover rounded-2xl fade-in', 'anim-delay' => $counter * 0.1]) ?>
            </div>
            
        </div>
    <?php endforeach; ?>
</div>

<!-- Mobile -->
<div class="container grid gap-6 lg:hidden ">
    <?php
    $counter = 0;
    foreach ($features as $index => $featureGroup):
        $counter++;
        ?>
        <div class="flex gap-6 max-lg:flex-col">

            <div class="flex flex-col justify-center items-start flex-1 fade-in text-h6 max-lg:text-body_s"
                anim-delay="<?php echo strval($counter * 0.1) ?>">
                <div class="text-primary-90 text-h5 md:text-h2">
                    <?php echo $featureGroup['feature_title'] ?>
                </div>
            </div>

            <div class="flex-1 transition-all duration-300">
                <?php echo wp_get_attachment_image($featureGroup['feature_image'], 'medium', false, ['class' => 'w-full h-auto max-h-full object-cover rounded-2xl fade-in', 'anim-delay' => $counter * 0.1]) ?>
            </div>

            <div class="flex flex-col justify-center items-start flex-1 fade-in text-h6 max-lg:text-body_s"
                anim-delay="<?php echo strval($counter * 0.1) ?>">
                <div class="text-primary-80 text-[14px] md:text-body_s leading-9">
                    <?php echo $featureGroup['feature_text'] ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>