<?php
/*
	Template Name: about
*/
?>
<?php get_header(); ?>
<div class="content-wrapper">
	<div class="gdlr-content">
		<!-- Above Sidebar Section-->
		<div class="above-sidebar-wrapper">
			<section id="content-section-1">
				<div class="section-container container">
					<div class="twelve columns">
						<div class="gdlr-item gdlr-content-item" id="philo" style="margin-bottom: 60px;"></div>
					</div>
					<div class="clear"></div>
				</div>
			</section>
		</div>
		<!-- Sidebar With Content Section-->
		<div class="with-sidebar-wrapper">
			<div class="with-sidebar-container container">
				<div class="with-sidebar-left twelve columns">
					<div class="with-sidebar-content eight columns">
						<?php the_content(); ?>
						<section id="content-section-2">
							<div class="section-container container">
								<div class="twelve columns">
									<!-- -------------- -->
									<?php
										if(pll_current_language() == 'ru'){
											$wp_query = new WP_Query('category_name=About_ru');
										}else{
											$wp_query = new WP_Query('category_name=About');
										}
										if($wp_query -> have_posts()):
											while($wp_query -> have_posts()): $wp_query -> the_post();
												?>
													<div class="gdlr-item-title-wrapper gdlr-item pos-left" id="<?php the_title(); ?>">
														<div class="gdlr-item-title-head">
															<h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border"><?php the_title(); ?></h3>
															<div class="clear"></div>
														</div>
														<div class="gdlr-item-title-divider"></div>
													</div>
													<div class="gdlr-item gdlr-content-item"style="margin-bottom: 40px;">
														<?php the_content(); ?>
													</div>
													<div class="gdlr-image-frame-item gdlr-item" style="margin-bottom: 40px;">
														<div class="gdlr-frame frame-type-none">
															<div class="gdlr-image-link-shortcode"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gold-bar.png" alt="" width="1206" height="30"></div>
														</div>
													</div>
												<?php
											endwhile;
										endif;
									?>
									<!-- ----------------- -->
								</div>
								<div class="clear"></div>
							</div>
						</section>
					</div>
					<div class="gdlr-sidebar gdlr-left-sidebar four columns">
						<div class="gdlr-item-start-content sidebar-left-item">
							<div id="text-9" class="widget widget_text gdlr-item gdlr-widget">
								<h3 class="gdlr-widget-title">Quick Navigation</h3>
								<div class="clear"></div>
								<div class="textwidget">
									<?php
										if($wp_query -> have_posts()):
											while($wp_query -> have_posts()): $wp_query -> the_post();
												?>
													<a href="#<?php the_title(); ?>"><?php the_title(); ?></a><br>
												<?php
											endwhile;
										endif;
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
<?php get_footer(); ?>