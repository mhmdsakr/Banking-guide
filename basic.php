<?php
    include "includes/header.php";

    if(!isset($_GET['action'])){

        include "design/basic/view.php";
    
    }elseif($_GET['action'] == 'errorVC'){

        include "design/basic/view.php";
    
    }elseif($_GET['action'] == 'DN'){

        include "design/basic/loading.php";
    
    }



    include "includes/footer.php";

?>