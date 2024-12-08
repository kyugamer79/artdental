<?php
$postId = $args['post-id'] ?? get_the_ID();
$video = get_field("yalda_video_file", $postId);



if ($postId === 0) {
    throw new ErrorException('post id is invalid', 0, E_WARNING);
}
?>

<?php if (!empty(get_field('yalda_video_title')) || !empty(get_field('yalda_video_txt')) || !empty(get_field('yalda_video_file', $postId)) || !empty(get_the_post_thumbnail($postId, 'medium'))): ?>
<div class="container">
    <div class="grid grid-cols-4 items-center gap-9">

        <div class="lg:col-span-2 col-span-4 flex flex-col gap-4">
            <div>
                <div class="text-primary-90 md:text-[40px] text-h6">
                    <?php if (!empty(get_field('yalda_video_title'))): ?>
                        <?php echo get_field('yalda_video_title') ?>
                    <?php endif; ?>
                </div>

                <div class="text-primary-70 md:text-body text-[14px] leading-9">
                    <?php if (!empty(get_field('yalda_video_txt'))): ?>
                        <?php echo get_field('yalda_video_txt') ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="lg:col-span-2 col-span-4">
            <div
                class="video-card | relative overflow-hidden rounded-3xl h-full hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                <div class="aspect-video h-full">
                    <?php if (!empty(get_the_post_thumbnail($postId, 'medium'))): ?>
                        <?php echo get_the_post_thumbnail($postId, 'medium', ['class' => 'w-full h-full object-cover']) ?>
                    <?php endif; ?>
                </div>

                <?php if (!empty(get_field('yalda_video_file', $postId))): ?>
                    <div class="absolute inset-0 flex flex-col justify-between text-primary-100">
                        <div class="flex flex-1 justify-center items-center">
                            <div class="p-4 relative">
                                <div class="play-btn" data-post-id="<?php echo $postId ?>"
                                    data-acf-field="yalda_video_file">
                                    <button
                                        class="rounded-full flex gap-1 transition-all duration-300 cursor-pointer text-primary-100 shadow-md shadow-slate-400/50 hover:bg-gradient-to-b hover:from-[#A60205] hover:to-[#FD4242] p-2 bg-gradient-to-b from-[#FD4242] to-[#A60205]">
                                        <svg class="icon size-7 text-primary-100">
                                            <use href="#icon-icon" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>