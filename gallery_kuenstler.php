<?php 
    if (isset($_SESSION["rights"])) {
        if ($_SESSION["rights"] == 1) {
            echo '<script type="text/javascript"> changeView("user1"); </script>';
        } else if ($_SESSION["rights"] == 2) {
            echo '<script type="text/javascript"> changeView("user2"); </script>';
        } else {
            echo '<script type="text/javascript"> changeView("main"); </script>';
        }
    }
?>

<div class="container">
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

    </div>
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
        <a href="gallery/political05.jpg" class="fancybox-thumb" rel="political">
            <img class="thumbnail" src="gallery/political05.jpg" />
        </a>
    </div>
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
</div>
