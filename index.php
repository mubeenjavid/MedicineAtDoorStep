<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- icons css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- footer thigs css -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Homepagee </title>
  <style>


 .mainDiv{
  display:flex;
  /* flex-direction:row; */
  text-align: justify;
 }
  /* .card{
    border-radius:10px;
  } */

    .darkscsss {
      float: right;

    }

    .darkscsss2 {
      display: flex;
      flex-direction: row;
    }

    .slider_images img {
      width: 500px;
      height: 500px;
      border: 4px groove orangered;
    }

    footer {
      border-top: 1px solid #ddd;
      border-bottom: 1px solid #ddd;
      padding: 10px 0px;
      margin-top: 50px;
      background-color: black;
    }

    footer .social-links {
      text-align: center;
      margin: 20px 0px;
    }

    footer .social-btn {
      display: inline-block;
      width: 50px;
      height: 50px;
      background: #2f4f4f;
      margin: 10px;
      border-top-left-radius: 20px;
      border-bottom-right-radius: 20px;
      box-shadow: 0px 5px 10px 0px #909090;
      color: #ffffff;
      overflow: hidden;
      position: relative;
      border: 1px dotted #fff;
    }

    footer .social-btn i {
      line-height: 50px;
      font-size: 22px;
      transition: 0.2s linear;
    }

    footer .social-btn:hover i {
      transform: scale(1.3);
      color: #ff5722;
    }

    .footer_text {
      color: white;
    }

    footer .social-btn::before {
      content: "";
      position: absolute;
      width: 120%;
      height: 120%;
      background: #ffffff;
      transform: rotate(45deg);
      left: -110%;
      top: 90%;
    }

    footer .social-btn:hover::before {
      animation: effect 0.6s 1;
      top: -10%;
      left: -10%;
    }

    footer p a {
      color: #ff5722;
    }

    /*-- Hover Animation Effect --*/
    @keyframes effect {
      0% {
        left: -120%;
        top: 100%;
      }

      50% {
        left: 10%;
        top: -30%;
      }

      100% {
        top: -10%;
        left: -10%;
      }
    }


    /*-- Footer Responsive CSS --*/
    @media (max-width: 576px) {
      footer .social-btn {
        width: 40px;
        height: 40px;
        margin: 5px;
      }

      footer .social-btn i {
        line-height: 40px;
        font-size: 180px;
      }
    }

    /*-- Footer CSS --*/
  </style>
   <!-- Main CSS File -->
   <link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php   include'partials/_header.php';?>
    <?php   include'phdbconect.php';?>
  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide my-3 " data-bs-ride="carousel h-25">
      <div class="carousel-indicators ">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner slider_images">
        <div class="carousel-item active">
          <img src="images/p1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/p2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/p3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="3carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


  </div>
  

             <!-- sample medicine -->
  <div class="mainDiv container">
    <div class="card" style="width: 18rem; margin: 10px;">
      <img class="card-img-top" src="images/agiolax.jpg" alt="Card image cap" style="height:200px;">
        <div class="card-body">
          <h5 class="card-title">Agiolax® Madaus</h5>
          <p class="card-text">Agiolax Madaus is used to treat constipation. The recommend dose for adults and adolescents over 12 years is one teaspoon in the evening, followed by a glass of water. A bowel movement can be expected 8-12 hours after taking a dose.</p>
          <a href="" class="btn btn-primary"  style="margin-left:50px;">Go somewhere</a>
        </div>
    </div>
    <div class="card" style="width: 18rem; margin: 10px;">
     <img class="card-img-top" src="images/alkeran.jpg" alt="Card image cap" style="height:200px;">
      <div class="card-body">
        <h5 class="card-title">Alkeran Tablets</h5>
        <p class="card-text">Alkeran Tablets is an alkylating antineoplastic agent used to treat multiple myeloma and ovarian carcinoma. For the palliative treatment of multiple myeloma and for the palliation of non-resectable epithelial carcinoma of the ovary.</p>
        <a href="" class="btn btn-primary"  style="margin-left:50px;">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem; margin: 10px;">
      <img class="card-img-top" src="images/ambilon.jpg" alt="Card image cap" style="height:200px;">
    <div class="card-body">
     <h5 class="card-title">Ambilon </h5>
     <p class="card-text">Ambilon 50mg Injection is an antibiotic medicine and is used to treat Leishmaniasis, also called kala-azar, a serious or life-threatening illness that is spread by a parasite that enters the human body by the bite of infected sand flies.</p>
     <a href="" class="btn btn-primary"  style="margin-left:50px;">Go somewhere</a>
    </div>
  </div>
  <div class="card" style="width: 18rem; margin: 10px;">
   <img class="card-img-top" src="images/amphotericin.jpg" alt="Card image cap" style="height:200px;">
   <div class="card-body">
     <h5 class="card-title">Amphotericin</h5>
     <p class="card-text">Amphotericin B injection is used to treat serious and potentially life-threatening fungal infections. Amphotericin B injection is in a class of medications called antifungals. It works by slowing the growth of fungi that cause infection.</p>
     <a href="" class="btn btn-primary"  style="margin-left:50px;">Go somewhere</a>
    </div>
  </div>
</div>

