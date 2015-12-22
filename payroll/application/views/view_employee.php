<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-heading">Employee Information</div>
            <div class="panel-body">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>Information</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Employee Id# <?php echo $result->employee_id; ?></p>
                                <p>Name: <?php echo $result->employee_name; ?></p>
                                <p>Designation: <?php echo $result->employee_designation; ?></p>
                                <p>Department: <?php echo $result->employee_department; ?></p>
                                <p>Phone: <?php echo $result->employee_phone; ?></p>
                                <p>Address: <?php echo $result->employee_address; ?></p>
                                <p>Payment: <?php echo $result->payment_type; ?></p>
                                <p>Status: <?php echo $result->status_name; ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="panel-footer"></div>
        </section>
    </div>
</div>