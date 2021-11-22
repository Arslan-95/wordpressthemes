<?php
/*
    Template Name: Faq
*/
?>
<?php get_header(); ?>
<div class="content-wrapper">
    <div class="gdlr-content">
        <!-- Above Sidebar Section-->
        <!-- Sidebar With Content Section-->
        <div class="with-sidebar-wrapper">
            <section id="content-section-1">
                <div class="section-container container">
                    <div class="gdlr-item gdlr-content-item" style="margin-bottom: 80px;"></div>
                    <div class="clear"></div>
                    <div class="nine columns">
                        <div class="gdlr-title-item" style="margin-bottom: 50px;">
                            <div class="gdlr-item-title-wrapper gdlr-item pos-left ">
                                <div class="gdlr-item-title-head">
                                    <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border"><?php pll_e('FAQs Title'); ?></h3>
                                    <div class="clear"></div>
                                </div>
                                <div class="gdlr-item-title-divider"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="nine columns">
                        <div class="gdlr-item gdlr-accordion-item style-1" style="margin-bottom: 50px;">
                            <?php the_content(); ?>
                            <script>
                                let questionAnswer = () => {
                                    let QA = [];
                                    let table = jQuery('.wp-block-table');
                                    let trs = jQuery('.wp-block-table tr');
                                    let content_container = jQuery('.gdlr-accordion-item');

                                    for(tr of trs){
                                        let quest = jQuery(tr).children().first().text();
                                        let answer = jQuery(tr).children().last().text();
                                        if(quest.length < 1){
                                            continue;
                                        }
                                        QA.push({
                                            quest,
                                            answer
                                        }); 
                                    }
                                    table.remove();
                                    for(item of QA){
                                        let div = document.createElement('div');
                                        let h4 = document.createElement('h4');
                                        let i = document.createElement('i');
                                        let span = document.createElement('span');
                                        span.append(item.quest);
                                        let content = document.createElement('div');
                                        let p = document.createElement('p');
                                        p.append(item.answer);
                                        content.append(p);

                                        jQuery(div).addClass('accordion-tab');
                                        jQuery(h4).addClass('accordion-title');
                                        jQuery(i).addClass('icon-plus');
                                        jQuery(content).addClass('accordion-content');

                                        jQuery(h4).append(i);
                                        jQuery(h4).append(span);

                                        jQuery(div).append(h4);
                                        jQuery(div).append(content);
                                        
                                        content_container.append(div);
                                    }
                                };
                                questionAnswer();
                            </script>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
            <section id="content-section-2">
                <div class="gdlr-color-wrapper  gdlr-show-all no-skin" id="copyright-link-con" style="background-color: #0f0f0f; ">
                    <div class="container">
                        <div class="gdlr-item gdlr-content-item">
                            <p><a style="margin-right: 12px;" href="http://procollagenium.com/faqs/#home">Home</a> | <a style="margin-right: 12px; margin-left: 12px;" href="http://procollagenium.com/faqs/#discover">Discover</a> | <a style="margin-right: 12px; margin-left: 12px;" href="http://procollagenium.com/faqs/#thescience">The Science</a> | <a style="margin-right: 12px; margin-left: 12px;" href="http://procollagenium.com/faqs/#testimonials">Testimonials</a> |<a style="margin-right: 12px; margin-left: 12px;" href="http://procollagenium.com/faqs/#contact">Contact</a> |<a style="margin-right: 12px; margin-left: 12px;" href="http://procollagenium.com/about/">About</a> |<a style="margin-right: 12px; margin-left: 12px;" href="http://procollagenium.com/faqs/">FAQs</a></p>
                        </div>
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
<?php get_footer(); ?>