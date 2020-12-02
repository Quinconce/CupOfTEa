<?php
class DisconnectController {
    

    public function disconnect(){
    unset($_SESSION['user']);

    //OU supprimer toutes les sessions
    session_destroy();

    //rediriger vers la page souhaitée
    header('location:index.php?page=accueil');
    }



}