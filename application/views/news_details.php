<section id="teaser" class="fluid clearfix" >
    <div class="container">
        <div id="teaser-content" class="sixteen columns">
            <h1 id="page-title">
                <span><?php echo $news_info->news_title; ?></span>
            </h1>    
        </div>
    </div>	
</section>
<div class="clear"></div>
<div id="content-wrap" class="fluid clearfix" data-content="content">
    <div class="container">
        <div id="content" class="eleven columns">
            <section class="single post type-post status-publish format-gallery hentry category-news-and-events post_format-post-format-gallery">
                <article class="entry-post clearfix">
                    <div class="clear"></div>
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
                                <li><a href="<?php echo base_url() . $news_info->news_image_0; ?>" data-rel="prettyPhoto[postgallery]"><img src="<?php echo base_url() . $news_info->news_image_0; ?>" alt="<?php echo base_url() . $news_info->news_image_0; ?>" /></a></li>
                                <li><a href="<?php echo base_url() . $news_info->news_image_1; ?>" data-rel="prettyPhoto[postgallery]"><img src="<?php echo base_url() . $news_info->news_image_1; ?>" alt="<?php echo base_url() . $news_info->news_image_1; ?>" /></a></li>
                                <li><a href="<?php echo base_url() . $news_info->news_image_2; ?>" data-rel="prettyPhoto[postgallery]"><img src="<?php echo base_url() . $news_info->news_image_2; ?>" alt="<?php echo base_url() . $news_info->news_image_2; ?>" /></a></li>
                                <li><a href="<?php echo base_url() . $news_info->news_image_3; ?>" data-rel="prettyPhoto[postgallery]"><img src="<?php echo base_url() . $news_info->news_image_3; ?>" alt="<?php echo base_url() . $news_info->news_image_3; ?>" /></a></li>
                                <li><a href="<?php echo base_url() . $news_info->news_image_4; ?>" data-rel="prettyPhoto[postgallery]"><img src="<?php echo base_url() . $news_info->news_image_4; ?>" alt="<?php echo base_url() . $news_info->news_image_4; ?>" /></a></li>
                            </ul>
                        </div>
                    </div>
                </article>
                <div class="clear"></div>
            </section>        
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>