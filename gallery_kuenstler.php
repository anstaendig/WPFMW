<<<<<<< HEAD
<section class="gallery">
    <div class="left_gallery">
        <h3>.nails</h3>
        <a href="gallery/nails01.jpg" class="fancybox-thumb" rel="nails">
            <img class="thumbnail" src="gallery/nails01.jpg" />
        </a>
        <a href="gallery/nails02.jpg" class="fancybox-thumb" rel="nails">
            <img class="thumbnail" src="gallery/nails02.jpg" />
        </a>
        <a href="gallery/nails03.jpg" class="fancybox-thumb" rel="nails">
            <img class="thumbnail" src="gallery/nails03.jpg" />
        </a>
        <a href="gallery/nails04.jpg" class="fancybox-thumb" rel="nails">
            <img class="thumbnail" src="gallery/nails04.jpg" />
        </a>
        <a href="gallery/nails05.jpg" class="fancybox-thumb" rel="nails">
            <img class="thumbnail" src="gallery/nails05.jpg" />
        </a>
=======
<!DOCTYPE html>
<html>

<head>
    <title>The Gallery - Kuenstler</title>
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
    <script type="text/javascript" src="myjs/getflickr.js"></script>
    <script type="text/javascript">
        function populate()
                {
        		    var tag = document.getElementById('tag').value;
        			document.getElementById('photos').innerHTML = getFlickr.html[tag].replace(/_m\.jpg/g,'_s.jpg');
        			return false;
        		}
    </script>
    
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

    <script>
        $(document).ready(function() {
            /* Apply fancybox to multiple items */
            $(".fancybox").fancybox({
                openEffect      :   'none',
                closeEffect     :   'none'  
            });

            $(".fancybox-thumb").fancybox({
                prevEffect  : 'none',
                nextEffect  : 'none',
                helpers : {
                    title   : {
                    type: 'outside'
                    },
                    thumbs  : {
                        width   : 50,
                        height  : 50
                    }
                }
            });    
        });
    </script>

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
                       <a class="navbar-brand" href="index.php" class="active">HOME</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                       <ul class="nav navbar-nav">
                          <li>
                              <a href="">.vita</a>
                          </li>
                          <li>
                              <a href="gallery_kuenstler.php">.gallery</a>
                          </li>
                          
                          <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">DropDown<b class="caret"></b></a>
                             <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                             </ul>
                          </li>
                       </ul>

                       <ul class="nav navbar-nav navbar-right">
                          <li>
                            <form class="navbar-form navbar-left" role="search" onsubmit="getFlickr.leech(document.getElementById('tag').value, 'populate'); return false;">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Suche" id="tag" name="tag">
                              </div>
                              <button type="submit" class="btn btn-default">Los Flickr!</button>
                            </form>
                          </li>
                          <li>
                              <a href="impressum.php">.impressum</a>
                           </li>
                          <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Einloggen<b class="caret"></b></a>
                             <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                                <li>
                                   <div class="row">
                                      <div class="col-md-12">
                                         <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                               <label class="sr-only" for="exampleInputEmail2">Nutzername</label>
                                               <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Nutzername" required>
                                            </div>
                                            <div class="form-group">
                                               <label class="sr-only" for="exampleInputPassword2">Passwort</label>
                                               <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Passwort" required>
                                            </div>
                                            <div class="form-group">
                                               <button type="submit" class="btn btn-success btn-block">Einloggen</button>
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
        <section>
            <div id="photos"></div>
        </section>
        <section class="gallery">
            <div class="left_gallery">
                <h3>.nails</h3>
                <a href="gallery/nails01.jpg" class="fancybox-thumb" rel="nails"><img class="thumbnail" src="gallery/nails01.jpg" /></a>
                <a href="gallery/nails02.jpg" class="fancybox-thumb" rel="nails"><img class="thumbnail" src="gallery/nails02.jpg" /></a>
                <a href="gallery/nails03.jpg" class="fancybox-thumb" rel="nails"><img class="thumbnail" src="gallery/nails03.jpg" /></a>
                <a href="gallery/nails04.jpg" class="fancybox-thumb" rel="nails"><img class="thumbnail" src="gallery/nails04.jpg" /></a>
                <a href="gallery/nails05.jpg" class="fancybox-thumb" rel="nails"><img class="thumbnail" src="gallery/nails05.jpg" /></a>
            </div>
            <div class ="right_gallery">
                <h3>.what it takes to be a hero</h3>
                <a href="gallery/hero01.jpg" class="fancybox-thumb" rel="hero"><img class="thumbnail" src="gallery/hero01.jpg" /></a>
                <a href="gallery/hero02.jpg" class="fancybox-thumb" rel="hero"><img class="thumbnail" src="gallery/hero02.jpg" /></a>
                <a href="gallery/hero03.jpg" class="fancybox-thumb" rel="hero"><img class="thumbnail" src="gallery/hero03.jpg" /></a>
            </div>
            <div class="left_gallery">
                <h3>.manipulation</h3>
                <a href="gallery/manipulation01.jpg" class="fancybox-thumb" rel="manipulation"><img class="thumbnail" src="gallery/manipulation01.jpg" /></a>
                <a href="gallery/manipulation02.jpg" class="fancybox-thumb" rel="manipulation"><img class="thumbnail" src="gallery/manipulation02.jpg" /></a>
                <a href="gallery/manipulation03.jpg" class="fancybox-thumb" rel="manipulation"><img class="thumbnail" src="gallery/manipulation03.jpg" /></a>
            </div>
            <div class="right_gallery">
                <h3>.political</h3>
                <a href="gallery/political01.jpg" class="fancybox-thumb" rel="political"><img class="thumbnail" src="gallery/political01.jpg" /></a>
                <a href="gallery/political02.jpg" class="fancybox-thumb" rel="political"><img class="thumbnail" src="gallery/political02.jpg" /></a>
                <a href="gallery/political03.jpg" class="fancybox-thumb" rel="political"><img class="thumbnail" src="gallery/political03.jpg" /></a>
                <a href="gallery/political04.jpg" class="fancybox-thumb" rel="political"><img class="thumbnail" src="gallery/political04.jpg" /></a>
            </div>            
            <div class="left_gallery">
                <h3>.other</h3>
                <a href="gallery/01.jpg" class="fancybox-thumb" rel="other"><img class="thumbnail" src="gallery/01.jpg" /></a>
                <a href="gallery/02.jpg" class="fancybox-thumb" rel="other"><img class="thumbnail" src="gallery/02.jpg" /></a>
                <a href="gallery/03.jpg" class="fancybox-thumb" rel="other"><img class="thumbnail" src="gallery/03.jpg" /></a>
                <a href="gallery/04.jpg" class="fancybox-thumb" rel="other"><img class="thumbnail" src="gallery/04.jpg" /></a>
                <a href="gallery/05.jpg" class="fancybox-thumb" rel="other"><img class="thumbnail" src="gallery/05.jpg" /></a>
            </div>
        </section>
