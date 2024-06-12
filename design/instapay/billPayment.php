<head>
    <style>
        .hidden {
            display: none;
        }
        .center-text {
            margin: 0 auto;
        }
    </style>
</head>


<div class="section-title" style="padding-top: 3%;">
    <h2>Bill Payment</h2>
</div>

<div class="progress" style="height: 80px; background-color: white smoke; display: flex; cursor: pointer; transition: all 0.5s ease;" onclick="toggleBillsForm()">
  <img id="billsImage" style="transition: opacity 0.5s ease;" src="assets/img/ring.jpg" alt="">
  <h4 id="billsText" style="transition: margin 1s ease; margin: 20px; text-align: center;"><a style="color:black" class="reset-anchor">Telecom & Internet Bills</a></h4>
</div>
<form id="billsForm" class="hidden" style="margin: 30px;" method="POST" action="functions/instapay/insertBills.php">
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio">Etisalat</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio" value="1"> 
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio">Orange</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio" value="2"> 
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio">Vodafone</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio" value="3"> 
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio">WE</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio" value="4"> 
    </div>
    <br><br>
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio1">Mobile</label>
        <input type="radio" name="internetBill" class="form-check-input" id="inlineradio" value="0"> 
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio1">Internet</label>
        <input type="radio" name="internetBill" class="form-check-input" id="inlineradio1" value="0"> 
    </div><br><br>
    <div class="form-group">
        <label for="exampleInputEmail1"style="color: #023E61;">Phone Number:</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Please Enter Phone Number">
    </div><br>
    <div style="text-align: center;">
        <button type="submit" class="btn" style="background-color: #023E61; color:white;">Pay & Save</button>
    </div>
</form>
<br>
<div class="progress" style="height: 80px; background-color: white smoke; display: flex; cursor: pointer; transition: all 0.5s ease;" onclick="toggleRechargeForm()">
  <img id="RechargeImage" style="transition: opacity 0.5s ease;" src="assets/img/ring.jpg" alt="">
  <h4 id="RechargeText" style="transition: margin 1s ease; margin: 20px; text-align: center;"><a style="color:black" class="reset-anchor">Telecom & Internet Recharge</a></h4>
</div>
<form id="RechargeForm" class="hidden" style="margin: 30px;" method="post" action="functions/instapay/insertBills.php">
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio1">Etisalat</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="1"> 
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio1">Orange</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="2"> 
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio1">Vodafone</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="3"> 
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio1">WE</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="4"> 
    </div>
    <br><br>
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio1">Mobile</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="1"> 
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio1">Internet</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="1"> 
    </div><br><br>
    <div class="form-group">
        <label for="exampleInputEmail1"style="color: #023E61;">Phone Number:</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Please Enter Phone Number">
    </div><br>
    <div style="text-align: center;">
      <button type="submit" class="btn" style="background-color: #023E61; color:white;">Pay & Save</button>
    </div>
</form>
<br>
<div class="progress" style="height: 80px; background-color: white smoke; display: flex; cursor: pointer; transition: all 0.5s ease;" onclick="toggleElectricityForm()">
  <img id="ElectricityImage" style="transition: opacity 0.5s ease;" src="assets/img/lamp.jpg" alt="">
  <h4 id="ElectricityText" style="transition: margin 1s ease; margin: 20px; text-align: center;"><a style="color:black" class="reset-anchor">Electricity Bills</a></h4>
</div>
<form id="ElectricityForm" class="hidden" style="margin: 30px;" method="post" action="functions/instapay/insertBills.php">
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio1">North Cairo Electricity</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="5"> 
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio1">South Cairo Electricity</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="6"> 
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio1">South Delta Electricity</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="13"> 
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio1">Canal Electricity</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="7"> 
    </div><br><br>
        <label for="exampleInputEmail1"style="color: #023E61;">E-payment Code</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Please Enter e-payment code">
    </div><br>
    <div style="text-align: center;">
     <button type="submit" class="btn" style="background-color: #023E61; color:white;">Pay & Save</button>
    </div>
</form>
<br>
<div class="progress" style="height: 80px; background-color: white smoke; display: flex; cursor: pointer; transition: all 0.5s ease;" onclick="toggleWaterForm()">
  <img id="ElectricityImage" style="transition: opacity 0.5s ease;" src="assets/img/water.jpg" alt="">
  <h4 id="ElectricityText" style="transition: margin 1s ease; margin: 20px; text-align: center;"><a style="color:black" class="reset-anchor">Water Bills</a></h4>
