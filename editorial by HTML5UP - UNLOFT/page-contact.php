<?php theme_include('header'); ?>


   

		

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Some contact Title<?php echo page_custom_field('contact_title'); ?></h1>
									</header>

									<span class="image main">
									<img src="<?php echo page_custom_field('contact_img'); ?>" alt="" /></span>

									<p><?php echo page_content(); ?></p>
									<!-- remember : page_content is the pages's content in admin edit page-->

									<hr class="major" />

									<!-- here you can add your contact code . ENJOY ! 
										here a nice tutorial:
										https://forums.anchorcms.com/d/799-making-a-contact-form
										
										if you use this you must change the code for
													/**
													* Contact page
													*/ 
													in anchor/routes/site.php  
										
										-->
									
									
									
									<!-- OTHER TEXT IF YOU WANT IT REMOVE THE COMMENT TAG 
									<h2><?php echo page_custom_field('contact_title2'); ?></h2>
									<p><?php echo page_custom_field('contact_text2'); ?></p>

									<hr class="major" />

									<h2><?php echo page_custom_field('contact_title3'); ?></h2>
									<p><?php echo page_custom_field('contact_text3'); ?></p>
									
									<h2><?php echo page_custom_field('contact_title4'); ?></h2>
									<p><?php echo page_custom_field('contact_text4'); ?></p>
									
									-->
								</section>

						</div>
					</div>

				

<?php theme_include('footer'); ?>