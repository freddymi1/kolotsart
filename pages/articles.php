<?php
$articles = get_article();
foreach($articles as $article){
?>
<div class="list-article">
    <div class="container">
        <div class="row">
            <div class="col-md-7 blog-content">
                <h4 class="article-titre"><?= $article -> titre ?></h4>
                <h6 class="autorArticle">Posté par <strong class="nameAutor"> <?= $article -> nom ?></strong> Le <i class="datePosted"><?= date("d/m/Y à H:i:s",strtotime($article -> date)); ?></i></h6>
                <div class="heading-underline"></div>
                <p class="content-article"><?= substr(nl2br($article -> contenue),0,800) ?>...</p>
            </div>
            <div class="col-md-5 blog-img">
                <img src="assets/imgs/portfolio/<?= $article -> image ?>" class="responsive-img" alt=" <?= $article -> titre ?>">                
                <br><br>
                <a class="btn btn-secondary btn-md" href="index.php?page=article&id=<?= $article -> id ?>">Lire les informations complets</a>
            </div>
        </div>
    </div>
</div>
<?php
}
?>