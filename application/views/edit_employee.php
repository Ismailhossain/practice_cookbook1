<html>
<body>


<form class="form-horizontal" role="form" action="<?php echo base_url()?>employees/update_employee" method="post" enctype="multipart/form-data">


    <fieldset>

        <legend>Add Employee</legend>
        <input type="hidden" name="employee_id" value="<?php echo $row->employee_id;?>">
        <div class="form-group">
            <label for="employee_name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="employee_name" id="employee_name" value="<?php echo $row->employee_name; ?>">
                <span class="help-inline validation" > <?php echo form_error('employee_name'); ?></span>

            </div>
        </div>
        <div class="form-group">
            <label for="employee_email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="employee_email" id="employee_email" value="<?php echo $row->employee_email; ?>">
                <span class="help-inline validation" > <?php echo form_error('employee_email'); ?></span>

            </div>
        </div>
        <div class="form-group">
            <label for="image" class="col-sm-2 control-label">Photograph</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="image" id="image" value="<?php echo $row->image; ?>">
                <!--            <span class="help-inline validation" > --><?php //echo form_error('image'); ?><!--</span>-->

            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Update Employee</button>
            </div>
        </div>
    </fieldset>
</form>


</body>

</html>
