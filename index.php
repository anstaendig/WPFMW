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
                       <a class="navbar-brand" href="index.php?site=index.php" class="active">HOME</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                       <ul class="nav navbar-nav">
                          <li>
                              <a href="">.vita</a>
                          </li>
                          <li <?php if ($_GET['site'] == 'gallery_kuenstler.php') {echo 'class="active"';}?>>
                              <a href="index.php?site=gallery_kuenstler.php">.gallery</a>
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
                          <li <?php if ($_GET['site'] == 'impressum.php') {echo 'class="active"';}?>>
                              <a href="index.php?site=impressum.php">xx</a>
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
             Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
          </section>
          <section>
             <div id="photos"></div>
          </section>
          <section>
              <figure>
                <img src="gallery/sakura1.jpg" alt="The Pulpit Rock" height="300px">
                 <figcaption>She wants to move.</figcaption>
                </figure>
          </section>
      </div>
      <!-- Ende Hauptinhalt -->
      
      <div class="clearer"></div>
    
      <footer>
          <p>WPF Moderne Webanwendungen SS 2013 &amp; WS 2013/2014 | &copy; SS NF MH ND</p>
      </footer>
  </body>
</html>