<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>YourStudio - About Us</title>
  <link rel="icon" type="image/x-icon" href="/assets/logo.ico" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <style>
    body {
      font-family: "Outfit", sans-serif;
      background: linear-gradient(rgba(0, 0, 0, 0.439), rgba(0, 0, 0, 0.287)),
        url("https://images.pexels.com/photos/167832/pexels-photo-167832.jpeg") no-repeat center center fixed;
      background-size: cover;
      color: white;
      overflow-x: hidden;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark" data-aos="fade-down">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Camera-Moto-icon.png" width="48"
          height="28" alt="Logo" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
        aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav mx-auto text-center">
          <li class="nav-item">
            <a class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="packages.php">PACKAGES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="about.php">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="proj.php">OUR PROJECTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">CONTACT US</a>
          </li>
        </ul>
        <div class="d-flex justify-content-center justify-content-lg-end mt-2 mt-lg-0">
          <a href="book1.php" class="btn btn-get-started">Book Now</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero" data-aos="zoom-in">
    <div class="container">
      <h1>About Us</h1>
    </div>
  </section>
  <br /><br />

  <!-- About Section -->
  <section class="container glass-section" data-aos="fade-up">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="https://images.pexels.com/photos/842548/pexels-photo-842548.jpeg" alt="Photographer"
          class="img-fluid rounded shadow" />
      </div>
      <div class="col-lg-6">
        <h2 class="section-title text-white mb-3">
          Capturing Life, One Frame at a Time
        </h2>
        <p>
          Welcome to <strong>YourStudio</strong> — where every photograph
          tells a story. With years of experience behind the lens, we
          specialize in turning fleeting moments into timeless memories.
        </p>
        <p>
          Whether it's weddings, portraits, travel, or events, our style is
          crisp, emotional, and rooted in storytelling. We don’t just take
          pictures — we create experiences that last forever.
        </p>
      </div>
    </div>
  </section>

  <!-- Behind The Scenes -->
  <section class="container glass-section" data-aos="fade-up">
    <h2 class="text-center mb-4">Behind The Scenes</h2>
    <div class="row gallery g-3 mt-4">
      <div class="col-md-4">
        <img src="https://images.pexels.com/photos/2510430/pexels-photo-2510430.jpeg" alt="BTS 1" class="img-fluid" />
      </div>
      <div class="col-md-4">
        <img src="https://images.pexels.com/photos/11745675/pexels-photo-11745675.jpeg" alt="BTS 2" class="img-fluid" />
      </div>
      <div class="col-md-4">
        <img src="https://images.pexels.com/photos/275977/pexels-photo-275977.jpeg" alt="BTS 3" class="img-fluid" />
      </div>
    </div>
  </section>

  <!-- Timeline -->
  <section class="container glass-section" data-aos="fade-up">
    <h2 class="section-title">Our Journey</h2>
    <div class="timeline">
      <div class="timeline-item left" data-aos="fade-right">
        <div class="content">
          <h4>2018</h4>
          <p>
            Founded YourStudio with the vision of capturing real, raw moments
            through the lens.
          </p>
        </div>
      </div>
      <div class="timeline-item right" data-aos="fade-left">
        <div class="content">
          <h4>2019</h4>
          <p>
            Completed our first 100 professional shoots including pre-weddings
            and corporate events.
          </p>
        </div>
      </div>
      <div class="timeline-item left" data-aos="fade-right">
        <div class="content">
          <h4>2021</h4>
          <p>
            Expanded to 5 new cities with dedicated editors and second
            shooters onboard.
          </p>
        </div>
      </div>
      <div class="timeline-item right" data-aos="fade-left">
        <div class="content">
          <h4>2023</h4>
          <p>
            Featured in national photography magazines and covered our biggest
            destination wedding yet.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-banner" data-aos="fade-up">
    <h2 class="mb-3">Ready to Make Magic?</h2>
    <p>Let’s create something beautiful together. Book your shoot today!</p>
    <a href="contact.php" class="btn btn-get-started mt-3">Contact Us Now</a>
  </section>

  <!-- Contact Section -->
  <!-- <section id="contact" class="py-5" data-aos="fade-up">
      <div class="container">
        <h2 class="text-center mb-4">Contact Us</h2>
        <p class="text-center mb-5">
          Fill the form or find us on the map below.
        </p>
        <div class="row align-items-stretch g-5">
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

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <!-- Scroll to Top Button -->
  <button onclick="scrollToTop()" id="scrollTopBtn" title="Go to top">
    <i class="bi bi-chevron-up bold icon"></i>
  </button>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script src="js/main.js"></script>
</body>

</html>