<html>
    <head>
         <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!-- Tailwind CSS CDN.-->
     <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <!-- icons css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- footer thigs css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
        <title>manage your pharmacy</title>
        <style>
             .slider_images img {
      width: 500px;
      height: 500px;
      border: 4px groove orangered;
    }


    /* Call To Action Section
--------------------------------*/
#call-to-action {
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(../images/oooo.jpg) fixed center center;
    background-size: cover;
    padding: 80px 0;
  }
  @media (max-width: 1024px) {
    #call-to-action {
      background-attachment: scroll;
    }
  }
  #call-to-action .cta-title {
    color: #fff;
    font-size: 28px;
    font-weight: 700;
  }
  #call-to-action .cta-text {
    color: #fff;
  }
  @media (min-width: 769px) {
    #call-to-action .cta-btn-container {
      display: flex;
      align-items: center;
      justify-content: flex-end;
    }
  }
  #call-to-action .cta-btn {
    font-family: "Poppins", sans-serif;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 8px 30px;
    border-radius: 50px;
    transition: 0.5s;
    margin: 10px;
    border: 2px solid #fff;
    color: #fff;
  }
  #call-to-action .cta-btn:hover {
    background: #2dc997;
    border: 2px solid #2dc997;
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
    </head>
    <body>
        
    <nav class="navbar navbar-expand-lg bg-light">
    <!-- <div class="container"> -->
    <a class="navbar-brand" href="#">
      <img src="images/logoo.png" alt="" width="100" height="50">
    </a>
 
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item"  href="/darks/list_all.php?link=' . $id . '"> All products</a></li>
            <li><a class="dropdown-item" href="list_all_order.php">All orders</a></li> 
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="edit_product.php">Edit your products</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<div class="">
    <div id="carouselExampleIndicators" class="carousel slide my-2 " data-bs-ride="carousel h-25">
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





    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nulla officia voluptas quasi nobis voluptate in impedit nihil fuga?</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Support</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->





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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>
</html>