<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Travel Website</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header section starts -->
    <section class="header">
        <a href="home.php" class="logo">Travel</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- Header section ends -->

    <!-- Home section starts -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(image/slide.jpeg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Travel around the world</h3>
                        <a href="package.php" class="btn">Discover more</a>
                    </div>
                </div>
                <!-- Additional swiper slides can be added here if needed -->
            </div>
        </div>
    </section>
    <!-- Home section ends -->

    <!-- Service section starts -->
    <section class="service">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="image/travel.jpg" alt="Adventure">
                <h3>Adventure</h3>
            </div>
            <div class="box">
                <img src="image/travle2.jpg" alt="Tour Guide">
                <h3>Tour Guide</h3>
            </div>
            <div class="box">
                <img src="image/travel3.jpeg" alt="Trekking">
                <h3>Trekking</h3>
            </div>
            <div class="box">
                <img src="image/travel4.jpeg" alt="Camp Fire">
                <h3>Camp Fire</h3>
            </div>
            <div class="box">
                <img src="image/travel5.jpeg" alt="Off Road">
                <h3>Off Road</h3>
            </div>
            <div class="box">
                <img src="image/travel6.jpeg" alt="Camping">
                <h3>Camping</h3>
            </div>
        </div>
    </section>
    <!-- Service section ends -->

    
    <!-----------About section----------------------->
    <section class="home-about">
        <div class="image">
            <img src="image/about.jpeg" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Harum excepturi ad, doloremque natus dolorum obcaecati
                repellat quaerat necessitatibus tenetur eum similique
                unde itaque explicabo quia! Eaque cumque tempore
                aliquid ab.</p>
            <a href="about.php" class="btn">Read more</a>
        </div>
    </section>

    <!-------------Package section---------------->
    <section class="home-package">
        <h1 class="heading"> Our packages </h1>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="image/hotel1.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>New york</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, velit.</p>
                        <a href="newyork.html" class="btn">Explore</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="image/hotel2.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>London</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, velit.</p>
                        <a href="london.html" class="btn">Explore</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="image/hotel3.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>Singapore</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, velit.</p>
                        <a href="book.php" class="btn">Book now</a>
                    </div>
                </div>

                <div class="load-more"><a href="package.php" class="btn">Load more</a></div>
            </div>
       
    </section>

    <!--------------------------Home offer section----------------------->
    <section class="offers">
    <h2 class="heading">Special Offers</h2>
    <div class="offers-container">
        <div class="offer-box">
            <div class="image">
                <img src="image/beach.jpeg" alt="Beach Offer">
                <span class="discount-tag">20% Off</span>
            </div>
            <div class="content">
                <h3>Sunny Beach Getaway</h3>
                <p>Escape to the beach with our exclusive offer and enjoy sunny days, blue waves, and a relaxing vibe.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="offer-box">
            <div class="image">
                <img src="image/mountain.jpeg" alt="Mountain Offer">
                <span class="discount-tag">15% Off</span>
            </div>
            <div class="content">
                <h3>Mountain Adventure</h3>
                <p>Conquer the peaks with this adventurous mountain package. Perfect for thrill-seekers!</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="offer-box">
            <div class="image">
                <img src="image/city.jpeg" alt="City Offer">
                <span class="discount-tag">10% Off</span>
            </div>
            <div class="content">
                <h3>City Exploration</h3>
                <p>Explore the heart of the city with cultural tours, famous landmarks, and hidden gems.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
    </div>
</section>

    <!-- Footer Section -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Question</a>
                <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms of Use</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"><i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"><i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
                <a href="#"><i class="fas fa-map"></i> Mumbai, India 400104 </a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook </a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter </a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram </a>
                <a href="#"><i class="fab fa-linkedin"></i> LinkedIn </a>
            </div>
        </div>
    </section>

    <!-- JS files -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
