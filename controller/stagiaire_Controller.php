<?php
require_once __DIR__. __DIR__.'./stagiaire_Controller.php';

function indexAction()
{
    $stagiaires = latest();
    require_once __DIR__. 'view/liste_stagiaires.php';
}

function createAction()
{
    require_once __DIR__. 'view/create.php';
}

function storeAction()
{
    create();

    header('location:index.php?action=list');
}

function editAction()
{
    $id = $_GET['id'];
    $stagiaire = view($id);
    require_once __DIR__. 'view/edit.php';
}

function updateAction()
{
    extract($_POST);
    edit($id, $nom, $prenom, $age, $email, $password);
    header('location:index.php?action=list');
}

function deleteAction()
{
    $id = $_GET['id'];
    require_once __DIR__. 'view/delete.php';
}

function destroyAction()
{
    destroy($_GET['id']);

    header('location:index.php?action=list');

}