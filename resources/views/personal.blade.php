<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="" content="">
    <title></title>
    <script src="{{ asset('iPortofolio/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('folio/assets/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('folio/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('folio/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('folio/assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('folio/assets/vendor/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet"
        type="text/css"href="{{ asset('folio/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('folio/assets/vendor/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet"
        type="text/css"href="{{ asset('folio/assets/vendor/fancybox/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('folio/assets/css/virtual.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('folio/assets/css/topbar.virtual.css') }}">
</head>

<body class="theme-red">

    <!-- Back to top button -->
    <div class="btn-back_to_top">
        <span class="ti-arrow-up"></span>
    </div>

    <!-- Setting button -->
    <div class="config">
        <div class="set-menu">
            <p>Select Color</p>
            <div class="color-bar" data-toggle="selected">
                <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
                <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
                <span class="color-item bg-theme-green" data-class="theme-green"></span>
                <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
                <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
            </div>
            <select class="custom-select d-block my-2" id="change-page">
                <option value="">Choose Page</option>
                <option value="index">Topbar</option>
                <option value="blog-topbar">Blog (Topbar)</option>
                <option value="index-2">Minibar</option>
                <option value="blog-minibar">Blog (Minibar)</option>
            </select>
        </div>
    </div>

    <div class="vg-page page-home" id="home" style="background-image: url({{ asset('img/Bg.png') }})">
        <!-- Navbar -->
        <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
            <div class="container">
                <a href="" class="navbar-brand">MyFolio</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
                    <span class="ti-menu"></span>
                </button>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link" data-animate="scrolling">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#portfolio" class="nav-link" data-animate="scrolling">Sertificate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../view/dashboard">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- End Navbar -->
        <!-- Caption header -->
        <div class="caption-header text-center wow zoomInDown">
            <h5 class="fw-normal">Welcome</h5>
            <h1 class="fw-light mb-4">I'm <b class="fg-theme">Muhammad</b> Faridz</h1>
            <div class="badge">Web Designer & Network Engineer</div>
        </div> <!-- End Caption header -->
        <div class="floating-button"><span class="ti-mouse"></span></div>
    </div>

    <div class="vg-page page-about" id="about">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 py-3">
                    <div class="img-place wow fadeInUp">
                        <img src="{{ asset('img/Me.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 wow fadeInRight">
                    <h1 class="fw-light">Muhammad Faridz</h1>
                    <h5 class="fg-theme mb-3">Web Designer & Network Engineer</h5>
                    <p class="text-muted">I am a network engineer and now learning about web developers
                    </p>
                    <ul class="theme-list">
                        <li><b>Lives In:</b> Malang, Indonesia</li>
                        <li><b>Age:</b> 20</li>
                        <li><b>Gender:</b> Male</li>
                    </ul>
                    {{-- <button class="btn btn-theme-outline">Download CV</button> --}}
                </div>
            </div>
        </div>
        <div class="container py-5">
            <h1 class="text-center fw-normal wow fadeIn">My Skills</h1>
            <div class="row py-3">
                @foreach ($skill as $item)
                    <div class="col-md-6">
                        <div class="px-lg-3">
                            <h4 class="wow fadeInUp">{{ $item['category_name'] }}</h4>
                            <div class="progress-wrapper wow fadeInUp">
                                <span class="caption">{{ $item['title']}}</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: {{ $item['percentage'] }}%" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100">{{ $item['percentage'] }}%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- <div class="container py-5">
            <h1 class="text-center fw-normal wow fadeIn">My Skills</h1>
            @foreach ($skill as $item)
                <div class="row py-3">
                    <div class="col-md-6">
                        <div class="px-lg-3">

                            <h4 class="wow fadeInUp">{{ $item['category_name'] }}
                                <div class="progress-wrapper wow fadeInUp">
                                    <span class="caption">{{ $item['title'] }}</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                            style="{{ $item['percentage'] }}" aria-valuenow="75" aria-valuemin="0"
                                            aria-valuemax="100">{{ $item['percentage'] }}</div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-6 wow fadeInRight">
                    <h2 class="fw-normal">Education</h2>
                    <ul class="timeline mt-4 pr-md-5">
                        <li>
                            <div class="title">2021</div>
                            <div class="details">
                                <h5>Computer Science</h5>
                                <small class="fg-theme">Binus University</small>
                                <p>I learned a lot in college, such as learning some programming languages, starting
                                    some small projects and organizing.</p>
                            </div>
                        </li>
                        <li>
                            <div class="title">2018</div>
                            <div class="details">
                                <h5>Computer and Network Engineering</h5>
                                <small class="fg-theme">SMK IDN</small>
                                <p>I learned networking in vocational school, I also gained some experience such as
                                    teaching and took some certifications.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
                    <h2 class="fw-normal">Experience</h2>
                    <ul class="timeline mt-4 pr-md-5">
                        <li>
                            <div class="title">November - 2019</div>
                            <div class="details">
                                <h5>TroubleShooter</h5>
                                <small class="fg-theme">Event Training guru TKJ graduation 19</small>
                                <p>I become a support for training events, my job is to help the participants when there
                                    is a problem or error occurs when attending the training.</p>
                            </div>
                        </li>
                        <li>
                            <div class="title">February - 2019</div>
                            <div class="details">
                                <h5>Trainer CCNA</h5>
                                <small class="fg-theme">SMKN 2 Bawang and SMK Panca Bhakti, Banjarnegara</small>
                                <p>I became a Cisco CCNA trainer, my job was to deliver Cisco CCNA material and ensure
                                    that participants could follow the material presented. </p>
                            </div>
                        </li>
                        <li>
                            <div class="title">September - 2019</div>
                            <div class="details">
                                <h5>Network Operation Center</h5>
                                <small class="fg-theme">PT.Transhybrid Communication</small>
                                <p></p>
                            </div>
                        </li>
                        <li>
                            <div class="title">February - 2019</div>
                            <div class="details">
                                <h5>Trainer CCNA</h5>
                                <small class="fg-theme">SMKN 2 Bawang and SMK Panca Bhakti, Banjarnegara</small>
                                <p>I became a Cisco CCNA trainer, my job was to deliver Cisco CCNA material and ensure
                                    that participants could follow the material presented. </p>
                            </div>
                        </li>
                        <li>
                            <div class="title">October - 2018</div>
                            <div class="details">
                                <h5>Troubleshooter</h5>
                                <small class="fg-theme">Event Training guru TKJ graduation 18</small>
                                <p>I become a support for training events, my job is to help the participants when there
                                    is a problem or error occurs when attending the training.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio page -->
    <div class="vg-page page-portfolio" id="portfolio">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="badge badge-subhead">Sertificate</div>
            </div>
            <div class="gridder my-3">
                <div class="grid-item apps wow zoomIn">
                    <div class="img-place" data-src="{{ asset('folio/assets/img/MTCINE.png') }}" data-fancybox
                        data-caption="<h5 class='fg-theme'>Mikrotik Certified</h5> <p>MTCRE</p>">
                        <img src="{{ asset('folio/assets/img/MTCRE.png') }}" alt="">
                        <div class="img-caption">
                            <h5 class="fg-theme">Mikrotik Certified</h5>
                            <p>MTCRE</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item template wireframes wow zoomIn">
                    <div class="img-place" data-src="{{ asset('folio/assets/img/MTCINE.png') }}" data-fancybox
                        data-caption="<h5 class='fg-theme'>Mikrotik Certified</h5> <p>MTCINE</p>">
                        <img src="{{ asset('folio/assets/img/MTCINE.png') }}" alt="">
                        <div class="img-caption">
                            <h5 class="fg-theme">Mikrotik Certified</h5>
                            <p>MTCINE</p>
                        </div>
                    </div>
                </div>
            </div> <!-- End gridder -->
        </div>
    </div> <!-- End Portfolio page -->

    <!-- Footer -->
    <div class="vg-footer">
        <h1 class="text-center">Virtual Folio</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 py-3">
                    <div class="footer-info">
                        <p>Where to find me</p>
                        <hr class="divider">
                        <p class="fs-large fg-white">1600 Amphitheatre Parkway Mountain View, California 94043 US</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 py-3">
                    <div class="float-lg-right">
                        <p>Follow me</p>
                        <hr class="divider">
                        <ul class="list-unstyled">
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Youtube</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 py-3">
                    <div class="float-lg-right">
                        <p>Contact me</p>
                        <hr class="divider">
                        <ul class="list-unstyled">
                            <li>info@virtual.com</li>
                            <li>+8890234</li>
                            <li>+813023</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-12 mb-3">
                    <h3 class="fw-normal text-center">Subscribe</h3>
                </div>
                <div class="col-lg-6">
                    <form class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email address">
                            <input type="submit" class="btn btn-theme no-shadow" value="Subscribe">
                        </div>
                    </form>
                </div>
                <div class="col-12">
                    <p class="text-center mb-0 mt-4">Copyright &copy;2020. All right reserved | This template is made
                        with <span class="ti-heart fg-theme-red"></span> by <a href="https://www.macodeid.com/">MACode
                            ID</a></p>
                </div>
            </div>
        </div>
    </div> <!-- End footer -->


    <script src="{{ asset('folio/assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('folio/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('folio/assets/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('folio/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('folio/assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('folio/assets/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('folio/assets/vendor/fancybox/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('folio/assets/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('folio/assets/vendor/animateNumber/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('folio/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('folio/assets/js/google-maps.js') }}"></script>
    <script src="{{ asset('folio/assets/js/topbar-virtual.js') }}"></script>
    <script async
        defersrc="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap">
    </script>

</body>

</html>
