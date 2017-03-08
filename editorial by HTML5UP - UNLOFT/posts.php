<?php theme_include('header'); ?>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>ALL POSTS</h1>
									</header>
 <!-- +++++ Posts Lists +++++ -->	
<?php if(has_posts()): ?>    
<!-- We have posts, it's safe to loop. -->
    <?php $i = 0; while(posts()): $i++; ?>
	<div id="bg<?php echo $i % 2; ?>"> 
	   
	   <a href="<?php echo article_url(); ?>">
	   <div class="box">
		<p style="margin-bottom:0px;">
			<span class="image left">
				<img src="<?php echo article_custom_field('change_this_with_your_custom_img_field'); ?>" alt="">
			</span>
		<h2><?php echo article_title(); ?></h2>
		<?php echo article_description(); ?>
		</p>
	   </div>
	   </a>
                    
           
     </div><!-- /#bg -->
    <?php endwhile; ?>

<?php if(has_pagination()): ?>           
    <div id="grey">
        <div class="col-lg-8 col-lg-offset-2">
        <?php echo posts_prev('# Back'); ?>
        <?php echo posts_next('# Next'); ?>
        </div>
    </div><!-- /#grey -->
<?php endif; ?>
                
<?php else: ?>
    <div id="white">
        <div class="col-lg-8 col-lg-offset-2">
            <p>Looks like you have some writing to do!</p>
        </div>
    </div><!-- /#white -->
<?php endif; ?>     
<!-- +++++ Posts Lists +++++ -->

								</section>

						</div>
					</div>
<?php theme_include('footer'); ?>