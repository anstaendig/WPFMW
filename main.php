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
    <div class="page-header text-center">
        <h1>.adam</h1>
    </div>
    <ul class="timeline">
        <li>
            <div class="timeline-badge primary">
                <a>
                    <i class="glyphicon glyphicon-record" rel="tooltip" title="24.02.2014" id=""></i>
                </a>
            </div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <img class="img-responsive" src="gallery/political04.JPG" />

                </div>
                <div class="timeline-body pull-right">
                    <p>JUST DO IT</p>

                </div>
            </div>
        </li>

        <li class="timeline-inverted">
            <div class="timeline-badge primary">
                <a>
                    <i class="glyphicon glyphicon-record invert" rel="tooltip" title="22.02.2014" id=""></i>
                </a>
            </div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <img class="img-responsive" src="gallery/hero01.jpg" />

                </div>
                <div class="timeline-body">
                    <p>What It Takes To Be A Hero</p>
                </div>
            </div>
        </li>
        <li>
            <div class="timeline-badge primary">
                <a>
                    <i class="glyphicon glyphicon-record" rel="tooltip" title="04.02.2014" id=""></i>
                </a>
            </div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <img class="img-responsive" src="gallery/manipulation01.jpg" />

                </div>
                <div class="timeline-body pull-right">
                    <p>Manipulation</p>
                </div>

            </div>
        </li>



    </ul>
</div>