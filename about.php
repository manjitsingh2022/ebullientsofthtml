<?php require_once("header-inner.php"); ?>
<!-- Page Content Start -->
<div class="page-content">
  <!-- Banner  -->
  <div class="dz-bnr-inr style-1 text-center">
    <div class="container">
      <div class="dz-bnr-inr-entry">
        <h1>About Us</h1>

        <!-- Breadcrumb Row -->
        <nav aria-label="breadcrumb" class="breadcrumb-row">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              About Us
            </li>
          </ul>
        </nav>
        <!-- Breadcrumb Row End -->
      </div>
    </div>
    <img class="bg-shape1" src="images/home-banner/shape1.png" alt="" />
    <img class="bg-shape2" src="images/home-banner/shape1.png" alt="" />

  </div>
  <!-- Banner End -->

  <!-- About Box style -1 start  -->
  <section class="content-inner about-sec bg-primary-light">
    <div class="container">
      <div class="row about-bx2 style-1 ">
        <div class="col-lg-8 about-content ps-lg-5 m-b30 wow fadeInUp" data-wow-delay="0.6s">
          <div class="section-head">
            <h2 class="title">
              <strong>Who We Are</strong>
            </h2>
            <p class="text"></p>
            <p class="ptext_color">EbullientSoft is a reputed IT company providing innovative and out-of-the-box solutions to clients all around the world. Since our inception, we have gained the reputation of a reliable IT solution and service provider company. Till now, we have served a huge list of customers all around the world. We are known for our immense knowledge, out-of-the-box solutions, and reliable customer support.</p>
            <p class="ptext_color">Our aim is to provide our clients with innovative, yet cost-effective solutions that can keep them at the forefront of technology and give their business an edge. We are committed to using the best business practices in everything we do. Our creative and interactive work culture is geared towards bringing exceptional and distinctive solutions to our clients.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <aside class="side-bar sticky-top right">

            <div class="widget widget_tag_cloud">
              <div class="widget-title">
                <h4 class="title">Popular Tags</h4>
              </div>
              <div class="tagcloud">
                <a href="javascript:void(0);">Business</a>
                <a href="javascript:void(0);">Corporate</a>
                <a href="javascript:void(0);">Blog</a>
                <a href="javascript:void(0);">Marketing</a>
                <a href="javascript:void(0);">Creative</a>
                <a href="javascript:void(0);">Web</a>
                <a href="javascript:void(0);">Workers</a>
                <a href="javascript:void(0);">Modern</a>
              </div>
            </div>
          </aside>
        </div>

      </div>
    </div>
  </section>


  <!-- form wrapper -->
  <section class="form-sec bg-light content-inner" style="padding-top: 0px;">
    <img class="bg-shape2" src="images/home-banner/shape1.png" alt="" />

    <div class="container">
      <div class="bg-primary form-wrapper1 style-1">
        <div class="row align-items-center">
          <div class="col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
            <div class="section-head">
              <h5 class="sub-title text-white">JOIN US</h5>
              <h2 class="title text-white">We Need Your Help</h2>
            </div>
          </div>
          <div class="col-xl-9">
            <form class="dzForm" method="POST" action="script/contact_smtp.php">
              <div class="dzFormMsg"></div>
              <input type="hidden" class="form-control" name="dzToDo" value="Contact" />
              <input type="hidden" class="form-control" name="reCaptchaEnable" value="0" />

              <div class="row">
                <div class="col-md-4 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.1s">
                  <input name="dzFirstName" required="" type="text" class="form-control" placeholder="First Name" />
                </div>
                <div class="col-md-4 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.2s">
                  <input name="dzLastName" required="" type="text" class="form-control" placeholder="Last Name" />
                </div>
                <div class="col-md-4 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.3s">
                  <input name="dzEmail" required="" type="text" class="form-control" placeholder="Email Address" />
                </div>
                <div class="col-md-4 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.4s">
                  <input name="dzPhoneNumber" required="" type="text" class="form-control" placeholder="Phone Number" />
                </div>
                <div class="col-md-4 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.5s">
                  <input name="dzMessage" required="" type="text" class="form-control" placeholder="Your Message" />
                </div>
                <div class="col-md-4 col-sm-6 m-b30 wow fadeInUp" data-wow-delay="0.6s">
                  <button name="submit" type="submit" value="Submit" class="btn btn-dark btn-block h-100">
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
<?php require_once("footer.php"); ?>