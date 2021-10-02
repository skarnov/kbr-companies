<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Message
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_message"> Manage Message</a></li>
            <li class="active">Edit Message</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url(); ?>admin/update_message" method="POST" name="message">
                    <div class="box box-info">
                        <div class="col-xs-8">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Message</label>
                                    <input type="text" name="message" value="<?php echo $message_info->message; ?>" class="form-control">
                                    <input type="hidden" name="message_id" value="<?php echo $message_info->message_id; ?>">
                                </div>
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-info pull-right">Edit</button>
                            </div>
                        </div>
                        <div class="box-footer"></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>