<a href="<?php echo get_permalink() ?>" class="py-2 px-4 flex gap-2">

	<div>
		<div class="text-primary-20 text-body  md:text-2xl ">
			<?php the_title() ?>
		</div>

		<div class="text-primary-40 text-body-s">
			<span>
				<?php echo get_post_type_object(get_post_type())->labels->singular_name ?>
			</span>

			<span>
				<?php echo get_field('english_name') ?>
			</span>
		</div>
	</div>
</a>