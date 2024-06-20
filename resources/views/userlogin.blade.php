<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
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
        label{
            color:#fff;
        }
    </style>
    </head>
    <body>
    <div style='width:1345px;margin:auto;'>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div style="background: #000000;" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel" align="center" style="color:#fff; font-family:serif; font-size:22px;" >USER REGISTRATION</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label>Email-ID</label>
                            <input type="text" class="form-control" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <input type="text" class="form-control" pattern="[6789][0-9]{9}" minlength="10" maxlength="10" name="contact" placeholder="Your Contact">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="Password" placeholder="Enter Password">
                        </div>
                        <br>
                        <div class="form-group">
                        <span id="spanone">Have an account? <a href="userlogin">Login here!</a></span><br><hr>
                        </div>
                        <div class="form-group" align="center">
                            <input type="submit" value="Send Message" class="btn btn-primary py-2 px-2" onclick='a1()'>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>