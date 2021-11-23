<?php get_header(); ?>
<div class="gdlr-page-title-wrapper" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/404.jpg'; ?>'); height: 60vh; background-size: cover;">
    <div class="gdlr-page-title-overlay"></div>
    <div class="gdlr-page-title-container container">
        <h1 class="gdlr-page-title">404</h1>
        <span class="gdlr-page-caption gdlr-title-font">Page not found</span>
    </div>	
</div>
<!-- <div class="content-wrapper">
   <div class="page-not-found-container container">
      <div class="gdlr-item page-not-found-item">
         <div class="page-not-found-block">
            <div class="page-not-found-icon">
               <i class="fa fa-frown-o"></i>
            </div>
            <div class="page-not-found-title">
               Error 404				
            </div>
            <div class="page-not-found-caption">
               Sorry, we couldn't find the page you're looking for.				
            </div>
            <div class="page-not-found-search">
               <div class="gdl-search-form">
                  <?php 
                //   get_search_form();
                  ?>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="clear"></div>
</div> -->
<?php get_footer( '404' );?>