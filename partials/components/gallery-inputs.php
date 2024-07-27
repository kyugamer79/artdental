<?php

$inputs = [
    [
        'label' => __('ویدئوها', 'cyn-dm'),
        'value' => 'video'
    ],
    [
        'label' => __('پادکست ها', 'cyn-dm'),
        'value' => 'podcast'
    ],
    [
        'label' => __('تصاویر', 'cyn-dm'),
        'value' => 'photo'
    ],
];


?>

<div class="container flex gap-4 bg-primary-100 rounded-3xl p-5" id="galleryPostTypes">
    <?php foreach ($inputs as $index => $input) : ?>

    <div class="flex items-center gap-1 ">
        <input
            <?php echo get_post_type_archive_link($input['value']) == "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ? 'checked' : ''  ?>
            type="radio" name="search-filter" id="<?php echo $input['value'] ?>"
            data-link="<?php echo get_post_type_archive_link($input['value']) ?>">
        <label for="<?php echo $input['value'] ?>"><?php echo $input['label'] ?></label>
    </div>
    <?php endforeach; ?>
</div>

<div class="py-3"></div>