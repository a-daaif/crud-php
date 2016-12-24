<?php

require_once "model.php";

$action = isset($_GET['action']) ? $_GET['action'] : '';

$client = (object) ['id' => -1, 'nom' => '', 'ville' => '', 'telephone' => ''];
$form_action = 'add';

switch($action)
{
    case 'add':
        $nom = $_GET['nom'];
        $ville = $_GET['ville'];
        $tel = $_GET['tel'];
        ajouterClient($nom, $ville, $tel);
        break;
    case 'del':
        $id = $_GET['id'];
        supprimerClient($id);
        break;
    case 'edit':
        $id = $_GET['id'];
        $client = getClient($id);
        $form_action = 'update';
        break;
    case 'update':
        $id = $_GET['id'];
        $nom = $_GET['nom'];
        $ville = $_GET['ville'];
        $tel = $_GET['tel'];
        modifierClient($id, $nom, $ville, $tel);
        break;
}
$clients = getAllClients();