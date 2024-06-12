<?php
include "includes/header.php";

if (!isset($_GET['action'])) {

    include "design/transfer/view.php";
}elseif ($_GET['action'] == 'DN') {

    include "design/transfer/loading.php";
}


include "includes/footer.php";
?>