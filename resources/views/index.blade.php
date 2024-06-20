@include('header')
    <section class="home-slider js-fullheight owl-carousel bg-white">
      <div class="slider-item js-fullheight">
      	<div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_3.jpg);">
          		<div class="overlay"></div>
          	</div>
	          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<div class="text mt-md-5">
				  <h1 style= "font-family: Lovers Quarrel, cursive; font-size= 50px"; class="mb-4">&nbsp&nbsp<b>{{$restrodetails->name}}</b></h1>
				  <h4 style= "color:red; font-family:TimesNewRoman;";><p>&nbsp&nbsp{{$restrodetails->select == '3' ? 'Veg/Non-Veg' : 'Veg'}}<br>&nbsp&nbspCuisine : {{$restrodetails->cuisine}} <br>&nbsp&nbspCost Per Two : Rs. {{$restrodetails->cost_per_two}} and under <br>&nbsp&nbspHours : {{$restrodetails->otime}}-{{$restrodetails->ctime}} <br>&nbsp&nbspWeekend : {{$restrodetails->wotime}}-{{$restrodetails->wctime}}<br>&nbsp&nbsp Phone : {{$restrodetails->contact}} <br>&nbsp&nbsp {{$restrodetails->address}}</p>
		            <div class="thumb mt-4 mb-3 d-flex">
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-1.jpg);"></div>
		            		
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-2.jpg);"></div>
		            		
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-3.jpg);"></div>
		            		
		            	</a>
					</div>
	            </div>
	          </div>
        	</div>
        </div>
      </div>

      <div class="slider-item js-fullheight">
      	<div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_2.jpg);">
          		<div class="overlay"></div>
          	</div>
	          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<div class="text mt-md-5">
              <h1 style= "font-family: Lovers Quarrel, cursive; font-size= 50px"; class="mb-4">&nbsp&nbsp<b>{{$restrodetails->name}}</b></</h1>
				      <h4 style= "color:red; font-family:TimesNewRoman;";><p>&nbsp&nbsp{{$restrodetails->select == '3' ? 'Veg/Non-Veg' : 'Veg'}}<br>&nbsp&nbspCuisine : {{$restrodetails->cuisine}} <br>&nbsp&nbspCost Per Two : Rs. {{$restrodetails->cost_per_two}} and under <br>&nbsp&nbspHours : {{$restrodetails->otime}}-{{$restrodetails->ctime}} <br>&nbsp&nbspWeekend : {{$restrodetails->wotime}}-{{$restrodetails->wctime}}<br>&nbsp&nbspPhone : {{$restrodetails->contact}} <br>&nbsp&nbsp{{$restrodetails->address}}</p>
		            <div class="thumb mt-4 mb-3 d-flex">
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-1.jpg);"></div>
		            		
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-2.jpg);"></div>
		            		
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            		<div class="img" style="background-image: url(images/menu-3.jpg);"></div>
		            		
		            	</a>
		            </div>
		           
	            </div>
	          </div>
        	</div>
        </div>
      </div>
    </section>
	

		<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-sm-5 img img-2 d-flex align-items-center justify-content-center justify-content-md-end" style="background-image: url(images/about.jpg); position: relative">
						<class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
  						<span class="ion-ios-play"></span>
  					</a>
					</div>
					<div class="col-sm-7 wrap-about py-5 ftco-animate">
	          <div class="heading-section mt-5 mb-4">
	          	<div class="pl-lg-5 ml-md-5">
		          	<span class="subheading">About</span>
		            <h2 class="mb-4">Welcome to {{$restrodetails->name}}</h2>
	            </div>
	          </div>
	          <div class="pl-lg-5 ml-md-5">
							<p>{{$restrodetails->description}}</p>
							<h3 class="mt-5">Must Try</h3>
							<div class="thumb my-4 d-flex">
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url(images/lunch-4.jpg);"></div>
	            		<h4>{{$restrodetails->must_try}}</h4>
	            	</a>
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url(images/lunch-7.jpg);"></div>
	            		<h4>Chicken-Afghani</h4>
	            	</a>
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            		<div class="img" style="background-image: url(images/lunch-6.jpg);"></div>
	            		<h4>Desserts</h4>
	            	</a>
	            </div>
						</div>
					</div>
				</div>
			</div>
		</section>



    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">{{$restrodetails->name}}</span>
            <h2 class="mb-4">Features & Facilities</h2>
          </div>
        </div>
        <h4>{{$restrodetails->restro_facilities}}</h4>
        

			<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">{{$restrodetails->name}}</span>
            <h2 class="mb-4">Discounts & Offers</h2>
          </div>
        </div>
        <h4>{{$restrodetails->offer}}</h4>

    </section>

    <section class="ftco-section testimony-section" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">{{$restrodetails->name}}</span>
            <h2 class="mb-4">Images</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-7">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <img src="uploads/table_image/{{$restrodetails->tp}}" alt="Upcoming img">
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <img src="uploads/ie_image/{{$restrodetails->iep}}" alt="Upcoming img">
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <img src="uploads/menu_image/{{$restrodetails->mp}}" alt="Upcoming img">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row d-flex">
          <div class="col-md-5 ftco-animate img img-2" style="background-image: url(images/fs.jpg);"></div>
          <div class="col-md-7 ftco-animate makereservation p-4 p-md-5">
          	<div class="heading-section ftco-animate mb-5">
	          	<span class="subheading">Book a Table</span>
	            <h2 class="mb-4">Make Reservation</h2>
	          </div>
			  <form action="{{route('save.table')}}" method="POST">
          @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="name" name="name" class="form-control" placeholder="Your Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Your Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text"  name="contact" class="form-control" placeholder="Phone">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Date</label>
                    <input type="date" id="dateControl" name="date" class="form-control" placeholder="Date">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Time</label>
                    <input type="time" name="time" class="form-control" placeholder="Time">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Person</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="person" class="form-control">
                        <option value="Person">Person</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4+">4+</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group">
                    <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5" onclick="a2()">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
			</div>
		</section>
@include('footer')