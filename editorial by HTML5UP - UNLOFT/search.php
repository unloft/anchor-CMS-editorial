<?php theme_include('header'); ?>

<section>
	<h1 class="wrap">You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>

<?php if(has_search_results()): ?>
	<ul class="items">
		<?php $i = 0; while(search_results()): $i++; ?>
		
		<a href="<?php echo search_item_url(); ?>">
	   <div class="box">
		<p style="margin-bottom:0px;">
			<span class="image left">
				<img src="<?php echo search_item_custom_field('change_this_with_your_custom_img_field',search_item_id()); ?>" alt="">
			</span>
		<h2><?php echo search_item_title(); ?></h2>
		<?php echo search_item_description(); ?>
		</p>
	   </div>
	   </a>
		<?php endwhile; ?>
	</ul>

	<?php if(has_search_pagination()): ?>
	<nav class="pagination">
		<div class="wrap">
			<?php echo search_prev(); ?>
			<?php echo search_next(); ?>
		</div>
	</nav>
	<?php endif; ?>

<?php else: ?>
	<p class="wrap">Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
<?php endif; ?>
</section>
	</div>
</div>
<?php theme_include('footer'); ?>