<?php

include_once('connection.php');

class User
{
    private $_db;
    public $error;
    private $_email;
    private $_password;

    public function __construct()
    {
        //$this->_db = new Connection();
        $this->_db = Connection::dbConnect();
    }
    public function __get($name){
      return $this->$name;
    }

    public function Login($email, $password)
    {
        if (!empty($email) && !empty($password)) {
            $st = $this->_db->prepare("SELECT * FROM `users_infos` WHERE email=? and password=?");
            $st->bindParam(1, $email);
            $st->bindParam(2,$password);
            $st->execute();
            if ($st->rowCount() == 1) {
                $triuc = $st->fetch();
                $this->_email = $triuc['email'];
                $this->_password = $triuc['password'];
                $this->error = "Utilisateur vérifié, accès authorisé";
                header('Location: interface.php');
            } else {
                $this->error  = "Identifiant ou mot de passe incorrect";
            }
        } else {
            $this->error = "Merci de compléter les deux champs, identifiant et mot de passe";
        }
    }
    public function Listage()
    {
      //lister tous les users_infos
      $st = $this->_db->prepare("SELECT * FROM `users_infos`");
      $st->execute();
      return $st->fetchall();
    }
}
