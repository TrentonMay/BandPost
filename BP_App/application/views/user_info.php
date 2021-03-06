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
                        <a href="<?php echo site_url('AlbumCRUD/index'); ?>">Your Albums</a>
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
    <form class="form-horizontal" method="post" action="<?php echo site_url('ShowCRUD/addShow'); ?>">
        <fieldset>

            <legend>Add A Show</legend>


            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Band Name</label>
                <div class="col-md-9">
                    <input id="bname" name="bname" type="text" placeholder="Band Name" class="form-control input-md" value="" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Date</label>
                <div class="col-md-9">
                    <input id="date" name="date" type="date" placeholder="Date" class="form-control input-md" value="" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Venue</label>
                <div class="col-md-9">
                    <input id="venue" name="venue" type="text" placeholder="Venue" class="form-control input-md" value="" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Address</label>
                <div class="col-md-9">
                    <input id="address" name="address" type="text" placeholder="Address" class="form-control input-md" value="" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">City</label>
                <div class="col-md-9">
                    <input id="city" name="city" type="text" placeholder="City" class="form-control input-md" value="" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">State</label>
                <div class="col-md-9">
                    <input id="state" name="state" type="text" placeholder="State" class="form-control input-md" value="" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Zipcode</label>
                <div class="col-md-9">
                    <input id="zipcode" name="zipcode" type="text" placeholder="Zipcode" class="form-control input-md" value="" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-warning col-lg-9 col-md-9 col-md-offset-2">Submit</button>

        </fieldset>
    </form>
</div>
<div class="user_content container col-lg-8 col-md-8">
    <ul class="container-fluid">
        <?php
        foreach($superarr as $out){
            echo "<li><h3>". $out['bname']."</h3><h3>". $out['venue'] ."</h3><p>".$out['date'] ."</p><p>".$out['city'] ."</p><p>".$out['address'] ."</p>";
            echo "<a class='c_delete' href='".base_url()."index.php/ShowCRUD/deleteShow/".$out['id']."'>D</a>";  //Delete button. Redirects to delete.php then back to clients.php
            echo "<a class='c_update' href='".base_url()."index.php/showcrud/requestShowUpdate/".$out['id']."'>E</a>";  //Edit button. Redirects to update.php then back to clients.php
            echo "</li>";   //closing the list item tag
        }
        ?>
    </ul>
</div>
</body>
</html>