<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title><?php echo ($title);?></title>

<!--    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">-->
<!--    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" rel="stylesheet">-->
<!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<!--    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>-->



    <link  href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link  href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link  href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>


</head>
<body>

<?php $this->load->view('layouts/header') ?>
<?php $this->load->view('layouts/mainbody') ?>
<?php $this->load->view('layouts/footer') ?>

</body>
</html>



