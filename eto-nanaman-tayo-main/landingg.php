<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arellano University Ordering System</title>
  <link rel="stylesheet" href="styless.css">


   
    <!-- FONTAWESOME -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>

    <!-- BOOTSTRAP -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>

   




  <style> 


  .home .content{
    position: relative;
    left: 20px;
    margin: 100px;
    padding: 20px;
  }

    body{
      margin: 0;
    }
    .home {
      position: relative;
      width: 100%;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      flex-direction: column;
      background: #2696E9;
    }

    .home:before {
      z-index: 777;
      content: '';
      position: absolute;
      background: none;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
    }

    .home .content {
      z-index: 888;
      color: #fff;
      width: 70%;
      margin-top: 50px;
      display: none;
    }

    .home .content.active {
      display: block;
    }

    .home .content h1 {
      font-size: 4em;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: 5px;
      line-height: 75px;
      margin-bottom: 40px;
    }

    .home .content h1 span {
      font-size: 1.2em;
      font-weight: 600;
    }

    .home .content p {
      margin-bottom: 65px;
    }

    .home .media-icons {
      z-index: 888;
      position: absolute;
      right: 30px;
      display: flex;
      flex-direction: column;
      transition: 0.5s ease;
    }

    .home .media-icons a {
      color: #fff;
      font-size: 1.6em;
      transition: 0.3s ease;
    }

    .home .media-icons a:not(:last-child) {
      margin-bottom: 20px;
    }

    .home .media-icons a:hover {
      transform: scale(1.3);
    }

    .home video {
      z-index: 0;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .slider-navigation {
      z-index: 888;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      transform: translateY(80px);
      margin-bottom: 12px;
    }

    .slider-navigation .nav-btn {
      width: 12px;
      height: 12px;
      background: #fff;
      border-radius: 50%;
      cursor: pointer;
      box-shadow: 0 0 2px rgba(255, 255, 255, 0.5);
      transition: 0.3s ease;
    }

    .slider-navigation .nav-btn.active {
      background: #2696E9;
    }

    .slider-navigation .nav-btn:not(:last-child) {
      margin-right: 20px;
    }

    .slider-navigation .nav-btn:hover {
      transform: scale(1.2);
    }

    .video-slide {
      position: absolute;
      width: 100%;
      clip-path: circle(0% at 0 50%);
    }

    .video-slide.active {
      clip-path: circle(150% at 0 50%);
      transition: 2s ease;
      transition-property: clip-path;
    }
  </style>
</head>
<body>
  <div class="menu-btn"></div>
  <section class="home">
    <video class="video-slide active" src="12.mp4" autoplay muted loop></video>
    <video class="video-slide" src="44.mp4" autoplay muted loop></video>
    <video class="video-slide" src="33.mp4" autoplay muted loop></video>
    <video class="video-slide" src="22.mp4" autoplay muted loop></video>
    <video class="video-slide" src="55.mp4" autoplay muted loop></video>
    <div class="content active">
      <h1>Arellano<br><span>University</span></h1>
      <p>Welcome to the Arellano's University Ordering System, where you can seamlessly navigate through our platform to place orders, manage transactions, and streamline your university experience.</p>
    </div>
    <div class="content">
      <h1>Canteen Introduction</h1>
      <p>Here at Arellano's, we prioritize efficiency and convenience, ensuring that your journey through our ordering system is smooth and hassle-free.</p>
    </div>
    <div class="content">
      <h1>Canteen<br><span>System</span></h1>
      <p>With user-friendly interfaces and intuitive features, navigating our ordering system is as simple as it is efficient.</p>
    </div>
    <div class="content">
      <h1>Thank you<br></h1>
      <p>Your engagement is greatly valued and contributes to enhancing our platform!</p>
    </div>
    <div class="content">
      <h1><br><span>Eat Well!</span></h1>
      <p>Thank you for trying out the Arellano's University Ordering System – we appreciate your participation!</p>
    </div>
    <div class="media-icons">
      <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
      <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
    </div>
    <div class="slider-navigation">
      <div class="nav-btn active"></div>
      <div class="nav-btn"></div>
      <div class="nav-btn"></div>
      <div class="nav-btn"></div>
      <div class="nav-btn"></div>
    </div>
  </section>
  <script type="text/javascript">
    const menuBtn = document.querySelector(".menu-btn");
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    menuBtn.addEventListener("click", () => {
      menuBtn.classList.toggle("active");
    });

    const sliderNav = (manual) => {
      btns.forEach((btn) => btn.classList.remove("active"));
      slides.forEach((slide) => slide.classList.remove("active"));
      contents.forEach((content) => content.classList.remove("active"));
      btns[manual].classList.add("active");
      slides[manual].classList.add("active");
      contents[manual].classList.add("active");
    };

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => sliderNav(i));
    });
  </script>
</body>
</html>
