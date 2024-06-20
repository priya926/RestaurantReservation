<!-- RESTRO LOGIN & REGISTRATION MODAL START -->
<!-- restro modal1 LOGIN -->
@if (Session::get('success'))
  <div class="alert alert-success" role="alert">
      {{ Session::get('success') }}
  </div>
@endif
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div style="background: #000000; color: #fff;" class="modal-content">
        <div class="modal-header">
          <h5 style="color: #fff; font-family:timesnewroman;" class="modal-title" id="exampleModalLabel">RESTAURANT LOGIN</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('rlogin.post')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="user-email" class="col-form-label">Email-ID:</label>
              <input type="text" class="form-control" name=email id="user-email" placeholder="Enter your Email" value="{{old('name')}}">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="mb-3">
              <label for="user-pass" class="col-form-label">Password:</label>
              <input type="password" class="form-control" name="password" id="user-pass" placeholder="Enter your Password">
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <p>Don't have an account? <a href="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Register Here!</a></p>
            <div class="modal-footer">
            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Login</button>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal1 LOGIN -->
  <!-- restro modal2 REG -->
  <div class="modal fade" id="exampleModalToggle2" tabindex="-1" aria-labelledby="exampleModalToggleLabel1" aria-hidden="true">
    <div class="modal-dialog">
      <div style="background: #000000; color: #fff;" class="modal-content">
        <div class="modal-header">
          <h5 style="color: #fff; font-family:timesnewroman;" class="modal-title" id="exampleModalLabel">RESTAURANT REGISTRATION</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('rregister.post')}}" method="POST">
            @csrf
              <div class="mb-3">
                <label for="user-name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" name=name id="user-name" placeholder="Enter your Name" value="{{old('name')}}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
              </div>
              <div class="mb-3">
                <label for="user-email" class="col-form-label">Email-ID:</label>
                <input type="text" class="form-control" name=email id="user-email" placeholder="Enter your Email" value="{{old('email')}}">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
              </div>
              <div class="mb-3">
                <label for="user-contact" class="col-form-label">Contact:</label>
                <input type="text" class="form-control" pattern="[6789][0-9]{9}" minlength="10" maxlength="10" name=contact id="user-contact" placeholder="Enter your Contact" value="{{old('contact')}}">
                @if ($errors->has('contact'))
                    <span class="text-danger">{{ $errors->first('contact') }}</span>
                @endif
              </div>
              <div class="mb-3">
                <label for="user-pass" class="col-form-label">Password:</label>
                <input type="password" class="form-control" name="password" id="user-pass" placeholder="Enter your Password" value="">
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
              </div>
              <p>Have an account? <a href="#exampleModal2" data-bs-toggle="modal" data-bs-dismiss="modal">Login Here!</a></p>
              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" value="Register" class="btn btn-secondary" onclick='a1()'>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<!-- end modal2 REG -->
<!-- END RESTRO LOGIN & REGISTRATION MODAL -->
