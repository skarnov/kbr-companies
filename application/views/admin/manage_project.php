<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Project
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/add_project">Add New Project</a></li>
            <li class="active">Manage Project</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_project as $v_project) {
                            ?>
                            <tr>
                                <td><img src="<?php echo base_url() . $v_project->project_image; ?>" style="height:100px; width:200px;" /></td>
                                <td><?php echo $v_project->project_name; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/edit_project/<?php echo $v_project->project_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Project"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>admin/delete_project/<?php echo $v_project->project_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Project" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>