<!-- Main content -->
<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Create Admin</h3>
        </div>
        <div class="box-body">
            <div class="col-xs-5">
                <form action="<?php echo base_url(); ?>site/create_admin.html" method="post">
                    <div class="form-group has-feedback">
                        <label for="Username">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username"/>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="Password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary pull-right">Create</button>
                        </div><!-- /.col -->
                    </div>
                </form>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->