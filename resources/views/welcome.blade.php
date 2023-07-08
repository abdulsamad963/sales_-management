<!DOCTYPE html>
<html lang="en">

<head>
      <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <style>
    a{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: xx-large;
  }
</style>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>الصفحة الرئيسية</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="../../public/style.css">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
</head>
<body class="antialiased">


<style>
  nav {
  background-color: #333;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline-block;
}

nav ul li a {
  display: block;
  color: #fff;
  text-decoration: none;
  padding: 10px 20px;
}

nav ul li a:hover {
  background-color: #555;
}

</style>
<body>
  <nav>
    <li>  <a class="btn btn-secondary " href="{{ route('customers.index') }}" role="button">صفحة التحكم </a></li> 

    {{-- <ul>
      <li>   <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a></li>
        
      <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li> --}}

   {{-- <li>  <a class="btn btn-primary  "  href="{{ route('students.index') }}" role="button">عرض كل الطلاب</a></li>  
   <li>  <a class="btn btn-secondary " href="{{ route('coursess.index') }}" role="button">عرض كل المواد</a></li>   --}}
   {{-- <li>  <a class="btn btn-success" href="{{ route('lecturess.index') }}" role="button">عرض كل المحاضرات</a></li>      --}}
    </ul>
  </nav>
  

  </div>
  <!-- ======= Top Bar ======= -->
  

  <!-- ======= Header ======= -->
  

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
        <img src="p.png" alt="" width="200px">
          <h1>Helo <span>Zero_tec</span></h1>


          <div class="btns">
            <!-- <a href="#menu" class="btn-menu animated fadeInUp scrollto">الكليات الموجودة في الجامعة</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">المفاضلة</a> -->
          </div>
        </div>
        <!-- <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div> -->

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            {{-- <h3>جامعة الشام الموجودة في ريف حلب هيي جامعة خاصة تابعة لمجلس التعليم العالي</h3>
            <p class="fst-italic">
        تضم الجامعة الكليات النظرية والعملية حيث يتوفر فيها سكن شبابي للطلاب الذكور وسكن للطالبات الأناث 
            </p>
            <p class="fst-italic">
    برنامج الخاص بأدارة السكن الجامعي
           </p>
            --}}
      
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>للتواصل والأستفسار</h3>
              <p>
              واتس أب : +963937550394 <br>
                {{-- تم تطوير هذا الموقع عن طريق طلاب الجامعة<br><br> --}}
             
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/profile.php?id=100003555426426&mibextid=ZbWKwL" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100003555426426&mibextid=ZbWKwL class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://instagram.com/abod_ulsamad?igshid=MzRlODBiNWFlZA==" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100003555426426&mibextid=ZbWKwL" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100003555426426&mibextid=ZbWKwL" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    

    <div class="container">
      <div class="copyright">
        &copy; مع تحياتنا <strong><span>abdoulsamad   </span></strong>. جميع الحقوق محفوظة
      </div>

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>