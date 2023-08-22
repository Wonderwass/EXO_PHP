<?php
//inclure le fichier database qui contient la fonction permettant de se connecter à la base de données 
require_once("database.php");

if (isset($_POST['envoi'])) {
    //recupérer des données saisies pa l'utilisateur
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars(($_POST['prenom']));
    $email = htmlspecialchars(($_POST['email']));
    $mdp = htmlspecialchars($_POST['mdp']);
    //crypter / hasher  le mot de passe 
    $mdpCrypt = password_hash($mdp, PASSWORD_BCRYPT);
    //il faut se connecter à la base de données
    $db = dbConexion(); //permet d'etablir la conexion avec la data base 
    //preparation de la requete
    $request = $db->prepare("INSERT INTO utilisateurs(nom, prenom, email, mdp)VALUES(?, ?, ?, ?)");
    // execution de la requete
    try {
        $request->execute(array($nom, $prenom, $email, $mdpCrypt));
    } catch (PDOexception $e) {
        echo $e->getMessage(); //afficher l'erreur sql genere
    }

}