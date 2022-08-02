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
                            
                             <form action="login.php" method="post" enctype="multipart/form-data"><!-- form Begin -->

                             <dir class="form_center"> <h1>Login</h1> </dir>
                           
                           
                           <div class="pullwap"><!-- form-group Begin -->
                               
                               <label>Email or Matric No</label>
                               
                               <input type="text" name="email" placeholder="Email or Matric No" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="pullwap"><!-- form-group Begin -->
                               
                               <label>Password</label>
                               
                               <input type="password" name="c_pass" placeholder="Password" required>
                               
                           </div><!-- form-group Finish -->
                           


                           <div class="forget_pass"><!-- form-group Begin -->

                              <a href="forget_password.php">Forget Password?</a>
                               
                           </div><!-- form-group Finish -->
                           
                           
                           <div class="pullwap"><!-- text-center Begin -->
                               
                               <button type="submit" name="login" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Login
                               
                               </button>
                               
                           </div><!-- text-center Finish -->

                           <div class="pullwap_sign_up"><!-- form-group Begin -->
                               I don't have an account:
                              <a href="<?php echo BASE_URL . '/sign_up.php' ;?>">Sign Up</a>
                               
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
  
<!-- include header php -->

<?php include(ROOT_PATH . "/app/includes/footer.php") ; ?>

<!-- end include header php -->
</body>

</html>