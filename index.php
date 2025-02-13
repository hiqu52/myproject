<?php
// Connect to MySQL
$servername = "localhost";
$username = "root";  // Change as per your database configuration
$password = "";  // Change as per your database configuration
$dbname = "car_service";  // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $service_area = $_POST['service_area'];

    // Insert into database
    $sql = "INSERT INTO bookings (name, email, whatsapp, service_area) VALUES ('$name', '$email', '$whatsapp', '$service_area')";
    
    // if ($conn->query($sql) === TRUE) {
    //     $alert_message = "Your booking has been successfully submitted!";
    // } else {
    //     $alert_message = "Error: " . $conn->error;
    // }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Service Booking</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Add FontAwesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
</head>

<body>

<!-- Header with Logo and Company Name -->
<!-- <header id="home" data-aos="fade-up" data-aos-delay="500">
    <div class="logo">
      <!-- Place your logo here -->
        <!-- <h2 id="logo-text">CHARTER HOUSE CARS</h2>
            <p id="solagon">Your Comfort, Our Priority</p>
    </div>
</header>  -->

<nav data-aos="fade-up" data-aos-delay="500">
    <div class="hamburger" onclick="toggleMenu()">
        <i class="fas fa-bars"></i> 
    </div>
    <ul class="nav-links">
    <h2 id="logo-text">CHARTERHOUSECARS</h2>
    <img src="logo.png-removebg-preview.png" alt="" width="100px" id="logo-img">
        <li><a href="#home">Home</a></li>
        <li><a href="#pricing">Services</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#booking-form">Book Online</a></li>
        <!-- <button id="">Contact Us</button> -->
    </ul> 
</nav>

<script>
  function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    const hamburger = document.querySelector('.hamburger');

    navLinks.classList.toggle('active');
    hamburger.classList.toggle('active');

    // Close menu if clicking outside
    document.addEventListener('click', function closeMenu(event) {
        if (!navLinks.contains(event.target) && !hamburger.contains(event.target)) {
            navLinks.classList.remove('active');
            hamburger.classList.remove('active');
            document.removeEventListener('click', closeMenu); // Remove event listener after closing
        }
    });
}

</script>
<div id="home"></div>
<!-- Pricing and Areas of Service -->
<section id="pricing" data-aos="fade-up" data-aos-delay="500">
    <h2 data-aos="fade-left" data-aos-delay="500">Our Airport Prices & Areas</h2>
    <div class="pricing-area">
    <div class="area" data-aos="fade-up" data-aos-delay="500">
        <img src="1st pic.jpg" alt="Airport Godalming">
        <h3>Airport Godalming</h3>
        <a href="https://www.google.com/maps?q=Godalming" target="_blank" class="map-btn">View in Google Maps</a>
    </div>

    <div class="area" data-aos="fade-up" data-aos-delay="500">
        <img src="2nd pic.jpg" alt="Airport Milford">
        <h3>Airport Milford</h3>
        <a href="https://maps.app.goo.gl/DJugKgxo3MXT1Sr56" target="_blank" class="map-btn">View in Google Maps</a>
    </div>

    <div class="area" data-aos="fade-up" data-aos-delay="500">
        <img src="4th pic.jpg" alt="Chiddingfold">
        <h3>Chiddingfold</h3>
        <a href="https://www.google.com/maps?q=Chiddingfold" target="_blank" class="map-btn">View in Google Maps</a>
    </div>

    <div class="area" data-aos="fade-up" data-aos-delay="500">
        <img src="5th pic.jpg" alt="Elstead">
        <h3>Elstead</h3>
        <a href="https://www.google.com/maps?q=Elstead" target="_blank" class="map-btn">View in Google Maps</a>
    </div>

    <div class="area" data-aos="fade-up" data-aos-delay="500">
        <img src="7th pic.jpg" alt="Gatwick Airport">
        <h3>Gatwick Airport Transfers</h3>
        <a href="https://www.google.com/maps?q=Gatwick+Airport" target="_blank" class="map-btn">View in Google Maps</a>
    </div>

    <div class="area" data-aos="fade-up" data-aos-delay="500">
        <img src="2nd pic.jpg" alt="Milford">
        <h3>Milford</h3>
        <a href="https://maps.app.goo.gl/DJugKgxo3MXT1Sr56" target="_blank" class="map-btn">View in Google Maps</a>
    </div>

    <div class="area" data-aos="fade-up" data-aos-delay="500">
        <img src="8th pic.jpeg" alt="Witley">
        <h3>Witley</h3>
        <a href="https://www.google.com/maps?q=Witley" target="_blank" class="map-btn">View in Google Maps</a>
    </div>

    <div class="area" data-aos="fade-up" data-aos-delay="500">
        <img src="1st pic.jpg" alt="Godalming">
        <h3>Godalming</h3>
        <a href="https://maps.app.goo.gl/gVzmS1cpfbbwVRiK8" target="_blank" class="map-btn">View in Google Maps</a>
    </div>

    <div class="area" data-aos="fade-up" data-aos-delay="500">
        <img src="https://lh3.googleusercontent.com/p/AF1QipO3l6LtfsRAVLHRus35afcdy524ogf5HyKWOuWH=w408-h240-k-no-pi-10-ya93.2-ro-0-fo100" alt="Farncombe">
        <h3>Farncombe</h3>
        
        <a href="https://www.google.com/maps?q=Farncombe" target="_blank" class="map-btn">View in Google Maps</a>
    </div>

    <div class="area" data-aos="fade-up" data-aos-delay="500">
        <img src="https://lh5.googleusercontent.com/p/AF1QipPrKvY571Be5Os6HWb0m5ZUVdX_MTuC4i2iUihh=w408-h725-k-no" alt="Brook">
        <h3>Brook</h3>
        
        <a href="https://maps.app.goo.gl/wLzJiDXTuec2zmxeA" target="_blank" class="map-btn">View in Google Maps</a>
    </div>
