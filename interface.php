<?php
ini_set('display_errors','on');
error_reporting(E_ALL);

        include 'i-e/header_ppdc.php'; // ie = interface exterieur

        //if(isset('$_SESSION') AND $_SESSION['id'] == 'recruteur') // recruteur
        //{
        //    include 'i-e/recruteur_ppdc.php';
        //}

        //if(isset('$_SESSION') AND $_SESSION['id'] == 'admin') // admin
        //{
            include 'i-e/admin_ppdc.php';
        //}

        include 'i-e/top_screen_ppdc.php';
        ?>

        <!--------------- MAIN CONTENT --------------->

        <div id="main">
            <?php include_once 'listecandidats.php'; ?>
        </div>

        <!--------------- FOOTER --------------->
        <?php
        include 'i-e/footer_ppdc.php';
        ?>
