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

<div class="container col-lg-3 col-lg-offset-4 col-md-4 col-md-offset-4 login">


    <form class="form-horizontal" method="post" action="<?php echo site_url('login'); ?>">
        <fieldset>
            <legend>Login</legend>
            <div class="form-group">
                <label class="col-md-3 control-label" for="textinput">Band Name</label>
                <div class="col-md-8">
                    <input id="bname" name="bname" type="text" placeholder="Band Name" class="form-control input-md" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="passwordinput">Password</label>
                <div class="col-md-8">
                    <input id="passwordinput" name="passwordinput" type="password" placeholder="Password" class="form-control input-md" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-warning col-md-offset-3">Login</button>

        </fieldset>
    </form>

</div>


</body>
</html>