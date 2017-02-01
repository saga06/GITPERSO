<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 30/01/17
 * Time: 14:44
 */

include_once 'connection.php';
include_once 'user.php';
?>




    <div class="container">
        <div class="row">
            <div class="col-md-offset-0">
                <h2 align="center">Création d'un nouveau candidat</h2>
                <br /> <br />

                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta name="description" content="">
                    <meta name="author" content="">

                    <title>User profile form requirement</title>
                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
                    <!-- Bootstrap Core CSS -->
                    <!--     <link href="css/bootstrap.min.css" rel="stylesheet"> -->
                    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

                <!-- Custom CSS -->
                <style>
                    body {
                        padding-top: 70px;
                        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
                    }

                    .othertop{margin-top:10px;}
                </style>

                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->



                </head>

                <body>

                <div class="container">
                    <div class="row">
                        <div class="col-md-10 ">
                            <form class="form-horizontal">
                                <fieldset>

                                    <!-- Text input-->




                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom">Nom</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user">
                                                    </i>
                                                </div>
                                                <input id="Nom" name="Nom" type="text" placeholder="Nom" class="form-control input-md">
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
                                                <input id="dob" name="dob" type="text" placeholder="Né(e) le" class="form-control input-md">
                                            </div>


                                        </div>
                                    </div>





                                    <!-- Multiple Radios (inline) -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="sexe">Sexe</label>
                                        <div class="col-md-4">
                                            <label class="radio-inline" for="Gender-0">
                                                <input type="radio" name="sexe" id="sexe" value="1" checked="checked">
                                                M
                                            </label>
                                            <label class="radio-inline" for="Gender-1">
                                                <input type="radio" name="sexe" id="Gender-1" value="2">
                                                F
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Multiple Radios (inline) -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="radios">Etat civil:</label>
                                        <div class="col-md-4">
                                            <label class="radio-inline" for="radios-0">
                                                <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                                Marié(e)
                                            </label>
                                            <label class="radio-inline" for="radios-1">
                                                <input type="radio" name="radios" id="radios-1" value="2">
                                                Célibataire
                                            </label>
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <label class="col-md-4 control-label col-xs-12" for="Permanent Address">Adresse</label>
                                        <div class="col-md-2  col-xs-4">
                                            <input id="Permanent Address" name="Permanent Address" type="text" placeholder="Rue" class="form-control input-md ">
                                        </div>

                                        <div class="col-md-2 col-xs-4">

                                            <input id="Permanent Address" name="Permanent Address" type="text" placeholder="Code Postal" class="form-control input-md ">
                                        </div>


                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Permanent Address"></label>
                                        <div class="col-md-2  col-xs-4">
                                            <input id="Permanent Address" name="Permanent Address" type="text" placeholder="Commune" class="form-control input-md ">

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
                                                <input id="Primary Occupation" name="Primary Occupation" type="text" placeholder="Poste désiré" class="form-control input-md">
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
                                                <input id="Skills" name="Skills" type="text" placeholder="Language(s) informatique(s) connu(s)" class="form-control input-md">
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
                                                <input id="Phone number " name="Phone number " type="text" placeholder="Fixe " class="form-control input-md">

                                            </div>
                                            <div class="input-group othertop">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-mobile fa-1x" style="font-size: 20px;"></i>

                                                </div>
                                                <input id="Phone number " name="Secondary Phone number " type="text" placeholder="Portable " class="form-control input-md">

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
                                                <input id="Email" name="Email" type="text" placeholder="Email" class="form-control input-md">

                                            </div>

                                        </div>
                                    </div>





                                    <!-- Multiple Checkboxes -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Languages Known">Langues parlée(s)</label>
                                        <div class="col-md-4">
                                            <div class="checkbox">
                                                <label for="Languages Known-0">
                                                    <input type="checkbox" name="Languages Known" id="Languages Known-0" value="1">
                                                    Français
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="Languages Known-1">
                                                    <input type="checkbox" name="Languages Known" id="Languages Known-1" value="2">
                                                    Anglais
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="Languages Known-2">
                                                    <input type="checkbox" name="Languages Known" id="Languages Known-2" value="3">
                                                    Espagnol
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="Languages Known-3">
                                                    <input type="checkbox" name="Languages Known" id="Languages Known-3" value="4">
                                                    Italien
                                                </label>
                                            </div>

                                            <div class="othertop">
                                                <label for="Languages Known-4">



                                                </label>

                                                <input type="input" name="LanguagesKnown" id="Languages Known-4"  placeholder="Autres">
                                            </div>

                                        </div>
                                    </div>



                                    <!-- Multiple Radios -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Owns Vehicle">Véhiculé(e)</label>
                                        <div class="col-md-4">
                                            <div class="checkbox">
                                                <label for="Owns Vehicle-0">
                                                    <input type="checkbox" name="Owns Vehicle" id="Owns Vehicle-1" value="0">
                                                    Non
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="Owns Vehicle-1">
                                                    <input type="checkbox" name="Owns Vehicle" id="Owns Vehicle-0" value="1">
                                                    Auto
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="Owns Vehicle-2">
                                                    <input type="checkbox" name="Owns Vehicle" id="Owns Vehicle-1" value="2">
                                                    Moto
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Overview (max 200 words)">Commentaires (200 mots max)</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" rows="10"  id="Overview (max 200 words)" name="Overview (max 200 words)">Commentaires</textarea>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-4 control-label" ></label>
                                        <div class="col-md-4">
                                            <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Créer</a>
                                            <a href="#" class="btn btn-danger" value=""><span class="glyphicon glyphicon-remove-sign"></span> Effacer</a>

                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                        </div>
                        <div class="col-md-2 hidden-xs">
                            <img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail ">
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
</form>
