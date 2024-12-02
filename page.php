<?php get_header() ?>

<main class="container max-w-6xl">

	<div class="">
		<?php the_post_thumbnail( 'full', [ 'class' => 'w-full rounded-lg' ] ) ?>
	</div>

	<h1 class="text-h1 my-5">
		<?php the_title() ?>
	</h1>

	<section class="prose">
		<?php the_content() ?>
	</section>

</main>

<?php get_footer() ?>