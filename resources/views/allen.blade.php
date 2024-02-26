<?php
  error_reporting (E_ALL ^ E_NOTICE);
  require("config.php");
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CASURECO II - E-Bill</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="css/fonts/fonts.min.css" rel="stylesheet">
    <link href="css/fonts/fonts2.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <link href="css/resume.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/casureco.ico">


    <style>
      #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
      }

      #myImg:hover {opacity: 0.7;}

      #myImg2 {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
      }

      #myImg2:hover {opacity: 0.7;}

      /* The Close Button */
      .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
      }

      .close:hover,
      .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
      }
    </style>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="">
        <span class="d-block d-lg-none"><strong><i class="fa faa-shake animated fa-file-text-o"></i> E-Bill</strong></span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/e-bill.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#advisory">
              <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#auto_modal">
                <strong>
                  <i class="fa faa-flash animated fa-info-circle"></i> ADVISORY
                </strong>
              </button>
            </a>
            <a class="nav-link js-scroll-trigger" href="#about"></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">
    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
        <!--  <h2 class="mb-0"><i class="fa faa-shake animated fa-file-text-o"></i> E-Bill
            <span class="text-primary"></span>
          </h2>-->
          <div class="subheading mb-5"><h2 style="color:gray;">Casureco II Online Bill Inquiry</h2>
		  <hr>
            <h4 style="color:gray;">Power Rates for the Billing Month of August 2023</h4>
            <h5 style="color:gray;"><b>Residential: </b>Php 7.3172/kwh</h5>
            <h5 style="color:gray;"><b>Low Voltage: </b>Php 6.4419/kwh</h5>
            <h5 style="color:gray;"><b>High Voltage: </b>Php 5.7217/kwh</h5>
            <u><a href="rates.pdf" style="color:gray; font-family: calibri; font-size: 16px;">For more details about the rates, click here.</a></u>
			<hr>
			<h4 style="color:gray;">Generation Charge for the Month of August 2023</h4>
            <h5 style="color:gray;"><b>Total Generation Cost: </b>Php 3.9979/kwh</h5>
            <u><a href="charge.pdf" style="color:gray; font-family: calibri; font-size: 16px;">For more details about the charges, click here.</a></u>
			<hr>
          </div>

          <div class="mb-5" style="top: 50%;">
            <a href="#bill">
              <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#privacy_modal">
                <strong>
                  <i class="fa faa-horizontal animated fa-hand-o-right"></i> Click for Bill Inquiry
                </strong>
              </button>
            </a>
          </div>

          <div>
            <h2 style="color: gray;">How to Inquire</h2>

            <ol>
              <li>Click the button "CLICK FOR BILL INQUIRY".<p></p></li>
              
              <li>Read the privacy notice then press OK.<p></p></li>
              
              <li>Enter your Account Number <i style="color: red;">(6 - digit number)</i> and Route Code <i style="color: red;">(dash not included)</i> found on your bill.
              <p>
                <h5>
                  <img id="myImg" src="img/bill_sample1-min.jpg" alt="Bill" style="height: 40%; width: 40%; border: 4px double gray;"data-toggle="modal" data-target="#myModal"> &nbsp;&nbsp; 
                </h5>
              </p>

              </li>
              <li>Click the "Find" button to see your bill.<p></p></li>
            </ol>
          </div>  
          
        </div>
      </section>

    

    <!-- BEGIN # Sample Img Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="margin-top: 10%;">
            <div class="modal-content">
                <div id="" style="width: 100%; max-width: 1000px;">
                  <!-- The Close Button -->      
                  <span class="close" data-dismiss="modal" style="margin-top: -2%;">&times;</span>
                  <img id="img01" style="margin: auto; display: block; width: 100%; height: 100%; max-width: 1000px; -webkit-animation-name: zoom;
        animation-name: zoom;">
                </div>

            
                
            </div>
        </div>
    </div>
    <!-- END # smple img Notice Modal -->

      
    <!-- BEGIN # Privacy Notice Modal -->
    <div class="modal fade" id="privacy_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title" id="smallModalLabel"><i class="fa faa-flash animated fa-info-circle"></i> &nbsp;Privacy Notice</h3>
                    <button type="button" class="btn btn-sm btn-danger" id="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>

                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    
                        <div class="modal-body">

                            <center>
                                
                                <hr width="50%">
                           
                                <div>
                                <p style="margin: 0 auto; margin-right: 15px; margin-left: 15px; text-align: justify-all;">To our valued Member Consumer-Owners, by utilizing this Online Bill Inquiry module, you consent to the collection of the following information: Account Number, and Route Code. These information will be processed electronically to show you your total payable amount, and these details will not be stored or retained. If you have queries regarding the way we process your given information, please contact <a href="mailto:dpo@casureco2.com.ph">dpo@casureco2.com.ph</a>.</p>
                                </div>
                                <p></p>
                               
                                <hr width="50%">
                                <p></p>
                            </center>
                          
                        </div>
                  
                         <div class="modal-footer">
                            <div style="margin: 0 auto;">                              
                              <button type="button" name="" id="" class="btn btn-primary btn-sm btn-block" data-dismiss="modal" data-toggle="modal" data-target="#bill-modal">Ok</button>
                            </div>
                        </div>
                    
                    <!-- End # Login Form -->
                    
                </div>
                <!-- End # DIV Form -->
                
            </div>
        </div>
    </div>
    <!-- END # Privacy Notice Modal -->

    <!-- BEGIN # MODAL Bill -->
    <div class="modal fade" id="bill-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; overflow-y: scroll;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="smallModalLabel">Bill Inquiry</h4>
                    <button type="button" class="btn btn-sm btn-danger" id="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>

                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    
                        <div class="modal-body">

                            <center>
                                <strong>
                                    <i class="fa fa-user"></i> Account Number
                                </strong>
                            </center>
                           <input autocomplete="off" type="text" name="account_num" id="account_num" class="form-control" maxlength="6" style="text-align: center;" placeholder="enter the 6-digit account number" required>
                            <div id="suggesstion-box"></div>
                            <p class="help-block text-danger"></p>
							              <center>
                                <strong>
                                   <i class="fa fa-book"></i> Route Code
                                </strong>
                            </center>
                           <input autocomplete="off" type="text" name="route_Code" id="route_Code" class="form-control" style="text-align: center;" placeholder="enter the route code" required>
							              
                            <div id="suggesstion-box"></div>
                            <p class="help-block text-danger"></p>
                            <center>
                                <strong>
                                    <i class="fa fa-calendar"></i> Bill Month
                                </strong>
                            </center>
                            <input type="month" name="billMonth" id="billMonth" value="2023-08" class="form-control" style="text-align: center;">

                            <div id="suggesstion-box"></div>
                            <p class="help-block text-danger"></p>
                            
                            <center>
                            <div class="col-lg-10" id="bill_display">
                              
                            </div>
                            <div class="col-lg-9" id="rates_display" style="display: none;">
                              <button type="button" name="" id="" class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#rates-modal">Rates</button>
                            </div>
                            </center>
                        </div>
                  
                         <div class="modal-footer">
                            <div style="margin: 0 auto; margin-left: 10px;">
                              <u><a href="#privacy_modal" style="font-size: 13px;" data-dismiss="modal" data-toggle="modal" data-target="#privacy_modal">Privacy Notice</a></u>
                            </div>
                            <div>                              
                              <button type="button" name="find_bill" id="find_bill" class="btn btn-primary btn-sm btn-block"><i class="fa fa-check"></i> Find</button>
                            </div>
                        </div>
                    
                    <!-- End # Login Form -->
                    
                </div>
                <!-- End # DIV Form -->
                
            </div>
        </div>
    </div>
    <!-- END # MODAL bill -->

    <!-- BEGIN # Rates Modal -->
        <div class="modal fade" id="rates-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; overflow-y: scroll;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="smallModalLabel">Rates for the month of <?php echo $date; ?></h4>
                    </div>

                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <!-- Begin # Login Form -->
                            <div class="modal-body">
                              <center>
                                <hr width="50%">
                                <table width="75%">
                                  <thead>
                                    <tr>
                                      <th><b>Rate Name</b></th>
                                      <th><b>Rate Amount</b></th>
                                     <!-- <th>Kwh</th>-->                                  
                                    </tr>
                                  </thead>
                                  <tbody>

                                    <?php
                                      $queryRates = "SELECT * FROM rates where bill_month = '$ratesDate' and rate_amount != 0;";
                                      $resultRates = mysqli_query($connection, $queryRates);

                                      while($rowRates = mysqli_fetch_array($resultRates))
                                      {                              
                                        $rate_name = $rowRates['rate_name'];
                                        $rate_amount = $rowRates['rate_amount'];
                                    ?>

                                    <tr>
                                      <?php
                                        echo "<td>" . $rate_name . "</td>";
                                        echo "<td>" . $rate_amount . "</td>";
                                       // echo "<td>" . $kwh . "</td>";
                                      ?>
                                    </tr>
                                  <?php } ?>
                                  </tbody>
                                </table>
                                <hr width="50%">
                              </center>
                            </div>
                            <div class="modal-footer">
                              <div style="margin: 0 auto;">                              
                                <button type="button" name="" id="" class="btn btn-primary btn-sm btn-block" data-dismiss="modal" aria-label="Close">Close</button>
                              </div>
                            </div>
                        <!-- End # Login Form -->
                    </div>
                    <!-- End # DIV Form --> 
                </div>
            </div>
        </div>
        <!-- END # Rates Modal -->

        <!-- BEGIN # Auto Modal -->
    <div class="modal fade" id="auto_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    
                        <div class="modal-body">

                            <center>
                                <h3 class="modal-title" id="smallModalLabel">&nbsp;ADVISORY TO ALL MEMBER-CONSUMER-OWNERS (MCOs) OF CASURECO II:</h3>
                                <hr width="50%">
                            </center>
                                <div style="text-align: justify-all;">
									<li>MCOs who have the ability to pay are encouraged to settle their bills within the original due dates to help manage the cash flow in the energy supply chain and ensure continuous supply of electricity.</li>
                                    <br>
                                   <li>Payments may be settled thru our authorized <a href="https://casureco2.com.ph/payment_partners.php"> payment partners</a></li>
                                    <br>
