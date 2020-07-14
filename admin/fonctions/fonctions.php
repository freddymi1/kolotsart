<?php
function inTable($table){
    global $db;
    $query = $db->query("SELECT COUNT(id) FROM $table");
    return $nombre = $query->fetch();
}

function get_classe($table, $class){
    if(isset($class[$table])){
        return $class[$table];
    }else{
        return "bg-orange";
    }
}
function get_link($table, $link){
    if(isset($link[$table])){
        return $link[$table];
    }else{
        return "index.php?page=accueil";
    }
}

function get_font($table, $font){
    if(isset($font[$table])){
        return $font[$table];
    }else{
        return "fa-home";
    }
}

function get_contacts(){
    global $db;
    $req = $db->query("
        SELECT  contacts.id,
                contacts.nom,
                contacts.prenoms,
                contacts.email,
                contacts.service,
                contacts.objet,
                contacts.message,
                contacts.date
        FROM contacts
        WHERE contacts.seen = '0'
        ORDER BY contacts.date DESC
    
    ");

    $results = [];
    $nbr = 0;
    while ($rows = $req -> fetchObject()){
            $results[] = $rows;
    }
    return $results;
}

function nbr_Contact(){
    global $db;
    $query = $db->query("SELECT COUNT(*) FROM contacts WHERE seen='0'");
    return $nombre = $query->fetch();
}