>>>>>>> fd0750b2616e2a09a4a0821f1939a242ff82f9a5
    </div>
    </br>
    </br>
    <div class="right_gallery">
        <h3>.what it takes to be a hero</h3>
        <a href="gallery/hero01.jpg" class="fancybox-thumb" rel="hero">
            <img class="thumbnail" src="gallery/hero01.jpg" />
        </a>
        <a href="gallery/hero02.jpg" class="fancybox-thumb" rel="hero">
            <img class="thumbnail" src="gallery/hero02.jpg" />
        </a>
        <a href="gallery/hero03.jpg" class="fancybox-thumb" rel="hero">
            <img class="thumbnail" src="gallery/hero03.jpg" />
        </a>
    </div>
    </br>
    </br>
    <div class="left_gallery">
        <h3>.manipulation</h3>
        <a href="gallery/manipulation01.jpg" class="fancybox-thumb" rel="manipulation">
            <img class="thumbnail" src="gallery/manipulation01.jpg" />
        </a>
        <a href="gallery/manipulation02.jpg" class="fancybox-thumb" rel="manipulation">
            <img class="thumbnail" src="gallery/manipulation02.jpg" />
        </a>
        <a href="gallery/manipulation03.jpg" class="fancybox-thumb" rel="manipulation">
            <img class="thumbnail" src="gallery/manipulation03.jpg" />
        </a>
    </div>
    </br>
    </br>
    <div class="right_gallery">
        <h3>.political</h3>
        <a href="gallery/political01.jpg" class="fancybox-thumb" rel="political">
            <img class="thumbnail" src="gallery/political01.jpg" />
        </a>
        <a href="gallery/political02.jpg" class="fancybox-thumb" rel="political">
            <img class="thumbnail" src="gallery/political02.jpg" />
        </a>
        <a href="gallery/political03.jpg" class="fancybox-thumb" rel="political">
            <img class="thumbnail" src="gallery/political03.jpg" />
        </a>
        <a href="gallery/political04.jpg" class="fancybox-thumb" rel="political">
            <img class="thumbnail" src="gallery/political04.jpg" />
        </a>
    </div>
    </br>
    </br>
    <div class="left_gallery">
        <h3>.other</h3>
        <a href="gallery/01.jpg" class="fancybox-thumb" rel="other">
            <img class="thumbnail" src="gallery/01.jpg" />
        </a>
        <a href="gallery/02.jpg" class="fancybox-thumb" rel="other">
            <img class="thumbnail" src="gallery/02.jpg" />
        </a>
        <a href="gallery/03.jpg" class="fancybox-thumb" rel="other">
            <img class="thumbnail" src="gallery/03.jpg" />
        </a>
        <a href="gallery/04.jpg" class="fancybox-thumb" rel="other">
            <img class="thumbnail" src="gallery/04.jpg" />
        </a>
        <a href="gallery/05.jpg" class="fancybox-thumb" rel="other">
            <img class="thumbnail" src="gallery/05.jpg" />
        </a>
    </div>
</section>
</div>
