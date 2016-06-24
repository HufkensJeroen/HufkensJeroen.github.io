<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/default.css" />

    <link rel="shortcut icon" type="image/png" href="../img/img_web/favicon.ico" />

    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="../css/bootstrap-image-gallery.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery.backstretch.min.js"></script>

    <title>Foto - Koksijde 2016</title>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.html">Koksijde 2016</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../home.html">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Foto<span class="caret"></span></a>
                        <ul class="dropdown-menu inverse-dropdown">
                            <li><a href="Galerijen.php?galerijnr=0">Klasfoto's</a></li>
                            <li><a href="Galerijen.php?galerijnr=1">Dag 1</a></li>
                            <li><a href="Galerijen.php?galerijnr=2">Dag 2</a></li>
                            <li><a href="Galerijen.php?galerijnr=3">Dag 3</a></li>
                            <li><a href="Galerijen.php?galerijnr=4">Dag 4</a></li>
                            <li><a href="Galerijen.php?galerijnr=5">Dag 5</a></li>
                            <li><a href="Galerijen.php?galerijnr=6">Dag 6</a></li>
                            <li><a href="Galerijen.php?galerijnr=7">Dag 7</a></li>
                            <li><a href="Galerijen.php?galerijnr=8">Dag 8</a></li>
                            <li><a href="Galerijen.php?galerijnr=9">Dag 9</a></li>
                            <li><a href="Galerijen.php?galerijnr=10">Dag 10</a></li>
                        </ul>
                    </li>
                    <li><a href="../kader.html">Kader</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Content -->
    <div class="fluid-container">
        <!-- Banner -->
        <div class="col-md-12" id="banner">
        </div>
        <script>
            $("#banner").backstretch([
                "../img/img_web/web_home/bg1.jpg",
                "../img/img_web/web_home/bg2.jpg"
            ], {
                fade: 750,
                duration: 10000
            });
        </script>
    </div>
    <div class="container">

        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false">
            <!-- The container for the modal slides -->
            <div class="slides"></div>
            <!-- Controls for the borderless lightbox -->
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
            <!-- The modal dialog, which will be used to wrap the lightbox content -->
            <div class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body next"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left prev">
                                <i class="glyphicon glyphicon-chevron-left"></i> Previous
                            </button>
                            <button type="button" class="btn btn-primary next">
                                Next
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include("Config.php");
            $galerijnr = $_GET["galerijnr"];
            if($galerijnr == "")
                {
                    header('Location:../html/foto.html');
                }
            else
                {                              
                    //toon thumbnamails van het doorgegeven galerijnummer, standaard nr 1
                    if($galerijnr==0){
                        echo("<h1 class='text-center'>Klasfoto's</h1>");
                    } else {
                        echo("<h1 class='text-center'>Dag $galerijnr</h1>");
                    }
                    echo("<div id='links'>");
                    echo("<row>");
                    for($i = $beginnr[$galerijnr]; $i <= $aantal[$galerijnr]; $i++)
                    {
                        $fotoklein = $thumbmap[$galerijnr] . $bestandsnaam[$galerijnr] . $i . $extensie[$galerijnr];
                        $fotogroot = $grootmap[$galerijnr] . $bestandsnaam[$galerijnr] . $i . $extensie[$galerijnr];

                        echo("<div class='col-lg-1 col-md-2 col-sm-3 col-xs-4'>");

                        echo("<a href='$fotogroot' data-gallery>");

                        echo("<img src='$fotoklein' width='100%'>");

                        echo("</a>");

                        echo("</div>");
                    }
                    echo("</row></div>");
                }
        ?>
        
        

        <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
        <script src="js/bootstrap-image-gallery.min.js"></script>
    </div>
    
    <!-- Footer -->
    <footer>
        <div class="vertical-center">
            <p style="padding-top:2em;">Design: Jeroen <span style="margin-left: 1em; margin-right: 1em;">-</span> &#9400; Jeroen &amp; Top Vakantie</p>
        </div>
    </footer>
</body>

</html>