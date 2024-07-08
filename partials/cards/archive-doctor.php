 <?php
    $index = $args['index'] ?? 1;
    $postId = $args['post-id'] ?? 0;

    ?>

 <!-- Doctors Card -->
 <section class="grid grid-cols-3 gap-[48px] items-center" id="<?php echo  'doctor-' .   $postId ?>">

     <!-- Texts -->
     <div class="col-span-2 order-2 max-lg:col-span-3">

         <!-- Introduction -->
         <div class="prose max-w-full">

             <!-- Name -->
             <div class="text-h5 font-medium max-lg:hidden">
                 <?php echo the_title() ?>
             </div>


             <!-- Expert -->
             <div class="text-body_s font-normal max-lg:hidden">
                 <?php echo get_field('expert') ?>
             </div>


             <!-- Info -->
             <div class="prose-h4:text-[20px] prose-p:text-[16px]">
                 <?php echo the_content() ?>
             </div>
         </div>
     </div>


     <!-- Swiper Image -->
     <div class="col-span-1 space-y-5 max-lg:col-span-3 max-lg:order-1 <?php echo $index % 2 === 0 ? 'order-3' : 'order-0' ?>">

         <!-- Mobile Name Responsive -->
         <div class="hidden max-lg:block">
             <!-- Name -->
             <div class="text-h5 font-medium">
                 <?php echo the_title() ?>
             </div>


             <!-- Expert -->
             <div class="text-body_s font-normal">
                 <?php echo get_field('expert') ?>
             </div>
         </div>

         <div>
             <swiper-container navigation-next-el="#servicesNext" navigation-prev-el="#servicesPrev" space-between="12" slides-per-view="1">

                 <?php for ($i = 1; $i <= 6; $i++) : ?>
                     <swiper-slide class="fade-in-down ">

                         <?php

                            $slideShow_image = get_field("slideshow_group_image_$i");

                            echo wp_get_attachment_image($slideShow_image, "full", false, ["class" => "rounded-2xl w-full "]);

                            ?>

                     </swiper-slide>
                 <?php endfor; ?>
             </swiper-container>
         </div>

         <div>
             <div class="flex justify-center items-center">

                 <div class="flex gap-2">

                     <cyn-icon-button type="primary" id="servicesPrev" class="-rotate-90 " icon="#icon-chevron-down">
                     </cyn-icon-button>
                     <cyn-icon-button type="primary" id="servicesNext" class="rotate-90" icon="#icon-chevron-down">
                     </cyn-icon-button>
                 </div>


             </div>
         </div>
     </div>

 </section>