<div class="mainDiv container">
    <div class="card" style="width: 18rem; margin: 10px;">
      <img class="card-img-top" src="images/Eziday.png" alt="Card image cap" style="height:200px;">
        <div class="card-body">
          <h5 class="card-title">Eziday Tablet 100 Mg 10'S</h5>
          <p class="card-text">This medicine relaxes the blood vessels and promotes the smooth flow of blood. This results in a reduction of the blood pressure.The peak effect of this medicine can be observed in 1 to 1.5 hours.</p>
          <a href="" class="btn btn-primary"  style="margin-left:50px;">Go somewhere</a>
        </div>
    </div>
    <div class="card" style="width: 18rem; margin: 10px;">
     <img class="card-img-top" src="images/DEXSAMETHASONE.png" alt="Card image cap" style="height:200px;">
      <div class="card-body">
        <h5 class="card-title">DEXSAMETHASONE TABLETS</h5>
        <p class="card-text">Dexamethasone is a steroid that prevents the release of substances in the body that cause inflammation. Dexamethasone is used to treat  such as allergic disorders, skin conditions, ulcerative colitis.</p>
        <a href="" class="btn btn-primary"  style="margin-left:50px;">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem; margin: 10px;">
      <img class="card-img-top" src="images/Dawn.jpg" alt="Card image cap" style="height:200px;">
    <div class="card-body">
     <h5 class="card-title">DAWN </h5>
     <p class="card-text">Well Dawn Tablet is a combination medicine used in the treatment of nausea or vomiting during pregnancy. It blocks signals to reach the brain that trigger the feeling of nausea and vomiting.</p>
     <a href="" class="btn btn-primary"  style="margin-left:50px;">Go somewhere</a>
    </div>
  </div>
  <div class="card" style="width: 18rem; margin: 10px;">
   <img class="card-img-top" src="images/Voltral.jpg" alt="Card image cap" style="height:200px;">
   <div class="card-body">
     <h5 class="card-title">Voltral Emulgel</h5>
     <p class="card-text">Voltral gel is a topical product for joint and muscular pain. It works to relieve the       muscle pain and inflammation in the affected area by working on the skin’s surface and penetrating inside.  Massage it two to three times a day for maximum relief. </p>
     <a href="" class="btn btn-primary"  style="margin-left:50px;">Go somewhere</a>
    </div>
  </div>
</div>


<div class="mainDiv container">
    <div class="card" style="width: 18rem; margin: 10px;">
      <img class="card-img-top" src="images/agiolax.jpg" alt="Card image cap" style="height:200px;">
        <div class="card-body">
          <h5 class="card-title">Agiolax® Madaus</h5>
          <p class="card-text">Agiolax Madaus is used to treat constipation. The recommend dose for adults and adolescents over 12 years is one teaspoon in the evening, followed by a glass of water. A bowel movement can be expected 8-12 hours after taking a dose.</p>
          <a href="" class="btn btn-primary"  style="margin-left:50px;">Go somewhere</a>
        </div>
    </div>
    <div class="card" style="width: 18rem; margin: 10px;">
     <img class="card-img-top" src="images/alkeran.jpg" alt="Card image cap" style="height:200px;">
      <div class="card-body">
        <h5 class="card-title">Alkeran Tablets</h5>
        <p class="card-text">Alkeran Tablets is an alkylating antineoplastic agent used to treat multiple myeloma and ovarian carcinoma. For the palliative treatment of multiple myeloma and for the palliation of non-resectable epithelial carcinoma of the ovary.</p>
        <a href="" class="btn btn-primary"  style="margin-left:50px;">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 18rem; margin: 10px;">
      <img class="card-img-top" src="images/ambilon.jpg" alt="Card image cap" style="height:200px;">
    <div class="card-body">
     <h5 class="card-title">Ambilon </h5>
     <p class="card-text">Ambilon 50mg Injection is an antibiotic medicine and is used to treat Leishmaniasis, also called kala-azar, a serious or life-threatening illness that is spread by a parasite that enters the human body by the bite of infected sand flies.</p>
     <a href="" class="btn btn-primary"  style="margin-left:50px;">Go somewhere</a>
    </div>
  </div>
  <div class="card" style="width: 18rem; margin: 10px;">
   <img class="card-img-top" src="images/amphotericin.jpg" alt="Card image cap" style="height:200px;">
   <div class="card-body">
     <h5 class="card-title">Amphotericin</h5>
     <p class="card-text">Amphotericin B injection is used to treat serious and potentially life-threatening fungal infections. Amphotericin B injection is in a class of medications called antifungals. It works by slowing the growth of fungi that cause infection.</p>
     <a href="" class="btn btn-primary"  style="margin-left:50px;">Go somewhere</a>
    </div>
  </div>
</div>


 <!-- ======= Call To Action Section ======= -->
 <section id="call-to-action">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">Contact Us</h3>
            <p class="cta-text"> Give your feedback through contacting with us....!</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="contact.php">contact us</a>
          </div>
        </div>

      </div>
      </section>

<!-- End Call To Action Section -->



  <!-- Footer -->

  
  <footer class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="social-links">
            <a class="social-btn" href="https://www.facebook.com/" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a class="social-btn" href="https://www.instagram.com/" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
            <a class="social-btn" href="https://www.youtube.com/" target="_blank">
              <i class="fab fa-youtube"></i>
            </a>
            <a class="social-btn" href="https://www.google.com/" target="_blank">
              <i class="fab fa-google"></i>
            </a>
          </div>

          <p class="text-center footer_text">
            Thanks to you! for visting our e-store. <a href="#">Terms of Service</a> and <a href="#"> Privacy
              Policy</a><br><a href="https://www.google.com/" target="_blank">Medicine At DoorStep</a>
          </p>
        </div>
      </div>
    </div>
  </footer>



  

 

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>




</body>

</html>