<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Admin</title>
</head>
<body>
<div class=" container logout">
    <h5>Welcome <strong><a
                href="<?php echo site_url()?>"><?php echo $this->session->userdata('user_email');?></a></strong> </h5>
    <a href="<?php echo site_url($this->ezuri->logout());?>">Logout</a>
</div></body>
</html>
