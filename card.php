<div class="cardVs" style="background-color: black;">
    <div class="card__info">
        <div class="card__logo">Banking Guide</div>
        <br>
        <div class="card__chip">
            <svg class="card__chip-lines" role="img" width="20px" height="20px" viewBox="0 0 100 100" aria-label="Chip">
                <g opacity="0.8">
                    <polyline points="0,50 35,50" fill="none" stroke="#000" stroke-width="2"></polyline>
                    <polyline points="0,20 20,20 35,35" fill="none" stroke="#000" stroke-width="2"></polyline>
                    <polyline points="50,0 50,35" fill="none" stroke="#000" stroke-width="2"></polyline>
                    <polyline points="65,35 80,20 100,20" fill="none" stroke="#000" stroke-width="2"></polyline>
                    <polyline points="100,50 65,50" fill="none" stroke="#000" stroke-width="2"></polyline>
                    <polyline points="35,35 65,35 65,65 35,65 35,35" fill="none" stroke="#000" stroke-width="2"></polyline>
                    <polyline points="0,80 20,80 35,65" fill="none" stroke="#000" stroke-width="2"></polyline>
                    <polyline points="50,100 50,65" fill="none" stroke="#000" stroke-width="2"></polyline>
                    <polyline points="65,65 80,80 100,80" fill="none" stroke="#000" stroke-width="2"></polyline>
                </g>
            </svg>
            <div class="card__chip-texture"></div>
        </div>
        <div class="card__type">debit</div>
        <div class="card__number">
        <?php
            include "functions/conn.php";
            $id = $_SESSION['login_id'];
            $select_card="SELECT * FROM card WHERE holder = '$id'";
            $query_card = $conn -> query($select_card);
            $card =$query_card -> fetch_assoc();
        ?>
            <span class="card__digit-group"><?=$card['num_card']?></span>
        </div><br><br>
        <div class="card__valid-thru" aria-label="Valid thru">Valid<br>thru</div>
        <div class="card__exp-date"><time datetime="2038-01"><?=$card['exp_month']?> / <?=$card['exp_year']?></time></div>
        <div class="card__name" aria-label="Dee Stroyer">
        <?php
            $name = $card['holder'];
            $select_user ="SELECT * FROM user WHERE id = '$name'";
            $query_user = $conn -> query($select_user);
            $user = $query_user -> fetch_assoc();
            echo $user['name'];
        ?>
        </div>
        <br> 
        <div class="card__name" aria-label="Dee Stroyer">CVV
        <span class="card__digit-group"><?=$card['cvv']?></span>
        </div>
        <div class="card__vendor" role="img" aria-labelledby="card-vendor">
        <span id="card-vendor" class="card__vendor-sr">Mastercard</span>
        </div>
        <div class="card__texture"></div>
    </div>
</div>  
