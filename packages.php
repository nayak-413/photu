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
      /* Add the linear-gradient before the url */
      background: linear-gradient(rgba(76, 78, 78, 0.388),
          rgba(0, 0, 0, 0.717)),
        url("https://images.pexels.com/photos/5268392/pexels-photo-5268392.jpeg") no-repeat center center fixed;
      /* background: radial-gradient(circle at center, #808094, #7474f3); */
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
            <a class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#packages">PACKAGES</a>
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
          <a href="book1.php" class="btn btn-get-started">Book Now</a>
        </div>
      </div>
    </div>
  </nav>

  <main data-aos="fade-up">
    <!-- ===== Hero Banner for Packages Page ===== -->
    <section class="hero-banner d-flex align-items-center text-white" id="packages-hero">
      <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3" data-aos="fade-down">
          Find Your Perfect Package
        </h1>
        <p class="lead mb-4" data-aos="fade-up" data-aos-delay="200">
          Thoughtfully crafted plans tailored to capture your best moments —
          professionally, beautifully, and affordably.
        </p>
        <a href="#packages" class="btn btn-warning btn-lg fw-semibold shadow" data-aos="zoom-in" data-aos-delay="400">
          📸 Explore Packages
        </a>
      </div>
    </section>

    <!-- ===== Package Pricing Table ===== -->
    <section class="container py-5" data-aos="fade-up" id="packages">
      <h2 class="fw-bold text-center mb-5 display-5">
        📸 Photography Packages
      </h2>
      <div class="row g-4 justify-content-center">
        <!-- Basic -->
        <div class="col-md-4" data-aos="fade-up">
          <div class="glass-section p-4 text-center position-relative h-100 shadow-sm package-box">
            <h3 class="text-white mb-3">Basic</h3>
            <p class="fw-bold text-warning fs-2">₹20,000+</p>
            <ul class="text-start text-white mb-4">
              <li>2 hours coverage</li>
              <li>50 edited digital images</li>
              <li>Online gallery</li>
            </ul>
            <a href="contact.php" class="btn btn-outline-warning fw-semibold">Book Now</a>
          </div>
        </div>

        <!-- Standard (Most Popular) -->
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="glass-section p-4 text-center position-relative h-100 shadow package-box highlight">
            <span class="badge popular-badge position-absolute top-0 start-50 translate-middle badge-custom">⭐ Most
              Popular</span>
            <h3 class="text-white mb-3">Standard</h3>
            <p class="fw-bold text-warning fs-2">₹35,000+</p>
            <ul class="text-start text-white mb-4">
              <li>4 hours coverage + second shooter</li>
              <li>150 edited images + prints</li>
              <li>Mini photo album</li>
            </ul>
            <a href="contact.php" class="btn btn-warning fw-bold shadow-sm">Get Quote</a>
          </div>
        </div>

        <!-- Premium -->
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="glass-section p-4 text-center position-relative h-100 shadow-sm package-box">
            <h3 class="text-white mb-3">Premium</h3>
            <p class="fw-bold text-warning fs-2">₹55,000+</p>
            <ul class="text-start text-white mb-4">
              <li>Full day coverage</li>
              <li>300+ edited images</li>
              <li>Heirloom album & digital files</li>
            </ul>
            <a href="contact.php" class="btn btn-outline-warning fw-semibold">Inquire Now</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== What’s Included Section ===== -->
    <section class="py-5" data-aos="fade-up">
      <h2 class="fw-bold text-center mb-4 text-white">💡 What's Included</h2>
      <p class="text-center text-light mb-5">
        Every package includes more than just a photoshoot — it's a premium
        experience.
      </p>
      <div class="included-accordion d-none d-md-block">
        <!-- Desktop Grid View -->
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
            <div class="included-card h-100">
              <h5>
                <i class="fas fa-comments me-2 text-warning"></i> Pre-Shoot
                Consultation
              </h5>
              <p>
                Plan your location, outfit, and theme with us before the big
                day.
              </p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-right" data-aos-delay="200">
            <div class="included-card h-100">
              <h5>
                <i class="fas fa-magic me-2 text-warning"></i> Professional
                Editing
              </h5>
              <p>
                Every photo is fine-tuned for perfection with cinematic color
                grading.
              </p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-right" data-aos-delay="300">
            <div class="included-card h-100">
              <h5>
                <i class="fas fa-route me-2 text-warning"></i> Local Travel
              </h5>
              <p>
                We include intra-city travel costs so you don't have to worry.
              </p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-right" data-aos-delay="400">
            <div class="included-card h-100">
              <h5>
                <i class="fas fa-user-edit me-2 text-warning"></i> Outfit
                Changes
              </h5>
              <p>
                Change outfits freely during the session to get more creative
                shots.
              </p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-right" data-aos-delay="500">
            <div class="included-card h-100">
              <h5>
                <i class="fas fa-camera-retro me-2 text-warning"></i> Backup
                Gear
              </h5>
              <p>
                We bring spare cameras, batteries, and lights for every shoot.
              </p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-right" data-aos-delay="600">
            <div class="included-card h-100">
              <h5>
                <i class="fas fa-cloud-upload-alt me-2 text-warning"></i>
                Online Delivery
              </h5>
              <p>Access your edited photos via a secure private link.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Accordion -->
      <div class="accordion d-md-none included-accordion" id="includedAccordion">
        <!-- Item 1 -->
        <div class="accordion-item included-card" data-aos="fade-right" data-aos-delay="100">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
              <i class="fas fa-comments text-warning me-2"></i> Pre-Shoot
              Consultation
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#includedAccordion">
            <div class="accordion-body">
              Plan your location, outfit, and theme with us before the big
              day.
            </div>
          </div>
        </div>
        <!-- Item 2 -->
        <div class="accordion-item included-card" data-aos="fade-right" data-aos-delay="100">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo">
              <i class="fas fa-magic text-warning me-2"></i> Professional
              Editing
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#includedAccordion">
            <div class="accordion-body">
              Every photo is fine-tuned for perfection with cinematic color
              grading.
            </div>
          </div>
        </div>
        <!-- Item 3 -->
        <div class="accordion-item included-card" data-aos="fade-right" data-aos-delay="100">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree">
              <i class="fas fa-route me-2 text-warning"></i> Local Travel
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#includedAccordion">
            <div class="accordion-body">
              We include intra-city travel costs so you don't have to worry.
            </div>
          </div>
        </div>
        <!-- Item 4 -->
        <div class="accordion-item included-card" data-aos="fade-right" data-aos-delay="100">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFour">
              <i class="fas fa-user-edit me-2 text-warning"></i> Outfit
              Changes
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#includedAccordion">
            <div class="accordion-body">
              Change outfits freely during the session to get more creative
              shots.
            </div>
          </div>
        </div>
        <!-- Item 5 -->
        <div class="accordion-item included-card" data-aos="fade-right" data-aos-delay="100">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFive">
              <i class="fas fa-camera-retro me-2 text-warning"></i> Backup
              Gear
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#includedAccordion">
            <div class="accordion-body">
              We bring spare cameras, batteries, and lights for every shoot.
            </div>
          </div>
        </div>
        <!-- Item 6 -->
        <div class="accordion-item included-card" data-aos="fade-right" data-aos-delay="100">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseSix">
              <i class="fas fa-cloud-upload-alt me-2 text-warning"></i> Online
              Delivery
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#includedAccordion">
            <div class="accordion-body">
              Access your edited photos via a secure private link.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== Add-ons & Extras ===== -->
    <section class="py-5 text-white unified-section" data-aos="fade-up" id="addons">
      <div class="container">
        <h2 class="fw-bold text-center mb-4">📦 Add-Ons & Extras</h2>
        <p class="text-center text-white-50 mb-4">
          Upgrade your experience with these optional enhancements tailored to
          your needs.
        </p>
        <div class="row g-4 text-center">
          <!-- Extra Hours -->
          <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
            <div class="addon-card h-100">
              <i class="fas fa-clock fa-2x text-warning mb-2"></i>
              <h5 class="fw-semibold">Extra Hours</h5>
              <p class="mb-0 text-white-50">
                Extend your session time when the moment calls for more.
              </p>
            </div>
          </div>
          <!-- Drone Photography -->
          <div class="col-md-4" data-aos="fade-right" data-aos-delay="200">
            <div class="addon-card h-100">
              <i class="fas fa-drone fa-2x text-warning mb-2"></i>
              <h5 class="fw-semibold">Drone Photography</h5>
              <p class="mb-0 text-white-50">
                Cinematic aerial shots for breathtaking perspectives.
              </p>
            </div>
          </div>
          <!-- Second Shooter -->
          <div class="col-md-4" data-aos="fade-right" data-aos-delay="300">
            <div class="addon-card h-100">
              <i class="fas fa-user-friends fa-2x text-warning mb-2"></i>
              <h5 class="fw-semibold">Second Shooter</h5>
              <p class="mb-0 text-white-50">
                Capture more angles and behind-the-scenes moments.
              </p>
            </div>
          </div>
          <!-- Cinematic Video -->
          <div class="col-md-4" data-aos="fade-right" data-aos-delay="400">
            <div class="addon-card h-100">
              <i class="fas fa-film fa-2x text-warning mb-2"></i>
              <h5 class="fw-semibold">Cinematic Video</h5>
              <p class="mb-0 text-white-50">
                Add emotional storytelling with professionally edited video.
              </p>
            </div>
          </div>
          <!-- Same-Day Delivery -->
          <div class="col-md-4" data-aos="fade-right" data-aos-delay="500">
            <div class="addon-card h-100">
              <i class="fas fa-bolt fa-2x text-warning mb-2"></i>
              <h5 class="fw-semibold">Same-Day Delivery</h5>
              <p class="mb-0 text-white-50">
                Selected previews delivered within hours of your session.
              </p>
            </div>
          </div>
          <!-- Album Printing -->
          <div class="col-md-4" data-aos="fade-right" data-aos-delay="600">
            <div class="addon-card h-100">
              <i class="fas fa-book fa-2x text-warning mb-2"></i>
              <h5 class="fw-semibold">Album Printing</h5>
              <p class="mb-0 text-white-50">
                High-quality prints in luxurious albums and keepsakes.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== Package Comparison Table ===== -->
    <section class="container glass-section comparison-section py-5" data-aos="fade-up" id="comparison">
      <h2 class="fw-bold text-center mb-4">📊 Package Comparison</h2>
      <div class="table-responsive">
        <table class="table table-borderless align-middle text-center comparison-table">
          <thead class="table-dark" data-aos="slide-left" data-aos-delay="100">
            <tr>
              <th scope="col">Features</th>
              <th scope="col">Basic</th>
              <th scope="col" class="highlighted-column">
                Standard<br /><span class="badge bg-warning text-dark mt-1">⭐ Most Popular</span>
              </th>
              <th scope="col">Premium</th>
            </tr>
          </thead>
          <tbody>
            <tr data-aos="slide-left" data-aos-delay="200">
              <td>Session Duration</td>
              <td>2 hours</td>
              <td class="highlighted-column">4 hours + assistant</td>
              <td>Full day with team</td>
            </tr>
            <tr data-aos="slide-left" data-aos-delay="300">
              <td>Edited Photos</td>
              <td>50</td>
              <td class="highlighted-column">150</td>
              <td>300+</td>
            </tr>
            <tr data-aos="slide-left" data-aos-delay="400">
              <td>Album / Prints</td>
              <td>None</td>
              <td class="highlighted-column">20 Physical Prints</td>
              <td>Premium Album + Prints</td>
            </tr>
            <tr data-aos="slide-left" data-aos-delay="500">
              <td>Deliverables</td>
              <td>Online Gallery</td>
              <td class="highlighted-column">Online + USB</td>
              <td>Online, USB & Album</td>
            </tr>
            <tr data-aos="slide-left" data-aos-delay="600">
              <td>Delivery Time</td>
              <td>2 Weeks</td>
              <td class="highlighted-column">3 Weeks</td>
              <td>4 Weeks</td>
            </tr>
            <tr data-aos="slide-left" data-aos-delay="700">
              <td>Price (Approx)</td>
              <td>₹20,000</td>
              <td class="highlighted-column">₹35,000</td>
              <td>₹55,000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <div class="unified-section">
      <!-- ===== Pricing Disclaimer & Offers ===== -->
      <section class="py-5 text-center" data-aos="fade-up">
        <div class="container">
          <div class="p-4 bg-warning text-dark fw-semibold shadow-sm rounded mb-4 border border-dark">
            🎁 <strong>Limited-Time Offer:</strong> Flat
            <span class="animated-offer">10% OFF</span> on all Premium
            Packages — valid till <strong>August 31, 2025</strong>!
          </div>

          <p class="text-white-50 small">
            * All displayed prices are base rates and may change based on
            location, travel, or add-on services. Final quote includes
            customizations and taxes. <br />
            For tailored pricing, reach out directly to our booking desk.
          </p>
        </div>
      </section>

      <!-- ===== Booking Availability Reference ===== -->
      <section class="container-fluid py-5" data-aos="fade-up" data-aos-delay="300" id="booking-info">
        <div class="container text-white">
          <h2 class="fw-bold text-center mb-4">📅 Booking Availability</h2>
          <hr />
          <div class="row g-4">
            <div class="col-md-6">
              <h5>
                <i class="bi bi-calendar-check me-2"></i> Advance Booking
              </h5>
              <p>
                Book at least <strong>3–4 weeks in advance</strong> to secure
                preferred dates, especially for weekends or festivals.
              </p>
            </div>
            <div class="col-md-6">
              <h5>
                <i class="bi bi-clock-history me-2"></i> Urgent Requests
              </h5>
              <p>
                We may accommodate <strong>last-minute shoots</strong> (within
                72 hours) subject to availability and an additional charge.
              </p>
            </div>
            <div class="col-md-6">
              <h5><i class="bi bi-calendar3-range me-2"></i> Peak Seasons</h5>
              <p>
                <strong>November-February</strong> and
                <strong>April-May</strong> are high-demand. Book early to
                avoid unavailability.
              </p>
            </div>
            <div class="col-md-6">
              <h5>
                <i class="bi bi-envelope-check me-2"></i> Confirmation Process
              </h5>
              <p>
                Bookings are confirmed only after a
                <strong>50% advance</strong> and written approval via email or
                WhatsApp.
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>

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

    <!-- ===== Contact Section  ===== -->
    <section id="contact" class="py-5" data-aos="fade-up">
      <div class="testi container">
        <h2 class="text-center mb-4">Contact Us</h2>
        <p class="text-center mb-5">
          Fill the form or find us on the map below.
        </p>

        <div class="row align-items-stretch g-5">
          <!-- Contact Form -->
          <div class="col-lg-6 mb-4 mb-lg-0">
            <form id="contactForm" novalidate>
              <div class="form-group">
                <i class="fas fa-user"></i>
                <input type="text" class="form-control" id="name" required placeholder="Name" />
              </div>
              <div class="invalid-feedback">Please enter your name.</div>

              <div class="form-group">
                <i class="fas fa-envelope"></i>
                <input type="email" class="form-control" id="email" required placeholder="Email" />
              </div>
              <div class="invalid-feedback">Please enter a valid email.</div>

              <div class="form-group">
                <i class="fas fa-phone"></i>
                <input type="tel" class="form-control" id="phone" required placeholder="Phone No" />
              </div>
              <div class="invalid-feedback">Please enter a subject.</div>

              <div class="form-group">
                <i class="fas fa-pen"></i>
                <input type="text" class="form-control" id="subject" required placeholder="Subject" />
              </div>
              <div class="invalid-feedback">Please enter a subject.</div>

              <div class="form-group">
                <i class="fas fa-message"></i>
                <textarea class="form-control" id="message" rows="4" required placeholder="Message"></textarea>
              </div>
              <div class="invalid-feedback">Please enter your message.</div>

              <button type="submit" class="btn btn-send">
                Send Message <i class="fas fa-paper-plane ms-2"></i>
              </button>
            </form>
          </div>
          <br /><br />

          <!-- Google Map -->
          <div class="col-lg-6">
            <div class="ratio ratio-4x3 rounded shadow">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11610019906!2d72.7410998!3d19.0821978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63d1ad1a6c3%3A0x205d3e10e76e7b60!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1689655662101!5m2!1sen!2sin"
                class="w-100 h-100" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
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