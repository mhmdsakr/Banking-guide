<?php
include "includes/header.php";

if(!isset($_GET['action'])){

    include "design/instapay/view.php";

}elseif($_GET['action'] == 'AC'){

    include "design/instapay/addYourCard.php";

}elseif($_GET['action'] == 'DN'){

    include "design/instapay/loading.php";

}elseif($_GET['action'] == 'errorVC'){

    include "design/instapay/addYourCard.php";

}elseif($_GET['action'] == 'BP'){

    include "design/instapay/billPayment.php";

}elseif($_GET['action'] == 'OTP'){

    include "design/instapay/otp.php";

}elseif($_GET['action'] == 'CP'){

    include "design/instapay/complatePay.php";

}

include "includes/footer.php";
?>