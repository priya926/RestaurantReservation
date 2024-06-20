<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ANUAKSHIDHA</title>
  <link href="style1.css" rel="stylesheet"> 
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">  


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href=hcss/bootstrap.css />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href=hcss/font-awesome.min.css rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- slidck slider -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css.map" integrity="undefined" crossorigin="anonymous" />


  <!-- Custom styles for this template -->
  <link href=hcss/style.css rel="stylesheet" />
  <!-- responsive style -->
  <link href=hcss/responsive.css rel="stylesheet" />
    <style>
        .home-content__buttons {
        padding-top: 1.2rem;
        text-align: center;
        }
        .modal-dialog {
          max-width: 600px; /* New width for default modal */
        }
        hr{
            color:#fff;
        }
        #spanone{
            color:#fff;
            align:center;
            padding:160px;
        }
        #spantwo{
            padding:250px;
        }
    </style>
    <!-- Modalsss -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <script>
          var exampleModal = document.getElementById('exampleModal')
      exampleModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        // Extract info from data-bs-* attributes
        var recipient = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        var modalTitle = exampleModal.querySelector('.modal-title')
        var modalBodyInput = exampleModal.querySelector('.modal-body input')

        modalTitle.textContent = 'New message to ' + recipient
        modalBodyInput.value = recipient
      })
      function a1()
      {
          alert("Registered successfully!!");
      }
      </script>
    <!-- End Of Modalsss -->
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="/">
            <span>
              <u>CUM'IN GO</u>
            </span>
          </a>
          <div class="" id="">
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <img src="himages/menu.png" alt="">
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
              <div style="float:left; left:85px; top: 320px; position: absolute";>
              <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal3" data-bs-whatever="@getbootstrap"><h1>ANUAKSHIDHA</h1></button>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section ">
      <div class="container ">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="detail-box">
              <h1>
                Rain or Shine, it's a Fine Time to Dine
              </h1>
              <p>
                So Let's Ketch-up together through CUM'IN GO
              </p>
            </div>
            <div class="find_container ">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <form>
                      <div class="form-row ">
                      <div class="home-content__buttons">
                      <!--<a href="blog" class="btn btn-dark">FIND YOUR TABLE</a>&nbsp&nbsp-->
                      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">FIND YOUR TABLE</button>
                      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@fat">RESTRO JOIN US</button>
                     

                      
                        <!-- <div class="form-group col-lg-2">
                          <div class="btn-box">
                          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">USER</button>
                          </div> <hr style="background-color:#fff">
                          <div class="btn-box">
                          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">RESTRO</button>
                          </div> <hr style="background-color:white">
                          <div class="btn-box">
                            <button type="submit" class="btn ">ADMIN</button>
                          </div>
                        </div> -->
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slider_container">
        <div class="item">
          <div class="img-box">
            <img src="himages/slider-img1.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="himages/slider-img2.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="himages/slider-img3.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="himages/slider-img4.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="himages/slider-img1.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="himages/slider-img2.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="himages/slider-img3.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="himages/slider-img4.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- recipe section -->

  <section class="recipe_section layout_padding-top">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
        <u>Explore the best Restaurants, Discounts & Offer</u>
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src=images/a3.jpg class="box-img" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Breakfast
              </h4>
              <a href="">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src= images/a1.jpg class="box-img" alt="">
            </div><br><br>
            <div class="img-box">
              <img src= images/a4.jpg class="box-img" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Lunch
              </h4>
              <a href="">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src=images/a2.jpg class="box-img" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Dinner
              </h4>
              <a href="">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end recipe section -->


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="col-md-11 col-lg-10 mx-auto">
        <div class="heading_container heading_center">
          <h2>
            <u>About Us</u>
          </h2>
        </div>
        <div class="box">
          <div class="col-md-7 mx-auto">
            <div class="img-box">
              <img src="himages/about-img.jpg" class="box-img" alt="">
            </div>
          </div>
          <div class="detail-box">
                <p>
               <b> Cum'in Go </b> love what happens around the Restaurant Table. We are proposing an application that will source the best fine dining with authentic restro and ambience. <b>Cum'in Go</b> is committed to empower the experience of helping restaurants to grow and run their business, to enable diners to discover and book the perfect table everytime they dine.<br> 
                  Our objective is to integrate with restaurant and provide an optimal experience to our customers. <b>Cum'in Go </b> aims to provide customers with the choice of table, along with our exclusive discounts. Our mission is to maximize profitability and deliver sustainable growth year after year.
                </p>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- news section -->

  <section class="news_section">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          <u>Foodies Love US !!!</u>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="himages/n1.jpg" class="box-img" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Need to chill along with tasty food ?
              </h4>
              <p>
              <b>CUM'IN GO</b> users save at least 30% of their dining out expenses over a regular person.
              </p>
              <a href="">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="himages/n2.jpg" class="box-img" alt="">
            </div>
            <div class="detail-box">
              <h4>
                One way ticket to Happiness !!
              </h4>
              <p>
              Our users get access to exclusive offers at number of restaurants.
              </p>
              <a href="">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end news section -->

  <div class="footer_container">
    <!-- info section -->
    <section class="info_section ">
      <div class="container">
        <div class="contact_box">
          <a href="https://maps.google.com/">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
          </a>
          <a href="/">
            <i class="fa fa-phone" aria-hidden="true"></i>
          </a>
          <a href="https://mail.google.com/mail/">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </a>
        </div>
        <div class="info_links">
          <ul>
            <li class="active">
              <a href="feedback">
                Feedback
              </a>
            </li>
            <li>
              <a href="helpdesk">
                Helpdesk
              </a>
            </li>
            <li>
              <a class="" href="terms">
                Terms & Conditions
              </a>
            </li>
          </ul>
        </div>
        <div class="social_box">
          <a href="https://www.facebook.com/">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="https://twitter.com/login">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="https://www.instagram.com/?hl=en">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="https://in.linkedin.com/">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </section>
    <!-- end info_section -->


    <!-- footer section -->
    <footer class="footer_section">
      <div class="container">
        <p>
         Copyright &copy; <b>Cum'in Go</b> <span id="displayYear"></span> | Feel the design by ANUAKSHIDHA
          <br>
          <u>Cum'in Go</u> is made with  <i class="fa fa-heart" aria-hidden="true"></i>
        </p>
      </div>
    </footer>

    <!-- footer section -->

  </div>
  <!-- jQery -->
  <script src="hjs/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="hjs/bootstrap.js"></script>
  <!-- slick  slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="hjs/custom.js"></script>

   <!-- USER LOGIN & REGISTRATION MODAL START -->
  <!-- user modal1 LOGIN -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div style="background: #000000; color: #fff;" class="modal-content">
          <div class="modal-header">
            <h5 style="color: #fff; font-family:timesnewroman;" class="modal-title" id="exampleModalLabel">USER LOGIN</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{route('ulogin')}}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="user-email" class="col-form-label">Email-ID:</label>
                <input type="text" class="form-control" name=email id="user-email" placeholder="Enter your Email" value="{{old('email')}}">
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
              </div>
              <div class="mb-3">
                <label for="user-pass" class="col-form-label">Password:</label>
                <input type="password" class="form-control" name="password" id="user-pass" placeholder="Enter your Password">
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
              </div>
              <p>Don't have an account? <a href="#exampleModalToggle1" data-bs-toggle="modal" data-bs-dismiss="modal">Register Here!</a></p>
              <div class="modal-footer">
              <input type="submit" value="Login" class="btn btn-secondary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal1 LOGIN -->
    <!-- user modal2 REG -->
    <div class="modal fade" id="exampleModalToggle1" tabindex="-1" aria-labelledby="exampleModalToggleLabel1" aria-hidden="true">
      <div class="modal-dialog">
        <div style="background: #000000; color: #fff;" class="modal-content">
          <div class="modal-header">
            <h5 style="color: #fff; font-family:timesnewroman;" class="modal-title" id="exampleModalLabel">USER REGISTRATION</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{route('uregister')}}" method="POST">
            @csrf
              <div class="mb-3">
                <label for="user-name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" name=name id="user-name" placeholder="Enter your Name" value="{{old('name')}}">
                <span class="text-danger">@error('name') {{$message}} @enderror</span>
              </div>
              <div class="mb-3">
                <label for="user-email" class="col-form-label">Email-ID:</label>
                <input type="text" class="form-control" name=email id="user-email" placeholder="Enter your Email" value="{{old('email')}}">
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
              </div>
              <div class="mb-3">
                <label for="user-contact" class="col-form-label">Contact:</label>
                <input type="text" class="form-control" pattern="[6789][0-9]{9}" minlength="10" maxlength="10" name=contact id="user-contact" placeholder="Enter your Contact" value="{{old('contact')}}">
                <span class="text-danger">@error('contact') {{$message}} @enderror</span>
              </div>
              <div class="mb-3">
                <label for="user-pass" class="col-form-label">Password:</label>
                <input type="password" class="form-control" name="password" id="user-pass" placeholder="Enter your Password">
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
              </div>
              <p>Have an account? <a href="#exampleModal" data-bs-toggle="modal" data-bs-dismiss="modal">Login Here!</a></p>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" value="Register" class="btn btn-secondary" onclick='a1()'>
            </form>
          </div>
        </div>
      </div>
    </div>
<!-- end modal2 REG -->
<!-- END USER LOGIN & REGISTRATION MODAL -->

@include('auth.rlogin')

<!-- ADMIN LOGIN MODAL START -->
  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div style="background: #000000; color: #fff;" class="modal-content">
        <div class="modal-header">
          <h5 style="color: #fff; font-family:timesnewroman;" class="modal-title" id="exampleModalLabel">ADMIN LOGIN</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('alogin')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="user-name" class="col-form-label">User Name:</label>
              <input type="text" class="form-control" name=name id="user-name" placeholder="Enter your Username" value="{{old('name')}}">
              <span class="text-danger">@error('name') {{$message}} @enderror</span>
            </div>
            <div class="mb-3">
              <label for="user-pass" class="col-form-label">Password:</label>
              <input type="password" class="form-control" name="password" id="user-pass" placeholder="Enter your Password" value="">
              <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<!-- END ADMIN LOGIN  MODAL -->


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>