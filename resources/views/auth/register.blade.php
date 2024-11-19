<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <section class="vh-100 bg-image">
                    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                        <div class="container h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                    <div class="card" style="border-radius: 15px;">
                                        <div class="card-body p-5">
                                            <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                                            <form method="post" action="{{route('register.store')}}">
                                                @csrf
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <input type="text" name="name" id="form3Example1cg"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1cg">Your Name</label>
                                                </div>
    
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <input type="email" name="email" id="form3Example3cg"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example3cg">Your Email</label>
                                                </div>
    
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <input type="password" name="password" id="form3Example4cg"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example4cg">Password</label>
                                                </div>
    
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <input type="password" name="password_confirmation" id="form3Example4cdg"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example4cdg">Repeat your
                                                        password</label>
                                                </div>
    
                                                <div class="d-flex justify-content-center">
                                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                                </div>
    
                                                <p class="text-center text-muted mt-4 mb-0">Have already an account? <a
                                                        href="{{route('login.page')}}" class="fw-bold text-body"><u>Login here</u></a></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
