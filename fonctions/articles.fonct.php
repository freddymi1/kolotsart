<?php 

function get_article(){
    global $db;
    $req = $db -> query("
        SELECT      portfolio.id,
                    portfolio.titre,
                    portfolio.image,
                    portfolio.date,
                    portfolio.contenue,
                    admins.nom
        FROM        portfolio
        JOIN admins
        ON portfolio.auteur=admins.email
        WHERE posted = '1'
        ORDER BY date ASC
    ");
    $result = [];
    while ($rows = $req -> fetchObject()){
        $result[] = $rows;
    }
    return $result;
}