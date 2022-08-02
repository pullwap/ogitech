<?php include("path.php"); ?>
<!DOCTYPE HTML>
<html lang="en-US">

<?php include(ROOT_PATH . "/app/includes/header.php") ; ?>

        <!-- End Header -->
        <!-- Start Slider -->
      <!--  <div class="title-section ptd100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrapper text-center">
                            <h1>ABOUT ME</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb themeix-breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                    <li class="breadcrumb-item active"><a href="about.html">about</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- End Slider -->
        <!-- Start Main -->
        <div class="main-section ptd100">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 m-auto">
                        <div class="author-biodata-wrapper">
                           
                            <div class="owl-carousel themeix-author-slider">
                                <div class="item">
                                    <div class="author-biodata">
                            
                             <form action="sign_up.php" method="post" enctype="multipart/form-data"><!-- form Begin -->

                             <dir class="form_center"> <h1>Sign Up</h1> </dir>
                           
                           <div class="pullwap"><!-- form-group Begin -->

                                <label>First Name</label>
                               
                               <input type="text" name="c_name" placeholder="First Name" required>
    
                           </div><!-- form-group Finish -->
                           
                           <div class="pullwap"><!-- form-group Begin -->
                               
                               <label>Last Name</label>

                               <input type="text"  name="last_name" placeholder="Last Name" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="pullwap"><!-- form-group Begin -->
                               
                               <label>Email</label>
                               
                               <input type="email" name="email" placeholder="Email" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="pullwap"><!-- form-group Begin -->
                               
                               <label>Password</label>
                               
                               <input type="password" name="c_pass" placeholder="Password" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="pullwap"><!-- form-group Begin -->
                               
                               <label>Matric No</label>
                               
                               <input type="text" name="c_contact" placeholder="Matric No" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="pullwap"><!-- form-group Begin -->
                               
                               <label>Phone Number</label>
                               
                               <input type="Number" name="c_contact" placeholder="Phone Number" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="pullwap"><!-- form-group Begin -->
                               
                               <label>State</label>
                               
                               <input type="text" name="c_city" placeholder="State" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="pullwap"><!-- form-group Begin -->
                               
                               <label>Your Address</label>
                               
                               <input type="text" name="address" placeholder="Address" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="pullwap"><!-- form-group Begin -->
                               
                               <label>Your Profile Picture</label>
                               
                               <input type="file" name="c_image" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="pullwap"><!-- text-center Begin -->
                               
                               <button type="submit" name="sign_up" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Sign Up
                               
                               </button>
                               
                           </div><!-- text-center Finish -->

                           <div class="pullwap_sign_up"><!-- form-group Begin -->
                               Already have an account:
                              <a href="<?php echo BASE_URL . '/login.php' ;?>">Login</a>
                               
                           </div><!-- form-group Finish -->
                           
                       </form><!-- form Finish -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main -->
         <!-- Start Footer -->
        <footer class="footer-section">
            <div class="footer-widget-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-widget float-left">
                                <div class="footer-widget-box">
                                    <h5 class="footer-title">about us</h5>
                                    <p>Dolor eros cubilia velit fusce. Porttitor molestie leo quisque placeat, netus bhger hryyu.</p>
                                    <ul class="list-inline footer-share">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-widget float-right">
                                <div class="footer-widget-box">
                                    <h5 class="footer-title">newsletter</h5>
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" class="center" placeholder="E-mail" aria-label="Search for">
                                            <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="submit">Signup</button>
                                  </span>
                                        </div>
                                    </form>
                                    <p>Dolor eros cubilia velit fusce</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center">
                <p>Copyright - 2022 NACOMES - OGITECH CHAPTER. Designed by <a href="#">Pullwap</a> </p>
            </div>
            <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        </footer>
    </main>
    <!-- End Footer --> 
    <!-- Call Javascript File -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/pushy.min.js"></script>
    <script src="assets/js/custom.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"72c936918aced7ad","version":"2022.6.0","r":1,"token":"bbb2e65ab8b84b64a70b8383268d1b5c","si":100}' crossorigin="anonymous"></script>
</body>

</html>