</div>
<form id="WaterForm" class="hidden" style="margin: 30px;" method="post" action="functions/instapay/insertBills.php">
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio1">Cairo Water</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="8"> 
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio1">Alex Water</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="9"> 
    </div>
    <br><br>
    <div class="form-group">
        <label for="exampleInputEmail1"style="color: #023E61;">E-payment Code:</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Please Enter e-payment">
    </div><br>
    <div style="text-align: center;">
      <button type="submit" class="btn" style="background-color: #023E61; color:white;">Pay & Save</button>
    </div>
</form>
<br>
<div class="progress" style="height: 80px; background-color: white smoke; display: flex; cursor: pointer; transition: all 0.5s ease;" onclick="toggleGasForm()">
  <img id="GasImage" style="transition: opacity 0.5s ease;" src="assets/img/gas.jpg" alt="">
  <h4 id="GasText" style="transition: margin 1s ease; margin: 20px; text-align: center;"><a style="color:black" class="reset-anchor">Gas Bills</a></h4>
</div>
<form id="GasForm" class="hidden" style="margin: 30px;" method="post" action="functions/instapay/insertBills.php">
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio1">Petrotrade</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="10"> 
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio1">Nat Gas</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="11"> 
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-lable" for="inlineradio1">TAQA Gas</label>
        <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="12"> 
    </div>
    <br><br>
    <div class="form-group">
        <label for="exampleInputEmail1"style="color: #023E61;">E-Payment Code:</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Please Enter Billing Account">
    </div><br>
    <div class="form-group">
        <label for="exampleInputEmail1"style="color: #023E61;">Counter Reading:</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Please Enter Current Reading">
    </div><br>
    <div style="text-align: center;">
      <button type="submit" class="btn" style="background-color: #023E61; color:white;">Pay & Save</button>
    </div>
</form>
<br>

<script>
  function toggleBillsForm() {
    var form = document.getElementById('billsForm');
    var image = document.getElementById('billsImage');
    var text = document.getElementById('billsText');
    if (form.classList.contains('hidden')) {
      form.classList.remove('hidden');
      image.style.opacity = '0'; 
      text.style.margin = '20px auto'; 
    } else {
      form.classList.add('hidden');
      image.style.opacity = '1'; 
      text.style.margin = '20px';   
    }
  }
  function toggleRechargeForm() {
    var form = document.getElementById('RechargeForm');
    var image = document.getElementById('RechargeImage');
    var text = document.getElementById('RechargeText');
    if (form.classList.contains('hidden')) {
      form.classList.remove('hidden');
      image.style.opacity = '0'; 
      text.style.margin = '20px auto'; 
    } else {
      form.classList.add('hidden');
      image.style.opacity = '1'; 
      text.style.margin = '20px';   
    }
  }
  function toggleElectricityForm() {
    var form = document.getElementById('ElectricityForm');
    var image = document.getElementById('ElectricityImage');
    var text = document.getElementById('ElectricityText');
    if (form.classList.contains('hidden')) {
      form.classList.remove('hidden');
      image.style.opacity = '0'; 
      text.style.margin = '20px auto'; 
    } else {
      form.classList.add('hidden');
      image.style.opacity = '1'; 
      text.style.margin = '20px';   
    }
  }
  function toggleWaterForm() {
    var form = document.getElementById('WaterForm');
    var image = document.getElementById('WaterImage');
    var text = document.getElementById('WaterText');
    if (form.classList.contains('hidden')) {
      form.classList.remove('hidden');
      image.style.opacity = '0'; 
      text.style.margin = '20px auto'; 
    } else {
      form.classList.add('hidden');
      image.style.opacity = '1'; 
      text.style.margin = '20px';   
    }
  }
  function toggleGasForm() {
    var form = document.getElementById('GasForm');
    var image = document.getElementById('GasImage');
    var text = document.getElementById('GasText');
    if (form.classList.contains('hidden')) {
      form.classList.remove('hidden');
      image.style.opacity = '0'; 
      text.style.margin = '20px auto'; 
    } else {
      form.classList.add('hidden');
      image.style.opacity = '1'; 
      text.style.margin = '20px';   
    }
  }
</script>
