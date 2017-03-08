<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search"  class="alt">
									<form method="post" action="<?php echo search_url(); ?>">
										<input type="search" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
						<input type="hidden" id="whatSearch" name="whatSearch" value="all" />
									</form>
								</section>

							<!-- Menu --> 
							<!--Here will appear your  pages with  "Show in Menu" option checked.
							For order this menu please go to sql database  -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
								<li style="text-align: center;font-weight: bold;">PAGES</li>

									<?php if(has_menu_items()):
							while(menu_items()): ?>
<li <?php echo (menu_active() ? 'class="active"' : ''); ?>><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a>
						</li>
						<?php endwhile;
							endif; ?>
							<li style="text-align: center;font-weight: bold;" >CATEGORY</li>
							<?php while(categories()): 
								if (category_count() > 0) { ?>
								<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
									<a href="<?php echo category_url(); ?>" title="<?php echo menu_title(); ?>">
										<?php echo category_title(); ?>
							</a>
						</li>										
							
						<?php } endwhile; ?>
										</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>**CUSTOM THIS TITLE footer.php line #44**</h2>
									</header>
									<div class="mini-posts">
									<?php while(rwar_latest_posts()): ?>
									
                        <article>
							<a href="<?php echo article_url(); ?>" class="image">
				<!-- for better performance please use for your posts custom field same width and height size-->
							<img src="<?php echo article_custom_field('change_this_with_your_custom_img_field'); ?>" alt="" />
								<h3 style="margin-top:5px;"><?php echo article_title(); ?></h3>
								<p style="margin-bottom:0px;">
								<!---->
									<?php echo cut_text(130,article_description()); ?>
								</p>
							</a>
										</article>
						
				      
            <?php endwhile; ?>
			
									
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Some description....for your get in touch.</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="mailto:information@some.tld">information@some.tld</a></li>
										<li class="fa-phone">(000) 000-0000</li>
										<li class="fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer"><!-- remember to leave this text for copyright!!-->
									<p class="copyright">&copy; Untitled. All rights reserved.
									Design: <a href="https://html5up.net">HTML5 UP</a>.
									Theme for Anchor CMS: <a href="https://github.com/unloft">UNLOFT</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="<?php echo theme_url('assets/js/jquery.min.js'); ?>"></script>
			<script src="<?php echo theme_url('assets/js/skel.min.js'); ?>"></script>
			<script src="<?php echo theme_url('assets/js/util.js'); ?>"></script>
			<!--[if lte IE 8]><script src="<?php echo theme_url('assets/js/ie/respond.min.js'); ?>"></script><![endif]-->
			<script src="<?php echo theme_url('assets/js/main.js'); ?>"></script>

	</body>
</html>