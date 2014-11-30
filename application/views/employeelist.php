<div class="container-fluid">

<form class="form-horizontal" role="form" action="<?php echo base_url()?>employees/viewemployee" method="post" enctype="multipart/form-data">

<h3>Employee List</h3>
<!--    --><?php //if ($query->num_rows() > 0 ) : ?>

<table class="table table-striped">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>User Type</th>
<!--        <th>Created Date</th>-->
<!--        <th>Is Active</th>-->
<!--        <th>Photograph</th>-->
        <th>Action</th>

    </tr>

<!--    --><?php //foreach( $result as $employee):?>
        <?php foreach ($query->result() as $employee) : ?>

            <tr>
            <td><?php echo $employee->name; ?></td>
            <td><?php echo $employee->email; ?></td>
            <td><?php echo $employee->type_name; ?></td>
<!--                <td>--><?php //echo date
//                    ("d-m-Y", $employee->created_date); ?><!--</td>-->
<!--                <td>--><?php //echo
//                    ($employee->is_active ? 'Yes' : 'No'); ?><!--</td>-->
<!--            <td>-->
<!--                <img src="--><?php //echo base_url()."uploads/".$employee->image;?><!--" style="width:100px;height:100px" class="img-polaroid" alt="">-->
<!--            </td>-->
            <td><a href="<?php echo base_url()?>employees/edit_employee/<?php echo $employee->id; ?>" onclick="return confirm('Are you sure Edit the Employee?')">Edit</a>&nbsp;&nbsp;
                <a href="<?php echo base_url()?>employees/delete_employee/<?php echo $employee->id; ?>" onclick="return confirm('Are you sure Edit the Employee?')">Delete</a>&nbsp;&nbsp;</td>

        </tr>

    <?php endforeach; ?>

</table>
<!--    --><?php //endif ; ?>
</form>


</div>
