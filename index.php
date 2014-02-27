<?php 
    session_start(); 
?> 
<!DOCTYPE html>
<html>

<head>
    <title>The Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html" ; charset="utf-8">
    <meta name="author" content="SS NF MH ND">

    <link href="mycss/lightbox.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="mycss/bootsnipp.css" rel="stylesheet" />
    <link href="mycss/mycss.css" rel="stylesheet" />
    <link href="mycss/gallery_flickr.css" rel="stylesheet" />

    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="myjs/lightbox.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="myjs/bootsnipp.js"></script>
    <script src="myjs/myjs.js"></script>
    <script src="myjs/gallery_flickr.js"></script>

    <!-- Sheree -->
    <script type="text/javascript" src="javascript/JavaScript-2.js"></script>
    <script type="text/javascript" src="javascript/toggle.js"></script>
    <script src ="javascript/funktion.js"> </script>

    <!-- Adding FancyBox -->
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

   

</head>

<body>
    <!-- Anfang Bootsnipp NavBar -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php?site=main" class="active">.ADAM</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li <?php 
                                    if (isset($_GET['site']))
                                    { 
                                        if ($_GET['site']=='history' )
                                        {
                                            echo 'class="active"';
                                        }
                                    }
                                ?>>
                                <a href="index.php?site=history">.history</a>
                            </li>
                            <li class="unvis" id="gallery_kuenstler"<?php 
                                    if (isset($_GET['site']))
                                    { 
                                        if ($_GET['site']=='gallery_kuenstler' )
                                        {
                                            echo 'class="active"';
                                        }
                                    }
                                ?>>
                                <a href="index.php?site=gallery_kuenstler">.gallery</a>
                            </li>
                            <li class="unvis" id="gallery_flickr" <?php 
                                    if (isset($_GET['site']))
                                    { 
                                        if ($_GET['site']=='gallery_flickr' )
                                        {
                                            echo 'class="active"';
                                        }
                                    }
                                ?>>
                                <a href="index.php?site=gallery_flickr">.galleryflickr</a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li <?php 
                                    if (isset($_GET['site']))
                                    { 
                                        if ($_GET['site']=='impressum' )
                                        {
                                            echo 'class="active"';
                                        }
                                    }
                                ?>>
                                <a href="index.php?site=impressum">.impressum</a>
                            </li>
                            <li class="unvis" id="logout">
                                <a href="index.php?site=logout">LOGOUT</a>
                            </li>                           
                            <li class="dropdown" id="login">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    LOGIN
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                                    <li>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form class="form" role="form" method="post" action="PHP/checklogin.php" accept-charset="UTF-8" id="login-nav">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="logname">E-Mail</label>
                                                        <input type="email" class="form-control" id="logname" name="user" placeholder="E-Mail" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="sr-only" for="logpasswort">Password</label>
                                                        <input type="password" class="form-control" id="logpasswort" name="pw" placeholder="Password" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" name="Submit" value="Login" class="btn btn-success btn-block">Login</button>
                                                    </div>
                                                </form>                                                
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </div>
    <!-- Ende Bootsnipp NavBar -->

    <div class="clearer"></div>

    <!-- Beginn Hauptinhalt -->    
    <div class="maincontent">
        <?php
            if(isset($_GET['site'])) {
                switch( $_GET['site'] ) { 
                    case 'gallery_kuenstler': include('gallery_kuenstler.php'); break;
                    case 'gallery_flickr': include('gallery_flickr.php'); break;
                    case 'impressum': include('impressum.php'); break;
                    case 'history': include('history.php'); break;
                    case 'logout': include('PHP/logout.php'); break;
                    case 'login_success'; include('PHP/login_success.php'); break;
                    case 'login_error'; include('PHP/login_error.php'); break;
                    default: include('main.php');break;
                }
            } else {
                include('main.php');    
            } 
        ?>
    </div>
    <!-- Ende Hauptinhalt -->

    <div class="clearer"></div>

    <footer>
        <p>WPF Moderne Webanwendungen SS 2013 &amp; WS 2013/2014 | &copy; SS NF MH ND</p>
    </footer>
</body>

</html>