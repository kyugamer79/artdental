<div class="flex gap-3 w-full max-lg:flex-col container">

	<div class="p-4 bg-background-card_1 rounded-2xl text-primary-30 space-y-4 block lg:hidden fade-in">
		<div class="space-y-2">
			<div class="text-[72px] max-xl:text-[52px] max-md:text-h3 font-extrabold">
				<?php echo get_field( 'hero_title' ) ?>
			</div>

			<div
				 class="text-[58px] max-2xl:text-h2 max-2xl:font-semibold max-xl:text-h3 max-md:text-h4 max-md:font-normal max-sm:text-h5">
				<?php echo get_field( 'hero_subtitle' ) ?>
			</div>
		</div>

		<div class="text-h3 max-xl:text-body max-md:text-body_s">
			<?php echo get_field( 'hero_desc' ) ?>
		</div>
	</div>

	<div class="w-full flex-1 h-full aspect-square bg-no-repeat bg-cover rounded-3xl overflow-hidden flex gap-3 p-4 items-end fade-in-down"
		 anim-delay="0.7"
		 style="background-image: url('<?php echo wp_get_attachment_image_url( get_field( 'hero_banner' ), 'full' ) ?>')">

		<a href="<?php echo get_field( 'hero_card_url_1' ) ?>"
		   anim-delay="1.1"
		   class="bg-background-card_1 p-4 max-md:p-3 rounded-xl flex-1 fade-in-down">
			<div class="text-h4 max-xl:text-h5 max-md:text-body_s">
				<?php echo get_field( 'hero_card_title_1' ) ?>
			</div>
			<div class="flex justify-end">
				<cyn-icon-button type="secondary"
								 class="rotate-90"
								 icon="#icon-chevron-down">
				</cyn-icon-button>
			</div>
		</a>


		<a href="<?php echo get_field( 'hero_card_url_2' ) ?>"
		   anim-delay="1.2"
		   class="bg-background-card_2/20 p-4 max-md:p-3 rounded-xl flex-1 fade-in-down">
			<div class="text-h4 max-xl:text-h5 max-md:text-body_s">
				<?php echo get_field( 'hero_card_title_2' ) ?>
			</div>
			<div class="flex justify-end">
				<cyn-icon-button type="secondary"
								 class="rotate-90"
								 icon="#icon-chevron-down">
				</cyn-icon-button>
			</div>
		</a>
	</div>


	<div class="flex-1 space-y-3">

		<div anim-delay="0.5"
			 class="p-4 bg-background-card_1 rounded-2xl text-primary-30 space-y-4 hidden lg:block fade-in-down">
			<div class="space-y-2">
				<div class="text-[72px] max-xl:text-[52px] font-extrabold">
					<?php echo get_field( 'hero_title' ) ?>
				</div>

				<div class="text-[58px] max-2xl:text-h2 max-2xl:font-semibold max-xl:text-h3">
					<?php echo get_field( 'hero_subtitle' ) ?>
				</div>
			</div>

			<div class="text-h3 max-xl:text-body">
				<?php echo get_field( 'hero_desc' ) ?>
			</div>
		</div>

		<div class="flex gap-3">
			<div anim-delay="0.3"
				 class="rounded-2xl flex-1 fade-in-down">
				<?php echo wp_get_attachment_image( get_field( 'hero_tiny_banner_1' ), 'medium', false, [ 'class' => 'w-full' ] ) ?>
			</div>

			<div anim-delay="0.1"
				 class="rounded-2xl flex-1 fade-in-down">
				<?php echo wp_get_attachment_image( get_field( 'hero_tiny_banner_2' ), 'medium', false, [ 'class' => 'w-full' ] ) ?>
			</div>
		</div>

		<div class="fade-in-down"
			 anim-delay="0.8">
			<cyn-cta />
		</div>


	</div>
</div>