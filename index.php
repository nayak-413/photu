<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Photography</title>
  <link rel="icon" type="image/x-icon" href="/assets/logo.ico" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&display=swap" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <!-- Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- AOS Animation CSS -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      background: url("https://images.pexels.com/photos/733853/pexels-photo-733853.jpeg") no-repeat center center fixed;
      background-size: cover;
      color: white;
      overflow-x: hidden;
    }
  </style>
</head>

<body>
  <!-- ===== Navbar ===== -->
  <nav class="navbar navbar-expand-lg navbar-dark" data-aos="fade-down">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img
          src="https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Camera-Moto-icon.png" width="48"
          height="28" alt="Logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav mx-auto text-center">
          <li class="nav-item">
            <a class="nav-link active" href="#home">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="packages.php">PACKAGES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">ABOUT US</a>
          </li>

          <!-- <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="packages.php"
                data-bs-toggle="dropdown"
                >Our Packages</a
              >
              <ul class="dropdown-menu bg-primary">
                <li>
                  <a class="dropdown-item text-white" href="#">Service 1</a>
                </li>
                <li>
                  <a class="dropdown-item text-white" href="#">Service 2</a>
                </li>
                <li>
                  <a class="dropdown-item text-white" href="#">Service 3</a>
                </li>
              </ul>
            </li> -->

          <li class="nav-item">
            <a class="nav-link" href="proj.php">OUR PROJECTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">CONTACT US</a>
          </li>
        </ul>
        <div class="d-flex justify-content-center justify-content-lg-end mt-2 mt-lg-0">
          <a href="book1.php" target="_blank" class="btn btn-get-started">Book Now</a>
        </div>
        <!-- <button
            class="theme-toggle-btn"
            id="themeToggle"
            title="Toggle dark/light mode"
          >
            <i class="bi bi-moon"></i>
          </button> -->
      </div>
    </div>
  </nav>

  <main>
    <!-- ===== Hero Carousel ===== -->
    <section id="home" data-aos="fade-up">
      <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="
                background-image: url('https://images.pexels.com/photos/1421903/pexels-photo-1421903.jpeg');
              ">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption text-white text-center" data-aos="fade-up" data-aos-delay="200">
              <h1>Welcome to Our Website</h1>
              <p>
                We provide amazing packages just for you.<br />Explore more
                about our work below.
              </p>
              <a href="#about" class="btn btn-warning">Read More</a>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="
                background-image: url('https://images.pexels.com/photos/1612351/pexels-photo-1612351.jpeg');
              ">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption text-white text-center" data-aos="fade-up" data-aos-delay="200">
              <h1>Your Vision, Our Mission</h1>
              <p>
                We turn your ideas into reality with passion.<br />Let's build
                something great together.
              </p>
              <a href="#projects" class="btn btn-warning">Read More</a>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="
                background-image: url('https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg');
              ">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption text-white text-center" data-aos="fade-up" data-aos-delay="200">
              <h1>Join Us Today</h1>
              <p>
                Our expert team is ready to help you.<br />Contact us to get
                started.
              </p>
              <a href="#contact" class="btn btn-warning">Read More</a>
            </div>
          </div>
        </div>

        <!-- Carousel controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </section>

    <!-- ===== Portfolio Section ===== -->
    <section id="portfolio" class="py-5 bg-light">
      <div class="container">
        <h2 class="testi text-center mb-4 fw-bold" data-aos="fade-down">
          Featured Portfolio
        </h2>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <img src="https://images.pexels.com/photos/1344697/pexels-photo-1344697.jpeg"
              class="img-fluid rounded shadow" alt="Portfolio 1" />
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <img src="https://images.pexels.com/photos/290470/pexels-photo-290470.jpeg" class="img-fluid rounded shadow"
              alt="Portfolio 2" />
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <img
              src="https://st3.depositphotos.com/1428083/13319/i/450/depositphotos_133199504-stock-photo-man-with-travel-suitcase.jpg"
              class="img-fluid rounded shadow" alt="Portfolio 3" />
          </div>
        </div>
      </div>
    </section>

    <!-- ===== Testimonials Section ===== -->
    <section id="testimonials" class="py-5 bg-light">
      <div class="container">
        <h2 class="testi text-center mb-4 fw-bold" data-aos="fade-down" data-aos-delay="300">
          Client Testimonials
        </h2>
        <div class="testimonials-container">
          <button class="nav-btn prev" aria-label="Previous testimonial" data-aos="fade-right" data-aos-delay="1800">
            &#10094;
          </button>
          <div class="testimonials-banner">
            <!-- First set of 10 testimonials -->
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="300">
              <p>
                "Amazing experience! The team captured our special day
                perfectly."
              </p>
              <h6 class="mb-0">- Priya & Karan</h6>
            </div>
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="400">
              <p>"Highly professional and creative. Loved every shot!"</p>
              <h6 class="mb-0">- Rohan Mehta</h6>
            </div>
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="500">
              <p>
                "Their attention to detail made our wedding photos magical."
              </p>
              <h6 class="mb-0">- Anika Sharma</h6>
            </div>
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="600">
              <p>"The video montage was beyond our expectations!"</p>
              <h6 class="mb-0">- Vikram Singh</h6>
            </div>
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="700">
              <p>
                "Such a fun team to work with, and the results were stunning."
              </p>
              <h6 class="mb-0">- Meera Patel</h6>
            </div>
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="800">
              <p>"They turned our event into a timeless story."</p>
              <h6 class="mb-0">- Arjun & Neha</h6>
            </div>
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="900">
              <p>"Exceptional quality and service. Highly recommend!"</p>
              <h6 class="mb-0">- Sanjay Kumar</h6>
            </div>
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="1000">
              <p>"Every moment was captured with such creativity."</p>
              <h6 class="mb-0">- Riya Gupta</h6>
            </div>
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="1100">
              <p>"Professional, punctual, and incredibly talented."</p>
              <h6 class="mb-0">- Aditya Rao</h6>
            </div>
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="1200">
              <p>"Our photos are a treasure we’ll cherish forever."</p>
              <h6 class="mb-0">- Shalini Desai</h6>
            </div>
            <!-- Duplicate set for seamless looping -->
          </div>
          <button class="nav-btn next" aria-label="Next testimonial" data-aos="fade-left" data-aos-delay="1800">
            &#10095;
          </button>
        </div>
      </div>
    </section>

    <!-- ===== Why Choose Me Section ===== -->
    <section id="why-choose-me" class="py-5 glass" data-aos="fade-up">
      <div class="container">
        <h2 class="text-center mb-4 fw-bold">Why Choose Me?</h2>
        <div class="row text-center g-4">
          <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <i class="bi bi-camera fs-1 text-warning"></i>
            <h5 class="mt-3">Expertise</h5>
            <p>Years of experience capturing moments that matter most.</p>
          </div>
          <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
            <i class="bi bi-stars fs-1 text-warning"></i>
            <h5 class="mt-3">Creativity</h5>
            <p>Unique perspectives and compositions for every client.</p>
          </div>
          <div class="col-md-4" data-aos="zoom-in" data-aos-delay="600">
            <i class="bi bi-heart fs-1 text-warning"></i>
            <h5 class="mt-3">Client Love</h5>
            <p>Over 100+ happy clients who trusted us with their memories.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== FAQ Section ===== -->
    <section id="faq" class="faq-section py-5" data-aos="fade-up">
      <div class="container">
        <h2 class="text-center mb-4 fw-bold">Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="faq1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                How do I book a session?
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                You can use the "Book Now" button or contact us via the
                contact page.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="faq2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2">
                What packages do you offer?
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                We offer customized wedding, pre-wedding, travel, and event
                packages.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="faq3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3">
                Do you travel for shoots?
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes! We cover locations across India and abroad for
                destination shoots.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== Team Section ===== -->
    <section id="team" class="py-5 bg-light glass p-4">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2 class="testi text-center mb-4 fw-bold" data-aos="fade-up">
          Meet Our Team
        </h2>
        <div class="testi row g-4" data-aos="fade-up">
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="300">
            <img src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png" height="100px"
              class="rounded-circle mb-3" alt="Photographer 1" />
            <h5>Saleel Nayak</h5>
            <p>Founder & Lead Photographer</p>
          </div>
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="800">
            <img src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png" height="100px"
              class="rounded-circle mb-3" alt="Photographer 2" />
            <h5>Alisha Verma</h5>
            <p>Creative Director</p>
          </div>
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="1000">
            <img src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png" height="100px"
              class="rounded-circle mb-3" alt="Photographer 3" />
            <h5>Ravi Patel</h5>
            <p>Video Production Head</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== Call to Action ===== -->
    <section class="cta-section text-center py-5 bg-primary text-white" data-aos="fade zoom-in">
      <div class="container">
        <h2 class="fw-bold" data-aos="fade-up" data-aos-delay="500">
          Ready to capture your special moments?
        </h2>
        <p class="mb-4" data-aos="fade-up" data-aos-delay="800">
          Let's bring your ideas to life with stunning visuals.
        </p>
        <a href="#contact" class="btn btn-warning" data-aos="zoom-in" data-aos-delay="1100">Contact Us Now</a>
      </div>
    </section>

    <!-- ===== Contact Section  ===== -->
    <!-- <section id="contact" class="py-5" data-aos="fade-up">
        <div class="container">
          <h2 class="text-center mb-4">Contact Us</h2>
          <p class="text-center mb-5">
            Fill the form or find us on the map below.
          </p>

          <div class="row align-items-stretch g-5">
           Contact Form 
            <div class="col-lg-6 mb-4 mb-lg-0">
              <form id="contactForm" novalidate>
                <div class="form-group">
                  <i class="fas fa-user"></i>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    required
                    placeholder="Name"
                  />
                </div>
                <div class="invalid-feedback">Please enter your name.</div>

                <div class="form-group">
                  <i class="fas fa-envelope"></i>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    required
                    placeholder="Email"
                  />
                </div>
                <div class="invalid-feedback">Please enter a valid email.</div>

                <div class="form-group">
                  <i class="fas fa-phone"></i>
                  <input
                    type="tel"
                    class="form-control"
                    id="phone"
                    required
                    placeholder="Phone No"
                  />
                </div>
                <div class="invalid-feedback">Please enter a subject.</div>

                <div class="form-group">
                  <i class="fas fa-pen"></i>
                  <input
                    type="text"
                    class="form-control"
                    id="subject"
                    required
                    placeholder="Subject"
                  />
                </div>
                <div class="invalid-feedback">Please enter a subject.</div>

                <div class="form-group">
                  <i class="fas fa-message"></i>
                  <textarea
                    class="form-control"
                    id="message"
                    rows="4"
                    required
                    placeholder="Message"
                  ></textarea>
                </div>
                <div class="invalid-feedback">Please enter your message.</div>

                <button type="submit" class="btn btn-send">
                  Send Message <i class="fas fa-paper-plane ms-2"></i>
                </button>
              </form>
            </div>
            <br /><br />

            Google Map 
            <div class="col-lg-6">
              <div class="ratio ratio-4x3 rounded shadow">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11610019906!2d72.7410998!3d19.0821978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63d1ad1a6c3%3A0x205d3e10e76e7b60!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1689655662101!5m2!1sen!2sin"
                  class="w-100 h-100"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </section> -->
  </main>


  <?php include 'footer.php'; ?>

  <!-- Scroll to Top Button -->
  <button onclick="scrollToTop()" id="scrollTopBtn" title="Go to top">
    <i class="bi bi-chevron-up bold icon"></i>
  </button>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script src="js/main.js"></script>
</body>

</html>