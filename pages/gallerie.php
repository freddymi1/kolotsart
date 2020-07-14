<?php
$gallerie = get_galleries();
foreach($gallerie as $gallery){
?>
<div class="list-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-7 blog-content">
                <h4 class="gallery-titre"><?= $gallery -> titre ?></h4>
                <h6 class="autorgallery">Posté par <strong class="nameAutor"> <?= $gallery -> nom ?></strong> Le <i class="datePosted"><?= date("d/m/Y à H:i:s",strtotime($gallery -> date)); ?></i></h6>
                <div class="heading-underline"></div>
                <p class="content-gallery"><?= substr(nl2br($gallery -> contenue),0,800) ?>...</p>
            </div>
            <div class="col-md-5 blog-img">
                <img src="assets/imgs/gallery/<?= $gallery -> image ?>" class="responsive-img" alt=" <?= $gallery -> titre ?>">                
                <br><br>
                <a class="btn btn-secondary btn-md" href="index.php?page=gallery&id=<?= $gallery -> id ?>">Lire les informations complets</a>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
1