</div>

    <!-- Boxed Notes Section -->
    <div class="note-box" data-aos="fade-up" data-aos-delay="500">
        <h4>NOTE:</h4>
        <p>£10 will be added for 6 seater, estate, and also for late night/early morning journeys.</p>
    </div>
    
    <div class="airport-box" data-aos="fade-up" data-aos-delay="500">
        <h4>AIRPORTS:</h4>
        <p>£5 for meet and greet at airport, first 45 minutes parking free, customer will pay for additional parking.</p>
    </div>
</section>
<!-- Cars Pic Section -->
<section id="cars-pic" data-aos="fade-up" data-aos-delay="500">
    <div class="car-image" data-aos="fade-right" data-aos-delay="500">
        <img src="WhatsApp Image 2025-02-09 at 8.03.38 PM.jpeg" alt="">
        <button class="book-now" onclick="callNow('+441234567890')">Book Now</button>
    </div>
    <div class="car-image" data-aos="fade-right" data-aos-delay="500">
        <img src="WhatsApp Image 2025-02-09 at 8.03.40 PM (1).jpeg" alt="">
        <button class="book-now" onclick="callNow('+441234567890')">Book Now</button>
    </div>
    <div class="car-image" data-aos="fade-right" data-aos-delay="500">
        <img src="WhatsApp Image 2025-02-09 at 8.03.40 PM.jpeg" alt="">
        <button class="book-now" onclick="callNow('+441234567890')">Book Now</button>
    </div>
    <div class="car-image" data-aos="fade-right" data-aos-delay="500">
        <img src="WhatsApp Image 2025-02-09 at 8.03.41 PM.jpeg" alt="">
        <button class="book-now" onclick="callNow('+441234567890')">Book Now</button>
    </div>
    <div class="car-image" data-aos="fade-right" data-aos-delay="500">
        <img src="WhatsApp Image 2025-02-09 at 8.03.42 PM.jpeg" alt="">
        <button class="book-now" onclick="callNow('+441234567890')">Book Now</button>
    </div>
</section>

<!-- JavaScript for calling -->
<script>
    function callNow(phoneNumber) {
        window.location.href = "tel:" + phoneNumber;
    }
</script>

<!-- description section -->
<div class="description" id="about" data-aos="fade-up" data-aos-delay="500">
    <h2>Why Charterhousecars</h2>
    <p data-aos="fade-up" data-aos-delay="500">Welcome to Charterhouse Cars, your reliable and affordable transportation solution. We are dedicated to providing fast, safe, and comfortable rides for all our customers, whether you’re heading to work, catching a flight, or just out for a night on the town.

