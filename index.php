<?php get_header(); ?>

	<main role="main">
		<div class="container">

					<div class="row">
						<div class="heading-stitch-divider col-xs-12" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/blank_header_line.png);">
							<div class="stitch-heading">
								<img src="<?php echo get_template_directory_uri(); ?>/img/articles.png" alt="ARTICLES" />
							</div>
						</div>
					</div>


					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- ARTICLES CONTAINER 				 			-->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

					<!-- section -->
					<section class="articles-container">

						<?php get_template_part('homepage-loop'); ?>

						<a href="#">More Articles</a>

					</section>
					<!-- /section -->



					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- SUB ARTICLES CONTAINER 				 -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

					<section id="sub-articles">
	          <div class="sub-articles-background">
	            <div class="sub-articles-container container">

	              <div class="row">
	                <div class="heading-stitch-divider col-xs-12" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/blank_header_line.png);"></div>
	              </div>



	              <div class="row">

	                <div class="col-xs-12 col-md-6">
										<a href="http://localhost:8888/Floral-Manifesto-wp/boss-ladies/">
		                  <div id="boss-ladies" class="sub-article" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/boss_ladies_image.jpg');">
		                    <div class="sub-article-header">
		                      <img src="<?php echo get_template_directory_uri(); ?>/img/boss_ladies.png" alt="Boss Ladies" />
		                    </div>
		                  </div>
										</a>
	                </div>

	                <!-- READING LIST -->
	                <div class="col-xs-12 col-md-6">
	                  <a href="http://localhost:8888/Floral-Manifesto-wp/reading-list-2/">
	                    <div id="reading-list" class="sub-article" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/reading_list_image.jpg');">
	                      <div class="sub-article-header">
	                        <img src="<?php echo get_template_directory_uri(); ?>/img/reading_list.png" alt="Reading List" />
	                      </div>
	                    </div>
	                  </a>
	                </div>

	              </div>

	            </div>
	          </div>
	        </section>





					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- 						VIDEO				 				 -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

					<section id="video">
	          <div class="video-background">
	            <div class="video-container container">

	              <div class="row">
	                <div class="heading-stitch-divider col-xs-12" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/blank_header_line.png);">
	                  <div class="stitch-heading">
	                    <img src="<?php echo get_template_directory_uri(); ?>/img/videos.png" alt="Videos" />
	                  </div>
	                </div>
	              </div>


	              <div class="row">

	                  <div class="video-container col-xs-8 col-lg-7 col-lg-offset-1">
	                    <!-- YOUTUBE EMBEDED CODE -->
	                    <iframe width="640" height="360" src="https://www.youtube.com/embed/WAu-vTt7kw4?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	                  </div>

	                  <div class="video-info-container col-xs-4 col-lg-3">

	                    <div class="centering-div">

	                      <div class="small-stitch">
	                        <img src="<?php echo get_template_directory_uri(); ?>/img/cross_stitch_line.png" alt="" />
	                      </div>

	                      <div class="padder">
	                        <a href="http://raconteurs.ca/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/raconteurs-logo.png" alt="" /></a>
	                      </div>

	                      <div class="padder">
	                        <img src="<?php echo get_template_directory_uri(); ?>/img/bodies.png" alt="BODIES" />
	                      </div>

	                      <p>
	                        See more videos<br>at <a href="http://raconteurs.ca/" target="_blank">Raconteurs Storytelling</a>
	                      </p>

	                      <div class="small-stitch">
	                        <img src="<?php echo get_template_directory_uri(); ?>/img/cross_stitch_line.png" alt="" />
	                      </div>
	                    </div>

	                  </div>

	              </div>

	            </div>
	          </div>
	        </section>





					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- 						INSTAGRAM				 		 -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

					<section id="instagram">
						<div class="instagram-background">
							<div class="instagram-container container">

								<div class="row">
									<div class="heading-stitch-divider col-xs-12" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/blank_header_line.png);">
										<div class="stitch-heading">
											<img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="Instagram" />
										</div>
									</div>
								</div>

								<div class="row">
									<div class="instagram-module col-xs-12">
										<!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/5e3d9a9bbc5f571ab068aa0727e62fc2.html" id="lightwidget_5e3d9a9bbc" name="lightwidget_5e3d9a9bbc" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
									</div>
								</div>

							</div>

						</div>
					</section>


		</div>
	</main>

<?php get_footer(); ?>
