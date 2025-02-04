<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>


    </style>
    <style>
        /* Define the slide-up animation */
        @keyframes slideUp {
            0% {
                transform: translateY(500px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    
        /* Add the animation to a reusable class */
        .slide-up {
            opacity: 0;
            animation: slideUp 1s ease-out forwards; /* forwards ensures it stays in its final state */
        }
    </style>
    
</head>
<body>
    <header>
        <div class="header-left">
            <img src="img/sig1.png" alt="Profile Picture">
        </div>
        <div class="header-center">
            <nav>
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#projects">Projects</a>
                <a href="#services">Services</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
        <div class="header-right">
            <a href="https://www.facebook.com/loyd.sitc" target="_blank">
                <img src="img/fb.png" alt="Facebook" />
            </a>
            <a href="https://www.instagram.com/_loydiiii?igsh=MWlua25mcHJ6NzNzcQ==" target="_blank">
                <img src="img/ig.png" alt="Instagram" />
            </a>
            <a href="mailto:loyda.sitchon@gmail.com" target="_blank">
                <img src="img/gmail.png" alt="Email" />
            </a>
        </div>
    </header>
<div id="home">
    <!-- About Section -->
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h1>I'm Loyd Sitchon</h1>
                <p class="text">I am a passionate web developer with expertise in various programming languages and technologies.
                My goal is to create intuitive and engaging web experiences for users. </p>
            </div>
            <div class="about-image">
                <div class="image-container">
                    <img src="img/ud.jpg" alt="Front Image" class="front" />
                    <img src="img/1.png" alt="Back Image" class="back" />
                </div>
            </div>
        </div>
        <hr class="section-line"> <!-- Underline line -->
    </div>

    <!-- Skill Section -->
    <div id="about" class="container " style="margin-top: 50px;">
        
        <div class="about-layout">
            
            <div class="about-text">
                <h1>About</h1>
                <p class="text">
                    A passionate web designer and developer dedicated to crafting exceptional digital experiences. With a blend of creativity and technical expertise, 
                    I specialize in creating user-friendly, responsive, and aesthetically appealing websites that meet modern web standards.
                </p>
            </div>
            <div class="skills">
                <div class="skill">
                    <p>PHP</p>
                    <div class="progress">
                        <div class="progress-bar" style="--width: 80%;">80%</div>
                    </div>
                </div>
                <div class="skill">
                    <p>JavaScript</p>
                    <div class="progress">
                        <div class="progress-bar" style="--width: 60%;">60%</div>
                    </div>
                </div>
                <div class="skill">
                    <p>HTML</p>
                    <div class="progress">
                        <div class="progress-bar" style="--width: 90%;">90%</div>
                    </div>
                </div>
                <div class="skill">
                    <p>CSS</p>
                    <div class="progress">
                        <div class="progress-bar" style="--width: 70%;">70%</div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="section-line"> <!-- Underline line -->
    </div>

    <!-- Projects Section -->
    <div id="projects" class="container" style="margin-top: 50px;">
        <h1>Projects</h1>
        <div class="project">
            <h3>Project 1</h3>
            <div class="carousel">
                <button class="prev" onclick="changeSlide(-1)">❮</button>
                <div class="slides">
                    <img src="img/edu.png" alt="Project 1 Image 2" class="carousel-image">
                    <img src="img/edud.png" alt="Project 1 Image 3" class="carousel-image">
                </div>
                <button class="next" onclick="changeSlide(1)">❯</button>
            </div>
        </div>
        <hr class="section-line"> <!-- Underline line -->
    </div>

    <!-- Services Section -->
    <div id="services" class="container">
        <div class="services">
            <h1 style="text-align: left;">Services</h1>
            <div class="services-list">
                <!-- Web Development Service -->
                <div class="service-item">
                    <div class="icon">🌐</div>
                    <h3>Web Development</h3>
                    <p>Building responsive, dynamic websites tailored to your business needs.</p>
                </div>
    
                <!-- Web Design Service -->
                <div class="service-item">
                    <div class="icon">🎨</div>
                    <h3>Web Design</h3>
                    <p>Creating beautiful, user-friendly designs that drive engagement.</p>
                </div>
    
                <!-- Video Editing Service -->
                <div class="service-item">
                    <div class="icon">🎥</div>
                    <h3>Video Editing</h3>
                    <p>Professional video editing for your content creation needs.</p>
                </div>
    
                <!-- IT Consulting Service -->
                <div class="service-item">
                    <div class="icon">💻</div>
                    <h3>IT Consulting</h3>
                    <p>Helping you optimize your IT infrastructure and business processes.</p>
                </div>
            </div>
        </div>
        <hr class="section-line"> <!-- Underline line -->
    </div>
    

    <div id="contact" class="container" style="margin-top: 50px;">
        <h1>Contact</h1>
        <div class="contact-layout">
            <!-- Left Side: Contact Information -->
            <aside class="contact-info" style="border: none;">
                <p>
                        <img src="img/mail.png" alt="Email Icon" style="width: 20px; margin-right: 8px;">
                        loyda.sitchon@gmail.com
                </p>
                <p>
                    <img src="img/mobile.png" alt="Phone Icon" style="width: 20px; margin-right: 8px;">
                    +63 915 032 9736
                </p>
                <p>
                    <img src="img/location.png" alt="Address Icon" style="width: 20px; margin-right: 8px;">
                    Surigao City, Phillipines
                </p>
            </aside>
            
    
            <!-- Right Side: Contact Form -->
            <div class="contact-form">
                <h3>Get In Touch</h3>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message:</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="button">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 My Portfolio</p>
    </footer>
</div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const aboutContent = document.querySelector(".about-content");

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        aboutContent.classList.add("visible"); // Add the visible class when in view
                        observer.unobserve(entry.target); // Stop observing once it appears
                    }
                });
            }, {
                threshold: 0.5 // Trigger the animation when 50% of the element is in view
            });

            observer.observe(aboutContent); // Start observing the element
        });

        let currentSlide = 0;

        function changeSlide(direction) {
            const images = document.querySelectorAll(".carousel-image");
            images[currentSlide].classList.remove("active");

            // Calculate the next slide index
            currentSlide = (currentSlide + direction + images.length) % images.length;

            images[currentSlide].classList.add("active");
        }

        // Initialize the first image as active
        document.querySelectorAll(".carousel-image")[0].classList.add("active");
        
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const elements = document.querySelectorAll(".container");
    
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("slide-up"); // Add animation class
                        observer.unobserve(entry.target); // Stop observing after animation is triggered
                    }
                });
            }, {
                threshold: 0.1 // Trigger when 10% of the element is visible
            });
    
            elements.forEach(element => observer.observe(element)); // Observe each section
        });
    </script>
    
</body>

</html>
