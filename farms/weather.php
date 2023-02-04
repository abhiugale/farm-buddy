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
                                                <li><a href="product.php" class=" btn-outline-success">product</a></li>
                                                

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
    <!-- start weather -->
    <div class="mt-5 ml-5 d-flex justify-content-center">
    <div id="ww_e0d79c84d295c" v='1.3' loc='id' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl403"],"font":"Arial","sl_ics":"one","sl_sot":"celsius","cl_bkg":"#00796B","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#FFFFFF","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>Weather Data Source: <a href="https://weatherlabs.in/हिंदी/महाराष्ट्र_का_मौसम/10_दिनों/" id="ww_e0d79c84d295c_u" target="_blank">10 दिनों का मौसम</a></div><script async src="https://app1.weatherwidget.org/js/?id=ww_e0d79c84d295c"></script></div>
    <div class="text-center">
    <button ><a href="#" class="btn btn-black py-3 px-3 mt-2  bg-success btn-outline-dark">View Report</a></button>
    </div>
    <table>
    <td>
    <table class="table border border-dark" cellspacing="0" cellpadding="2" align="Center" rules="cols" border="1" id="" style="color:Black;background-color:White;border-color:ctl00_ContentPlaceHolder1_GridView1_ctl22_Label2DEDFDE;border-width:1px;border-style:None;width:100%;border-collapse:collapse;">
		<tr class="bg-success border border-dark" style="font-size:12px;">
			<th scope="col"  style="font-size:15px">City</th><th scope="col"  style="font-size:15px">Next 1-3 Days</th><th scope="col"  style="font-size:15px">Next 4-6 Days</th><th scope="col"  style="font-size:15px">Next 7-9 Days</th><th scope="col"  style="font-size:15px">Next 10-12 Days</th></th>
		</tr><tr class="border border-dark" style="">
			<td style="width:20%;">
                            Sangamner
                        </td><td style="width:20%;">
                            <span id="">Mostly Dry</span>
                        </td><td style="width:20%;">
                            <span id="">Mostly dry</span>
                        </td><td style="width:20%;">
                            <span id="">Mostly dry</span>
                        </td><td style="width:20%;">
                            <span id="">Mostly dry</span>
                        </td>
                      
		</tr><tr style="">
			<td style="width:5%;">
                            Akole
                            </td><td style="width:20%;">
                            <span id="">Mostly Dry</span>
                        </td><td style="width:5%;">
                            <span id="">Mostly Dry</span>
                        </td><td style="width:15%;">
                            <span id="">Mostly Dry</span>
                        </td><td style="width:25%;">
                            <span id="">Mostly Dry</span>
                        </td>
                      
		</tr><tr style="">
			<td style="width:5%;">
                            Nashik
                            </td><td style="width:20%;">
                            <span id="">Light rain (total 3mm), mostly falling on Fri afternoon.</span>
                        </td><td style="width:5%;">
                            <span id="">Mostly Dry</span>
                        </td><td style="width:15%;">
                            <span id="">Mostly Dry</span>
                        </td><td style="width:25%;">
                            <span id="">Mostly Dry</span>
                        </td>
                       
		</tr><tr style="">
			<td style="width:5%;">
                            Mumbai
                            </td><td style="width:20%;">
                            <span id="">Mostly Dry</span>
                        </td><td style="width:5%;">
                            <span id="">Mostly Dry</span>
                        </td><td style="width:15%;">
                            <span id="">Mostly Dry</span>
                        </td><td style="width:25%;">
                            <span id="">SMostly Dry</span>
                        </td>
		</tr><tr style=";">
			<td style="width:5%;">
                            Pune
                            </td><td style="width:20%;">
                            <span id="">Mostly Dry</span>
                        </td><td style="width:5%;">
                            <span id="">Light rain (total 3mm), mostly falling on Fri afternoon.</span>
                        </td><td style="width:15%;">
                            <span id="">Mostly Dry</span>
                        </td><td style="width:25%;">
                            <span id="">Mostly Dry</span>
                        </td>
                       
		</tr>
		</tr>
	</table>
</div>
</td></tr>
        </table>
        <!-- end weather -->
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
                            <button class="submit-btn">Submit</button>
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
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send">Send</button>
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
    </footr>


    <!-- end footer -->
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
</body>

</html>