<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <link rel="icon" type="image/x-icon" href="images/weblogo.png">
    <title>Farm-Buddy</title>    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logos.png" alt="#" ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="location_icon_bottum_tt">
                            <ul>
                                <li><img src="icon/loc1.png" />Sangamner</li>
                                <li><img src="icon/email1.png" />farmbuddy@gmail.com</li>

                                <li><img src="icon/call1.png" />(+91)1234567890</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row w-150">
                    <div class="col-md-12 location_icon_bottum">
                       <div class="row">
                            <div class="col-md-8 ">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li class="active"> <a href="index.html" class=" btn-outline-success">Home</a> </li>
                                                <li> <a href="agriculture.php" class=" btn-outline-success">Agriculture </a> </li>
                                                <li><a href="animal.php" class=" btn-outline-success">Animal Husbandary</a></li>
                                                <li><a href="weather.php" class=" btn-outline-success">Weather</a></li>
                                                <li><a href="product.php" class=" btn-outline-success">Product</a></li>
                                                

                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <form class="search">
                                    <input class="form-control" type="text" placeholder="Search">
                                    <button><img src="images/search_icon.png"></button>
                                </form>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <!-- start Animal -->
    <div class=" container mt-5 font-weight-bold"><h2>Veternary Tips/Care:</h2></div>
    <div class="container middle"> 
     <table style="width: 99%; margin: 0px auto;margin-left:2px;"> 
        <tr>
          <td class="text-dark"><b>State :<b> </td>
    <td><select name="" onchange="" id="" class="" style="width:250px;">
	<option selected="selected" value="0">--All State--</option>
	<option value="31">A AND N ISLANDS</option>
	<option value="01">ANDHRA PRADESH</option>
	<option value="32">ARUNACHAL PRADESH</option>
	<option value="02">ASSAM</option>
	<option value="03">BIHAR</option>
	<option value="33">CHANDIGARH</option>
	<option value="23">CHHATTISGARH</option>
	<option value="34">DADRA AND NAGAR HAVELI</option>
	<option value="36">DAMAN AND DIU</option>
	<option value="35">DELHI</option>
	<option value="40">GOA</option>
	<option value="04">GUJARAT</option>
	<option value="05">HARYANA</option>
	<option value="06">HIMACHAL PRADESH</option>
	<option value="07">JAMMU AND KASHMIR</option>
	<option value="24">JHARKHAND</option>
	<option value="08">KARNATAKA</option>
	<option value="09">KERALA</option>
	<option value="41">LADAKH</option>
	<option value="37">LAKSHADWEEP</option>
	<option value="10">MADHYA PRADESH</option>
	<option value="11">MAHARASHTRA</option>
	<option value="12">MANIPUR</option>
	<option value="13">MEGHALAYA</option>
	<option value="38">MIZORAM</option>
	<option value="14">NAGALAND</option>
	<option value="15">ODISHA</option>
	<option value="39">PUDUCHERRY</option>
	<option value="16">PUNJAB</option>
	<option value="17">RAJASTHAN</option>
	<option value="22">SIKKIM</option>
	<option value="18">TAMIL NADU</option>
	<option value="26">TELANGANA</option>
	<option value="19">TRIPURA</option>
	<option value="20">UTTAR PRADESH</option>
	<option value="25">UTTARAKHAND</option>
	<option value="21">WEST BENGAL</option>

</select></td>
                <td class="text-dark"><b>Select District : <b></td>
                <td> 
                    <select name="" id="" class="ddlnomination" style="width:250px;">
	<option selected="selected" value="0">--Select--</option>
	<option value="K"></option>
	<option value="R"></option>
	<option value="S"></option>

