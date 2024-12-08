<?php
$swiperImages = get_field('swiperImages_group');
?>

<div class="container">
    <!-- Desktop Swiper -->
    <swiper-container class="hidden md:block" speed="500">
        <?php if (!empty($swiperImages) && is_array($swiperImages)): ?>
            <?php foreach ($swiperImages as $swiperImage): ?>
                <?php if (!empty($swiperImage['swiper_desktop_img'])): ?>
                    <swiper-slide class="object-cover">
                        <a href="<?php echo esc_url($swiperImage['swiper_img_link']); ?>">
                            <?php echo wp_get_attachment_image($swiperImage['swiper_desktop_img'], 'full', false, ['class' => 'w-full h-auto rounded-[32px]']); ?>
                        </a>
                    </swiper-slide>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </swiper-container>

    <!-- Mobile Swiper -->
    <swiper-container class="md:hidden" speed="500">
        <?php if (!empty($swiperImages) && is_array($swiperImages)): ?>
            <?php foreach ($swiperImages as $swiperImage): ?>
                <?php if (!empty($swiperImage['swiper_mobile_img'])): ?>
                    <swiper-slide class="object-cover">
                        <a href="<?php echo esc_url($swiperImage['swiper_img_link']); ?>">
                            <?php echo wp_get_attachment_image($swiperImage['swiper_mobile_img'], 'full', false, ['class' => 'w-full h-auto rounded-[32px]']); ?>
                        </a>
                    </swiper-slide>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </swiper-container>
</div>