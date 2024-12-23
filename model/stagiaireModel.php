<?php

function database_connection()
{
    return new PDO('mysql:dbname=ofppt;host=localhost', 'root', '');
}

function latest()
{
    $pdo = database_connection();
    return $pdo->query('SELECT * FROM stagiaires ORDER BY id DESC')->fetchAll(PDO::FETCH_OBJ);
}

function create()
{
    extract($_POST);
    $pdo = database_connection();
    $sqlState = $pdo->prepare("INSERT INTO stagiaires VALUES(null,?,?,?,?,?)");
    return $sqlState->execute([$nom, $prenom, $age, $email, $password]);
}

function edit($id, $nom, $prenom, $age, $email, $password)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("UPDATE stagiaires
                                    SET nom = ? ,
                                        prenom = ? , 
                                        age = ? , 
                                        login = ? , 
                                        password = ?
                                    WHERE id = ?");
    return $sqlState->execute([$nom, $prenom, $age, $email, $password, $id]);
}

function destroy($id)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("DELETE FROM stagiaires WHERE id = ?");
    return $sqlState->execute([$id]);
}

function view($id)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("SELECT * FROM stagiaires WHERE id = ?");
    $sqlState->execute([$id]);
    return $sqlState->fetch(PDO::FETCH_OBJ);

}