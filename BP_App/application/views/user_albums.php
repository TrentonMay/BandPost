<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BandPost</title>
    <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/main.css">
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body class="user_background">
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
                        if($login == true){echo site_url('Logout/index');}else{ site_url('links/loginLink');}?>"><?php if($login == true){echo "Logout";}else{ echo "";}?></a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('links/homeLink'); ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('ShowCRUD/index'); ?>">Your Shows</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right nav-bname">
            <li>
                <p>Welcome <?php echo $bname;?>!</p>
            </li>
        </ul>
</nav>
<div class="userform container col-lg-3 col-md-3">
    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('AlbumCRUD/addAlbum'); ?>">
        <fieldset>

            <legend>Add An Album</legend>

            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Band Name</label>
                <div class="col-md-9">
                    <input id="bname" name="bname" type="text" placeholder="Band Name" class="form-control input-md" value="" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Year</label>
                <div class="col-md-9">
                    <input id="year" name="year" type="text" placeholder="Year" class="form-control input-md" value="" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Title</label>
                <div class="col-md-9">
                    <input id="title" name="title" type="text" placeholder="Title" class="form-control input-md" value="" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Image</label>
                <div class="col-md-9">
                    <input id="userfile" name="userfile" type="file" class="form-control input-md" value="" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-warning col-lg-9 col-md-9 col-md-offset-2">Submit</button>

        </fieldset>
    </form>
</div>

<div class="container col-lg-8 col-md-8 user_content">
    <ul class="container-fluid">
        <?php
        foreach($superarr as $out){
            echo "<li style='width: 48%; padding: 3% 3% 3% 3%;'><h3>". $out['bname']."</h3><p>".$out['title'] ."</p>";
            echo "<img class='img-responsive album_image' src='".base_url().'uploads/'.$out['image']."'/>";
            echo "<p>".$out['year']."</p>";
            echo "<a class='c_delete' href='".base_url()."index.php/ALbumCRUD/deleteAlbum/".$out['id']."/".$out['image']."'>D</a>";
            echo "<a class='c_update' href='".base_url()."index.php/AlbumCRUD/requestAlbumUpdate/".$out['id']."'>E</a>";
            echo "</li>";
        }
        ?>
    </ul>
</div>
</body>
</html>