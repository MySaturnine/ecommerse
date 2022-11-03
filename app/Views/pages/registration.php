<style>
    .login,
    .image {
        min-height: 100vh
    }

    .bg-image {
        background-image: url('https://res.cloudinary.com/dxfq3iotg/image/upload/v1561631318/img-123.jpg');
        background-size: cover;
        background-position: center center
    }
</style>


<div class="container-fluid">
    <div class="row no-gutter">
        <div class="col-md-6 d-none d-md-flex bg-image"></div>
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-xl-6 mx-auto">
                            <h3 class="display-4">REGISTRATION!!</h3> <br>
                            <form action="registration" method="post">
                                <div class="form-group mb-3"> <input name="first_name" type="text" placeholder="First Name" required="" autofocus="" class="form-control rounded-pill1 border-0 shadow-sm px-4"> </div>
                                <div class="form-group mb-3"> <input name="last_name" type="text" placeholder="Last Name" required="" autofocus="" class="form-control rounded-pill1 border-0 shadow-sm px-4"> </div>
                                <div class="form-group mb-3"> <input name="email" id="inputEmail" type="email" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill1 border-0 shadow-sm px-4"> </div>

                                <div class="form-group mb-3"> <input name="password" id="inputPassword" type="password" placeholder="Password" required="" class="form-control rounded-pill1 border-0 shadow-sm px-4 text-danger"><br> </div>

                                <div class="custom-control custom-checkbox mb-3"> <input id="customCheck1" type="checkbox" checked class="custom-control-input"> <label for="customCheck1" class="custom-control-label">I accept the Terms of Use.</label> </div> <button type="submit" name="registration" class="btn btn-danger btn-block text-uppercase mb-2 rounded-pill1 shadow-sm">Sign Up</button>
                                <div class="text-center d-flex justify-content-between mt-4">
                                    <p> OR &nbsp<a href="login" class="font-italic text-muted"> <u>Sign in</u></a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>