<?php $descriptions = get_field('description_group') ?? []; ?>

<div class="container grid grid-cols-4 gap-12">
    <?php foreach ($descriptions as $index => $descriptionGroup): ?>
        <div class="flex flex-col gap-4 col-span-4 lg:col-span-2">

            <div class="text-primary-90 md:text-h2 text-h6">
                <?php echo $descriptionGroup['desc_title'] ?>
            </div>

            <div class="text-primary-80 md:text-body_s text-[14px] leading-9">
                <?php echo $descriptionGroup['desc_text'] ?>
            </div>

        </div>
    <?php endforeach; ?>
</div>