</select>
                    
                </td>
                <td class="text-dark"><b>Select Animal : <b></td>
                <td> 
                    <select name="" id="" class="ddlnomination" style="width:250px;">
	                    <option selected="selected" value="0">--Select--</option>
                        <option>Cattle</option>
                        <option>Buffaloes</option>
                        <option>Goat's</option>
                        <option>Sheep</option>
                        <option>Pig's</option>
                        <option>Poultry</option>

                    </select>
            </tr>
            <tr class="mt-2">
            </td>
                <td class="text-dark" ><b>Symptoms : <b></td>
                <td> 
                    <select name="" id="" class="ddlnomination" style="width:250px;">
	                    <option selected="selected" value="0">--Select--</option>
                        <option>Fever</option>
                        <option>Diarrohea</option>
                        <option>Behvioural Changes</option>
                        <option>Blister In Eyes or Nostrils</option>
                        <option>Excess Sallivation</option>
                        <option>Hot Spot</option>

                    </select>
                </td>
                    <td colspan="2"><input type="submit" name="" value="View Report" id="" class="btn_left bg-success btn-border-2 btn-outline-dark btn-rounded p-1 h-1 ml-5 mt-2" /></td>
            </tr>
            <tr><td colspan="6">
                  <div>
	<table class="table border border-dark" cellspacing="0" cellpadding="2" align="Center" rules="cols" border="1" id="" style="color:Black;background-color:White;border-color:ctl00_ContentPlaceHolder1_GridView1_ctl22_Label2DEDFDE;border-width:1px;border-style:None;width:100%;border-collapse:collapse;">
		<tr class="bg-success border border-dark" style="font-size:12px;">
			<th scope="col"  style="font-size:15px">S.No.</th><th scope="col"  style="font-size:15px">Animal</th><th scope="col"  style="font-size:15px">Disease</th><th scope="col"  style="font-size:15px">Symptom's</th><th scope="col"  style="font-size:15px">Precaution's</th><th scope="col"  style="font-size:15px">Treatment</th><th scope="col"  style="font-size:15px">Language Type</th>
		</tr><tr class="border border-dark" style="">
			<td style="width:5%;">
                            1
                        </td><td style="width:20%;">
                            <span id="">Cattle</span>
                        </td><td style="width:5%;">
                            <span id="">Fever</span>
                        </td><td style="width:15%;">
                            <span id="">Hot body and less food consuption</span>
                        </td><td style="width:25%;">
                            <span id="">Shelter cattle away from other animal's.</span>
                        </td><td style="width:20%;">
                            <a id="" href="animalpdfs/fever.pdf" target="_blank">fever.pdf</a>
                        </td><td style="width:20%;">
                            <span id="">Hindi</span>
                        </td>
		</tr><tr style="">
			<td style="width:5%;">
                            2
                            </td><td style="width:20%;">
                            <span id="">Buffallo</span>
                        </td><td style="width:5%;">
                            <span id="">Diarrohea</span>
                        </td><td style="width:15%;">
                            <span id="">Hot body and less food consuption</span>
                        </td><td style="width:25%;">
                            <span id="">Shelter cattle away from other animal's.</span>
                        </td><td style="width:20%;">
                            <a id="" href="animalpdfs/diarrohea.pdf" target="_blank">diarrohea.pdf</a>
                        </td><td style="width:20%;">
                            <span id="">Hindi</span>
                        </td>
		</tr><tr style="">
			<td style="width:5%;">
                            3
                            </td><td style="width:20%;">
                            <span id="">Goat</span>
                        </td><td style="width:5%;">
                            <span id="">Behvioural Changes</span>
                        </td><td style="width:15%;">
                            <span id="">Hot body and less food consuption</span>
                        </td><td style="width:25%;">
                            <span id="">Shelter cattle away from other animal's.</span>
                        </td><td style="width:20%;">
                            <a id="" href="pdf/Crop Seed.pdf" target="_blank">behavioural.pdf</a>
                        </td><td style="width:20%;">
                            <span id="">Hindi</span>
                        </td>
		</tr><tr style="">
			<td style="width:5%;">
                            4
                            </td><td style="width:20%;">
                            <span id="">Ship</span>
                        </td><td style="width:5%;">
                            <span id="">Blister In Eyes or Nostrils</span>
                        </td><td style="width:15%;">
                            <span id="">Hot body and less food consuption</span>
                        </td><td style="width:25%;">
                            <span id="">Shelter cattle away from other animal's.</span>
                        </td><td style="width:20%;">
                            <a id="" href="pdf/Crop Seed.pdf" target="_blank">nostrill.pdf</a>
                        </td><td style="width:20%;">
                            <span id="">Hindi</span>
                        </td>
		</tr><tr style=";">
			<td style="width:5%;">
                            5
                            </td><td style="width:20%;">
                            <span id="">Pig</span>
                        </td><td style="width:5%;">
                            <span id="">Excess Sallivation</span>
                        </td><td style="width:15%;">
                            <span id="">Hot body and less food consuption</span>
                        </td><td style="width:25%;">
                            <span id="">Shelter cattle away from other animal's.</span>
                        </td><td style="width:20%;">
                            <a id="" href="pdf/Crop Seed.pdf" target="_blank">aallivation.pdf</a>
                        </td><td style="width:20%;">
                            <span id="">Hindi</span>
                        </td>
		</tr><tr style="">
			<td style="width:5%;">
                            6
                            </td><td style="width:20%;">
                            <span id="">Chicken</span>
                        </td><td style="width:5%;">
                            <span id="">Hot Spots</span>
                        </td><td style="width:15%;">
                            <span id="">Hot body and less food consuption</span>
                        </td><td style="width:25%;">
                            <span id="">Shelter cattle away from other animal's.</span>
                        </td><td style="width:20%;">
                            <a id="" href="pdf/Crop Seed.pdf" target="_blank">spot.pdf</a>
                        </td><td style="width:20%;">
                            <span id="">Hindi</span>
                        </td>
		</tr><tr style="">
			<td style="width:5%;">
                            7
                            </td><td style="width:20%;">
                            <span id="">Cattle</span>
                        </td><td style="width:5%;">
                            <span id="">Fever</span>
                        </td><td style="width:15%;">
                            <span id="">Hot body and less food consuption</span>
                        </td><td style="width:25%;">
                            <span id="">Shelter cattle away from other animal's.</span>
                        </td><td style="width:20%;">
                            <a id="" href="pdf/Crop Seed.pdf" target="_blank">Crop Seed.pdf</a>
                        </td><td style="width:20%;">
                            <span id="">Hindi</span>
                        </td>
		</tr><tr style="">
			<td style="width:5%;">
                            8
                            </td><td style="width:20%;">
                            <span id="">Cattle</span>
                        </td><td style="width:5%;">
                            <span id="">Fever</span>
                        </td><td style="width:15%;">
                            <span id="">Hot body and less food consuption</span>
                        </td><td style="width:25%;">
                            <span id="">Shelter cattle away from other animal's.</span>
                        </td><td style="width:20%;">
                            <a id="" href="pdf/Crop Seed.pdf" target="_blank">Crop Seed.pdf</a>
                        </td><td style="width:20%;">
                            <span id="">Hindi</span>
                        </td>
		</tr><tr style="">
			<td style="width:5%;">
                            9
                            </td><td style="width:20%;">
                            <span id="">Cattle</span>
                        </td><td style="width:5%;">
                            <span id="">Fever</span>
                        </td><td style="width:15%;">
                            <span id="">Hot body and less food consuption</span>
                        </td><td style="width:25%;">
                            <span id="">Shelter cattle away from other animal's.</span>
                        </td><td style="width:20%;">
                            <a id="" href="pdf/Crop Seed.pdf" target="_blank">Crop Seed.pdf</a>
                        </td><td style="width:20%;">
                            <span id="">Hindi</span>
                        </td>
		</tr><tr style="">
			<td style="width:5%;">
                            10
                            </td><td style="width:20%;">
                            <span id="">Cattle</span>
                        </td><td style="width:5%;">
                            <span id="">Fever</span>
                        </td><td style="width:15%;">
                            <span id="">Hot body and less food consuption</span>
                        </td><td style="width:25%;">
                            <span id="">Shelter cattle away from other animal's.</span>
                        </td><td style="width:20%;">
                            <a id="" href="pdf/Crop Seed.pdf" target="_blank">Crop Seed.pdf</a>
                        </td><td style="width:20%;">
                            <span id="">Hindi</span>
                        </td>
		</tr>
	</table>
