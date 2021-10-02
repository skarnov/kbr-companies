<style type="text/css">
    .slider-text{
        border: 3px solid transparent;
        background-color: green;
        border-radius: 5px;
        display: inline-block;
        font-size: 30px;
        padding: 5px 10px;
        font-weight: 700;
        text-transform: uppercase;
        transition: all .3s ease-in-out;
        opacity: .8;        
    }
</style>
<script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/camera.min.js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>asset/public/js/jquery.mobile.customized.min.js'></script>
<div class="clearfix ut-slider-wrap">
    <div class="camera_white_skin cameraslider_2 camera_wrap">
        <?php foreach ($all_slide as $v_slide) { ?>
            <div data-thumb="<?php echo $v_slide->slide_image; ?>" data-src="<?php echo $v_slide->slide_image; ?>">
                <div class="camera_caption fadeIn">
                    <div class="container">
                        <div class="nevada-caption white left">
                            <h2 class="slider-text">
                                <?php echo $v_slide->slide_text; ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<div class="clear"></div>
<div id="content-wrap" class="fluid clearfix" data-content="content">
    <div class="container">
        <div id="content" class="sixteen columns">
            <div id="home-template">
                <section class="service-columns clearfix home-border">
                    <section class="one_half service clearfix">       		
                        <figure class="service-icon">
                            <img src="<?php echo base_url(); ?>asset/public/img/mission-2-final.png" alt="" />
                        </figure>
                        <article class="service">
                            <h3>
                                Message		
                            </h3>
                            <?php foreach ($all_message as $v_message) { ?>
                                <p>
                                    <?php echo $v_message->message; ?>
                                </p>
                            <?php } ?>
                        </article>				
                    </section>
                    <section class="one_half last service clearfix">       		
                        <figure class="service-icon">
                            <img src="<?php echo base_url(); ?>asset/public/img/values2.png" alt="" />
                        </figure>
                        <article class="service">
                            <h3>
                                News and Events						
                            </h3>
                            <ul class="display-posts-listing">
                                <?php foreach ($all_news as $v_news) { ?>
                                    <li class="listing-item">
                                        <a class="title" href="<?php echo base_url(); ?>home/news_details/<?php echo $v_news->news_id; ?>">
                                            <?php echo $v_news->news_title; ?>
                                        </a>
                                        <span class="date"><?php echo $v_news->news_date; ?></span>
                                    </li>
                                <?php } ?>
                            </ul>
                        </article>
                    </section>	
                    <div class="clear"></div>
                </section>
                <section class="recent-post clearfix">
                    <h3 class="home-title"><span>OUR PROJECTS</span></h3>
                    <?php foreach ($all_project as $v_project) { ?>
                        <section class="post one_third">
                            <article class="entry-post clearfix">
                                <header class="entry-header clearfix">
                                    <h1 class="entry-title standard-post-title">
                                        <a href="<?php echo base_url(); ?>home/project_details/<?php echo $v_project->project_id; ?>"><?php echo $v_project->project_name; ?></a>                              </h1>
                                </header>  
                                <div class="thumb">
                                    <div class="post-image">
                                        <div class="overflow-hidden imagepost">
                                            <img class="wp-post-image" alt="" src="<?php echo base_url() . $v_project->project_image; ?>" />
                                            <a title="<?php echo $v_project->project_name; ?>" href="<?php echo base_url(); ?>home/project_details/<?php echo $v_project->project_id; ?>">
                                                <div class="hover-overlay">
                                                    <span class="circle-hover">
                                                        <img src="<?php echo base_url() . $v_project->project_image; ?>" />
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>	
                                <div class="entry-summary">
                                    <p><?php echo $v_project->project_summery; ?>....</p>
                                    <p><a class="excerpt" href="<?php echo base_url(); ?>home/project_details/<?php echo $v_project->project_id; ?>">Read More</a></p>
                                </div>
                            </article>
                        </section>
                    <?php } ?>
                    <div class="clear"></div>
                </section>
            </div>
        </div>	
    </div>
    <div class="clear"></div>
</div>
<script type='text/javascript' src='<?php echo base_url(); ?>asset/public/plugin/rs/slider.init.php'></script>