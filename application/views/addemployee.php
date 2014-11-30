<html>
<body>


<form class="form-horizontal" role="form" action="<?php echo base_url()?>employees/save_employee" method="post" enctype="multipart/form-data">


    <fieldset>

        <legend>Add Employee</legend>
        <input type="hidden" name="id">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="name" placeholder="Name">

        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">

        </div>
    </div>

        <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="password" >

        </div>
    </div>
<!--        <div class="form-group">-->
<!--        <label for="confirm_password" class="col-sm-2 control-label">Confirm Password</label>-->
<!--        <div class="col-sm-10">-->
<!--            <input type="password" class="form-control" name="confirm_password" id="confirm_password" minlength="6" required="1">-->
<!---->
<!--        </div>-->
<!--    </div>-->

        <div class="form-group">
        <label for="user_type" class="col-sm-2 control-label">User Type</label>
            <div class="col-sm-10">

            <select name="user_role_id" class="form-control" type="button" id="user_type" >
                    <?php
                    foreach($query->result() as $value)
                    {

                        echo "<option value='$value->type_id'>$value->type_name</option>";

                    }

                    ?>
            </select>


        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">

            <input type="submit" class="btn btn-default">
        </div>
    </div>
    </fieldset>
</form>


</body>

</html>
