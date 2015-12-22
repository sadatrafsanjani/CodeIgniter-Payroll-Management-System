<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                    <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(); ?>employee/update_employee_commit.html">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-2">Full Name</label>
                            <div class="col-lg-10">
                                <input name="id" type="hidden" value="<?php echo $result->employee_id; ?>" />
                                <input class="form-control" name="name" type="text" value="<?php echo $result->employee_name; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="department" class="control-label col-lg-2">Department</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" name="department" value="<?php echo $result->employee_department; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="designation" class="control-label col-lg-2">Designation</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" name="designation" value="<?php echo $result->employee_designation; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-2">Phone <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control" name="phone" type="text" value="<?php echo $result->employee_phone; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="control-label col-lg-2">Address</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" name="address"><?php echo $result->employee_address; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="type" class="control-label col-lg-2">Payment Type</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="type">
                                    <?php if($result->status_id == 1){ ?>
                                        <option value="1" selected>Hourly</option>
                                        <option value="2">Contractual</option>
                                        <option value="3">Daily</option>
                                    <?php } else if($result->status_id == 2){ ?>
                                        <option value="1">Hourly</option>
                                        <option value="2" selected>Contractual</option>
                                        <option value="3">Daily</option>
                                    <?php } else { ?>
                                        <option value="1">Hourly</option>
                                        <option value="2">Contractual</option>
                                        <option value="3" selected>Daily</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="control-label col-lg-2">Payment Type</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="status">
                                    <option value="1">Permanent</option>
                                    <option value="2">Temporary</option>
                                    <option value="3">Probation</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
