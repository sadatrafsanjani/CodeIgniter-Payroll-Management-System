<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Employee</h4>
            </div>
            <div class="modal-body">
                <div class="form">
                    <form class="form-validate form-horizontal" id="feedback_form" action="<?php echo base_url(); ?>employee/add_employee.html" method="post">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-2">Full Name</label>
                            <div class="col-lg-10">
                                <input class="form-control" name="name" type="text"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="department" class="control-label col-lg-2">Department</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" name="department"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="designation" class="control-label col-lg-2">Designation</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" name="designation"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-2">Phone</label>
                            <div class="col-lg-10">
                                <input class="form-control" name="phone" type="text"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="control-label col-lg-2">Address</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" name="address"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="type" class="control-label col-lg-2">Payment Type</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="type">
                                    <option>-Select-</option>
                                    <option value="1">Hourly</option>
                                    <option value="2">Contractual</option>
                                    <option value="3">Daily</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="control-label col-lg-2">Payment Status</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="status">
                                    <option>-Select-</option>
                                    <option value="1">Permanent</option>
                                    <option value="2">Temporary</option>
                                    <option value="3">Probation</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">Add New</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
            </div>
        </div>
    </div>
</div>
