<!-- video popup wrapper-->
<?php

$video = get_field('video_file');

$link_video = $video['url'];


var_dump($link_video)
?>

<section class="VideoPopUp z-50 backdrop-blur w-full h-full fixed inset-0 flex justify-center items-center overflow-hidden opacity-0 pointer-events-none transition-all duration-300 id=" videoPopUp">">
    <!-- video pop up -->
    <div class="bg-primary-100 flex flex-col rounded-3xl">
        <!--close form button -->
        <div class="mt-5 flex">
            <div class="px-5">
                <button class="btn" size="small" id="videoPopUpCloser" variant="secondary">
                    <svg class="icon w-6 h-6">
                        <use href="#icon-xmark" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- video player  -->
        <div>
            <video id="video-teaser" class="video-teaser-wrapper video | radius-16" controls>
                <source src="<?php echo $link_video ?>" type="video/mp4">
            </video>

        </div>

    </div>
    </div>
</section>