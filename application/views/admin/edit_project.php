<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Project
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_project"> Manage Project</a></li>
            <li class="active">Add New Project</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form action="<?php echo base_url(); ?>admin/update_project" method="POST" enctype="multipart/form-data">
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Text</label>
                                    <input type="text" name="project_name" value="<?php echo $project_info->project_name; ?>" class="form-control">
                                    <input type="hidden" name="project_id" value="<?php echo $project_info->project_id; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <img src="<?php echo base_url().$project_info->project_image; ?>" style="height: 200px; width: 300px;" />
                                    <input type="file" name="project_image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Summery</label>
                                    <textarea name="project_summery" class="form-control"><?php echo $project_info->project_summery; ?></textarea>
                                </div>
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-info pull-right">Edit</button>
                            </div>
                        </div>
                        <div class="box-footer"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>