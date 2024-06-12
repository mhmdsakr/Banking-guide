<?php
include "includes/header.php";





if(!isset($_GET['action'])){

include "design/cib/view.php";

}elseif($_GET['action'] == 'OBS'){

include "design/cib/onlineBankingService.php";

}elseif($_GET['action'] == 'IT'){

include "design/cib/internationalTransfer.php";

}elseif ($_GET['action'] == 'IT') {

    include "design/cib/onlineFinancialConsultation.php";
}elseif ($_GET['action'] == 'OFC') {

    include "design/cib/onlineFinancialConsultation.php";
}elseif ($_GET['action'] == 'EV') {

    include "design/cib/elctronicVerification.php";
} elseif ($_GET['action'] == 'VIEW_MBS') {

    include "design/cib/mobileBankingService/view.php";
} elseif ($_GET['action'] == 'SW') {

    include "design/cib/mobileBankingService/smartWallet.php";
} elseif ($_GET['action'] == 'SP') {

    include "design/cib/mobileBankingService/SmartPay.php";
} elseif ($_GET['action'] == 'OT') {

    include "design/cib/mobileBankingService/otpToken.php";
} elseif ($_GET['action'] == 'CT') {

    include "design/cib/mobileBankingService/corperateToken.php";
} elseif ($_GET['action'] == 'BO') {

    include "design/cib/mobileBankingService/businessOnline.php";
} elseif ($_GET['action'] == 'CPS') {

    include "design/cib/electronicPaymentService/corporatePaymentService.php";
} elseif ($_GET['action'] == 'PAS') {

    include "design/cib/electronicPaymentService/paymentAcceptanceSolution.php";
} elseif ($_GET['action'] == 'YG') {

    include "design/cib/electronicPaymentService/yourGuide.php";
} elseif ($_GET['action'] == 'VIEW_EPS') {

    include "design/cib/electronicPaymentService/view.php";
}




include "includes/footer.php";
?>