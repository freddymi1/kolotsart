<?php
function getServices(){
    global $db;
    $req = $db -> query("
        SELECT      services.id,
                    services.titre,
                    services.image,
                    services.date,
                    services.contenue,
                    admins.nom
        FROM        services
        JOIN admins
        ON services.auteur=admins.email
        WHERE posted = '1'
        ORDER BY date ASC
    ");
    $result = [];
    while ($rows = $req -> fetchObject()){
        $result[] = $rows;
    }
    return $result;
}

function contacts($nom, $prenoms, $email, $service, $objet, $message){
    global $db;
    $sms = array(
        'nom'           => $nom,
        'prenoms'       => $prenoms,
        'email'         => $email,
        'service'       => $service,
        'objet'         => $objet,
        'message'       => $message
    );
    $sql = "INSERT INTO contacts(nom,prenoms,email,service,objet,message,date) VALUES(:nom, :prenoms, :email, :service, :objet, :message,  NOW())";
    $req = $db ->prepare($sql);
    $req->execute($sms);
}