<?php
function get_gallerie(){
    global $db;
    $req = $db->query("
        SELECT      gallery.id,
                    gallery.titre,
                    gallery.contenue,
                    gallery.date,
                    gallery.image,
                    admins.nom
        FROM gallery
        JOIN admins
        ON gallery.auteur=admins.email
        WHERE gallery.id='{$_GET['id']}'
        AND gallery.posted = '1'
    ");
    $result = $req->fetchObject();
    return $result;
}