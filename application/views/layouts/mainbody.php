<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title> Admin</title>

</head>
<body class="">


    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-inverse" role="navigation">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header active">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand " href="<?php echo site_url('home');?>">MY HRM</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Admin</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">PIM <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Configuration</a></li>
                                        <li><a href="<?php echo site_url('employees/viewemployee');?>">Employee List</a></li>
                                        <li><a href="<?php echo site_url('employees/addemployee');?>">Add
                                                Employee</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Reports</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li><a href="#">Leave</a></li>
                                <li><a href="#">Time</a></li>
                                <li><a href="#">Recruitment</a></li>
                                <li><a href="#">Performance</a></li>
                                <li><a href="#">My Info</a></li>

                            </ul>

                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>

                </div>
            </div>
            <div class="container-fluid">

            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">


                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <?php echo $maincontent; ?>


                </div>
            </div>

            </div>
            <!-- /.container-fluid -->


<!--    end of .col-md-12-->
        </div>

    </div>


</body>

</html>