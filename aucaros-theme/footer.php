         <section id="content-section-11">
            <div class="gdlr-color-wrapper  gdlr-show-all no-skin" id="copyright-link-con" style="background-color: #0f0f0f; ">
               <div class="container">
                  <div class="gdlr-item gdlr-content-item">
                     <p>
                        <?php
                           $args = array(
                              'theme_location'  => 'footer-menu',
                              'menu'            => 'footer-menu',
                              'container' => false,
                              'echo' => false,
                              'items_wrap' => '%3$s',
                              'depth' => 0,
                           );
                           echo strip_tags(wp_nav_menu($args), '<a>');
                        ?>
                     </p>
                  </div>
                  <script>
                     jQuery(document).ready(() => {
                        let items = jQuery('.gdlr-item.gdlr-content-item p a');
                        items.css({'margin-right': '12px', 'margin-left': '12px'});
                        items =  jQuery('.gdlr-item.gdlr-content-item p a:not(:last-child)');
                        jQuery(items).after('|');
                     })
                  </script>
                  <div class="clear"></div>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="clear"></div>
         </section>
      </div>
      <!-- Below Sidebar Section-->
   </div>
   <!-- gdlr-content -->
   <div class="clear"></div>
</div>
<footer class="footer-wrapper">
            <div class="copyright-wrapper">
               <div class="copyright-container container">
                  <div class="copyright-left">
                     <div class="top-social-wrapper" style="padding: 0">
                        <div class="social-icon"><a href="<?php esc_attr_e( pll__('social facebook') ); ?>" target="_blank">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="Facebook" width="32" height="32">
                           </a>
                        </div>
                        <div class="social-icon"><a href="<?php esc_attr_e( pll__('social instagram') ); ?>" target="_blank">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png" width="32" height="32">
                           </a>
                        </div>
                        <div class="social-icon">
                           <a style="font-size: 18px; color: #fff;" target="_blank" href="<?php esc_attr_e( pll__('social youtube') ); ?>">
                           <i style="position: relative; top: -4px" class="fa fa-youtube" aria-hidden="true"></i>
                           </a>
                        </div>
                        <div class="clear"></div>
                     </div>
                  </div>
                  <div class="copyright-right">
                     <?php pll_e('Copyright'); ?>
                  </div>
                  <div class="clear"></div>
               </div>
            </div>
         </footer>
      </div>
      <script type="text/javascript">
         /* <![CDATA[ */
         var lazyload_video_settings = {"youtube":{"theme":"dark","colour":"red","showinfo":true,"relations":true,"buttonstyle":"","controls":true,"loadpolicy":true,"responsive":false,"thumbnailquality":"0","preroll":"","postroll":"","displaybranding":false,"callback":"<!--YOUTUBE_CALLBACK-->"},"vimeo":{"buttonstyle":"","playercolour":"","responsive":false,"preroll":"","postroll":"","show_title":false,"displaybranding":false,"callback":"<!--VIMEO_CALLBACK-->"}};
         /* ]]> */
      </script>
      <?php wp_footer(); ?>
      <!-- body-wrapper -->
   </body>
</html>