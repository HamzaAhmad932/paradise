<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title>Paradise</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href="<?php echo base_url('style_admin/css/uikit.almost-flat.min.css'); ?>"/>

    <!-- altair admin login page -->
    <link rel="stylesheet" href="<?php echo base_url('style_admin/css/login_page.min.css'); ?>" />
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body class="login_page">

    <div class="login_page_wrapper">
        <div class="md-card" id="login_card">
            <div class="md-card-content large-padding" id="login_form">
                <div class="login_heading">
                    <div class="user_avatar"></div>
                </div>

                <?php if($this->session->flashdata('error')){ ?>
 <div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
  <strong>Failure!</strong> <?php echo $this->session->flashdata('error'); ?>
  
                                
                            </div>
                        <?php }?>
                        <?php if($this->session->flashdata('account_error')){ ?>
                        <div class="alert alert-warning alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
  <strong>Warning!</strong> <?php echo $this->session->flashdata('account_error'); ?>
  
                                
                            </div>
                        <?php }?>

                <form  method="post" action="<?php echo site_url('Login/validate'); ?>">
                    <div class="uk-form-row">
                        <label for="login_username">Username</label>
                        <input class="md-input" type="text" id="login_username" name="username" required=""/>
                    </div>
                    <div class="uk-form-row">
                        <label for="login_password">Password</label>
                        <input class="md-input" type="password" id="login_password" name="password" required=""/>
                    </div>
                    <div class="uk-margin-medium-top">
                        <center><button type="submit" class="md-btn md-btn-primary">Login</button></center>
                    </div>
                    
                </form>
            </div>
            
            
    </div>
</div>

    <!-- common functions -->
    <script src="<?php echo base_url('style_admin/js/common.min.js'); ?>"></script>
    <!-- altair core functions -->
    <script src="<?php echo base_url('style_admin/js/altair_admin_common.min.js'); ?>"></script>

    <!-- altair login page functions -->
    <script src="<?php echo base_url('style_admin/js/login.min.js'); ?>"></script>

</body>
</html>