<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Settings
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Settings</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header"></div>
            <div class="box-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Home Page Address</a></li>
                    <li><a data-toggle="tab" href="#add">Add Address</a></li>
                    <li><a data-toggle="tab" href="#manage">Manage Address</a></li>
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <form action="<?php echo base_url(); ?>admin/save_home_address" method="POST">
                            <h3 style="color:green">
                                <?php
                                $msg = $this->session->userdata('settings');
                                if (isset($msg)) {
                                    echo "<p style='margin-left:2%;'>$msg</p>";
                                    $this->session->unset_userdata('settings');
                                }
                                ?>
                            </h3>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" value="<?php echo $home_page_address_info->name; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="<?php echo $home_page_address_info->phone; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>FAX</label>
                                        <input type="text" name="fax" value="<?php echo $home_page_address_info->fax; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" value="<?php echo $home_page_address_info->email; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" name="website" value="<?php echo $home_page_address_info->website; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info pull-right">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="add" class="tab-pane fade">
                        <br/>
                        <form action="<?php echo base_url(); ?>admin/save_contact_page_address" method="POST">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>FAX</label>
                                        <input type="text" name="fax" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" name="website" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info pull-right">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="manage" class="tab-pane fade">
                        <br/>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Website</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($all_contact_page_address as $v_address) {
                                    ?>
                                    <tr>
                                        <td><?php echo $v_address->name; ?></td>
                                        <td><?php echo $v_address->phone; ?></td>
                                        <td><?php echo $v_address->email; ?></td>
                                        <td><?php echo $v_address->website; ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/delete_address/<?php echo $v_address->address_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Address" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>