<nav class="navbar navbar-expand-md navbar-dark bg-dark" id="navbar" data-sticky>
    <a href="index.php?page=accueil" class="navbar-brand"><img src="assets/imgs/logo/techdev.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.php?page=accueil">Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?page=accueil#about">Apropos</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?page=accueil#service">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?page=accueil#portfolio">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?page=accueil#gallery">Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php?page=accueil#contact">Contact</a></li>

            <li class="btn-inscrire">
                <a id="btnMembre" class="btn btn-success btn-sm" href="#">S'inscrire<span class="fa fa-angle-right pull-right text-orange"></span></a>
            </li>
        </ul>
    </div>
</nav>
            <!-- Fin du navigation -->
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
    <div id="monModal" class="modal fade" tabindex="-1" role="dialog">
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <b><span class="fa fa-user icone"></span><input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom" required="" ></b>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <b><span class="fa fa-user icone"></span><input type="text" class="form-control" name="prenom" id="prenom" placeholder="Votre prénoms" required="" ></b>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <b><span class="fa fa-envelope icone"></span><input type="email" class="form-control" name="email" placeholder="Votre adresse email" required=""></b>
                                </div>
                                <div class="form-group">
                                    <b><span class="fa fa-lock icone"></span><input type="password" class="form-control" name="password" placeholder="Votre Mot de passe" required=""></b>
                                </div>
                                <div class="form-group">
                                    <b><span class="fa fa-key icone"></span><input type="password" class="form-control" name="password" placeholder="Confirmé votre Mot de passe" required=""></b>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button  class="btn btn-success btn-sm"><i class="fa fa-check"></i> DEJA MEMBRE</button>
                    <button  id="btnSave" class="btn btn-primary btn-sm" onclick="reload_table()"><i class="fa fa-user"></i> S'INSCRIRE</button>
                </div>
            </div>
        </div>
    </div>