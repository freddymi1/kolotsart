<nav class="navbar navbar-expand-md navbar-dark bg-dark" id="navbar" data-sticky>
    <a href="index.php?page=accueil" class="navbar-brand"><img src="assets/imgs/logo/kolotsart-1.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <?php if($page == 'accueil'): ?>
                <?= nav_item('index.php','Accueil'); ?>
                <?= nav_item('#about','Apropos'); ?>
                <?= nav_item('#service','Services'); ?>
                <?= nav_item('#portfolio','Portfolio'); ?>
                <?= nav_item('#gallery','Gallery'); ?>
                <?= nav_item('#contact','Contact'); ?>
                <!--<li class="btn-inscrire">
                    <a id="btnMembre" class="btn btn-success btn-sm" href="#">Se connecter<span class="fa fa-angle-right pull-right text-orange"></span></a>
                </li>-->
            <?php else: ?>
                <?= nav_item('index.php','Accueil'); ?>
                <?= nav_item('index.php?page=accueil#about','Apropos'); ?>
                <?= nav_item('index.php?page=accueil#service','Services'); ?>
                <?= nav_item('index.php?page=accueil#portfolio','Portfolio'); ?>
                <?= nav_item('index.php?page=accueil#gallery','Gallery'); ?>
                <?= nav_item('index.php?page=accueil#contact','Contact'); ?>
                <!--<li class="btn-inscrire">
                    <a id="btnMembre" class="btn btn-success btn-sm" href="#">Se connecter<span class="fa fa-angle-right pull-right text-orange"></span></a>
                </li>-->
            <?php endif ?>
        </ul>
    </div>
</nav>
<!-- Fin du navigation -->