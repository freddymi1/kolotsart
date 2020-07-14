<?php

function is_admin($email, $password){
    global $db;
    $login = [
        'email'     => $email,
        'password'   => sha1($password)
    ];
    $sql = "SELECT * FROM admins WHERE email = :email AND passw = :password";
    $req = $db->prepare($sql);
    $req->execute($login);
    $existe = $req->rowCount($sql);
    return $existe;

}
