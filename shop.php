<?php
include "includes/header.php";
?>


<!-- theme shop stylesheet-->
<link rel="stylesheet" href="assets/css/style.default.css" id="theme-stylesheet">


<?php
if (!isset($_GET['action'])) {

    include "design/shop/view.php";
} elseif ($_GET['action'] == 'CR') {

    include "design/shop/cart.php";
} elseif ($_GET['action'] == 'CO') {

    include "design/shop/checkOut.php";
} elseif ($_GET['action'] == 'CA') {

    include "design/shop/card.php";
}elseif ($_GET['action'] == 'otp') {

    include "design/shop/otp.php";
}elseif ($_GET['action'] == 'errorVC') {

    include "design/shop/card.php";
}elseif ($_GET['action'] == 'LD') {

    include "design/shop/loading.php";
}
?>



<?php
include "includes/footer.php";
?>