
<?php
$portfolio = get_Portfolios();
if($portfolio == false){
    header("Location:index.php?page=error");
}else{
?>
<div class="main-show">
    <div class="container">
    <h1 class="main-titleSection"><?= $portfolio -> titre ?></h1>
        <h4>Ajouter par <span class="auteur-main-add"><?= $portfolio -> nom ?></span>, le <span class="date-main-add"><?= date("d-m-Y à H:i", strtotime($portfolio -> date)) ?></span></h4>
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="fermer">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">

            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
        </div>
        <div class="main-show-content">
            
            <div class="col-img-show animate-left">
                <div class="card-content">
                    <img id="myImg" class="responsive-img" src="assets/imgs/portfolio/<?= $portfolio -> image ?>" alt="<?= $portfolio -> titre ?>">
                </div>
            </div>
            <div class="col-content-show animate-right">
                
                <div class="global-headline padding-left">
                    
                <h2 class="main-titleCard">Information sur cette section</h2>
                    <div class="heading-underline"></div>
                    <p class="lead">
                        <?= $portfolio -> contenue ?> 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
}
?>

