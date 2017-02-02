<?php
declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 30/01/17
 * Time: 14:44
 */

?>

<?php
ini_set('display_errors','on');
error_reporting(E_ALL);

$bdd = new PDO('mysql:host=localhost;dbname=Datacorp','root', 'Ziron1515' , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));/*affiche des codes d'erreurs liés à connexion BDD*/


if(isset($_POST['form-horizontal']))
{

    if(     !empty($_POST['nom'])              AND !empty($_POST['prenom'])
        AND !empty($_POST['d_naissance']) AND !empty($_POST['sexe'])
        AND !empty($_POST['ec'])          AND !empty($_POST['rue'])
        AND !empty($_POST['postal'])      AND !empty($_POST['ville'])
        AND !empty($_POST['poste'])       AND !empty($_POST['li'])
        AND !empty($_POST['telFixe'])     AND !empty($_POST['tel'])
        AND !empty($_POST['email'])       AND !empty($_POST['lp']))
    {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $d_naissance = htmlspecialchars($_POST['d_naissance']);
        $sexe = htmlspecialchars($_POST['sexe']);
        $ec = htmlspecialchars($_POST['ec']);
        $rue = htmlspecialchars($_POST['rue']);
        $postal = htmlspecialchars($_POST['postal']);
        $ville = htmlspecialchars($_POST['ville']);
        $poste = htmlspecialchars($_POST['poste']);
        $li = htmlspecialchars($_POST['li']);
        $telFixe = htmlspecialchars($_POST['telFixe']);
        $tel = htmlspecialchars($_POST['tel']);
        $email = htmlspecialchars($_POST['email']);
        $lp = htmlspecialchars($_POST['lp']);
        $Candidat = "Candidat";

        echo 'etape2';



                            $insert=$bdd->prepare('INSERT INTO users_infos (`ID`, `nom`, `prenom`, `sexe`, `d_naissance`, `d_inscription`, `email`, `tel`, `rue`, `postal`, `ville`, `entreprise`, `recruteur`, `password`, `statut`, `ec`, `poste`, `li`, `lp`, `telFixe`, vehicule, com) 
                            VALUES(null, :nom, :prenom, :sexe, :d_naissance, NOW(), :email, :tel, :rue, :postal, :ville, :entreprise, :recruteur, :password, :Candidat, :ec, :poste, :li, :lp, :telFixe, :vehicule, :com)');
                            $insert->bindParam(':nom' , $nom);
                            $insert->bindParam(':prenom' , $prenom);
                            $insert->bindParam(':sexe' , $sexe);
                            $insert->bindParam(':d_naissance' , $d_naissance);
                            $insert->bindParam(':email' , $email);
                            $insert->bindParam(':tel' , $tel);
                            $insert->bindParam(':rue' , $rue);
                            $insert->bindParam(':postal' , $postal);
                            $insert->bindParam(':ville' , $ville);
                            $insert->bindParam(':entreprise' , $entreprise);
                            $insert->bindParam(':recruteur' , $recruteur);
                            $insert->bindParam(':password' , $password);
                            $insert->bindParam(':Candidat' , $Candidat);
                            $insert->bindParam(':ec' , $ec);
                            $insert->bindParam(':poste' , $poste);
                            $insert->bindParam(':li' , $li);
                            $insert->bindParam(':lp' , $lp);
                            $insert->bindParam(':telFixe' , $telFixe);
                            $insert->bindParam(':vehicule' , $vehicule);
                            $insert->bindParam(':com' , $com);
                            $insert->execute();
                            $erreur = "Le candidat a bien été ajouté";
                            echo 'etape 3';
    }
    else
    {
        $erreur = "Tous les champs doivent être complétés";
    }

}




?>




    <div class="container">
        <div class="row">
            <div class="col-md-offset-0">
                <h2 align="center">Création d'un nouveau candidat</h2>
                <br /> <br />

                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1" property="">
                    <meta name="description" content="">
                    <meta name="author" content="saga">

                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
                    <!-- Bootstrap Core CSS -->
                    <!--     <link href="css/bootstrap.min.css" rel="stylesheet"> -->
                    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

                <!-- Custom CSS -->
                <style>

                    .othertop{margin-top:10px;}

                </style>

                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->



                </head>

                <body>

                <div class="container">
                    <div class="row">
                        <div class="col-md-10 ">
                            <form class="form-horizontal" method="post">
                                <fieldset>



                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom">Nom</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user">
                                                    </i>
                                                </div>
                                                <input id="Nom" name="nom" type="text" placeholder="Nom" class="form-control input-md">
                                            </div>


                                        </div>


                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="prenom">Prénom</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user">
                                                    </i>
                                                </div>
                                                <input id="prenom" name="prenom" type="text" placeholder="Prénom" class="form-control input-md">
                                            </div>


                                        </div>


                                    </div>

                                    <!-- File Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="chargerPhoto">Charger photo</label>
                                        <div class="col-md-4">
                                            <input id="Upload photo" name="chargerPhoto" class="input-file" type="file">
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="dob">Né(e) le</label>
                                        <div class="col-md-4">

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-birthday-cake"></i>

                                                </div>
                                                <input id="d_naissance" name="d_naissance" type="text" placeholder="Né(e) le" class="form-control input-md">
                                            </div>


                                        </div>
                                    </div>





                                    <!-- Multiple Radios (inline) -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="sexe">Sexe</label>
                                        <div class="col-md-4">
                                            <label class="radio-inline" for="Gender-0">
                                                <input type="radio" name="sexe" id="sexe" value="M" checked="checked">
                                                M
                                            </label>
                                            <label class="radio-inline" for="Gender-1">
                                                <input type="radio" name="sexe" id="Gender-1" value="F">
                                                F
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Multiple Radios (inline) -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="radios">Etat civil:</label>
                                        <div class="col-md-4">
                                            <label class="radio-inline" for="radios-0">
                                                <input type="radio" name="ec" id="radios-0" value="Marié(e)" checked="checked">
                                                Marié(e)
                                            </label>
                                            <label class="radio-inline" for="radios-1">
                                                <input type="radio" name="ec" id="radios-1" value="Célibataire">
                                                Célibataire
                                            </label>
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <label class="col-md-4 control-label col-xs-12" for="Permanent Address">Adresse</label>
                                        <div class="col-md-2  col-xs-4">
                                            <input id="rue" name="rue" type="text" placeholder="Rue" class="form-control input-md ">
                                        </div>

                                        <div class="col-md-2 col-xs-4">

                                            <input id="postal" name="postal" type="text" placeholder="Code Postal" class="form-control input-md ">
                                        </div>


                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Permanent Address"></label>
                                        <div class="col-md-2  col-xs-4">
                                            <input id="ville" name="ville" type="text" placeholder="Commune" class="form-control input-md ">

                                        </div>




                                    </div>



                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Primary Occupation">Poste désiré</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-briefcase"></i>

                                                </div>
                                                <input id="poste" name="poste" type="text" placeholder="Poste désiré" class="form-control input-md">
                                            </div>


                                        </div>
                                    </div>



                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Skills">Language(s) informatique(s) connu(s)</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-graduation-cap"></i>

                                                </div>
                                                <input id="li" name="li" type="text" placeholder="Language(s) informatique(s) connu(s)" class="form-control input-md">
                                            </div>


                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Phone number ">Numéro de téléphone </label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>

                                                </div>
                                                <input id="telFixe" name="telFixe" type="text" placeholder="Fixe " class="form-control input-md">

                                            </div>
                                            <div class="input-group othertop">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-mobile fa-1x" style="font-size: 20px;"></i>

                                                </div>
                                                <input id="tel" name="tel" type="text" placeholder="Portable " class="form-control input-md">

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Email ">Email </label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-envelope-o"></i>

                                                </div>
                                                <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">

                                            </div>

                                        </div>
                                    </div>





                                    <!-- Multiple Checkboxes -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Languages Known">Langues parlée(s)</label>
                                        <div class="col-md-4">
                                            <div class="checkbox">
                                                <label for="Languages Known-0">
                                                    <input type="checkbox" name="lp" id="Languages Known-0" value="Français">
                                                    Français
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="Languages Known-1">
                                                    <input type="checkbox" name="lp" id="Languages Known-1" value="Anglais">
                                                    Anglais
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="Languages Known-2">
                                                    <input type="checkbox" name="lp" id="Languages Known-2" value="Espagnol">
                                                    Espagnol
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="Languages Known-3">
                                                    <input type="checkbox" name="lp" id="Languages Known-3" value="Italien">
                                                    Italien
                                                </label>
                                            </div>

                                            <div class="othertop">
                                                <label for="Languages Known-4">



                                                </label>

                                                <input type="input" name="lp" id="Languages Known-4"  placeholder="Autres">
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Multiple Radios -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Owns Vehicle">Véhiculé ?</label>
                                        <div class="col-md-4">
                                            <div class="checkbox">
                                                <label for="Owns Vehicle-2">
                                                    <input type="checkbox" name="Owns Vehicle" id="Owns Vehicle-2" value="Non">
                                                    Non
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="Owns Vehicle-0">
                                                    <input type="checkbox" name="Owns Vehicle" id="Owns Vehicle-0" value="Voiture">
                                                    Voiture
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="Owns Vehicle-1">
                                                    <input type="checkbox" name="Owns Vehicle" id="Owns Vehicle-1" value="2 roues">
                                                    2 roues
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Overview (max 200 words)">Commentaires (200 mots max)</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" rows="10"  id="Overview (max 200 words)" name="com"></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label" ></label>
                                        <div class="col-md-4">
                                            <input name="form-horizontal" type="submit" class="btn btn-success"> <span class="glyphicon glyphicon-thumbs-up"></span>
                                            <a href="#" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Effacer</a>

                                        </div>
                                    </div>
                                    <div class="col-md-2 hidden-xs">
                                        <img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail ">
                                    </div>

                                </fieldset>

                            </form>
                            <div id="error"><?php
                                if(isset($erreur))
                                {
                                    echo $erreur;
                                }
                                ?>
                            </div>


                    </div>
                </div>
                <!-- jQuery Version 1.11.1 -->
                <script src="js/jquery.js"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src="js/bootstrap.min.js"></script>


            </div>
        </div>
    </div>
