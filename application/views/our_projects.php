<section id="teaser" class="fluid clearfix" >
    <div class="container">
        <div id="teaser-content" class="sixteen columns">
            <h1 id="page-title">
                <span>Our Projects</span>
            </h1>
        </div>
    </div>	
</section>
<div class="clear"></div>
<div id="content-wrap" class="fluid clearfix" data-content="content">
    <div class="container">
        <div id="content" class="eleven columns">
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
        </div>
        <aside id="sidebar" class="five columns" role="complementary">
            <ul>
                <li id="rpwe_widget-3" class="widget-2 widget-last widget-even widget_pages widget-container rpwe_widget recent-posts-extended">
                    <h3 class="widget-title"><span>OUR PROJECTS</span></h3>
                    <div  class="rpwe-block">
                        <ul class="rpwe-ul">
                            <?php foreach ($sidebar_project as $v_project) { ?>
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