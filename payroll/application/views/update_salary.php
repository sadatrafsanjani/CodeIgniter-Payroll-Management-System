<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="form">
                    <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url(); ?>salary/update_salary_commit.html">
                        <div class="form-group">
                            <label for="basic" class="control-label col-lg-2">Basic</label>
                            <div class="col-lg-10">
                                <input name="id" type="hidden" value="<?php echo $result->salary_id; ?>" />
                                <input class="form-control" name="basic" type="text" value="<?php echo $result->salary_basic; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="overtime" class="control-label col-lg-2">Overtime</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" name="overtime" value="<?php echo $result->salary_overtime; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="other" class="control-label col-lg-2">Other</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" name="other" value="<?php echo $result->salary_other; ?>" />
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
