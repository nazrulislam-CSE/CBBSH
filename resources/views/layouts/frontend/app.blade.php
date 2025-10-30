<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME') }} | {{ $pageTitle ?? '' }}</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{asset('frontend/img/logo/logo.jpg')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Roboto+Slab:wght@400;500;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
</head>

<body>
    <!-- Top Header with Logo & Icons -->
    <!-- Header -->
    @include('layouts.frontend.navbar')

    {{-- main content --}}
    @yield('content')

    <!-- Developers Section -->
    <!-- <section class="developers-section">
      <div class="container">
        <h2 class="section-title fade-in">Our Committee Team</h2>
        <div class="row">
          <div class="col-md-3 fade-in">
            <div class="developer-card">
              <img
                src="https://www.decfbd.org/wp-content/uploads/2022/06/WhatsApp-Image-2022-06-01-at-12.48.59-PM.jpg"
                alt="Mahmudul Islam Duke"
              />
              <h5>Sheikh Allama Muhammad Abdul Hai Nadwi (M.Z.A.)</h5>
              <p>President</p>
              <p>Baitush Sharaf Complex, Dhanialapara, Chittagong. Phone: 031-721099</p>
            </div>
          </div>
          <div class="col-md-3 fade-in delay-1">
            <div class="developer-card">
              <img
                src="https://www.decfbd.org/wp-content/uploads/2022/05/unnamed.webp"
                alt="Md. Sakibul Islam"
              />
              <h5>Alhaz Rafiqul Huda Chowdhury</h5>
              <p>Vice President</p>
              <p>Badar Mokam,Cox's Bazar.Mobile: 01711-160525</p>
            </div>
          </div>
           <div class="col-md-3 fade-in">
            <div class="developer-card">
              <img
                src="img/team/1.jpg"
                alt="Mahmudul Islam Duke"
              />
              <h5>Alhaz M. M. Sirajul Islam</h5>
              <p>General Secretary</p>
              <p>An Nahar Mansion,    Main Road, Cox's Bazar. Mobile: 01816-026696</p>
            </div>
          </div>
          <div class="col-md-3 fade-in delay-1">
            <div class="developer-card">
              <img
                src="https://www.decfbd.org/wp-content/uploads/2022/05/unnamed.webp"
                alt="Md. Sakibul Islam"
              />
              <h5>Mr. S. M. Kamal Uddin</h5>
              <p>Joint Secretary</p>
              <p>Tekpara, Main Road, Cox's Bazar.Mobile: 01819-976162</p>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-3 fade-in">
            <div class="developer-card">
              <img
                src="https://www.decfbd.org/wp-content/uploads/2022/06/WhatsApp-Image-2022-06-01-at-12.48.59-PM.jpg"
                alt="Mahmudul Islam Duke"
              />
              <h5>Dr. Bashir Ahamad</h5>
              <p>Treasurer</p>
              <p>Tekpara, Main Road, Cox's Bazar.Mobile: 01715-542245</p>
            </div>
          </div>
          <div class="col-md-3 fade-in delay-1">
            <div class="developer-card">
              <img
                src="https://www.decfbd.org/wp-content/uploads/2022/05/unnamed.webp"
                alt="Md. Sakibul Islam"
              />
              <h5>Alhaz Mahfuzul Islam</h5>
              <p>Executive Member</p>
              <p>Boro Bazar Road, Bazar Ghata, Cox's Bazar. Mobile: 01711-182094</p>
            </div>
          </div>
           <div class="col-md-3 fade-in">
            <div class="developer-card">
              <img
                src="https://www.decfbd.org/wp-content/uploads/2022/06/WhatsApp-Image-2022-06-01-at-12.48.59-PM.jpg"
                alt="Mahmudul Islam Duke"
              />
              <h5>Dr. Md. Nurul Alam</h5>
              <p>General Secretary</p>
              <p>Main Road, Bazar Ghata, Cox's Bazar.Mobile: 01711-130684</p>
            </div>
          </div>
          <div class="col-md-3 fade-in delay-1">
            <div class="developer-card">
              <img
                src="https://www.decfbd.org/wp-content/uploads/2022/05/unnamed.webp"
                alt="Md. Sakibul Islam"
              />
              <h5>Mr. Farid Ahamed</h5>
              <p>Joint Secretary</p>
              <p>Faisal Mansion,Buddist Temple Road,Cox's Bazar.Mobile: 01718-373364</p>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-3 fade-in">
            <div class="developer-card">
              <img
                src="https://www.decfbd.org/wp-content/uploads/2022/06/WhatsApp-Image-2022-06-01-at-12.48.59-PM.jpg"
                alt="Mahmudul Islam Duke"
              />
              <h5>Mr. Aungkya Chin (Meshang)</h5>
              <p>Treasurer</p>
              <p>Burmeese School Road, Cox's Bazar.Mobile: 01675-629927</p>
            </div>
          </div>
          <div class="col-md-3 fade-in">
            <div class="developer-card">
              <img
                src="https://www.decfbd.org/wp-content/uploads/2022/06/WhatsApp-Image-2022-06-01-at-12.48.59-PM.jpg"
                alt="Mahmudul Islam Duke"
              />
              <h5>Alhaz Rashedul Alam Khorshed</h5>
              <p>General Secretary</p>
              <p>Baitush Sharaf Complex, Dhanialapara, Chittagong. Phone: 031-721099</p>
            </div>
          </div>
          <div class="col-md-3 fade-in delay-1">
            <div class="developer-card">
              <img
                src="https://www.decfbd.org/wp-content/uploads/2022/05/unnamed.webp"
                alt="Md. Sakibul Islam"
              />
              <h5>Alhaz Nurul Islam</h5>
              <p>Executive Member</p>
              <p>Baitush Sharaf Complex, Dhanialapara, Chittagong. Phone: 031-721099</p>
            </div>
          </div>
           <div class="col-md-3 fade-in">
            <div class="developer-card">
              <img
                src="https://www.decfbd.org/wp-content/uploads/2022/06/WhatsApp-Image-2022-06-01-at-12.48.59-PM.jpg"
                alt="Mahmudul Islam Duke"
              />
              <h5>Mowlana Nazrul Islam</h5>
              <p>Executive Member</p>
              <p>Burmeese School Road, Tekpara, Cox's Bazar.Mobile: 01815-508325</p>
            </div>
          </div>
          <div class="col-md-3 fade-in delay-1">
            <div class="developer-card">
              <img
                src="https://www.decfbd.org/wp-content/uploads/2022/05/unnamed.webp"
                alt="Md. Sakibul Islam"
              />
              <h5>Mr. Mujibul Islam</h5>
              <p>Executive Member</p>
              <p>Tekpara, Cox's Bazar.Mobile: 01816-362741</p>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Footer -->
    @include('layouts.frontend.footer')
   

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- The rest of your sections continue here... -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sticky navbar with logo
        document.addEventListener("DOMContentLoaded", function() {
            const navbar = document.querySelector(".main-navbar");

            function checkScroll() {
                if (window.pageYOffset > 100) {
                    navbar.classList.add("scrolled");
                } else {
                    navbar.classList.remove("scrolled");
                }
            }

            window.addEventListener("scroll", checkScroll);
            checkScroll();

            // Rest of your existing JavaScript code...
        });
    </script>
    <script>
        // News Slider
        document.addEventListener("DOMContentLoaded", function() {
            const newsSlides = document.querySelectorAll(".news-slide");
            const newsIndicators = document.querySelectorAll(".news-indicator");
            let currentNewsSlide = 0;

            function showNewsSlide(index) {
                // Remove active class from all slides and indicators
                newsSlides.forEach((slide) => slide.classList.remove("active"));
                newsIndicators.forEach((indicator) =>
                    indicator.classList.remove("active")
                );

                // Add active class to current slide and indicator
                newsSlides[index].classList.add("active");
                newsIndicators[index].classList.add("active");

                currentNewsSlide = index;
            }

            // Add click event to indicators
            newsIndicators.forEach((indicator, index) => {
                indicator.addEventListener("click", () => {
                    showNewsSlide(index);
                });
            });

            // Auto slide for news
            function autoSlideNews() {
                let nextSlide = (currentNewsSlide + 1) % newsSlides.length;
                showNewsSlide(nextSlide);
            }

            // Change slide every 7 seconds
            setInterval(autoSlideNews, 7000);

            // Scroll animations
            const fadeElements = document.querySelectorAll(".fade-in");

            function checkScroll() {
                fadeElements.forEach((element) => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 150;

                    if (elementTop < window.innerHeight - elementVisible) {
                        element.classList.add("visible");
                    }
                });

                // Back to top button
                const backToTopButton = document.querySelector(".back-to-top");
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.add("active");
                } else {
                    backToTopButton.classList.remove("active");
                }

                // Navbar scroll effect
                const navbar = document.querySelector(".main-navbar");
                if (window.pageYOffset > 50) {
                    navbar.classList.add("scrolled");
                } else {
                    navbar.classList.remove("scrolled");
                }
            }

            window.addEventListener("scroll", checkScroll);
            checkScroll(); // Check on page load

            // Back to top functionality
            document
                .querySelector(".back-to-top")
                .addEventListener("click", function(e) {
                    e.preventDefault();
                    window.scrollTo({
                        top: 0,
                        behavior: "smooth",
                    });
                });

            // Initialize dropdown submenus
            var dropdownSubmenus = document.querySelectorAll(".dropdown-submenu");

            dropdownSubmenus.forEach(function(item) {
                item.addEventListener("mouseenter", function() {
                    this.querySelector(".dropdown-menu").classList.add("show");
                });

                item.addEventListener("mouseleave", function() {
                    this.querySelector(".dropdown-menu").classList.remove("show");
                });
            });
        });
    </script>
</body>

</html>
