<!DOCTYPE html>
<html>
  <head>
      <title>The Gallery</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="content-type" content="text/html"; charset="utf-8">
      <meta name="author" content="SS NF MH ND">

      <link href="mycss/lightbox.css" rel="stylesheet" />
      <link href="css/bootstrap.css" rel="stylesheet"/>
      <link href="mycss/bootsnipp.css" rel="stylesheet"/>
      <link href="mycss/mycss.css" rel="stylesheet"/>
      <link href="mycss/gallery_flickr.css" rel="stylesheet" />
      
      <script src="js/jquery-1.7.2.min.js"></script>
      <script src="myjs/lightbox.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="myjs/bootsnipp.js"></script>
      <script src="myjs/myjs.js"></script>
      <script src="myjs/gallery_flickr.js"></script>
      <script type="text/javascript">
        $(function(){
        	$("#btnSearch").click(function(){
                changeContent();
                var tag = document.getElementById("tag").value;
        		var flickrFeed = "http://api.flickr.com/services/feeds/photos_public.gne?tags="+tag+"&tagmode=any&format=json&jsoncallback=?";
        		$.getJSON(flickrFeed, function(data){			
        			
        			var feedTitle = data.title;
        			
        			var htmlText = "";
        			$.each(data.items, function(i, post){
        				htmlText += "<div><h4>" + post.title + "</h4>";
        				htmlText += "<img src='" + post.media.m + "'></div>";				
        			});
        			
        			/*$("#photos").html("<h3>" + feedTitle + "</h3>");*/
                    $("#photos").html("<h3>Bilder mit \"" + tag + "\"</h3>");
        			$("#photos").append(htmlText);
        		});		
        	});
        });
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
                          <li <?php if ($_GET['site'] == 'index.php' ) {echo 'class="active"';}?>>
                              <a href="">.vita</a>
                          </li>
                          <li <?php if ($_GET['site'] == 'gallery_kuenstler.php' ) {echo 'class="active"';}?>>
                              <a href="index.php?site=gallery_kuenstler.php">.gallery</a>
                          </li>
                          <li <?php if ($_GET['site'] == 'gallery_flickr.php' ) {echo 'class="active"';}?>>
                              <a href="index.php?site=gallery_flickr.php">.galleryflickr</a>
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
                          <li <?php if ($_GET['site'] == 'impressum.php' ) {echo 'class="active"';}?>>
                              <a href="index.php?site=impressum.php">.impressum</a>
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
          <?php
            if(isset($_GET['site']))
            {
                switch( $_GET['site'] )
                {
                    case'index.php':
                        include('index.php');
                        break;
                    case'vita.php':
                        include('vita.php');
                        break;
                    case'gallery_kuenstler.php':
                        include('gallery_kuenstler.php');
                        break;
                    case'gallery_flickr.php':
                        include('gallery_flickr.php');
                        break;
                    case'impressum.php':
                        include('impressum.php');
                        break;
                    default:
                        include('main.php');
                        break;
                }
            }
            else
            {
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