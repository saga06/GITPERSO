<?php
ini_set('display_errors','on');
error_reporting(E_ALL);

include 'i-e/header_ppdc.php'; //  interface exterieure
include 'i-e/admin_ppdc.php'; //  interface admin
include 'i-e/top_screen_ppdc.php'; //  interface admin
?>



<!--------------- MAIN CONTENT --------------->

<div id="main">
    <?php include_once 'ajoutcandidat.php'; ?>
</div>

<!--------------- FOOTER --------------->
<?php
include 'i-e/footer_ppdc.php'; //  footer
?>