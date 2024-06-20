@include('header')
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </section>
	
		<section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4 font-weight-bold">Contact Information :-</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Address: </span> MLSU,UDAIPUR</p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Phone: </span> <a href="tel://1234567920">+91 9876543210</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Email: </span> <a href="mailto:info@yoursite.com">anuakshidha@gmail.com</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Website :</span> <a href="#">cumingo.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
			
					<div  align='center' class="col-md-6 p-5 order-md-last">
						<h2 class="h4 mb-5 font-weight-bold">Contact Us</h2>

						<form action="contactf" method="POST">
              @csrf
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject">
              </div>
              <div class="form-group">
              <input type="text" class="form-control" name="message" placeholder="Message">
                <!-- <textarea name="" id="" cols="30" rows="7" class="form-control" name="message" placeholder="Message"></textarea> -->
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5" onclick='a1()'>
              </div>
            </form>
          </div>
				</div>
			</div>
		</div>
@include('footer')   