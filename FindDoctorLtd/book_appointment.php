<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- slick slider -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="slider/slick.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">

  <title>FindDoctorLtd</title>
</head>
<body>
  <nav class="navigation">
    <a href="index.html"><img src="img/logo.png" class="logo" alt="Logo"></a>
    <div class="page-links">
      <a href="our_doctors.html" class="nav-link">Find A Doctor</a>
      <a href="#" class="nav-link">Services</a>
      <a href="#" class="nav-link">About</a>
      <a href="#" class="nav-link">Contact Us</a>
    </div>
  </nav>

  <div class="header">
    <h2>Doctor's Name</h2>
    <h3>Specialization</h3>
  </div>

  <section class="appointment">
    <h2>Booking Journey Checklist</h2>
    <div class="appointment__service">
      <h2>Service Request Details</h2>
      <label for="service">List of Choice:</label>
      <select id="service" name="service">
        <option value="online">Online</option>
        <option value="offline">Offline</option>
      </select>
      <input type="date" name="" id="">
      <input type="time" name="" id="">
    </div>
    <div class="appointment__client">
      <h2>Client Details</h2>
      <input type="text" id="name" name="name" placeholder="Name">
      <input type="text" id="number" name="number" placeholder="Number">
      <input type="text" id="id" name="id" placeholder="Personal Identification">
      <label for="service">Medical History</label>
      <textarea name="" id="" cols="30" rows="10" placeholder=""></textarea>
      <label for="service">Drug Allergies</label>
      <textarea name="" id="" cols="30" rows="10" placeholder=""></textarea>
    </div>
    <a href="#" class="btn">Confirm Button</a>
  </section>

  <footer>
    <div class="footer__logo">
      <a href="#"><img src="img/logo.png" class="logo" alt="Logo"></a>
    </div>
    <div class="details__box">
      <h2 class="details">
        <span>Comapany name</span>
        <span>Comapany email</span>
        <span>Comapany address</span>
      </h2>
    </div>
    <div class="social">
      <span>Follow us on social media</span>
      <div class="social--icons">
        <a href="#"><img src="img/036-facebook.svg" alt="Facebook Icon"></a>
        <a href="#"><img src="img/008-twitter.svg" alt="Twitter Icon"></a>
        <a href="#"><img src="img/029-instagram.svg" alt="Instagram Icon"></a>
        <a href="#"><img src="img/027-linkedin.svg" alt="LinkedIn Icon"></a>
      </div>
    </div>
    <hr>
    <div class="privacy">
      <span>Privacy</span>
      <p>Copyright &copy; 2020 by FindDoctor Pte Ltd.</p>
      <p>All Rights Reserved</p>
    </div>
  </footer>

  <script src="js/jquery-3.5.1.min.js"></script>

  <!-- slick slider -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- custom JS -->
  <script src="js/custom.js"></script>

</body>
</html>