<?php

function get_Portfolios(){
    global $db;
    $req = $db ->query("
        SELECT  portfolio.id,
                portfolio.titre,
                portfolio.image,
                portfolio.contenue,
                portfolio.date,
                admins.nom
        FROM    portfolio
        JOIN    admins
        ON portfolio.auteur=admins.email
        WHERE portfolio.id='{$_GET['id']}'
        AND portfolio.posted = '1'
    ");
    $results = $req->fetchObject();
    return $results;
}