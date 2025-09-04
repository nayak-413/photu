<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me - John Doe Photography</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --bg-color: #f4f4f4;
            --dark-primary: #2c3e50;
            --accent-color: #c59d5f;
            --accent-hover: #b89158;
            --text-light: #ecf0f1;
            --text-dark: #34495e;
            --border-color: #ecf0f1;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-dark);
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .hero-section {
            background: url('https://placehold.co/1920x1080/2c3e50/ecf0f1?text=John+Doe') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 150px 0;
            text-align: center;
            position: relative;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        .hero-section .container {
            position: relative;
            z-index: 2;
        }

        .contact-section {
            padding: 100px 0 0;
            /* Adjusted padding */
        }

        .contact-card {
            background: #fff;
            border-radius: 0;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            animation: fadeIn 1s ease-in-out;
        }

        .form-section {
            padding: 40px;
        }

        .contact-info-section {
            background-color: var(--dark-primary);
            color: var(--text-light);
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .contact-info-section h3 {
            margin-bottom: 20px;
        }

        .contact-info-section p,
        .contact-info-section a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
        }

        .contact-info-section a:hover {
            color: var(--accent-color);
        }

        .contact-info-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .contact-info-item i {
            font-size: 20px;
            width: 30px;
            text-align: center;
            margin-right: 15px;
            color: var(--accent-color);
        }

        .social-icons a {
            color: var(--text-light);
            font-size: 22px;
            margin-right: 15px;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: var(--accent-color);
        }

        .input-group-text {
            background-color: transparent;
            border: 1px solid #ddd;
            border-right: 0;
            width: 50px;
            justify-content: center;
            border-radius: 0;
        }

        .form-control,
        .form-select {
            border: 1px solid #ddd;
            border-left: 0;
            padding-left: 10px;
            border-radius: 0;
        }

        .form-control:focus,
        .form-select:focus {
            box-shadow: none;
            border-color: var(--accent-color);
        }

        .form-control:focus~.input-group-text,
        .form-select:focus~.input-group-text {
            border-color: var(--accent-color);
            color: var(--accent-color);
        }

        .btn-primary {
            background-color: var(--accent-color);
            border: none;
            border-radius: 0;
            padding: 12px 20px;
            font-weight: 500;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--accent-hover);
            color: #fff;
        }

        .btn-primary:disabled {
            background-color: var(--accent-hover);
            cursor: not-allowed;
        }

        /* Map Section */
        .map-container {
            width: 100%;
            height: 200px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 0;
            filter: grayscale(1) invert(0.9) contrast(0.8);
        }

        /* Testimonial Section */
        .testimonial-section {
            padding: 100px 0;
            background-color: #fff;
        }

        .testimonial-card {
            background: var(--bg-color);
            border-radius: 0;
            padding: 40px;
        }

        .testimonial-section h2 {
            margin-bottom: 50px;
        }

        .carousel-item {
            text-align: center;
        }

        .carousel-item img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 3px solid var(--accent-color);
        }

        .carousel-item blockquote {
            font-size: 1.1rem;
            font-style: italic;
            color: #555;
            max-width: 700px;
            margin: 0 auto 20px;
        }

        .carousel-item .blockquote-footer {
            color: var(--dark-primary);
            font-weight: 500;
            font-style: normal;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(1) grayscale(100) brightness(0.5);
        }

        /* FAQ Section */
        .faq-section {
            padding: 100px 0;
            background-color: var(--bg-color);
        }

        .faq-section h2 {
            margin-bottom: 50px;
        }

        .accordion-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 0 !important;
            /* Override bootstrap */
            margin-bottom: 10px;
        }

        .accordion-button {
            border-radius: 0 !important;
            font-weight: 500;
            color: var(--text-dark);
        }

        .accordion-button:not(.collapsed) {
            background-color: var(--dark-primary);
            color: var(--text-light);
        }

        .accordion-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(197, 157, 95, 0.25);
        }

        .accordion-button::after {
            filter: brightness(0) invert(1);
        }

        .accordion-button:not(.collapsed)::after {
            filter: none;
        }

        .accordion-body {
            color: var(--text-dark);
            line-height: 1.7;
        }

        .footer {
            background-color: var(--dark-primary);
            color: var(--text-light);
            padding: 40px 0;
        }

        .footer a {
            color: var(--text-light);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: var(--accent-color);
        }

        /* Fade-in Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">John Doe Photography</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold">Get In Touch</h1>
            <p class="lead">I'd love to hear from you. Let's create something beautiful together.</p>
        </div>
    </header>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-card">
                <div class="row g-0">
                    <!-- Form Section -->
                    <div class="col-lg-7 form-section">
                        <h2 class="mb-4">Send a Message</h2>
                        <?php
                        // --- PHPMailer Integration ---
                        use PHPMailer\PHPMailer\PHPMailer;
                        use PHPMailer\PHPMailer\Exception;

                        // Required if you're using Composer
                        require 'vendor/autoload.php';
                        // Or if you downloaded manually, point to the files
                        // require 'PHPMailer/src/Exception.php';
                        // require 'PHPMailer/src/PHPMailer.php';
                        // require 'PHPMailer/src/SMTP.php';
                        
                        // Include database configuration
                        require_once 'db_config.php';

                        // PHP logic for form submission
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                            // Sanitize and get form data
                            $name = htmlspecialchars(trim($_POST["name"]));
                            $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
                            $inquiry_type = htmlspecialchars(trim($_POST["inquiry_type"]));
                            $message = htmlspecialchars(trim($_POST["message"]));

                            // Basic validation
                            if (empty($name) || empty($email) || empty($inquiry_type) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                http_response_code(400);
                                echo "<div class='alert alert-danger'>Oops! Please complete the form and try again.</div>";
                                exit;
                            }

                            // --- DATABASE INTEGRATION ---
                            $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                            if ($conn->connect_error) {
                                http_response_code(500);
                                echo "<div class='alert alert-danger'>Oops! A server error occurred (DB). Please try again later.</div>";
                                exit;
                            }
                            $stmt = $conn->prepare("INSERT INTO inquiries (name, email, inquiry_type, message) VALUES (?, ?, ?, ?)");
                            $stmt->bind_param("ssss", $name, $email, $inquiry_type, $message);
                            $db_success = $stmt->execute();
                            $stmt->close();
                            $conn->close();
                            // --- END DATABASE INTEGRATION ---
                        
                            if ($db_success) {
                                $mail = new PHPMailer(true);
                                try {
                                    // --- SERVER SETTINGS ---
                                    // $mail->SMTPDebug = 2; // Enable verbose debug output for testing
                                    $mail->isSMTP();
                                    $mail->Host = 'smtp.example.com'; // Your SMTP server (e.g., 'smtp.gmail.com')
                                    $mail->SMTPAuth = true;
                                    $mail->Username = 'user@example.com'; // Your SMTP username (your email)
                                    $mail->Password = 'your_app_password'; // Your SMTP password or App Password
                                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                                    $mail->Port = 465; // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                        
                                    // --- EMAIL TO PHOTOGRAPHER ---
                                    $mail->setFrom('from@example.com', 'Contact Form'); // The "from" address
                                    $mail->addAddress('photographer@example.com', 'John Doe'); // Add a recipient
                                    $mail->addReplyTo($email, $name); // Set reply-to to the user's email
                        
                                    // Content
                                    $mail->isHTML(false); // Set email format to plain text
                                    $mail->Subject = "New Inquiry: $inquiry_type from $name";
                                    $mail->Body = "You have received a new message from your website contact form.\n\n" .
                                        "Here are the details:\n\n" .
                                        "Name: $name\n" .
                                        "Email: $email\n" .
                                        "Inquiry Type: $inquiry_type\n\n" .
                                        "Message:\n$message";

                                    $mail->send();

                                    // --- AUTOMATIC EMAIL RESPONDER TO USER ---
                                    $mail->clearAddresses();
                                    $mail->clearReplyTos();
                                    $mail->addAddress($email, $name);
                                    $mail->setFrom('photographer@example.com', 'John Doe Photography');
                                    $mail->Subject = "Thank you for contacting John Doe Photography!";
                                    $mail->Body = "Hello $name,\n\nThank you for reaching out! We have received your message and will get back to you within 24-48 hours.\n\nHere is a copy of your inquiry:\n------------------------\n$message\n------------------------\n\nBest regards,\nJohn Doe Photography";

                                    $mail->send();

                                    http_response_code(200);
                                    echo "<div class='alert alert-success'>Thank You! Your message has been sent. A confirmation email is on its way to you.</div>";

                                } catch (Exception $e) {
                                    http_response_code(500);
                                    // Display a user-friendly message. The detailed error is logged for the developer.
                                    echo "<div class='alert alert-danger'>Your message was recorded, but the notification email could not be sent due to a mail server error. We will contact you shortly.</div>";
                                    // For debugging: error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
                                }
                            } else {
                                http_response_code(500);
                                echo "<div class='alert alert-danger'>Oops! Your message could not be recorded in the database. Please try again.</div>";
                            }
                        }
                        ?>
                        <div id="form-messages" class="mb-3"></div>
                        <form id="ajax-contact" method="post"
                            action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name"
                                    required>
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email Address" required>
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                <select class="form-select" id="inquiry_type" name="inquiry_type" required>
                                    <option value="" selected disabled>Select Inquiry Type...</option>
                                    <option value="Wedding">Wedding Photography</option>
                                    <option value="Portrait">Portrait Session</option>
                                    <option value="Event">Event Coverage</option>
                                    <option value="Commercial">Commercial/Product</option>
                                    <option value="General">General Question</option>
                                </select>
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                <textarea class="form-control" id="message" name="message" rows="5"
                                    placeholder="Your Message" required></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Send Message <i
                                        class="fas fa-paper-plane ms-2"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Info Section -->
                    <div class="col-lg-5 contact-info-section">
                        <h3>Contact Information</h3>
                        <p>Have a project in mind or just want to say hello? Reach out to me directly.</p>

                        <div class="map-container">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.1583091352!2d-74.11976397334034!3d40.69766374873439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1692040859421!5m2!1sen!2sin"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="contact-info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>123 Photo Lane, New York, USA</span>
                        </div>
                        <div class="contact-info-item">
                            <i class="fas fa-phone"></i>
                            <a href="tel:+1234567890">+1 (234) 567-890</a>
                        </div>
                        <div class="contact-info-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:hello@johndoe.com">hello@johndoe.com</a>
                        </div>
                        <div class="mt-3">
                            <p>Follow Me:</p>
                            <div class="social-icons">
                                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-pinterest"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <h2 class="text-center fw-bold">What My Clients Say</h2>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial-card">
                                    <img src="https://placehold.co/80x80/c59d5f/fff?text=JS" class="d-block mx-auto"
                                        alt="Client Jane Smith">
                                    <blockquote>"John's work is simply breathtaking. He captured our wedding day
                                        perfectly, and we couldn't be happier with the photos. Professional, creative,
                                        and a joy to work with!"</blockquote>
                                    <figcaption class="blockquote-footer">Jane & Tom Smith</figcaption>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-card">
                                    <img src="https://placehold.co/80x80/c59d5f/fff?text=M" class="d-block mx-auto"
                                        alt="Client Mark Johnson">
                                    <blockquote>"The headshots John took for our corporate team were fantastic. He made
                                        everyone feel comfortable and the results were professional and polished. Highly
                                        recommended."</blockquote>
                                    <figcaption class="blockquote-footer">Mark Johnson, CEO of TechCorp</figcaption>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-card">
                                    <img src="https://placehold.co/80x80/c59d5f/fff?text=E" class="d-block mx-auto"
                                        alt="Client Emily White">
                                    <blockquote>"I needed product photos for my new online store, and John delivered
                                        beyond my expectations. The lighting and composition were perfect, and my sales
                                        have increased since I updated the website!"</blockquote>
                                    <figcaption class="blockquote-footer">Emily White, Founder of Crafty Creations
                                    </figcaption>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="text-center fw-bold">Frequently Asked Questions</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What are your rates for a wedding?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Wedding packages begin at $2,500. Since every wedding is unique, I offer customized
                                    packages based on the hours of coverage, number of photographers, and desired
                                    products (like albums or prints). Please fill out the contact form with your wedding
                                    details for a personalized quote.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How far in advance should we book your services?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    For weddings, it's best to book 9-18 months in advance, especially for popular
                                    dates. For portrait sessions or events, 2-4 months is usually sufficient. However,
                                    don't hesitate to reach out for last-minute availability!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    When and how will we receive our photos?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You will receive a link to a private online gallery with your fully edited,
                                    high-resolution images. The turnaround time is typically 4-6 weeks for weddings and
                                    2 weeks for portrait sessions. From the gallery, you can download all images, share
                                    them with family and friends, and order professional prints.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <p>&copy; 2025 John Doe Photography. All Rights Reserved.</p>
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom JS for AJAX form submission -->
    <script>
        $(function () {
            // --- Form Submission Logic ---
            var form = $('#ajax-contact');
            var formMessages = $('#form-messages');
            var submitButton = form.find('button[type="submit"]');
            var originalButtonHtml = submitButton.html();

            $(form).submit(function (event) {
                event.preventDefault();
                var formData = $(form).serialize();

                // Show loading state
                submitButton.prop('disabled', true);
                submitButton.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...');

                $.ajax({
                    type: 'POST',
                    url: $(form).attr('action'),
                    data: formData
                })
                    .done(function (response) {
                        $(formMessages).removeClass('alert-danger').addClass('alert alert-success').html(response);
                        // Clear form fields
                        $('#name, #email, #message').val('');
                        $('#inquiry_type').prop('selectedIndex', 0);
                    })
                    .fail(function (data) {
                        $(formMessages).removeClass('alert-success').addClass('alert alert-danger');
                        if (data.responseText !== '') {
                            $(formMessages).html(data.responseText);
                        } else {
                            $(formMessages).text('An error occurred and your message could not be sent.');
                        }
                    })
                    .always(function () {
                        // Restore button state
                        submitButton.prop('disabled', false);
                        submitButton.html(originalButtonHtml);
                    });
            });
        });
    </script>

</body>

</html>