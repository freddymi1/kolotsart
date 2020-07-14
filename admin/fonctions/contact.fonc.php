<?php

function get_Messages(){
    global $db;
    $req = $db->query("SELECT  * FROM contacts WHERE contacts.seen = '0' ORDER BY contacts.date DESC");
    $results = [];
    while ($rows = $req -> fetchObject()){
        $results[] = $rows;
    }
    return $results;
}

function get_Message(){
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
    while ($rows = $req -> fetchObject()){
        $results[] = $rows;
    }
    return $results;
}