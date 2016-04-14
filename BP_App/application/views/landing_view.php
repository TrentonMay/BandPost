<?php $this->load->helper('url');
$this->load->library('session');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BandPost</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>css/main.css">
    <script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body class="landing_background">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="container col-lg-2">
            <a class="navbar-brand brand" href="<?php echo site_url('ShowCRUD/homeLink'); ?>">
                <img alt="Brand" src="<?php echo base_url();?>assets/BandPost_logo.png">
            </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="<?php $login = $this->session->userdata('logged_in');
                if($login === true){echo site_url('Logout/index');}?>"><?php if($login == true){echo "Logout";}else{ echo " ";}?></a>
            </li>
            <li>
                <a href="<?php $login = $this->session->userdata('logged_in');
                if($login == true){echo site_url('ShowCRUD/index');}else{ echo site_url('ShowCRUD/loginLink');}?>"><?php if($login == true){echo "Your Shows";}else{ echo "Login";}?></a>
            </li>
            <li>
                <a href="<?php echo site_url('ShowCRUD/homeLink'); ?>">Home</a>
            </li>
            <li>
                <a href="#">Shows</a>
            </li>
            <li>
                <a href="#">Albums</a>
            </li>
        </ul>
</nav>
<div class="container col-lg-4 col-lg-offset-1 col-md-4 align-center home_links">
    <h2 class="text-center">Shows</h2>
    <img class="img-responsive img-circle" src="<?php echo base_url();?>assets/shows_img.png">
</div>
<div class="container col-lg-4 col-lg-offset-2 col-md-4 align-center home_links">
    <h2 class="text-center">Albums</h2>
    <img class="img-responsive img-circle" src="<?php echo base_url();?>assets/albums_img.jpg">
</div>

</body>
</html>