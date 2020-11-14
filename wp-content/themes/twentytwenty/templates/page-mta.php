<?php

/*Template Name: Page MTA */

get_header(); 
?>

<section>
	<div class="section-inner">		
		<?php if( count(pll_languages_list()) > 1 ): ?>			
			<?php pll_the_languages(
				array(
					'dropdown' => 1,					
				)
			);  ?>
		<?php endif; ?>
	</div>
	<div class="section-inner mta__page">
		<aside class="mta__sidebar">
			<?php if (is_active_sidebar('left-sidebar')) : ?>
				<?php dynamic_sidebar('left-sidebar'); ?>
			<?php endif; ?>	
		</aside>
		<div class="mta__main">
			<?php the_content(); ?>
			<?php echo do_shortcode('[contact-form-7 id="8" title="Formularz 1"]'); ?>
		</div>
		<aside class="mta__sidebar">
			<?php if (is_active_sidebar('right-sidebar')) : ?>
				<?php dynamic_sidebar('right-sidebar'); ?>
			<?php endif; ?>	
		</aside>
	</div>
</section>

<?php
get_footer();