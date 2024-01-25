<?php include("includes/header.php"); ?>


<!-- Header -->


<!-- Page Content Start -->
<div class="page-content">
    <div class="dz-bnr-inr style-1 text-center">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Become An IB</h1>
                <p class="text">Transfer USD, EUR, or Crypto and start trading today!</p>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Partners</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Become An IB</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
        <img class="bg-shape1" src="images/home-banner/shape1.png" alt="">
        <img class="bg-shape2" src="images/home-banner/shape1.png" alt="">
        <img class="bg-shape3" src="images/home-banner/shape3.png" alt="">
        <img class="bg-shape4" src="images/home-banner/shape3.png" alt="">
    </div>
</div>

<section class="default-form-section">
    <div class="container ">
        <div class="auto-container" style="border: solid 0.5px #ededed; padding: 20px 15px 15px 20px;">
            <!--Title Box-->
            <div class="title-box" style="margin-bottom: 30px;">
                <div class="title"></div>
                <h2>Join IB broker program now!</h2>
                <div class="text"></div>
            </div>

            <!--Default Form-->
            <div class="default-form style-two contact-form">
                <form method="post" action="become-ib.php" id="contact-form">
                    <div class="row clearfix">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12 mb-4">
                            <input class="form-control" type="text" name="firstname" value="" placeholder="First name *"
                                id="firstname" required="required">
                        </div>


                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <input class="form-control" type="text" name="lastname" value="" placeholder="Last name *"
                                id="lastname" required="required">
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-12 mb-4">
                            <input class="form-control" type="email" name="email" value="" placeholder="Your Email *"
                                id="email" required="required">
                        </div>

                       

                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <input class="form-control" id="phone" name="phone" type="text" placeholder="Phone Number *"
                                required="required" class="form-control required">
                        </div>

                        <div class="form-group col-lg-12 col-md-6 col-sm-12 mb-4">
                            <input class="form-control" type="text" name="referals" value=""
                                placeholder="Number of Referals" id="referals" required="required">
                        </div>

                        <div class="form-group col-lg-12 col-md-6 col-sm-12">
                            <input class="form-control" type="text" name="amount" value="" id="amount"
                                placeholder="Enter Amount Size" required="required">
                        </div>

                        <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <textarea name="message" placeholder="Your Massage"></textarea>
                    </div> -->

                        <div class="form-group text-center col-lg-12 col-md-12 col-sm-12 mt-4">
                            <button type="submit" class="theme-btn message-btn btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<?php include("includes/footer.php"); ?>