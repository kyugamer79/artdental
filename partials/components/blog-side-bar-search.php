<!-- Search -->
<div class="bg-primary-100 p-5 rounded-3xl">

	<!-- Title  -->
	<div class="text-h6 pb-4 font-medium">
		<?php _e( 'جستجو', 'cyn-dm' ) ?>
	</div>


	<!-- Input Search -->
	<form action="/">

		<div class="flex items-center gap-1 py-2 px-3 border border-l-primary-50 rounded-full">
			<button type="submit">
				<svg class="icon size-4">
					<use href="#icon-search-loupe" />
				</svg>
			</button>

			<div>
				<input class="focus-visible:outline-0 border-0"
					   type="search"
					   value="<?php the_search_query() ?>"
					   id="search"
					   name="s"
					   placeholder="جستجو در مقالات">
			</div>
		</div>
	</form>

</div>