<section id="teaser" class="fluid clearfix" >
    <div class="container">
        <div id="teaser-content" class="sixteen columns">
            <h1 id="page-title">
                <span><?php echo $project_info->project_name; ?></span>
            </h1>
        </div>
    </div>	
</section>
<div class="clear"></div>
<div id="content-wrap" class="fluid clearfix" data-content="content">
    <div class="container">
        <div id="content" class="eleven columns">
            <section class="single post type-post status-publish format-standard has-post-thumbnail hentry category-our-companies">
                <article class="entry-post clearfix">
                    <div class="thumb">
                        <div class="post-image">	
                            <div class="overflow-hidden imagepost">
                                <a title="<?php echo $project_info->project_name; ?>" data-rel="prettyPhoto" href="<?php echo base_url(). $project_info->project_image; ?>"><img src="<?php echo base_url(). $project_info->project_image; ?>" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="entry-content clearfix">
                        <div class="entry-summary">					
                            <p><?php echo $project_info->project_summery; ?></p>
                        </div>
                    </div>
                </article>
                <div class="clear"></div>
            </section>           
            <div class="clear"></div>
        </div>
        <aside id="sidebar" class="five columns" role="complementary">
            <ul>
                <li id="rpwe_widget-3" class="widget-2 widget-last widget-even widget_pages widget-container rpwe_widget recent-posts-extended">
                    <h3 class="widget-title"><span>OUR PROJECTS</span></h3>
                    <div  class="rpwe-block">
                        <ul class="rpwe-ul">
                            <?php foreach ($all_project as $v_project) { ?>
                            <li class="rpwe-li rpwe-clearfix">
                                <h3 class="rpwe-title">
                                    <a href="<?php echo base_url(); ?>home/project_details/<?php echo $v_project->project_id; ?>" title="<?php echo $v_project->project_name; ?>"><?php echo $v_project->project_name; ?></a>
                                </h3>
                                <div class="rpwe-summary"><?php echo $v_project->project_summery; ?> &hellip;<br/>
                                    <a href="<?php echo base_url(); ?>home/project_details/<?php echo $v_project->project_id; ?>..." class="more-link">Read More »</a>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>
            </ul>
        </aside>
    </div>
    <div class="clear"></div>
</div>