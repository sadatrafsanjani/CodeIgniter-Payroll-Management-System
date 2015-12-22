<!-- Main content -->
<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Admin Profile</h3>
        </div>
        <div class="box-body">
            <div class="col-xs-5">
                <form action="<?php echo base_url(); ?>site/reset_password.html" method="post">
                    <div class="form-group has-feedback">
                        <label for="Password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary pull-right">Reset</button>
                        </div><!-- /.col -->
                    </div>
                </form>
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer"></div>
    </div><!-- /.box -->
</section><!-- /.content -->