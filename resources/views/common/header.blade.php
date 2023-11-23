<nav id="header">
    <div class="container-fluid p-0">
        <div class="container-fluid container-lg p-0">
            <div class="textColor">
                <div class="row justify-content-center align-items-center mx-auto">
                    <div class="col-12 col-lg-3 p-0">
                        <div class="display-3 fw-bold py-2 text-center text-lg-start d-none d-lg-block"><a href="{{url('/')}}"><img src="{{ asset('images/LOGO.png') }}" alt="logo" style="
                            height: 100px;
                            padding-left: 25%;
                        "></a></div>
                        <!-- <hr class="d-block d-lg-none"> -->
                    </div>
                    <div class="col-4 col-lg-3 sideLine">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="me-3 p-2 py-3"><i class="fa fa-envelope" style="color: red;font-size:36px" aria-hidden="true"></i></div>
                            <div class="d-none d-lg-block"><small>Email Address</small> <br>
                                <b>info@aamhithanekar.com</b></div>
                        </div>
                    </div>
                    <div class="col-4 col-lg-3 sideLine">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="#">
                                <div class="me-3 p-2 py-3">
                                    <i class="fa fa-phone" style="color: red;font-size:36px" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div class="d-none d-lg-block"><small>Phone Number</small><br> <b>+91-8484848484</b> </div>
                        </div>
                    </div>
                    <div class="col-4 col-lg-3">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="#">
                                <div class="me-3 p-2 py-3">
                                    <i class="fa fa-home" style="color: red;font-size:36px" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div class="d-none d-lg-block"><small>Our Location</small><br> <b>Mumbai</b></div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-0 d-lg-none">
            <div class="text-center display-3 fw-bold mb-1 d-lg-none"><a href="{{url('/')}}"><img src="{{ asset('images/LOGO.png') }}" alt="logo" style="
                height: 100px;"></a></div>
            <div class="navbarBgDark" data-bs-theme="dark">
                <nav class="navbar navbar-expand-lg justify-content-center justify-content-lg-between p-0">

                    <button class="navbar-toggler m-3 w-100" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        Menu
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                        <ul class="navbar-nav text-uppercase ps-3">
                            <li class="nav-item">
                                <a class="nav-link active pe-3" aria-current="page" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-lg-3" href="{{route('blog_details')}}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-lg-3" href="#">Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-lg-3" href="#">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-lg-3" href="#">Project</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle px-lg-3" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-lg-3" href="#">Contact</a>
                            </li>
                        </ul>
                        <div class="social-menu" style="display:table-column-group">
                            <ul>
                                <li><a href="https://www.facebook.com/" target="blank"><i class="fab fa fa-facebook"></i></i></a></li>
                                <li><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D" target="blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/" target="blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="text-white m-1 p-3">
                            {{-- <button type="button" class="btn getBtn border border-white rounded-0">DONATE NOW</button> --}}
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</nav>