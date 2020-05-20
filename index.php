<?php
  include ('includes/head.php');
?>
<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to Webful</h1>
      <h2><?=short;?></h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">Webful</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="img/logo.png" alt="" class="img-fluid"></a> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="tel://<?=telephone;?>" class="phone"><i class="icofont-phone"></i></a>
        <a href="<?=fb_link;?>" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="<?=webful_insta;?>" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="<?=whatsapp_link;?>" class="whatsapp"><i class="icofont-whatsapp"></i></i></a>

      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            Webful is a business startup. It is currently a private company with <a href="#team">Ekomobong Archibong</a> as the founder and C.E.O. of the company. We are based in Ibadan, Nigeria. We help our clients by creating an online presence for their business or project thereby increasing their productivity by 21%. Our primary services include:
            </p>
            <ul>                  
              <li><i class="ri-check-double-line"></i> Web Design & Development</li>
              <li><i class="ri-check-double-line"></i> Mobile App Development</li>
              <li><i class="ri-check-double-line"></i> Graphic Design</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            We put our best into every work we do and are honesty in our dealings with our clients. We also believe in giving our clients the best of our brilliant efforts within at a short period of time. Thank you for choosing Webful.
            </p>
            <a style = "display:none;" href="<?=fb_link;?>" class="btn-learn-more">Our Portfolio</a>
            <a href="<?=fb_link;?>" class="btn-learn-more">Contact Us Via Facebook</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section> -->
    
    <!-- End Counts Section -->

    <div style = "margin-top:-80px;"></div>

    <!-- ======= Our Values Section ======= -->
    <section id="our-values" class="our-values">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("img/our-values-1.jpg");'>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Mission</a></h5>
                <p class="card-text">To offer high quality web services to our clients and give our best in a short period of time.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("img/our-values-3.jpg");'>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Vision</a></h5>
                <p class="card-text">To fill the gap between digital people and the clients in need of such people.</p>
                <!-- <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div> -->
              </div>
            </div>
          </div>
  
      </div>
    </section><!-- End Our Values Section -->

    <div style = "margin-top:-45px;"></div>


    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="img/logo.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section> -->
    
    <!--  End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="las la-globe-americas" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="#!">Web Design</a></h4>
              <p class="description">We design fully-responsive websites that display basic information about our clients or their businesses. We also design church websites. The service also includes design customization and social media integration.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="las la-book" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="#!">Web Development</a></h4>
              <p class="description">We develop scalable web applications. Examples include blogs, e-commerce websites and so on. Such applications will involve user-management systems, payment systems and much more.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="las la-file-alt" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="#!">App Development</a></h4>
              <p class="description">We develop mobile applications that run accross platforms like Android and iOS.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">
              <div class="icon"><i class="las la-tachometer-alt" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Graphic Design</a></h4>
              <p class="description">We design logos, posters and other related graphic items.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">
              <div class="icon"><i class="las la-basketball-ball" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Bug Removal & Website Maintenance</a></h4>
              <p class="description">We fix bugs in websites and also engage in maintenance of the software and also the technology used in creating such software.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">
              <div class="icon"><i class="las la-clock" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Data Entry</a></h4>
              <p class="description">We will input data into websites or databases. We will also capture information from soft-copy documents.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
          </div>

        </div>

      </div>
    </section>End Testimonials Section -->

    <!-- ======= Cta Section ======= -->
    <!-- <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section>End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>What exactly do we do? Tap a picture for more info.</p>
        </div>

        <!-- <ul class="portfolio-flters d-flex justify-content-center">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul> -->

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="img/portfolio/new/web_design.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web Design</h4>
              <a href="img/portfolio/new/web_design.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Web Design"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="img/portfolio/new/web_dev.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web Development</h4>
              <!-- <p></p> -->
              <a href="img/portfolio/new/web_dev.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Web Development"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="img/portfolio/new/app.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Mobile App Development</h4>
              <!-- <p>App</p> -->
              <a href="img/portfolio/new/app.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Mobile App Development"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="img/portfolio/new/wordpress.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Wordpress</h4>
              <!-- <p>Web</p> -->
              <a href="img/portfolio/new/wordpress.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Wordpress"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

      


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="img/portfolio/new/blog.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Blogs</h4>
              <p>We Make The Best Blogs</p>
              <a href="img/portfolio/new/blog.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Blogs"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="img/portfolio/new/ecom2.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>E-commerce Sites</h4>
              <!-- <p>Card</p> -->
              <a href="img/portfolio/new/ecom2.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="E-commerce Sites"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="img/portfolio/new/graphic.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Graphic Design</h4>
              <!-- <p>Card</p> -->
              <a href="img/portfolio/new/graphic.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Graphic Design"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="img/portfolio/new/languages.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Programming Languages</h4>
              <p>New and Scalable Technology</p>
              <a href="img/portfolio/new/languages.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Programming Languages"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="img/portfolio/new/developer.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>The Best Workforce</h4>
              <p>We Write Beautiful Code</p>
              <a href="img/portfolio/new/developer.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="The Best Workforce"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-6 col-md-12 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/avatar3.png" class="img-fluid" alt="">
                <div class="social">
                  <!-- <a href=""><i class="icofont-twitter"></i></a> -->
                  <a href="<?=ekom__facebook;?>"><i class="icofont-facebook"></i></a>
                  <a href="<?=ekom__instagram;?>"><i class="icofont-instagram"></i></a>
                  <!-- <a href=""><i class="icofont-linkedin"></i></a> -->
                </div>
              </div>
              <div class="member-info">
                <h4>Ekomobong Archibong</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-12 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/avatar2.png" class="img-fluid" alt="">
                <div class="social">
                  <!-- <a href=""><i class="icofont-twitter"></i></a> -->
                  <a href="<?=dom__facebook;?>"><i class="icofont-facebook"></i></a>
                  <a href="<?=dom__instagram;?>"><i class="icofont-instagram"></i></a>
                  <!-- <a href=""><i class="icofont-linkedin"></i></a> -->
                </div>
              </div>
              <div class="member-info">
                <h4>Dominon Archibong</h4>
                <span>Chief Operating Officer</span>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Is Webful legit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Yes, Webful is legit and can be 100% trusted. We render the service before you pay.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-8" class="collapsed">Are your web services expensive to order? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-8" class="collapse" data-parent=".faq-list">
                <p>
                No, they are not. We have different packages that will be suitable to your needs. We have the Basic packages, Standard packages and Premium Packages for all the services we offer.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">How can I make an order a service / Contact Webful? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Phone/Whatsapp: <a href="tel://<?=telephone;?>"><?=telephone2;?></a>
                  Gmail: <a href="mailto:<?=email;?>"><?=email;?></a>
                  Message us on our Facebook Page: <a href="https://www.fb.me/WebfulNG">fb.me/WebfulNG</a>
                  Instagram: <a href="<?=webful_insta;?>"><?=webful_insta;?></a>
                  

                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">How can I make a payment for a service rendered? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  We make use of paystack payment gateway. We will set-up a paystack page exclusively for you to make your payment.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">How can i signup as a developer at Webful? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  Send us an email with your name, nationality and the programming languages your'e skilled in.
                </p>
              </div>
            </li>

            <!-- <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li> -->

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus      officiis commodi quidem hic quas.</p> -->
        </div>

        <div>
        <div class="text-center"><a class = "contact_special" href="<?=fb_link;?>">Contact Us Via Facebook</a></div>
          
        <!-- <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> -->
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Ibadan, Nigeria.</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:<?=email;?>"><?=email;?></a></p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p><a href="tel://<?=telephone;?>"><?=telephone2;?></a></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" disabled="disabled"/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" disabled="disabled"/>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" disabled="disabled"/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" disabled="disabled"></textarea>
                <div class="validate"></div>
              </div>
              <!-- <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><a class = "contact_special" href = "<?=fb_link;?>">Message Us On Our Facebook Page</a></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<?php
  include ('includes/foot.php');
?>