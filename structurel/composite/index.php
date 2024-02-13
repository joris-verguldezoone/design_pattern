<?php 
require_once('./TextElement.php');
require_once('./InputElement.php');
require_once('./Form.php');

$emailLabel = new TextElement('Email:');
$emailInput = new InputElement();

$passwordLabel = new TextElement('Password:');
$passwordInput = new InputElement();

// Création des formulaires et ajout des éléments
$emailForm = new Form();
$emailForm->addElement($emailLabel);
$emailForm->addElement($emailInput);

$passwordForm = new Form();
$passwordForm->addElement($passwordLabel);
$passwordForm->addElement($passwordInput);

// Création du formulaire principal et ajout des formulaires et éléments
$mainForm = new Form();
$mainForm->addElement($emailForm);
$mainForm->addElement($passwordForm);

// Affichage du rendu du formulaire principal
echo $mainForm->render();