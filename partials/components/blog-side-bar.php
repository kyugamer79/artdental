<!-- side bar -->
<div class="grid justify-evenly">
    <!-- Search -->
    <div class="bg-primary-100 p-5 rounded-3xl">

        <!-- Title  -->
        <div class="pb-4">
            <?php _e('جستجو', 'cyn-dm') ?>
        </div>


        <!-- Input Search -->

        <form action="/">

            <div class="flex items-center gap-1 py-2 px-3 border border-gray-300 rounded-full">
                <button type="submit">
                    <svg class="icon size-4">
                        <use href="#icon-search-loupe" />
                    </svg>
                </button>

                <div>
                    <input type="search" value="<?php the_search_query() ?>" id="search" name="s"
                        placeholder="جستجو در مقالات">
                </div>
            </div>
        </form>


    </div>

    <!-- Suggestion Blogs -->
    <div>

    <div class="pb-4">
            <?php _e('مقالات پیشنهادی', 'cyn-dm') ?>
    </div>


    </div>

    <!-- Category -->
    <div>

    </div>

    <!-- Tags -->
    <div>

    </div>

    <!-- Gallery -->
    <div>

    </div>

</div>