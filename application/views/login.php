<html>
<head>
	<title>Login - CodeIgniter</title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <style>
        html{
            background-image: url("<?php echo base_url('assets/img.jpg') ?>");
            background-attachment: fixed;
            background-repeat:no-repeat;
            background-position: 50% 50%;
            margin:auto;
            background-size: cover; 
        }
        .form-signin
        {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading, .form-signin .checkbox
        {
            margin-bottom: 10px;
        }
        .form-signin .checkbox
        {
            font-weight: normal;
        }
        .form-signin .form-control
        {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .form-signin .form-control:focus
        {
            z-index: 2;
        }
        .form-signin input[type="text"]
        {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .form-signin input[type="password"]
        {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .account-wall
        {
            margin-top: 20px;
            padding: 40px 0px 20px 0px;
            background-color: #f7f7f7;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        .login-title
        {
            color: #555;
            font-size: 18px;
            font-weight: 400;
            display: block;
        }
        .profile-img
        {
            width: 96px;
            height: 96px;
            margin: 0 auto 10px;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
        .need-help
        {
            margin-top: 10px;
        }
        .new-account
        {
            display: block;
            margin-top: 10px;
        }
        #back{            
            background-color: transparent;            
        }
    </style>
</head>
<body id="back" style="background-color: rgba(0,0,0,0.5);height:100%;">
<div class="container" id="back" style="padding-top: 70px">
    <div class="row back">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title" style="color: deepskyblue;font-size:32px;text-shadow: 3px 3px 3px black;font-family:verdana;">Authentification</h1>
            <?php if(isset($error)) { echo $error; }; ?>
            <div class="account-wall"  style="border-radius: 15px;box-shadow:0px 5px 9px black;">
                <img class="profile-img" src="<?php echo base_url('assets/user.jpg') ?>"
                    alt="">    
                <form class="form-signin" method="POST" action="<?php echo base_url() ?>index.php/login">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur" style="font-family:verdana;" autofocus>
                    <?php echo form_error('username'); ?>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" style="font-family:verdana;">
                    <?php echo form_error('password'); ?>
                </div>

                <button class="btn btn-lg btn-primary btn-block" name="btn-login" id="btn-login" type="submit" style="font-family:verdana;">
                    Se connecter</button>
                </form>
            </div>
           
            <div id="error" style="margin-top: 10px"></div>
        </div>
    </div>
</div>

    <script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/chart.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/chart-data.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/easypiechart.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/easypiechart-data.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js') ?>"></script> 
    <script src="<?php echo base_url('assets/js/bootstrap-table.js') ?>"></script>
</body>
</html>