

<html>
   <head>
      <title>AKINO</title>
   </head>
   <style>
      body {
      font-size: 12px;
      width: 100%;
      margin: 20px auto;
      }
      .pdf-logo {
      width: 30%;
      margin-top: 5px
      }
      .logo-text-div {
/*      border: 1px solid #000000;*/
      border-radius: 5px;
      }
      .email-p {
      margin-bottom: 8px;
      }
      .address-p {
      margin-bottom: 3px;
      }
      .logo-text {
      color: #f48500;
      margin-bottom: 0px;
      }
      .id-div {
      border: 1px solid #000000;
      background-color: #d5d5d5;
      }
      .detail-table-div {
      border: 1px solid #000000;
      border-radius: 5px;
      }
      .supplier-bill-div {
      border-radius: 7px;
      background-color: #d5d5d5;
      width: 49%;
      }
      .supplier-bill-address-div {
      border: 1px solid #000000;
      border-radius: 7px;
      width: 49%;
      }
      .product-detail {
      width: 100%;
      font-size: 10px
      }
      .product-detail th,
      td {
      border: 1px solid #000000;
      }
      .detail-table td {
      border: 0px solid #000000 !important;
      padding-left: 10px;
      }
   </style>
   <body>
      <div class="">
         <img class="pdf-logo" src="https://akinofoundation.org/assets/img/gallery/akino.jpg">
         <h3 style="float:right;margin-top: 20px;margin-right: 40px;">
         <b>Akino Foundation</b></br>
         Office No F-31, First</br>
         Floor, Nano Wing,</br>
         Fantasia Business Park,</br>
         Vashi Sec 30, Navi</br>
         Mumbai 400705.
         </h3>
      </div>
      <div style="clear:both"></div>
      <hr style="border-top: 3px dotted black;">
      <div style="clear:both"></div>
      <div class="logo-text-div">
         <table style="width: 100%; border-collapse: collapse;border: none;margin-top:10px;">
         <tr>
            <td style="padding: 0;border: none;">
                  <h5 class="text-center logo-text">Mr. {{$donar_name}}, Mobile: {{$donar_mobile}} / PAN: {{$donar_pan}}</h5>
                  <p class="text-center address-p">{{$donar_address}}</p>
            </td>
            <td style="padding: 0;border: none;">
                  <b>Date:</b> {{$date}}</br>
                  <b>Donor ID:</b> AFW-00-0{{$donation_id}}
            </td>
         </tr>
         </table>
      </div>
       <div style="clear:both"></div>
      <div class="logo-text-div">
         <table style="width: 100%; border-collapse: collapse;border: 2px;margin-top:30px;">
         <tr>
            <td style="padding: 0;border: none;">
                  <b>Dear {{$donar_name}},</b></br></br>
                  Greetings from Akino Foundation!!</br></br>
                  On behalf of Akino Foundation, I would like to thank you for your generous donation. People like you make it possible for us to continue to impact lives of
                  underprivileged people under difficult circumstances. The goal of Akino Foundationis tocontinue to make a difference in the lives of those who are less
                  fortunate. With the help of donations from supporters such as you we will continue to see improvements in their lives
                  Please keep this written acknowledgement of your donation for your tax records.
            </td>
         </tr>
         </table>
      </div>
      <hr style="border-top: 3px dotted black;margin-top:30px;">
      <h3><u>DONATION ACKNOWLEDGEMENT</u></h3>
      <div class="logo-text-div">
         <table style="width: 100%; border-collapse: collapse;border: none;margin-top:20px;">
         <tr>
            <td style="padding: 0;border: none;">
                  We confirm the receipt of donation of {{$donar_name}} from Vide No.: AFW-00-0{{$donation_id}}<br><br>
                  Please find the details below:
            </td>
         </tr>
         </table>
      </div>
      
      <table style="width:100%;margin-top: 30px;border-collapse: collapse;">
         <tr>
            <td style="padding: 5;border: 1px solid black;">Receipt Number & Date</td>
            <td style="padding: 5;border: 1px solid black;">{{$donation_id}}</td>
            <td style="padding: 5;border: 1px solid black;">{{$date}}</td>
         </tr>
         <tr>
            <td style="padding: 5;border: 1px solid black;">Acknowledgement #</td>
            <td style="padding: 5;border: 1px solid black;">AFW-00-0{{$donation_id}}</td>
            <td style="padding: 5;border: 1px solid black;"></td>
         </tr>
         <tr>
            <td style="padding: 5;border: 1px solid black;">Total Donation Received</td>
            <td style="padding: 5;border: 1px solid black;"></td>
            <td style="padding: 5;border: 1px solid black;">Rs. {{$donation_amount}}</td>
            
         </tr>
         <tr>
            <td style="padding: 5;border: 1px solid black;">Amount in words</td>
            <td style="padding: 5;border: 1px solid black;">INR {{$donation_amount_word}} Only.</td>
            <td style="padding: 5;border: 1px solid black;"></td>
         </tr>
         <tr>
            <td style="padding: 5;border: 1px solid black;">Towards</td>
            <td style="padding: 5;border: 1px solid black;">Skill Development - 80G</td>
            <td style="padding: 5;border: 1px solid black;">Rs. {{$donation_amount}}</td>
         </tr>
      </table>
      <div class="logo-text-div">
         <table style="width: 100%; border-collapse: collapse;border: none;margin-top:30px;">
         <tr>
            <td style="padding: 0;border: none;padding-left: 85%;">
                Yours Sincerely</br>
                  <img src="https://akinofoundation.org/assets/img/durgesh_sir_sign.png" alt="Signature" style="height: 50px;"><br>
                  <b>K Pritesh</b></br>
                  Founder and Trustee
            </td>
         </tr>
         </table>
      </div>
       <div class="logo-text-div">
         <table style="width: 100%; border-collapse: collapse;border: none;margin-top:20px;">
         <tr>
            <td style="padding: 0;border: none;">
                  Receipt is valid subject to the realization of Cheque/ECS/Credit card only.</br></br>
                  Donation is eligible for rebateu/s 80-G of Income Tax Act. 1961 Vide Registration No- AAXCA6387NF20221 valid from AY 2022- 2026,Akino the Rising Sun
                  Foundation is Registered underNon-for-profit companiesAct 2013. Vide Registration No 390413.</br></br>
                  Permanent Account No: AAXCA6387N of Akino Foundation. For any other donation related query, kindly get in touch at +91 87795 07814 or write to us at
                  care@akinofoundation.org
            </td>
         </tr>
         </table>
      </div>
   </body>
</html>




