<?php
session_start();
include("config.php");
include("functions.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Delicious Bakery</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <a href="logout.php">Logout</a>
      <h1>Delicious Bakery</h1>
      <nav>
        <ul>
          <li><a href="#about">About Us</a></li>
          <li><a href="#careers">Careers</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section id="about">
        <h2>About Us</h2>
        <p>Our bakery has been a family-run business for over 50 years. We take pride in using the freshest ingredients and traditional baking techniques to create delicious treats for our customers.</p>
      </section>
      <section id="careers">
        <h2>Careers</h2>
        <p>We are always looking for talented bakers and customer service professionals to join our team. If you are interested in a career at Delicious Bakery, please send your resume to sam.oching@gmail.com.</p>
      </section>
      <section id="services">
        <h2>Services</h2>
        <p>In addition to our wide selection of baked goods, we also offer custom cake design and catering services for events such as weddings and birthdays.</p>
      </section>
      <section id="contact">
        <h2>Contact</h2>
        <p>Visit us at posta Uganda, Kampala road</p>
        <p>Call us at 0758078994</p>
        <p>Email us at ssam.oching@gmail.com</p>
      </section>
      <br>

  Hello, <?php echo $user_data['user_name']; ?>
    </main>
    <footer>
      <p> &Copy Copyright 2023 Delicious Bakery</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
