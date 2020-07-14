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
    if(in_array($page.'.fonc.php', $pages_fonctions)){
        include 'fonctions/'.$page.'.fonc.php';
    }
?>
<?php
    if($page != 'login' && !isset($_SESSION['admin'])){
        header("Location:index.php?page=login");
    }
?>
<?php
include 'includes/header.php';
?>

<?php
    include 'pages/'.$page.'.php';
?>
<?php
include 'includes/footer.php';
?>
<?php

    $pages_js = scandir('assets/js/');
        if(in_array($page.'.fonc.js', $pages_js)){
        ?>
            <script src="assets/js/<?= $page ?>.fonc.js"></script>
        <?php
        }

?>