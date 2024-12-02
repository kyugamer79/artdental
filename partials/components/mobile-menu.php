<div class="fixed bg-background-card_1 inset-0 py-12 px-5 space-y-4 transition-all duration-500 overflow-y-auto h-screen z-50 | [clip-path:polygon(100%_0%_,100%_0_,100%_100%,_100%_100%)]" id="mobileMenu">

	<div class="flex justify-between items-center">
		<svg class="icon size-8" id="mobileMenuCloser">
			<use href="#icon-Arrow,-Forward"></use>
		</svg>

		<div class="logo size-10">
			<?php the_custom_logo() ?>
		</div>
	</div>

	<div class="divide-y-2 divide-primary-90 ">
		<?php
		$menu = cyn_get_menu_items_by_slug('mobile_header');
		foreach ($menu as $menu_item) : ?>

			<div class="<?php echo $menu_item->child_items ? 'has-child' : '' ?>">

				<div class="flex justify-between items-center py-3 text-primary-40">
					<a href="<?php echo $menu_item->url ?>">
						<?php echo $menu_item->post_title; ?>
					</a>

					<?php if ($menu_item->child_items) : ?>
						<svg class="icon size-4 transition-all">
							<use href="#icon-chevron-down"></use>
						</svg>
					<?php endif; ?>
				</div>


				<?php if ($menu_item->child_items) : ?>
					<div class="bg-primary-90 grid grid-rows-[0fr] transition-all | accordion">
						<div class="overflow-hidden flex flex-col">
							<?php foreach ($menu_item->child_items as $child) : ?>
								<a href="<?php echo $child->url ?>" class="py-3 px-2 inline-block">
									<?php echo $child->post_title ?>
								</a>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>

		<?php endforeach; ?>
	</div>

	<div class="space-y-3">
		<div class="space-y-3">
			<div class="text-body">
				<?php _e('شماره تماس ها', 'cyn-dm') ?>
			</div>

			<div>
				<?php for ($i = 1; $i <= 5; $i++) :
					$number = get_option("cyn_phone_number_$i");

					if (!$number)
						continue;
				?>

					<a href="tel:<?php echo $number ?>" class="[direction:ltr]">
						<?php echo $number ?>
					</a>
				<?php endfor; ?>

			</div>
		</div>

		<div class="space-y-3">
			<div class="text-body">
				<?php _e('شبکه های اجتماعی', 'cyn-dm') ?>
			</div>

			<div class="flex gap-2">
				<?php for ($i = 1; $i <= 10; $i++) :

					$social_group = [
						'img' => get_option("cyn_social_media_img_$i"),
						'url' => get_option("cyn_social_media_url_$i")
					];

					if (count(array_filter($social_group)) == 0)
						continue;
				?>

					<a href="<?php echo $social_group['url'] ?>">
						<img src="<?php echo $social_group['img'] ?>" alt="">
					</a>

				<?php endfor; ?>
			</div>
		</div>
	</div>

</div>