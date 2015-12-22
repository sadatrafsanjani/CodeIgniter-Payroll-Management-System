<div class="row">
    <div class="col-lg-6">
        <section class="panel">
            <div class="panel-heading text-center">Payment Slip</div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name: <?php echo $result->employee_name; ?></th>
                            <th>Issue Date: <?php echo date("d/m/y");?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Basic</p>
                                <p>Overtime</p>
                                <p>Other</p>
                            </td>
                            <td>
                                <p><?php echo $result->salary_basic; ?> Tk</p>
                                <p><?php echo $result->salary_overtime; ?> Tk</p>
                                <p><?php echo $result->salary_other; ?> Tk</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Total:</td>
                            <td>
                                <?php echo $result->salary_basic + $result->salary_overtime + $result->salary_other; ?> Tk
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="panel-footer"></div>
        </section>
    </div>
</div>
