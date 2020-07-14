<?php 

function get_galleries(){
    global $db;
    $req = $db -> query("
        SELECT      gallery.id,
                    gallery.titre,
                    gallery.image,
                    gallery.date,
                    gallery.contenue,
                    admins.nom
        FROM        gallery
        JOIN admins
        ON gallery.auteur=admins.email
        WHERE posted = '1'
        ORDER BY date ASC
    ");
    $result = [];
    while ($rows = $req -> fetchObject()){
        $result[] = $rows;
    }
    return $result;
}