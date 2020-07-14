<?php
//Pour le portfolio
function get_portfolio(){
    global $db;
    $req = $db-> query("
        SELECT  portfolio.id,
                portfolio.titre,
                portfolio.image,
                portfolio.contenue,
                portfolio.date,
                admins.nom
        FROM    portfolio
        JOIN    admins
        ON portfolio.auteur=admins.email
        WHERE posted = '1'
        ORDER BY date DESC
        LIMIT 0,6
    ");
    $resultats = array();
    while($rows = $req->fetchObject()){
        $resultats[] = $rows;
    }
    return $resultats;
}
//Pour le gallery

function get_gallery(){
    global $db;
    $req = $db->query("
        SELECT  gallery.id,
                gallery.titre,
                gallery.image,
                gallery.contenue,
                gallery.date,
                admins.nom
        FROM    gallery
        JOIN    admins
        ON gallery.auteur=admins.email
        WHERE posted = '1'
        ORDER BY date ASC
    ");
    $results = array();
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }
    return $results;
}

function get_Admins(){
    global $db;
    $req = $db->query("
        SELECT      admins.id,
                    admins.nom,
                    admins.email,
                    admins.role
        FROM admins
        WHERE admins.id=admins.id
    ");
    $result = $req->fetchObject();
    return $result;
}