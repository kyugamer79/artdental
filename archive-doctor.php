<!-- Archive Doctor Page -->
<?php get_header() ?>

<?php cyn_get_component( 'breadcrumb' ) ?>

<main class="container grid gap-[48px]">

	<!-- Title -->
	<div class="text-h1 max-lg:text-h4 pb-6">
		<?php _e( 'متخصص های مجموعه', 'cyn-dm' ) ?>
	</div>

	<div class="grid gap-4 grid-cols-1 md:grid-cols-3">

		<?php
		if ( have_posts() ) :
			$i = 0;
			while ( have_posts() ) :
				$i++;
				the_post();
				cyn_get_card( 'doctor', [ 'index' => $i, 'post-id' => get_the_ID(),] );
			endwhile;
		endif;
		?>
	</div>


</main>

<div class="py-6"></div>



<?php get_footer() ?>