<section id="teaser" class="fluid clearfix" style="display:none !important;">
    <div class="container">
        <div id="teaser-content" class="sixteen columns">
            <h1 id="page-title">
                <span>News &#038; Events</span>
            </h1>
        </div>
    </div>	
</section>
<div class="clear"></div>
<div id="content-wrap" class="fluid clearfix" data-content="content">
    <div class="container">
        <div id="content" class="eleven columns">
            <?php foreach ($all_news as $v_news) { ?>
            <section class="page type-page status-publish hentry">
                <div class="full-width last clearfix" >		
                    <section class="post one_half">
                        <article class="entry-post clearfix">
                            <header class="entry-header clearfix">
                                <h1 class="entry-title standard-post-title">
                                    <a href="<?php echo base_url(); ?>home/news_details/<?php echo $v_news->news_id; ?>" title="<?php echo $v_news->news_title; ?>">
                                        <?php echo $v_news->news_title; ?>
                                    </a>
                                </h1>
                            </header>  
                            <div class="entry-summary">
                                <p><?php echo $v_news->news; ?></p>
                                <p><a class="excerpt" href="<?php echo base_url(); ?>home/news_details/<?php echo $v_news->news_id; ?>">Read More</a></p>
                            </div>
                        </article>
                    </section>		
                    <section class="post one_half last">
                        <article class="entry-post clearfix">
                            <header class="entry-header clearfix">
                                <h1 class="entry-title gallery-post-title">
                                    <a href="<?php echo base_url(); ?>home/news_details/<?php echo $v_news->news_id; ?>"><?php echo $v_news->news_title; ?></a>
                                </h1>
                            </header>  
                            <script type="text/javascript">
                                jQuery(document).ready(function () {
                                    jQuery("#post-slider-14851").flexslider({
                                        animation: "fade",
                                        slideshow: true,
                                        slideshowSpeed: 2500
                                    });
                                });
                            </script>
                            <div class="thumb"> 
                                <div id="post-slider-14851" class="flexslider post-slider">
                                    <ul class="slides">
                                        <li><a href="<?php echo base_url(); ?>home/news_details/<?php echo $v_news->news_id; ?>"><img src="<?php echo base_url(). $v_news->news_image_0; ?>" alt="<?php echo base_url(). $v_news->news_image_0; ?>" /></a></li>
                                        <li><a href="<?php echo base_url(); ?>home/news_details/<?php echo $v_news->news_id; ?>"><img src="<?php echo base_url(). $v_news->news_image_1; ?>" alt="<?php echo base_url(). $v_news->news_image_1; ?>" /></a></li>
                                        <li><a href="<?php echo base_url(); ?>home/news_details/<?php echo $v_news->news_id; ?>"><img src="<?php echo base_url(). $v_news->news_image_2; ?>" alt="<?php echo base_url(). $v_news->news_image_2; ?>" /></a></li>
                                        <li><a href="<?php echo base_url(); ?>home/news_details/<?php echo $v_news->news_id; ?>"><img src="<?php echo base_url(). $v_news->news_image_3; ?>" alt="<?php echo base_url(). $v_news->news_image_3; ?>" /></a></li>
                                        <li><a href="<?php echo base_url(); ?>home/news_details/<?php echo $v_news->news_id; ?>"><img src="<?php echo base_url(). $v_news->news_image_4; ?>" alt="<?php echo base_url(). $v_news->news_image_4; ?>" /></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="entry-summary">
                                <p><a class="excerpt" href="<?php echo base_url(); ?>home/news_details/<?php echo $v_news->news_id; ?>">Read More</a></p>
                            </div>
                        </article>
                    </section>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </section>
            <?php } ?>
        </div>
    </div>
    <div class="clear"></div>
</div>