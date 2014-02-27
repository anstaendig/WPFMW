<?php 
    session_start();
?>

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
    <div id="wrapper">
    	<section id="Text_Vita">
    Hier bekommen Sie einen Einblick in den geschichtlichen Hintergrund der Werke des Künstlers Max Mustermann.
    	</section>
        <!-- ueberschriften-->
        <div class="bilder">
        		<figure>
    		    	<img src ="gallery/02.jpg" alt="Arte Povera">
    		    	<!--<figcaption>Kunsttil A: Arte Povera</figcaption>-->
    		    </figure>
    		    <figure>
    		    	<img src ="gallery/sakura1.jpg" alt="Naturalismus">
    		    	<!--<figcaption>Kunsttil B: Naturalismus</figcaption>-->
        		</figure>
        	</div>

        	<div class="buttons">
    			<button id="teil1">Stil A - Arte Povera</button>
            	<button id="teil2"> Stil B - Naturalismus</button>
        	</div>
            
        <!--Teil1-->
      
            <div id="teil11">
                <h1> Stil A - Arte Povera: geschichtlicher Hintergrund</h1>

                    <p id="einleitung"> Arte Povera beschreibt einen Kunsttil, der im Jahre XXXX Einzug fand.
                    </p>

                <div class="content">

                    <button id="titleA"> berühmte Künstler der Arte Povera </button>
                        <p id="A"> Germano Celant </p>

                </div>

                <div class="content">
                    <button id="titleB"> berühmte Gemälde der Arte Povera </button>
                        <p id="B"> Reiter am Strand
                        </p>
                </div>
               
              
            </div>
            <!-- Ende Teil1 -->
            <!-- Teil 2-->
            <div id="teil22">
                <h2> Stil B - Naturalismus: geschichtlicher Hintergrund</h2>
                 <p id="einleitung"> Naturalismus beschreibt einen Kunsttil, der im Jahre XXXX Einzug fand.
                    </p>
                <div class="content">
                    <button id="title1">berühmte Künstler des Naturalismus</button>
                    <p id="erstes">Picasso</p>
                </div>

                <div class="content">
                    <button id="title2">berühmte Gemälde des Naturalismus</button>
                    <div id="zweites">
                            <p>das Gewässer </p>
                        <ul>
                            <li><p> Liste1</p></li>
                            <li><p> Liste2</p></li>
                            <li><p> Liste3</li></p>
                        </ul>
                    </div>
                </div>

               
            </div>
            <!--Ende Teil 2-->
    </div>
    </div>
    <!-- Ende gesamter Inhalt-->
</div>