Our fleet of well-maintained, modern vehicles ensures you have a smooth ride every time. Our professional, experienced drivers are committed to making your journey safe and pleasant. With easy booking options and a commitment to punctuality, Charterhouse Cars is the trusted choice for all your transportation needs.

We offer competitive pricing, round-the-clock service, and are always available to meet your needs—no matter the time or day. Whether you’re a local resident or a visitor, our goal is to get you to your destination quickly, comfortably, and at the best price possible.

Choose Charterhouse Cars for your next ride, and experience the difference!</p>
</div>
<!-- Contact Section with WhatsApp Icon -->
<section id="contact">
<div class="whatsapp-chat">
    <a href="https://wa.me/message/6GOCSDYA2UXDL1" target="_blank" class="whatsapp-btn" title="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>

</section>

<!-- Booking Form -->
<section id="booking-form" data-aos="fade-up" data-aos-delay="500">
    <h2>Book a Ride</h2>
    <!-- <?php if (isset($alert_message)): ?>
        <div class="alert">
            <p><?php echo $alert_message; ?></p>
        </div>
    <?php endif; ?> -->
    
    <form method="POST">
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="text" name="whatsapp" placeholder="Enter your WhatsApp number" required>
        
        <select name="service_area" required>
            <option value="Service Area">Service Area</option>
            <option value="Heathrow">Airport Taxi Godalming</option>
            <option value="Gatwick">Airport Taxi Milford</option>
            <option value="Luton">Chiddingfold Taxi</option>
            <option value="Stansted">Elstead Taxi</option>
            <option value="City Airport">Gatwick Airport Transfers</option>
            <option value="St Pancras">Milford Taxi</option>
            <option value="Central London">Witley Taxi</option>
            <option value="Central London">Godalming Taxi</option>
            <option value="Central London">Farncombe Taxi</option>
            <option value="Brook Taxi">Brook Taxi</option>
        </select>
        
        <button type="submit" name="submit">Book Now</button>
    </form>
</section>
<!-- Google Map Section -->
<section id="map-section" data-aos="fade-up" data-aos-delay="500">
    <h2 class="map-heading">📍 Find Us</h2>
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9582106.122366443!2d-15.012343587457899!3d54.10244278649339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited%20Kingdom!5e0!3m2!1sen!2s!4v1739095056041!5m2!1sen!2s" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>

<!-- Contact Information Section -->
<section id="contact-info" data-aos="fade-up" data-aos-delay="500">
    <h2>Contact Information</h2>
    <div class="contact-box">
    <p><i class="fas fa-envelope"></i> Email: 
        <a href="mailto:charterhousecars@gmail.com">charterhousecars@gmail.com</a>
    </p>
    <p><i class="fas fa-map-marker-alt"></i> Address: Gu215hg 3 COURTENAY ROAD, WOKING, SURREY, UNITED KINGDOM</p>
    <p><i class="fas fa-phone"></i> Landline: 01483 962169</p>
</div>

</section>

<section id="useful-links" data-aos="fade-up" data-aos-delay="600">
    <h2>Useful Links</h2>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#pricing">Services</a></li>
        <li><a href="areas">Areas We Cover</a></li>
        <li><a href="#booking-form">Contact Us</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms & Conditions</a></li>
    </ul>
</section>

<section id="faqs" data-aos="fade-up" data-aos-delay="700">
    <h2>FAQs</h2>
    <div class="faq">
        <h3>How can I book a ride?</h3>
        <p>You can book a ride through our online booking form or contact us via phone or WhatsApp.</p>
    </div>
    <div class="faq">
        <h3>What areas do you cover?</h3>
        <p>We provide services across London and surrounding areas, including major airports and railway stations.</p>
    </div>
    <div class="faq">
        <h3>Are there any additional charges?</h3>
        <p>Additional charges may apply for waiting time, extra stops, or late-night bookings. Please check our pricing details.</p>
    </div>
</section>



<!-- <div id="contact">
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, consequuntur quis? Asperiores adipisci nisi fuga cumque dicta illo reiciendis, id laborum molestiae ratione quod animi magni nemo provident quia? Omnis quod rem porro maiores.</p>
</div> -->
<!-- Footer Section -->
<footer>
    <p>&copy; 2025 Car Service UK. All rights reserved.</p>
</footer>
<!-- javascript-links -->
<script src="script.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
</body>
</html>