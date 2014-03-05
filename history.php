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

<div id="wrapper">
    <div class="einleitung">
    <h1> the history </h1>
    <p>
Hier bekommen Sie einen Einblick in den geschichtlichen Hintergrund der Werke des Künstlers Max Mustermann.
    </p>
    </div>
    <!-- ueberschriften-->
    <div class="bilder">
            <figure>
                <img src ="gallery/02.jpg" alt="Arte Povera">
                <!--<figcaption>Kunsttil A: Arte Povera</figcaption>-->
            </figure>
            <figure id="bild2">
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
            <h3> Stil A - Arte Povera: geschichtlicher Hintergrund</h3>

                <p id="einleitung"> Arte Povera beschreibt einen Kunsttil, der im Jahre XXXX Einzug fand.
                </p>

            <div class="content">

                <p> berühmte Künstler der Arte Povera: </p>
                
                   <ul>
                        <li><p> Germano Celant </p></li>
                        <li><p> Künstler 2</p></li>
                        
                    </ul>
            
            </div>
         
           
          
        </div>
        <!-- Ende Teil1 -->
        <!-- Teil 2-->
        <div id="teil22">
            <h3> Stil B - Naturalismus: geschichtlicher Hintergrund</h3>
             <p id="einleitung"> Naturalismus beschreibt einen Kunsttil, der im Jahre XXXX Einzug fand.
                </p>
            <div class="content">
                <p>berühmte Künstler des Naturalismus</p>
         
                <ul>
                        <li><p> Picasso </p></li>
                        <li><p> Künstler 2</p></li>
                       
                    </ul>
            
            </div>


           
        </div>
        <!--Ende Teil 2-->
</div>