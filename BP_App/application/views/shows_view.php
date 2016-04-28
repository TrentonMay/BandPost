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
                        <a href="<?php $login = $this->session->userdata('logged_in');
                        if($login === true){echo site_url('Logout/index');}?>"><?php if($login == true){echo "Logout";}else{ echo " ";}?></a>
                    </li>
                    <li>
                        <a href="<?php $login = $this->session->userdata('logged_in');
                        if($login == true){echo site_url('ShowCRUD/index');}else{ echo site_url('links/loginLink');}?>"><?php if($login == true){echo "Your Shows";}else{ echo "Login";}?></a>
                    </li>
                    <li>
                        <a href="<?php $login = $this->session->userdata('logged_in');
                        if($login == true){echo site_url('AlbumCRUD/index');}else{ echo "";}?>"><?php if($login == true){echo "Your Albums";}else{ echo "";}?></a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('links/homeLink'); ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('AlbumCRUD/albumView'); ?>">Albums</a>
                    </li>
                </ul>
            </li>
        </ul>
</nav>
<div class="container container-fluid search">
    <form class="form-horizontal pull-right" method="post" action="<?php echo site_url('ShowCRUD/search'); ?>">
        <div class="form-group">
            <div class="col-lg-7 col-md-7 pull-left">
                <input id="zipcode" name="zipcode" type="text" placeholder="Search By Zipcode" class="form-control input-md">
            </div>
            <button type="submit" class="btn btn-primary btn-info"><span class="glyphicon glyphicon-align-center glyphicon-search"></span></button>
            <button type="submit" class="btn btn-primary btn-info pull-right"><a href="<?php echo site_url('ShowCRUD/showView'); ?>" style="text-decoration: none; font-weight: bold; color: white;">Refresh</a></button>
        </div>
    </form>

</div>
<div class="show_content container col-lg-12 col-md-12">
    <ul class="container-fluid">
        <?php
        foreach($superarr as $out){
            echo "<li><h3>". $out['bname']."</h3><h3>". $out['venue'] ."</h3><p>".$out['date'] ."</p><p>".$out['city'] ."</p><p>".$out['address'] ."</p>"."</li>";
        }
        ?>
    </ul>
</div>

</body>
</html>