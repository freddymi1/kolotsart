<?php
   include 'fonctions/_inc.php';
   $pages = scandir('pages/');//Scanner le dossier pages
    if(isset($_GET['page']) && !empty($_GET['page'])){
        if(in_array($_GET['page'].'.php', $pages)){
            $page = $_GET['page'];
        }else{
            $page = "error";
        }
    }else{
        $page = "accueil";
    }
    $pages_fonctions = scandir('fonctions/');
    if(in_array($page.'.fonct.php', $pages_fonctions)){
        include 'fonctions/'.$page.'.fonct.php';
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <link rel="icon" href="assets/imgs/logo/techdev.png" sizes="32x32" type="image/png">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>Kolots'art</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/GallerySlider.css" media="screen">
        <?php if($page == 'accueil'): ?>
        <script src="assets/js/GallerySlider.js" async></script>
        <?php endif ?>
        <script src="assets/js/scrollreveal.js"></script>
        
    </head>
 <body data-spy="scroll" data-target="#navbarResponsive">

<?php
$carousel = <<<HTML
    <div id="home">
        <img class="curvy" src="assets/imgs/slider/curvy.png">
        <img class="wave" src="assets/imgs/slider/wave.png">
        <!-- Debut de slider-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
        
            <!-- Debut du carousel inner-->
            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background:url(assets/imgs/slider/slider-1.jpg) center no-repeat;">
                </div>
                <!-- Fin du slide 1-->
                <!-- Slide 2 -->
                <div class="carousel-item" style="background:url(assets/imgs/slider/slider-2.jpg) center no-repeat;">
                </div>
                <!-- Fin du slide 2-->
                <!-- Slide 3 -->
                <div class="carousel-item" style="background:url(assets/imgs/slider/slider-3.jpg) center no-repeat;">
                </div>
                <!-- Fin du slide 3-->
                
                <div class="carousel-caption text-center">
                    <h1 class="slide-down">Bienvenue chez kolots'art</h1>
                    <div class="separator">
                        <div class="line line-left"></div>
                        <div class="asterisk"><i class="fa fa-asterisk"></i></div>
                        <div class="line line-right"></div>
                    </div>
                    <h3 class="single-animation">Nos talents à votre services</h3>
                    <a href="#about" class="btn btn-outline-light btn-lg animate-top">Commencer maintenant</a>
                </div>
                <!-- Fin du slide 3-->
            </div>
            <!-- Fin du carousel inner-->
            <!-- Next & Prev button-->
            <a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
        
    </div>
HTML;
?>
   
    <?php if($page == 'accueil'): ?>
        <?= $carousel ?>
    <?php endif ?>
<?php     
include ('includes/topbar.php');
?>

<?php
    include 'pages/'.$page.'.php';
?>
        <?php if($page == 'accueil'):?>
            <footer>
                <div class="container">
                    <div class="back-to-top">
                        <a href="#home"><i class="fa fa-chevron-up"></i></a>
                    </div>
                    <div class="justify-content-center">
                        
                        <div class="footer-container text-center" id="adressFooter">
                            <div class="container-contact-footer animate-top">
                                <img src="assets/imgs/logo/kolotsart-1.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, rerum.</p>
                                <h4 class="titleContactFooter">Contact info:</span></h4>
                                <p class="telContact">+261 (0)34 75 979 57 / +261 (0)34 21 243 19</p>
                                <p class="emailContact">michelfreddy1992@gmail.com</p>
                                <p class="siteContact">www.mada.kolotsart.mg</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="iconeSocialeFooter animate-left">
                                        <h4>Suivez-nous sur</h4>
                                        <a href="http://facebook.com" target="blank" class="btnfoot"><i class="fa fa-facebook"></i></a>
                                        <a href="http://youtube.com" target="blank" class="btnfoot"><i class="fa fa-youtube"></i></a>
                                        <a href="http://linkedin.com" target="blank" class="btnfoot"><i class="fa fa-linkedin"></i></a>
                                        <a href="http://twitter.com" target="blank" class="btnfoot"><i class="fa fa-twitter"></i></a>
                                        <a href="http://instagram.com" target="blank" class="btnfoot"><i class="fa fa-instagram"></i></a>
                                        <a href="http://google.com" target="blank" class="btnfoot"><i class="fa fa-google"></i></a>
                                    </div>
                            
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </footer>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-6">
                        <p class="copy-name">Copyright &copy; kolots'art 2020</p>
                    </div>
                    <div class="col-lg-6">
                        <p class="developper-name">Développé par <a class="name-dev" href="#">Freddy Michel</a></p>
                    </div>
                </div>
                </div>
            </div>
        <?php else: ?>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-6">
                        <p class="copy-name">Copyright &copy; techdev 2020</p>
                    </div>
                    <div class="col-lg-6">
                        <p class="developper-name">Développé par <a class="name-dev" href="#">Freddy Michel</a></p>
                    </div>
                </div>
                </div>
            </div>
        <?php endif ?>
        <script src="assets/js/jquery-2.2.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/parallaxie.js"></script>
        <script src="assets/js/animations.js"></script>
        <script src="assets/js/bootstrap.bundle.js" ></script>
        <script src="assets/js/main.js" ></script>
        <script>
            $('.web-dev').parallaxie({
                speed:0.5
            });
            $('.carousel-item').parallaxie({
                speed:.5,
                offest:50
            })
            $('.wave').parallaxie({
                speed:.5,
                offset:100
            })
            $('.web-separator').parallaxie({
                speed:.5,
                offset:100
            })
            $('.parallaxe').parallaxie({
                speed:.5,
                offset:100
            })
        </script>
    </body>
</html>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);
?>
<style type="text/css">
    @media screen and (min-width: 768px) {
        .modal-dialog {
            width: 700px; /* New width for default modal */
        }

        .modal-sm {
            width: 350px; /* New width for small modal */
        }
    }

    @media screen and (min-width: 992px) {
        .modal-lg {
            width: 950px; /* New width for large modal */
        }
    }

</style>
<!--<div id="monModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog"">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true" style="color:red;">&times;</span></button>
                    <h4 class="modal-title"><center><b></b></center></h4>
                </div>
                <div class="modal-body">
                    <form id="monForm" action="" method="post">
                        <input type="hidden" name="txtId" value="0">
                        <div class="row">
                            <div class="col-md-12">
                                
                                <div class="form-group has-feedback">
                    <label for="nombiblio">Adresse email:</label>
                    <b><input type="text" name="mail" id="mail" class="form-control" placeholder="Votre email" /></b><span class="fa fa-envelope form-control-feedback text-green"></span>
                </div>
                <div class="form-group has-feedback">
                    <label for="nombiblio">Mot de passe:</label>
                    <b><input type="text" name="pass" id="pass" class="form-control" placeholder="Votre mot de passe" /></b><span class="fa fa-lock form-control-feedback text-green"></span>
                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button  class="btn btn-success btn-sm"><i class="fa fa-check"></i> S'INSCRIRE</button>
                    <button  id="btnSave" class="btn btn-primary btn-sm" onclick="reload_table()"><i class="fa fa-user"></i> SE CONNECTER</button>
                </div>
            </div>
        </div>
</div> -->