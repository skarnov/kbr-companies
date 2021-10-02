<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Message
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/add_message">Add New Message</a></li>
            <li class="active">Manage Message</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('edit_message');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('edit_message');
                    }
                    ?>
                </h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_message as $v_message) {
                            ?>
                            <tr>
                                <td><?php echo $v_message->message; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/edit_message/<?php echo $v_message->message_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Message"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>admin/delete_message/<?php echo $v_message->message_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Message" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </section>
</div>