</div>
</td></tr>
        </table>
</table>
</div>
</div>

    <!-- end Animal -->
    
<hr>
       <!--  footer -->
       <footr>
        <div class="footer top_layer ">
            <div class="">

                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                        <div class="address">
                           <figure> <a href="index.html"> <img src="images/logos.png" alt="logo" /></a>
                            <h5 class="text-white text-center">"Agriculture is our wisest pursuit, because it will in the end contribute most to real wealth, good morals & happiness."  </h5>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                        <div class="address">
                            <h3>Quick links</h3>
                            <ul class="Links_footer">
                                <li><img src="icon/3.png" alt="#" /> <a href="#"> Join Us</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="#">Our Cummunity</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="#">Our Services</a></li>
                                <li><img src="icon/3.png" alt="#" /> <a href="#">Our Products</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                        <div class="address">
                            <h3>Subcribe email</h3>
                            <p>It is very important for the customer to follow us for more information.. </p>
                            <input class="form-control" placeholder="Your Email" type="type" name="Your Email">
                            <button class="submit-btn btn-sm">Submit</button>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                        <div class="address">
                            <h3>Contact Us</h3>

                            <ul class="loca">
                                <li>
                                    <a href="#"><img src="icon/loc.png" alt="#" /></a>Sangamner
                                    <br>India </li>
                                <li>
                                    <a href="#"><img src="icon/email.png" alt="#" /></a>farmbuddy@gmail.com </li>
                                <li>
                                    <a href="#"><img src="icon/call.png" alt="#" /></a>+91 1234567890 </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Send Message</h3>

                            <form class="">
                       
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Name" type="text" name="Name">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Email" type="text" name="Email">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Phone" type="text" name="Phone">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                </div>
                                <div class="address col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <button class="submit-btn btn-sm">Send</button>
                                </div>
                            
                        </form>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>
     
        <div class="copyright">
            <div class="container">
                <p>© 2022 All Rights Reserved. Design By--ABHI</p>
           
        </div>
        </div>
    </footer>

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->
    <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
</body>

</html>