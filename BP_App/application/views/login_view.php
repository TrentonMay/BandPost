<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BandPost</title>
    <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/main.css">
    <script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body class="landing_background">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="container col-lg-2">
            <a class="navbar-brand brand" href="<?php echo site_url('links/homeLink'); ?>">
                <img alt="Brand" src="<?php echo base_url();?>assets/BandPost_logo.png">
            </a>
        </div>

        <ul class="nav navbar-nav navbar-right nav-pills">
            <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Menu<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo site_url('links/homeLink'); ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('ShowCRUD/showView'); ?>">Shows</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('AlbumCRUD/albumView'); ?>">Albums</a>
                    </li>
                </ul>
            </li>
        </ul>
</nav>

<div class="container col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 login">


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
<div class="container col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 login">


    <form class="form-horizontal" method="post" action="<?php echo site_url('signup'); ?>">
        <fieldset>
            <legend>Sign Up</legend>
            <div class="form-group">
                <label class="col-md-3 control-label" for="textinput">Band Name</label>
                <div class="col-md-8">
                    <input id="bname" name="bname" type="text" placeholder="Band Name" class="form-control input-md" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="textinput">Email</label>
                <div class="col-md-8">
                    <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="passwordinput">Password</label>
                <div class="col-md-8">
                    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-warning col-md-offset-3">Sign Up</button>

        </fieldset>
    </form>

</div>


</body>
</html>