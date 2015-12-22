<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <table class="table table-responsive table-striped table-advance table-hover">
                    <thead>
                        <tr>
                            <th><i class="icon_profile"></i> Full Name</th>
                            <th><i class="icon_balance"></i> Basic</th>
                            <th><i class="icon_bag"></i> Overtime</th>
                            <th><i class="icon_bag_alt"></i> Other</th>
                            <th><i class="icon_clipboard"></i> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($results as $list){ ?>
                        <tr>
                            <td>
                                <a href="<?php echo base_url(); ?>salary/slip/<?php echo $list->employee_id; ?>"><?php echo $list->employee_name; ?></a>
                            </td>
                            <td><?php echo $list->salary_basic; ?></td>
                            <td><?php echo $list->salary_overtime; ?></td>
                            <td><?php echo $list->salary_other; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>salary/update_salary/<?php echo $list->salary_id; ?>">Edit</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </section>
        <div class="text-center"><p><?php echo $links; ?></p></div>
    </div>
</div>
