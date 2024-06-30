

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="./style.css" />
  <title>Nutrition Fitness</title>
</head>

<body>
  <div class="container">
    <nav>
      <div class="nav__logo">Nutrition Fitness</div>
      <ul class="nav__links">
        <li class="link"> <a href="{{ route('demand.index') }}">demande inscreption</a></li>
        <li class="link"> <a href="#service">Service</a></li>
        <li class="link"> <a href="#trainers">coach</a></li>
        <li class="link"> <a href="#nutritionists">Nutrition</a></li>
        <li class="link"> <a href="">feedback</a></li>
        <li class="link"> <a href="#about">About us</a></li>
      </ul>

      @if (Route::has('login'))
      @auth
          <a href="{{ url('/home') }}" class="loginstyle">Home</a>
      @else
          <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
<div class="signup-distance">
</div>

          @if (Route::has('register'))
              <a href="{{ route('register') }}" class="signupstyle">Register</a>
          @endif
      @endauth	</div>
@endif

    </nav>
    <header class="header">
      <div class="content">
        <h1><span>Get Quick</span><br />Nutrition Fitness Services</h1>
        <p>
          In today fast-paced world, access to prompt and efficient nutrition and fitness services is of paramount
          importance. When faced with a nutritional or fitness emergency or seeking immediate attention in these areas,
          the ability to receive quick services can significantly impact the outcome of a situation.
        </p>
        <button class="btn">Get Services</button>
      </div>
      <div class="image">
        <span class="image__bg"></span>
        <img src="./images/header.png" alt="header image" />
        <div class="image__content image__content__1">
          <span><i class="ri-user-3-line"></i></span>
          <div class="details">
            <h4>1520+</h4>
            <p>Active Clients</p>
          </div>
        </div>
        <div class="image__content image__content__2">
          <ul>
            <li>
              <span><i class="ri-check-line"></i></span>
             Expert Trainers
            </li>
            <li>
              <span><i class="ri-check-line"></i></span>
              Expert Doctors
            </li>
          </ul>
        </div>
      </div>
    </header>
  </div>
  <br>
  <br>
   <!-- Advertisement Section -->
   <section class="advertisement">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="./images/ads1.png" alt="Advertisement 1">
        </div>
        <div class="swiper-slide">
          <img src="./images/ads2.png" alt="Advertisement 2">
        </div>
        <div class="swiper-slide">
          <img src="./images/ads3.png" alt="Advertisement 3">
        </div>
        <!-- Add more slides as needed -->
      </div>
      <!-- Add pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <section id="services" class="services-section" id="services">
    <h2 class="title">Our Services</h2>

    <div class="cards">
      <div class="card">
        <i class="fas fa-dumbbell"></i>
        <h3>Fitness Training</h3>
        <p>Personalized fitness programs led by certified trainers.</p>
      </div>
      <div class="card">
        <i class="fas fa-carrot"></i>
        <h3>Nutrition Counseling</h3>
        <p>Tailored nutrition plans by experienced nutritionists.</p>
      </div>
      <div class="card">
        <i class="fas fa-heartbeat"></i>
        <h3>Wellness Programs</h3>
        <p>Comprehensive programs for overall well-being.</p>
      </div>
    </div>
  </section>
  <section id="about" class="about-section">
    <h2>About Us</h2>
    <p>At Nutrifitness, we are dedicated to helping you achieve your health and fitness goals. Our team of experts
      provides personalized programs and guidance to support your journey towards a healthier lifestyle.</p>

  </section>

  <section id="trainers" class="trainers-section">
    <h2 class="title">Our Trainers</h2>
    <div class="cards">
      <div class="card">
        <img src="./images/coach1.png" alt="Trainer 1">
        <h3>John Doe</h3>
        <p>Specialization: Strength Training</p>
        <div class="social-links">
          <a href="#"> <i class="fab fa-facebook"></i></a>
          <a href="#"> <i class="fab fa-instagram"></i></a>
          <a href="#"> <i class="fas fa-envelope"></i></a>
        </div>
        <p>Rating: 4.8/5 <i class="fas fa-star" id="rating"></i>
        </p>
        <button class="btn">Demand Follow-up</button>
      </div>
      <div class="card">
        <img src="./images/coach1.png" alt="Trainer 1">
        <h3>John Doe</h3>
        <p>Specialization: Strength Training</p>
        <div class="social-links">
          <a href="#"> <i class="fab fa-facebook"></i></a>
          <a href="#"> <i class="fab fa-instagram"></i></a>
          <a href="#"> <i class="fas fa-envelope"></i></a>
        </div>
        <p>Rating: 4.8/5 <i class="fas fa-star" id="rating"></i>
        </p>
        <button class="btn">Demand Follow-up</button>
      </div>
      <div class="card">
        <img src="./images/coach1.png" alt="Trainer 1">
        <h3>John Doe</h3>
        <p>Specialization: Strength Training</p>
        <div class="social-links">
          <a href="#"> <i class="fab fa-facebook"></i></a>
          <a href="#"> <i class="fab fa-instagram"></i></a>
          <a href="#"> <i class="fas fa-envelope"></i></a>
        </div>
        <p>Rating: 4.8/5 <i class="fas fa-star" id="rating"></i>
        </p>
        <button class="btn">Demand Follow-up</button>
      </div>
      <!-- Add more trainer cards here -->
    </div>
  </section>

  <section id="nutritionists" class="nutritionists-section">
    <h2 class="title">Our Nutritionists</h2>
    <div class="cards">
      <div class="card">
        <img src="./images/medcin2.png" alt="Nutritionist 1">
        <h3>Jane Smith</h3>

        <p>Specialization: Weight Management</p>
        <div class="social-links">
          <a href="#"> <i class="fab fa-facebook"></i></a>
          <a href="#"> <i class="fab fa-instagram"></i></a>
          <a href="#"> <i class="fas fa-envelope"></i></a>
        </div>
        <p>Rating: 4.8/5 <i class="fas fa-star" id="rating"></i>
        </p>
        <button class="btn">Demand Follow-up</button>
      </div>
      <div class="card">
        <img src="./images/medcin2.png" alt="Nutritionist 1">
        <h3>Jane Smith</h3>

        <p>Specialization: Weight Management</p>
        <div class="social-links">
          <a href="#"> <i class="fab fa-facebook"></i></a>
          <a href="#"> <i class="fab fa-instagram"></i></a>
          <a href="#"> <i class="fas fa-envelope"></i></a>
        </div>
        <p>Rating: 4.8/5 <i class="fas fa-star" id="rating"></i>
        </p>
        <button class="btn">Demand Follow-up</button>
      </div>
      <div class="card">
        <img src="./images/medcin2.png" alt="Nutritionist 1">
        <h3>Jane Smith</h3>

        <p>Specialization: Weight Management</p>
        <div class="social-links">
          <a href="#"> <i class="fab fa-facebook"></i></a>
          <a href="#"> <i class="fab fa-instagram"></i></a>
          <a href="#"> <i class="fas fa-envelope"></i></a>
        </div>
        <p>Rating: 4.8/5 <i class="fas fa-star" id="rating"></i>
        </p>
        <button class="btn">Demand Follow-up</button>
      </div>
      <!-- Add more nutritionist cards here -->
    </div>
  </section>
  </main>
  <footer id="contact">
    <div class="footer-links">
      <a href="#">Privacy Policy</a>
      <a href="#">Terms of Use</a>
      <a href="#">Contact Us</a>
    </div>
    <p>&copy; 2023 Nutrifitness. All rights reserved.</p>
  </footer>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="/js/sliderads.js"></script>
</body>

</html>
