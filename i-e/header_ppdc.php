<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <?php $page = $_SERVER['PHP_SELF']; /* création d'une variable $page qui capture le nom de l' URL*/
    switch ($page){                     /*transformation de cette variable en un title prédéfinie*/


        case '/GIT/GITPERSO/interface.php': /*si on se retrouve sur la page .../interface.php, alors*/
    $title= 'Liste des candidats '; /*le titre se transforme en...*/
    $css= './css/i-e.css'; /*le CSS appliqué est le ...*/

    break;

        case '/GIT/GITPERSO/creationcandidat.php':
     $title= 'Création d\'un nouveau candidat';
     $css='./css/i-e.css';
     $css1= './css/creationcandidat.css';

        /*case '/DATACORP/datacorp_login/*******.php':
            $title= '*************';

        case '/DATACORP/datacorp_login/*******.php':
            $title= '******************';

        case '/DATACORP/datacorp_login/********.php':
            $title= '**************'; */
    }
    ?>

    <title><?php echo $title; ?></title>


        <!-- ICON URL -->
        <link href="http://www.datacorp.fr/image/icone.ico" rel="shortcut icon">

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="./css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- FONTAWESOME -->
        <link rel="stylesheet"  href="./font-awesome-4.7.0/css/font-awesome.min.css">

        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Overpass" rel="stylesheet">

        <!-- MY CSS -->
        <link rel="stylesheet" href="<?php echo $css; ?>">
    <link rel="stylesheet" href="<?php echo $css1; ?>">

        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.1.1.js"></script>

    </head>

    <body>
