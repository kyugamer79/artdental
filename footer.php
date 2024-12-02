<?php $render_template = $args['render_template'] ?? true ?>

<?php if ($render_template) : ?>
	<footer class="w-full mt-8">
		<!-- pc scroll to top  -->
		<section class="container w-full fixed bottom-4 max-md:bottom-17 z-40 ">
			<!-- svg  arrow up -->
			<div class="bg-primary-100 rounded-full w-12 h-12 mx-3 flex justify-center items-center -rotate-90">
				<div class="rounded-full transition-all duration-300 cursor-pointer scrollTop"
					id="scrolltop-pc">
					<svg class="icon size-6">
						<use href="#icon-Right,-Arrow" />
					</svg>
				</div>
			</div>
		</section>
		<!-- app bar art dental  -->
		<section class="text-caption w-full flex flex-col fixed bottom-4 z-30 md:hidden gap-3">

			<!-- app bar  -->
			<div
				class=" w-[calc(100%_-_1rem)] mx-auto rounded-3xl flex justify-between gap-8 items-center bg-primary-100 px-14 py-3 shadow-2xl">
				<!-- service button  -->
				<a href="<?php echo get_post_type_archive_link('service') ?>"
					class=" cursor-pointer flex flex-col gap-1 items-center justify-center ">
					<div class="bg-accent-40 rounded-full size-10 flex justify-center items-center text-primary-100">

						<svg class=" icon size-6 ">
							<use href=" #icon-teeth" />
						</svg>

					</div>
					<p class="text-accent-40">
						خدمات
					</p>
				</a>
				<!-- reserve button  -->
				<a href="#" class="reservePopUpOpener cursor-pointer flex flex-col gap-1 items-center justify-center">

					<div class="bg-accent-40 rounded-full size-10 flex justify-center items-center text-primary-100">
						<svg class="icon size-6 ">
							<use href="#icon-medical-cross-cursor-click-square" />
						</svg>
					</div>

					<p class="text-accent-40">
						رزرو نوبت
					</p>
				</a>
				<!-- call button  -->
				<a href="tel:<?php echo get_option('cyn_phone_number_1') ?>"
					class="cursor-pointer flex flex-col gap-1 items-center justify-center">

					<div
						class="bg-accent-40 relative after:absolute after:rounded-full isolate after:-z-10 after:animate-ping after:bg-accent-40 after:content-[''] after:inset-0 rounded-full size-10 flex justify-center items-center text-primary-100">
						<svg class="icon size-6 ">
							<use href="#icon-Phone,-Call-11" />
						</svg>
					</div>
					<p class="text-accent-40">
						تماس
					</p>
				</a>
			</div>
		</section>
		<div class="py-9 bg-primary-90 bg-noise">
			<div class="container">
				<nav
					class="flex justify-between items-start max-lg:flex-col max-lg:gap-3 max-lg:divide-y max-lg:divide-primary-80">
					<?php
					$menu = cyn_get_menu_items_by_slug('footer');
					foreach ($menu as $menu_item) : ?>
						<div
							class="text-primary-50 flex flex-1 flex-wrap gap-1 items-center relative group  max-lg:justify-between max-lg:w-full max-lg:pt-4 ">
							<a href="<?php echo $menu_item->url ?>">
								<?php echo $menu_item->post_title; ?>
							</a>
							<?php if ($menu_item->child_items) : ?>
								<svg class="icon size-4 transition-transform group-hover:rotate-180">
									<use href="#icon-chevron-down"></use>
								</svg>
								<div class="w-full transition-all duration-300 grid grid-rows-[0fr] group-hover:grid-rows-[1fr]">
									<div class="overflow-hidden">
										<?php foreach ($menu_item->child_items as $index => $child) : ?>
											<div class="py-2 text-primary-20">
												<a href="<?php echo $child->url ?>">
													<?php echo $child->post_title ?>
												</a>
											</div>
										<?php endforeach; ?>
									</div>
								</div>
							<?php endif; ?>
						</div>

					<?php endforeach; ?>
				</nav>
			</div>
		</div>

		<div class="py-9 bg-noise text-primary-100 pb-17">
			<div class="container flex justify-between items-center  max-md:items-start max-lg:flex-col">
				<div class="flex gap-11 max-md:flex-col ">
					<div class="max-w-[320px] max-lg:max-w-[250px] space-y-3">
						<div class="space-y-3">
							<span class="text-h6 max-md:text-body">
								<?php _e('آدرس مرکز', 'cyn-dm') ?>
							</span>
							<p class="text-primary-80 text-body_s">
								<?php echo get_option('cyn_address') ?>
							</p>
						</div>

						<div class="space-y-3">
							<span class="text-h6 max-md:text-body">
								<?php _e('مشاهده آدرس روی نقشه', 'cyn-dm') ?>
							</span>
							<div class="flex gap-2">
								<?php for ($i = 1; $i <= 10; $i++) : ?>
									<a href="<?php echo get_option("cyn_address_url_$i") ?>">
										<img src="<?php echo get_option("cyn_address_img_$i") ?>"
											alt="" />
									</a>
								<?php endfor; ?>
							</div>
						</div>
					</div>
					<div class="space-y-3">
						<div class="space-y-3">
							<span class="text-h6 max-md:text-body">
								<?php _e('شماره تماس ها', 'cyn-dm') ?>
							</span>
							<div class="space-y-3">
								<?php for ($i = 1; $i <= 10; $i++) : ?>
									<a class="block text-primary-80 text-body_s"
										href="<?php echo 'tel:' . get_option("cyn_phone_number_$i") ?>">
										<?php echo get_option("cyn_phone_number_$i") ?>
									</a>
								<?php endfor; ?>
							</div>
						</div>
						<div class="space-y-3">
							<span class="text-h6 max-md:text-body">
								<?php _e('شبکه های اجتماعی', 'cyn-dm') ?>
							</span>
							<div class="flex gap-2">
								<?php for ($i = 1; $i <= 10; $i++) : ?>
									<a href="<?php echo get_option("cyn_social_media_url_$i") ?>">
										<img src="<?php echo get_option("cyn_social_media_img_$i") ?>"
											alt="" />
									</a>
								<?php endfor; ?>
							</div>
						</div>
					</div>
					<div class="space-y-3">
						<span class="text-h6 max-md:text-body">
							<?php _e('ساعات کاری', 'cyn-dm') ?>
						</span>
						<div class="space-y-3 ">
							<?php for ($i = 1; $i <= 10; $i++) : ?>
								<div class="text-primary-80 text-body_s">
									<?php echo get_option("cyn_work_hours_$i") ?>
								</div>
							<?php endfor; ?>
						</div>
					</div>
				</div>
				<div class="max-md:w-full max-md:mt-4">
					<img class="max-md:mx-auto"
						src="
							  <?php echo get_option('cyn_custom_logo'); ?>"
						alt="art_dental_logo">
				</div>
			</div>
		</div>
		<div class="flex justify-center items-center bg-noise md:p-5 max-md:pb-17 text-primary-80">
			<p class="text-body_s">
				<span class="text-caption">
					<?php _e('Designed by', 'cyn-dm') ?>
				</span>
				<?php _e('CyanDM ', 'cyn-dm') ?>
			</p>
		</div>
	</footer>
<?php endif; ?>
<?php cyn_get_popup('backdrop'); ?>

<div class="wp-scripts">
	<?php wp_footer() ?>
</div>

</body>

</html>