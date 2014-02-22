<!DOCTYPE html>
<html>

<head>
    <title>The Flickr Gallery</title>
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
    <!--script src="myjs/getflickr.js" type="text/javascript"></script-->

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
                        <a class="navbar-brand" href="#">The Flickr Gallery</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <!--form class="navbar-form navbar-left" role="search" onsubmit="getFlickr.leech(document.getElementById('tag').value, 'populate'); return false;"-->
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Suche" id="tag" name="tag">
                            </div>
                            <!--button type="submit" class="btn btn-default" id="btnSearch">Los!</button-->
                            <input id="btnSearch" class="btn btn-default" type="button" value="Search">
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="logout" onmousedown="activate()">
                                <a href="index.php">Logout</a>
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
        <section class="defaulttxt" id="txt">
            Geben Sie im Suchfeld das gewünschte Tag ein.
        </section>
        <section>
            <div id="photos"></div>
        </section>
    </div>
    <!-- Ende Hauptinhalt -->

    <div class="clearer"></div>

    <footer>
        <p>WPF Moderne Webanwendungen SS 2013 &amp; WS 2013/2014 | &copy; SS NF MH ND</p>
    </footer>
</body>

</html>