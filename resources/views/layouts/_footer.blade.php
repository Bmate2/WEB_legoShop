<!-- Remove the container if you want to extend the Footer to full width. -->
<style>
   footer {
            position: absolute;
            bottom: 1;
            width: 100%;
            background-color: #1c2331;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        } 
        .button-container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
}

.glass-btn {
  width: 60px;
  height: 60px;
  background-color: #fafafa;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 7px;
  margin-left: 1em;
  margin-right: 1em;  
  cursor: pointer;
  transition: all 0.3s;

  &.blue-btn {
    -webkit-box-shadow: 0px 20px 20px -17px rgba(0, 111, 255, 0.53);
    -moz-box-shadow: 0px 20px 20px -17px rgba(0, 111, 255, 0.53);
    box-shadow: 0px 20px 20px -17px rgba(0, 111, 255, 0.53);

    &:hover {
      -webkit-box-shadow: 0px 20px 35px -16px rgba(0, 111, 255, 0.65);
      -moz-box-shadow: 0px 20px 35px -16px rgba(0, 111, 255, 0.65);
      box-shadow: 0px 20px 35px -16px rgba(0, 111, 255, 0.65);      
    }

    .content {
      font-size: 4em;
      font-family: "Roboto", sans-serif;
      background: linear-gradient(to right, #006fff, #00acff 70%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 0px 10px 37px rgba(0, 111, 255, 0.8);
    }
  }

  &.red-btn {
    -webkit-box-shadow: 0px 20px 20px -17px rgba(255, 16, 39, 0.5);
    -moz-box-shadow: 0px 20px 20px -17px rgba(255, 16, 39, 0.5);
    box-shadow: 0px 20px 20px -17px rgba(255, 16, 39, 0.5);

    &:hover {
      -webkit-box-shadow: 0px 20px 35px -16px rgba(255, 16, 39, 0.57);
      -moz-box-shadow: 0px 20px 35px -16px rgba(255, 16, 39, 0.57);
      box-shadow: 0px 20px 35px -16px rgba(255, 16, 39, 0.57);      
    }

    .content {
      font-size: 4em;
      font-family: "Roboto", sans-serif;
      background: linear-gradient(to right, #ff1027, #ff4f06 70%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 0px 10px 37px rgba(255, 16, 39, 0.6);
    }
  }

  &.amber-btn {
    -webkit-box-shadow: 0px 20px 20px -17px rgba(255, 159, 16, 0.53);
    -moz-box-shadow: 0px 20px 20px -17px rgba(255, 159, 16, 0.53);
    box-shadow: 0px 20px 20px -17px rgba(255, 159, 16, 0.53);

    &:hover {
      -webkit-box-shadow: 0px 20px 35px -16px rgba(255, 159, 16, 0.6);
      -moz-box-shadow: 0px 20px 35px -16px rgba(255, 159, 16, 0.6);
      box-shadow: 0px 20px 35px -16px rgba(255, 159, 16, 0.6);      
    }

    .content {
      font-size: 4em;
      font-family: "Roboto", sans-serif;
      background: linear-gradient(to right, #ff8d00, #f7ad07 70%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 0px 10px 37px rgba(255, 94, 16, 0.7);
    }
  }

  &:hover {
    background-color: darken(#fafafa, 2%);    
    transform: translateY(-5px);
    transition: all 0.3s;
  }
}


</style>
<!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
        <!-- Left -->
        <div class="me-5">
            <span>Get connected with me on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div class="button-container">
  
  <div class="glass-btn blue-btn">
    <!--<div class="content">
      h
    </div> -->
    <img src="https://i.postimg.cc/DwbWDQTx/facebook.png" alt="facebook" style="width: 5.5em;">
  </div>

  <div class="glass-btn red-btn">
    <!-- <div class="content">
      e
    </div> -->
    <img src="https://i.postimg.cc/LstJ4Hhf/youtube.png" alt="youtube" style="width: 6em;">
  </div>
  
  <div class="glass-btn amber-btn">
    <!-- <div class="content">
      y
    </div> -->
    <img src="https://i.postimg.cc/tgQ1H1Rp/soundcloud.png" alt="soundcloud" style="width: 6em;">
  </div>

</div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold">Company name</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                        Here you can use rows and columns to organize your footer
                        content. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Products</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                        <a href="#!" class="text-white">MDBootstrap</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">MDWordPress</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">BrandFlow</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">Bootstrap Angular</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Useful links</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                        <a href="#!" class="text-white">Your Account</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p><i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p><i class="fa fa-envelope mr-3"></i> info@example.com</p>
                    <p><i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p><i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->


<!-- End of .container -->