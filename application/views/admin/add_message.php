<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add New Message
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_message"> Manage Message</a></li>
            <li class="active">Add New Message</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('save_message');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('save_message');
                    }
                    ?>
                </h3>
                <form action="<?php echo base_url(); ?>admin/save_message" method="POST">
                    <div class="box box-info">
                        <div class="col-xs-8">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Message</label>
                                    <input type="text" name="message" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-info pull-right">Save</button>
                            </div>
                        </div>
                        <div class="box-footer"></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>