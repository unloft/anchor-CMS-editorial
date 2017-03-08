<?php theme_include('header'); ?>

<!-- Content -->
<section>
<header class="main">
   <h1>Some Title -
      <?php echo page_title(); ?>
   </h1>
   <h2>
      <?php echo page_custom_field('this_page_sub'); ?>
   </h2>
</header>
<div id="slice1">
   <?php echo page_content(); ?>
</div>
<!-- Remember : page_content is the pages's content in admin edit page.
   In this case if you add -cut- in the contect section of this page the text will be sliced in 2 parts. 
   First part here <p id ="slice1"></p> (on the custom image).
   Second part after custom image in <p class="slice2"></p>
   REMEMBER 2:
   You can use the elements page for CHOOSE your page style and setup.
   -->
<span class="image main">
<img src="<?php echo page_custom_field('page_img1'); ?>" alt="" /></span>
<div id="slice2"></div>
						
									
<!-- THIS SCRIPT SLICE IN 2 PARTS THE PAGE CONTENT.
 For this feature insert in this page content -cut- for choose where cut-->
<script>
    var str = document.getElementById("slice1").innerHTML;
    var n = str.indexOf("-cut-");
    var str1 = str.substring(0, n);
    document.getElementById("slice1").innerHTML = str1;
    var len = str.lenght;
    var str2 = str.substring(n + 5, len);
    document.getElementById("slice2").innerHTML = str2;
</script>

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