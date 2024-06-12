<br>
<div class="section-title">
    <div class="d-flex align-items-center justify-content-between">
        <h3 style="color:purple; margin-left:10%;">INSTA PAY</h3>
        <a href="?action=AC" class="btn" style="background-color: purple; color:white;margin-right:5%;"> Add Your Card</a>
    </div>
    
</div>
<br>
<div class="container p-0">
    <div class="row">
        <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
                <div class="mb-3 position-relative">
                <div class="badge text-white badge-"></div><a class="d-block" href="?action=BP"><img class="img-fluid w-100" src="assets/img/pills.jpg" alt="..."></a>
                
                </div>
                <h6> <a style="color:purple" class="reset-anchor" href="?action=BP">Bill Payment</a></h6>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
                <div class="mb-3 position-relative">
                <div class="badge text-white badge-"></div><a class="d-block" href="#"data-bs-toggle="modal" data-bs-target="#exampleModal"><img class="img-fluid w-100" src="assets/img/send.jpg" alt="..."></a>
                
                </div>
                <h6> <a style="color:purple" class="reset-anchor" href=""data-bs-toggle="modal" data-bs-target="#exampleModal">Send money</a></h6>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
                <div class="mb-3 position-relative">
                <div class="badge text-white badge-"></div><a class="d-block" href="#"><img class="img-fluid w-100" src="assets/img/coll.jpg" alt="..."></a>
                
                </div>
                <h6> <a style="color:purple" class="reset-anchor" href="#">Collect Money</a></h6>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
                <div class="mb-3 position-relative">
                <div class="badge text-white badge-"></div><a class="d-block" href="#"><img class="img-fluid w-100" src="assets/img/dona.jpg" alt="..."></a>
                
                </div>
                <h6> <a style="color:purple" class="reset-anchor" href="#">Donations</a></h6>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="product text-center">
                <div class="mb-3 position-relative">
                <div class="badge text-white badge-"></div><a class="d-block" href="#"><img class="img-fluid w-100" src="assets/img/tra.jpg" alt="..."></a>
                
                </div>

                <h6> <a style="color:purple" class="reset-anchor" href="#" >Transaction History</a></h6>
            </div>
        </div>
    </div>
</div>
<!-- //////////////////// -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #023E61;">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Send Money</h1>
      </div>
      <div class="modal-body">
        <form method="post" action="functions/instapay/sendOtp.php">
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
                <div class="col"><br>
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
            <div class="d-flex align-items-center justify-content-between">
                <button type="submit" class="btn" style="background-color: #023E61; color:white;">Proceed</button>
                <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: red; color:white;" >Cancel</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
