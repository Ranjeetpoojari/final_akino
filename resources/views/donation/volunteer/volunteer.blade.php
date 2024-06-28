<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akino Foundation - Volunteer Page</title>
    <link rel="shortcut icon" href="{{url('/assets/img/Group.webp')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        *,*::after,*::before{
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
    box-sizing: border-box;
}
body{
    font-family: "Poppins", sans-serif;
    color: rgb(0, 0, 0);
    background: url('/assets/img/gallery/akino.webp') no-repeat center center;
    background-attachment: fixed;
    background-size: 100% auto;
}
.row{
    font-weight: 100 !important;
}
.main-div{
    padding: 20px;
    margin: auto;
    backdrop-filter: blur(3px);
    background-color: rgba(209, 209, 209, 0.273);
    -webkit-backdrop-filter: blur(3px);
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    border-radius: 10px;
    max-width: 700px;
}
.heading{
    margin: 25px 0;
    width: 90%;
}
.submit-btn{
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
    padding: 0.4em 1.5em;
    color: white;
    background-color: #f9ca3e;
    font-weight: 600;
    font-size:calc(14px + (18 - 14) * (100vw - 320px) / (1920 - 320));
}
.submit-btn:hover,
.submit-btn:focus{
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.203);
    background-color: #f9ca3e;
}
.form-control{
    border-radius: 0px;
}
input,select{
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

input:focus,select:focus{
    border: none !important;
    box-shadow: none !important;
}
input:focus,select:focus {
    border-bottom: 2px solid #f9ca3e !important;
    box-shadow: 0 4px 8px rgba(248, 166, 3, 0.3) !important;
    transition: border-bottom-color 0.5s ease, box-shadow 0.5s ease; 
  }

@media only screen and (max-width: 769px){
    .main-div{
        margin: 30px 30px;
        padding:10px;
    }
}

    </style>
</head>
<body>
    <div class="main-div">
        <div class="heading">
          <h5 class="fw-bold">VOLUNTEER FORM</h5><hr>
          <h5 class="fw-bold">SUMMIT THE FORM TO GET 80G CERTIFICATE BY AKINO FOUNDATION</h5>
            </div>
            <form class="text-start container">
              <div class="row mb-2 mb-sm-3">
                <label for="donor_name" class="col-sm-4 col-form-label p-0">Donar Name</label>
                <div class="col-sm-8 p-0">
                  <input pattern="[A-Za-z ]+"  class="form-control" id="donor_name" placeholder="Enter your name..." required oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '');">
                </div>
              </div>
              <div class="row mb-2 mb-sm-3">
                <label for="donor_pancard" class="col-sm-4 col-form-label p-0">Donar's Pancard</label>
                <div class="col-sm-8 p-0">
                  <input type="text" class="form-control" id="donor_pancard" placeholder="Enter a valid PAN number" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" oninput="this.value = this.value.toUpperCase()" required>
                </div>
              </div>
              <div class="row mb-2 mb-sm-3">
                <label for="date_of_birth" class="col-sm-4 col-form-label p-0">Date Of Birth</label>
                <div class="col-sm-8 p-0">
                  <input type="date" class="form-control" id="date_of_birth" placeholder="col-form-label" required>
                </div>
              </div>
              <div class="row mb-2 mb-sm-3">
                <label for="donor_phone" class="col-sm-4 col-form-label p-0">Mobile No</label>
                <div class="col-sm-8 p-0">
                  <input type="tel" class="form-control" id="donor_phone" placeholder="+91" pattern="[0-9]{10}" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
                </div>
              </div>
              <div class="row mb-2 mb-sm-3">
                <label for="donor_email" class="col-sm-4 col-form-label p-0">Email ID:</label>
                <div class="col-sm-8 p-0">
                  <input type="email" class="form-control" id="donor_email" placeholder="Enter your name...">
                </div>
              </div>
              <div class="row mb-2 mb-sm-3">
                <label for="donationAmt" class="col-sm-4 col-form-label p-0">Donation Amount</label>
                <div class="col-sm-8 p-0">
                  <input type="number" class="form-control" id="donationAmt" placeholder="" min="1" required>
                </div>
              </div>
              <div class="row mb-2 mb-sm-3">
                <label for="transactionId" class="col-sm-4 col-form-label p-0">Transaction Id</label>
                <div class="col-sm-8 p-0">
                  <input type="text" class="form-control" id="transactionId" placeholder="" required>
                </div>
              </div>
              <div class="row mb-2 mb-sm-3">
                <label for="paymentMode" class="col-sm-4 col-form-label p-0">Payment Mode</label>
                <div class="col-sm-8 p-0">
                  <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                  <select class="form-select rounded-0" id="paymentMode">
                    <option selected>Choose...</option>
                    <option value="Cash">Cash</option>
                    <option value="Axis QR">Axis QR</option>
                    <option value="Online">Online</option>
                  </select>
                </div>
              </div>
              <div class="row mb-2 mb-sm-3">
                <label for="volunteerName" class="col-sm-4 col-form-label p-0">Volunteer`s Name:</label>
                <div class="col-sm-8 p-0">
                  <input type="text" class="form-control" id="volunteerName" placeholder="">
                </div>
              </div>

              <div class="row mb-2 mb-sm-3">
                <label for="volunteerName" class="col-sm-4 col-form-label p-0">
                  
                </label>
                <div class="col-sm-8 p-0">
                  <input type="checkbox" name="send_80g" id="send_80g" checked>
                  <label for="send_80g"> Attached 80G certificate </label>
                </div>
              </div>
              <input type="hidden" name="order_id" id="order_id" >
              <input type="hidden" name="donation_id" id="donation_id" >
              <div class="row mt-4">
                <div class="col-auto ms-auto p-0">
                    <button type="button" onclick="submitForm()" class="btn m-auto submit-btn">Submit</button>
                </div>
              </div>
            </form>
        </div>
</body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
         function submitForm(){
          
        event.preventDefault();
        var name = $("#donor_name").val();
        var phone = $("#donor_phone").val();
        var email = $("#donor_email").val();
        var pan = $("#donor_pancard").val();
        var donationAmt = $("#donationAmt").val()
        var send_80g = false;
        if(name == ""){
            return alert("Please enter name")
        }
        if(email == ""){
            return alert("Please enter email")
        }
        if(donationAmt == ""){
            return alert("Please enter donation amount")
        }
        if ($('#send_80g').is(":checked")) {
          send_80g = true;
        }
        var data = {
            "campaign_id":"",
            "donation_type":"Cash",
            "donation_amount":donationAmt,
            "full_name":name,
            "pancard":pan,
            "email":email,
            "mobile":phone,
            "date_of_birth":$("#date_of_birth").val(),
            "payment_mode":$("#paymentMode").val(),
            "status":"pending",
            "volunteerName":$("#volunteerName").val(),
            "transactionId":$("#transactionId").val(),
            "send_80g":send_80g
        }
        
        var order_id ;var options = {};
        $.post("/volunteer/donation/create", {data}, function(res){
            if(res.status == "success"){
                $("#donation_id").val(res.donation_id);
                $("#order_id").val(res.order_id);
                order_id = res.order_id;
                alert("Thank you! 80G Certificate sent on email id");
                
            }
        });
    };


    </script>
</body>
</html>