<li>Should you have any billing concerns, please feel free to contact our Customer Hotline No. 09204199969, & 09564887656.</li>
                                    <br>
                                </div>
                            <center>    
                                <p></p>
                               
                                <hr width="50%">
                                <p></p>
                            </center>
                          
                        </div>
                  
                         <div class="modal-footer">
                            <div style="margin: 0 auto;">                              
                              <button type="button" name="" id="" class="btn btn-primary btn-sm btn-block" data-dismiss="modal" aria-label="Close">Ok</button>
                            </div>
                        </div>
                    
                    <!-- End # Login Form -->
                    
                </div>
                <!-- End # DIV Form -->
                
            </div>
        </div>
    </div>
    <!-- END # Auto Modal -->

  <!-- Footer -->
  <footer class="page-footer font-small" style="background-color: #4285f4;">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left" style="background-color: #ffffff;">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">For more info:</h5>
          <p><a href="https://www.casureco2.com.ph" style="color: #c16744;"><u>casureco2.com.ph</a></u></p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

          <!-- Links -->
          <h5 class="text-uppercase">Contact Us:</h5>

          <ul class="list-unstyled" style="text-c">
            <li>
              <i class="fa fa-phone" style="color: black;"></i> &nbsp;<u><a href="" style="color: #c16744;">205-2900</a></u>
            </li>
           
          </ul>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

          <!-- Links -->
          <h5 class="text-uppercase">Email Us:</h5>

          <ul class="list-unstyled">
            <li>
              <i class="fa fa-envelope-o" style="color: black;"></i> &nbsp;<u><a href="mailto:casurecoii@yahoo.com" style="color: #c16744;">casurecoii@yahoo.com</a></u>
            </li>
            
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">All Rights Reserved &copy; CASURECO II 2020</div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    

    </div>



    <!-- jQuery -->
    <script src="ajax/jquery-3.3.1.min.js"></script>  
    <script src="jquery-ui-1.12.1/jquery-ui.min.js"></script>
    
    <script src="js/ajax/jquery.min.js"></script>
    <script type="text/javascript" src="js/ajax/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="js/ajax/jquery-ui.min.css">

    <!-- Image Modal open -->
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the image and insert it inside the modal - use its "alt" text as a caption
      var img = document.getElementById("myImg");
      var img2 = document.getElementById("myImg2");
      var modalImg = document.getElementById("img01");
      var captionText = document.getElementById("caption");
      img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;   
      }

      img2.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
      }

    </script>

    <script>
      $(document).ready(function(){
        $("#auto_modal").modal('show');
      });
    </script>

  	<script type="text/javascript">
    	$(document).ready(function(){
      $("#route_Code").inputmask({"mask": "***-****-**"});
     });
    </script>
	
    <script>
      $(document).ready(function(){
          $('#find_bill').click(function(){
                var account_num = $('#account_num').val();
                var route_Code = $('#route_Code').val(); 
                var billMonth = $('#billMonth').val(); 
                
                if(account_num != '' && route_Code != '')  
                {  
                     $.ajax({  
                          url:"bill_ajax.php",  
                          method:"POST",  
                          data:{account_num:account_num, route_Code:route_Code, billMonth:billMonth},  
                          success:function(data)  
                          {  
                               $('#bill_display').html(data); 
                              // $('#rates_display').show(); 
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please fill the Account Number, Route Code and Bill Month field.");  
                }  
           });  
        });  

      function selectCountry(val) {
        $("#account_num").val(val);
        $("#suggesstion-box").hide();
      } 
    </script>

    <script>
      $('#bill').hide(400, removeHashFromUrl());

    function removeHashFromUrl()
    {
        // remove fragment as much as it can go without adding an entry in browser history:
        window.location.replace("#");

        // slice off the remaining '#' in HTML5:    
        if (typeof window.history.replaceState == 'function') {
        history.replaceState({}, '', window.location.href.slice(0, -1));
        }
    }
    </script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>
    <script src="js/inputmask.min.js"></script>
    <script src="js/jquery.inputmask.min.js"></script>

  </body>

</html>
