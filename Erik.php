<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/styles.css">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap');

    /*-- VARIABLES CSS--*/
    /*Colores*/
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
    }

    html {
      scroll-behavior: smooth;
    }

    :root {
      --first-color: #f5f5f6;
      --second-color: #f5f5f6;
      --third-color: #f5f5f6;
      --accent-color: #FF5151;
      --dark-color: #161616;
    }

    /*Tipografia responsive*/
    :root {
      --body-font: 'Open Sans';
      --h1-font-size: 1.5rem;
      --h3-font-size: 1rem;
      --normal-font-size: 0.938rem;
      --smaller-font-size: 0.75rem;
    }

    @media screen and (min-width: 768px) {
      :root {
        --h1-font-size: 2rem;
        --normal-font-size: 1rem;
        --smaller-font-size: 0.813rem;
      }
    }

    /*-- BASE --*/
    *,
    ::after,
    ::before {
      box-sizing: border-box;
    }

    body {
      margin: 2rem 0 0 0;
      background-color: #fff;
      color: var(--dark-color);
      font-family: var(--body-font);
    }

    h1 {
      font-size: var(--h1-font-size);
    }

    img {
      max-width: 100%;
      height: auto;
    }

    a {
      text-decoration: none;
    }

    /*-- LAYAOUT --*/
    .main {
      padding: 2rem 0;
    }

    .bd-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      max-width: 1200px;
      margin-left: 2.5rem;
      margin-right: 2.5rem;
      align-items: center;
      gap: 2rem;
    }

    /*-- PAGES --*/
    .title-shop {
      position: relative;
      margin: 0 2.5rem;
    }

    .title-shop::after {
      content: '';
      position: absolute;
      top: 50%;
      width: 72px;
      height: 2px;
      background-color: var(--dark-color);
      margin-left: .25rem;
    }

    /*-- COMPONENT --*/
    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 1.5rem 2rem;
      border-radius: 1rem;
      overflow: hidden;
    }

    article:nth-child(1) {
      background-color: var(--first-color);
    }

    article:nth-child(2) {
      background-color: var(--second-color);
    }

    article:nth-child(3) {
      background-color: var(--third-color);
    }

    article:nth-child(4) {
      background-color: var(--second-color);
    }

    .card__img {
      width: 180px;
      height: auto;
      padding: 3rem 0;
      transition: .5s;
    }

    .card__name {
      position: absolute;
      left: -25%;
      top: 0;
      width: 3.5rem;
      height: 100%;
      writing-mode: vertical-rl;
      transform: rotate(180deg);
      padding: 0 1em;
      text-align: center;
      background-color: var(--dark-color);
      color: #fff;
      font-weight: bold;
      transition: .5s;
    }

    .card__icon {
      font-size: 1.5rem;
      color: var(--dark-color);
    }

    .card__icon:hover {
      color: var(--accent-color);
    }

    .card__precis {
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      transition: .5s;
    }

    .card__preci {
      display: block;
      text-align: center;
    }

    .card__preci--before {
      font-size: var(--smaller-font-size);
      color: var(--accent-color);
      margin-bottom: .25rem;
    }

    .card__preci--now {
      font-size: var(--h3-font-size);
      font-weight: bold;
    }

    /*Move left*/
    .card:hover {
      box-shadow: 0 .5rem 1rem #D1D9E6;
    }

    .card:hover .card__name {
      left: 0;
    }

    .card:hover .card__img {
      transform: rotate(30deg);
      margin-left: 3.5rem;
    }

    .card:hover .card__precis {
      margin-left: 3.5rem;
      padding: 0 1.5rem;
    }

    /*-- MEDIA QUERIES --*/
    @media screen and (min-width: 1200px) {
      body {
        margin: 3rem 0 0 0;
      }

      .title-shop {
        margin: 0 5rem;
      }

      .bd-grid {
        margin-left: auto;
        margin-right: auto;
      }
    }


    /* header nav bar css */

    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #111;
      transition: 0.6s;
      padding: 10px 100px;
      z-index: 10000;

    }

    .sticky {
      padding: 10px 100px;
      background: #111;
    }

    header .logo {
      position: relative;
      font-weight: 700;
      color: rgb(255, 255, 255);
      text-decoration: none;
      font-size: 2em;
      text-transform: uppercase;
      letter-spacing: 2px;
      transition: 0.6s;
    }

    header ul {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    header ul li {
      position: relative;
      list-style: none;
    }

    header ul li a {
      position: relative;
      margin: 0 15px;
      text-decoration: none;
      color: #fff;
      letter-spacing: 2px;
      font-weight: 500px;
      transition: 0.6s;
    }

    header ul li a:hover {
      display: inline-block;
      background-color: #fff;
      color: #111;
      border-radius: 20px;
      padding: 5px 10px;
    }

    .sticky .logo,
    .sticky ul li a {
      color: rgb(255, 255, 255);
    }

    .sticky ul li a:hover {
      display: inline-block;
      background-color: #fff;
      color: #000;
      border-radius: 20px;
      padding: 5px 10px;
    }

    .about-section {
      padding: 50px;
      text-align: center;
      background-color: #000000;
      color: white;
      height: 250px;
    }
  </style>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <title>Product card shop</title>
</head>

<body>
  <div class="sub-main">
    <section class="showcase">
      <header>
        <a href="NikeStore.html" class="logo"> ERIK Shoes</a>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="index.html#xat">Category</a></li>
          <li><a href="#Contact">Contact</a></li>
          <li><a href="login page.html">Login</a></li>
        </ul>
      </header>
      <script>
        window.addEventListener("scroll", function() {
          var header = document.querySelector("header");
          header.classList.toggle("sticky", window.scrollY > 0);
        })
      </script>
    </section>
  </div>

  <div>
        <main class="main bd-grid">
  <?php
  include("dbconn.php");

  $query = "SELECT * from nike where Category = 'Erik Shoes'";
  $query_run = mysqli_query($con, $query);
  $check_fac = mysqli_num_rows($query_run) > 0;

  if ($check_fac) {
    while ($row = mysqli_fetch_assoc($query_run)) {
  ?>
      
          <article class="card">
            <div class="card__img">
              <img src="<?php echo $row["pic_1"]; ?>" alt="">
            </div>
            <div class="card__name">
              <p><?php echo $row["Name"]; ?></p>
            </div>
            <div class="card__precis">
              <a href="" class="card__icon">
                <ion-icon name="heart-outline"></ion-icon>
              </a>

              <div>
                <span class="card__preci card__preci--now"><?php echo $row["Price"]; ?></span>
              </div>
              <a href="nike_Pro_details.html" class="card__icon"><i style='font-size:24px' class='fas'>&#xf0da;</i></a>
            </div>
          </article>
        
  <?php
    }
  } else {
    echo '<h1>No Product Found</h1>';
  }
  ?>
  </main>
      </div>


  <!-- ICONS -->
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  <div class="about-section" id="Contact">
    <h1>About Us Page</h1>
    <p>Some text about who we are and what we do.</p>
    <p>Resize the browser window to see that this page is responsive by the way.</p>
  </div>
</body>

</html>