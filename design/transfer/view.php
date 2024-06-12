
<br>
<div class="container d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center">
        <i class='bx bx-transfer-alt bx-lg'></i>
        <box-icon name='transfer-alt' size='lg'></box-icon>
        <h4>Transfer To Other Accounts </h4>
    </div>
    <div>
        <button class="btn" style="background-color: #023E61; color:white;" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button> 
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #023E61;">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Add New Account</h1>
      </div>
      <div class="modal-body">
        <form method="post" action="functions/transfer/bensAccounts/insert.php">
            <div class="form-group">
                <label for="exampleInputEmail1"style="color: #023E61;">Name Of The Beneficiary Transferred To Him:</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Example: Amr Mohamed Halim">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlSelect1" style="color: #023E61;">Type Of Transformation:</label>
                <select name="type" class="form-control" id="exampleFormControlSelect1">
                    <option value="0">Transfer To An Account Within The Bank</option>
                    <option value="1">Transfer To An Account Outside The Bank</option>
                </select>
            </div>
            <br><br><br>
            <div class="d-flex align-items-center justify-content-between">
                <button type="submit" class="btn" style="background-color: #023E61; color:white;" >Submit</button>
                <button type="button" class="btn" style="background-color: red; color:white;" data-bs-dismiss="modal">Cancel</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="row py-5">
    <div class="col-lg-10 mx-auto">
      <div class="card rounded shadow border-0">
        <div class="card-body p-5 bg-white rounded">
          <div class="table-responsive">
            <table id="example" style="width:100%" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Type Of Transformation </th>
                  <th>Control</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $user_id = $_SESSION['login_id'];
                    $select = "SELECT * FROM bens_accounts WHERE user_id = '$user_id'";
                    $query = $conn -> query($select);
                    foreach($query as $row){
                     
                ?>
                <tr>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['type'] == 0 ? 'Transfer To An Account Within The Bank' : 'Transfer To An Account Outside The Bank'; ?></td>
                    <td>
                        <a class="btn"  style="background-color: #023E61; color:white;" href="" data-bs-toggle="modal" data-bs-target="#exampleModal2">Transfer</a>
                        <a class="btn" style="background-color: red; color:white;" href="functions/transfer/bensAccounts/delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                <?php } ?>
              </tbody>
            </table>
            <div>
            <?php
            if (isset($_SESSION['otpError'])) {
                echo "<hr>";
                echo $_SESSION['otpError'];
                unset($_SESSION['otpError']);
            }
            ?>
        </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #023E61;">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Transformation</h1>
      </div>
      <div class="modal-body">
        <form method="post" action="confirmOTP.php">
            <div class="form-group">
                <label for="exampleInputEmail1"style="color: #023E61;">Name Of The Beneficiary Transferred To Him:</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Example: Amr Mohamed Halim">
            </div>
            <br>
            <div class="form-check form-check-inline">
                <label class="form-check-lable" for="inlineradio1">Transfer To An Account Within The Bank</label>
                <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="0"> 
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-lable" for="inlineradio1">Pay Another Credit Card Inside The Bank</label>
                <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="0"> 
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-lable" for="inlineradio1">Transfer To An Account Outside The Bank</label>
                <input type="radio" name="type" class="form-check-input" id="inlineradio1" value="0"> 
            </div>
            <br><br>
            <div class="form-group">
                <label for="exampleInputEmail1" style="color: #023E61;">Number Of The Beneficiary Transferred To Him:</label>
                <input type="number" name="number" class="form-control" id="exampleInputEmail1" placeholder="Example: 123535254542221">
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label for="exampleInputEmail1" style="color: #023E61;">Amount:</label>
                    <input type="number" class="form-control" placeholder="Please Enter Transfer Amount" aria-label="amount">
                </div>
                <div class="col">
                    <br>
                    <select name="type" class="form-control" id="exampleFormControlSelect1">
                        <option value="0">EGP</option>
                        <option value="1">DOLAR</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputDate" style="color: #023E61;">Date:</label>
                <input type="date" name="date" class="form-control" id="exampleInputDate">
            </div>            
            <br>
            <div class="form-group">
                <div class="d-flex align-items-center justify-content-between">
                  <label for="exampleInputEmail1" style="color: #023E61;">OTP:</label>
                  <div id="content"></div>
                  <a href="#" id="myLink" style="color:#023E61;"><i class="bi bi-arrow-right"></i>Send OTP</a>
                  <script>
                    document.getElementById('myLink').addEventListener('click', function(event) {
                      event.preventDefault(); 
                      loadContent('functions/transfer/sendOTP.php', 'content'); 
                    });
                    function loadContent(url, contentId) {
                      var xhr = new XMLHttpRequest();
                      xhr.open('GET', url, true);
                      xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                          document.getElementById(contentId).innerHTML = xhr.responseText;
                          window.history.pushState({}, '', url);
                        }
                      };
                      xhr.send();
                    }
                  </script>
                </div>
                
                <input type="text" name="otp" class="form-control" id="exampleInputEmail1" placeholder="Enter OPT (6 Number)">
            </div>
            <br>
            <div class="d-flex align-items-center justify-content-between">
                <button type="submit" class="btn" style="background-color: #023E61; color:white;">Pay & Save</button>
                <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: red; color:white;" >Cancel</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
