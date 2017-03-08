<?php theme_include('header'); ?>

		

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1><?php echo page_custom_field('presentation_title'); ?></h1>
											<p><?php echo page_custom_field('presentation_subtitle'); ?></p>
										</header>
										<p><?php echo page_custom_field('presentation_description'); ?></p>
										<ul class="actions">
										<!-- page-contact.php for presentation details- custom it if you want -->
											<li><a href="contact" class="button big">Learn More</a></li>
										</ul>
									</div>
									<span class="image object">
										<img src="<?php echo page_custom_field('presentation_image'); ?>" alt="" />
									</span>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>My Characterization<?php echo page_custom_field('char_title'); ?></h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-code<?php echo page_custom_field('fa_char1'); ?>"></span>
											<div class="content">
												<h3>Best tutorial<?php echo page_custom_field('char_title1'); ?></h3>
												<p><?php echo page_custom_field('char_desc1'); ?>We have best tutorial for best projects.  Grow your mind following our tutorial. Learn and share.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-commenting<?php echo page_custom_field('fa_char2'); ?>"></span>
											<div class="content">
												<h3>Leave a comment<?php echo page_custom_field('char_title2'); ?></h3>
												<p><?php echo page_custom_field('char_desc2'); ?>Leave a comment for help us  or says only that love this blog.  </p>
											</div>
										</article>
										
										<article>
											<span class="icon fa-share-alt-square<?php echo page_custom_field('fa_char4'); ?>"></span>
											<div class="content">
												<h3>SHARE<?php echo page_custom_field('char_title4'); ?></h3>
												<p><?php echo page_custom_field('char_desc4'); ?>Share always !</p>
											</div>
										</article>
										<article>
											<span class="icon fa-terminal<?php echo page_custom_field('fa_char3'); ?>"></span>
											<div class="content">
												<h3>Contact US<?php echo page_custom_field('char_title3'); ?></h3>
												<p><?php echo page_custom_field('char_desc3'); ?>Contact us for adding theme and posts. We are here for your ideas!</p>
											</div>
										</article>
									</div>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>CATEGORY</h2>
									</header>
								
									<div class="posts">
										<?php while(categories()): 
								if (category_count() > 0) { ?>
							<article>
											<a href="<?php echo category_url(); ?>" class="image">
											<img src="<?php echo category_custom_field('cat1_img'); ?>" alt="" /></a>
											<h3><?php echo category_title(); ?></h3>
											<p><?php echo category_description(); ?></p>
											<ul class="actions">
												<li><a href="<?php echo category_url(); ?>" class="button">More</a></li>
											</ul>
										</article>
							
						<?php } endwhile; ?>
										
										
									</div>
								</section>

						</div>
					</div>
<?php theme_include('footer'); ?>