@include('header')
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h2 class="mb-2 bread">Discover the best restaurant through <u> CUM'IN GO </u></h2>
          </div>
        </div>
      </div>
    </section> 
	
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
          @if(count($rdetails)>0)
          @foreach($rdetails as $rdetail)
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="/index/{{$rdetail->restro_id}}" class="block-20"><img src="uploads/ie_image/{{$rdetail->iep}}" class="img-fluid"  alt="Upcoming Restro">
              </a>
              <div class="text px-4 pt-3 pb-4">
                <div class="meta">
                  <div><a href="#">{{$rdetail->cuisine}}</a></div>
                  <div><a href="#">{{$rdetail->address}}</a></div>
                </div>
                <h3 class="heading"><a href="/index/{{$rdetail->restro_id}}">{{$rdetail->name}}</a></h3>
                <p class="clearfix">
                </p>
              </div>
            </div>
          </div>
          @endforeach
          @else
          <br><br><br>
          <div class="alert alert-danger" role="alert">
            No Restro present at this time check back later.
          </div>
          @endif
        </div>
			</div>
		</section>

@include('footer')