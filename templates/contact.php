<?php /* Template Name: Contact us */ ?>

<!-- Contact Us page  -->
<?php get_header() ?>

<main class="container max-lg:flex max-lg:flex-col">
    <div class="text-h1 text-primary-20">
        <?php _e('اگه سوالی داری...', 'cyn-dm') ?>
    </div>
    <div class="py-2"></div>
    <div class="flex gap-11 max-lg:flex-col	">
        <!-- image  -->
        <div class="max-lg:w-full w-3/6 flex items-center justify-center">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'full') ?>
        </div>
        <!-- Contact form -->
        <div class="max-lg:w-full flex gap-4 flex-col w-3/6">
            <!-- first form text  -->
            <div class="flex flex-col text-primary-40 gap-2">
                <p class="text-h3 "> <?php _e('تماس با ما', 'cyn-dm') ?></p>
                <p class="text-body_s"> <?php _e('پیام خودتونو برای ما ارسال کنید', 'cyn-dm') ?></p>
            </div>
            <!-- Customer  information form   -->
            <div>
                <form class="flex gap-4 flex-col" action="/" method="post" id="ContactUsForm">
                    <div><input class="max-lg:w-full w-4/5 p-2 rounded-3xl border border-primary-80 " type="text" placeholder="نام شما" required="required" name="name"></div>
                    <div><input class="max-lg:w-full w-4/5 p-2 rounded-3xl border border-primary-80" type="mail" placeholder="ایمیل شما" required="required" name="email"></div>
                    <div><textarea class="max-lg:w-full w-4/5 p-2 rounded-3xl border border-primary-80" name="message" id="message" cols="30" rows="10" placeholder="پیام خودتونو بنویسید"></textarea></div>
                    <!-- Submit field -->
                    <div class=" flex items-end justify-end max-lg:items-center max-lg:justify-center w-4/5 max-lg:w-full">
                        <button class="max-lg:w-full max-lg:items-center max-lg:justify-center flex items-end justify-end flex-row-reverse gap-1 rounded-full transition-all duration-300 cursor-pointer
                         bg-gradient-to-t from-primary-50 to-primary-70 text-primary-100 shadow-md shadow-slate-400/50
                          hover:from-primary-20 hover:to-primary-20 py-2 px-2 text-body_s ">
                            <div class="me-2">
                                <?php _e('ارسال پیام', 'cyn-dm')  ?>
                            </div>
                            <svg class="icon  text-primary-100 w-6 h-6 transform">
                                <use href="#icon-Send" />
                            </svg>

                        </button>
                    </div>
                </form>
            </div>

        </div>

    </div>

</main>

<?php get_footer() ?>