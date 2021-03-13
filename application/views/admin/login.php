<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url('temp/admin/'); ?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url('temp/admin/'); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url('temp/admin/'); ?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="<?php echo base_url('temp/admin/'); ?>assets/css/style.css" rel="stylesheet" />
      <link href="<?php echo base_url('temp/admin/'); ?>assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="<?php echo base_url('temp/admin/'); ?>assets/img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <?php echo validation_errors(); ?>
                        <?php echo $this->session->flashdata('error'); ?>
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo base_url('admin/login'); ?>" method='post'>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign IN</button>
                                <!-- Change this to a button or input when using this as a form -->
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url('temp/admin/'); ?>assets/plugins/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url('temp/admin/'); ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url('temp/admin/'); ?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
