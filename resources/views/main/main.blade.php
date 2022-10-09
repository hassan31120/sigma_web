<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('main/js/bootstrap-5.2.1-dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('main/js/bootstrap-5.2.1-dist/js/bootstrap.js') }}">
    <link rel="stylesheet" href="{{ asset('main/css/all.min.css') }}">
</head>

<body>
    <!--navbar-->
    <div class="container-fluid containerCSS">
        <nav class="navbar navbar-expand-lg navbar-light containerCSS font fw-bolder">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav containerCSS">
                        <li class="nav-item">
                            <a class="nav-link fs-5" style="color: #1d1487
                            ;" aria-current="page" href="./index.html">الرئيسية</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link text-dark" href="#motion">اهمية الموشن</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link fs-5"style="color: #1d1487
                            ;" href="#services">اعمالنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5"style="color: #1d1487
                            ;" href="#contactUs"> تواصل </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- header background component-->
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="view text-center">
                <img src="{{ asset('main/img/d451c9d3-80cc-464e-a2ed-a54f55fc1f75.jpg') }}" class="img-fluid" alt="sample image">
            </div>
        </div>
    </div>
    <div class="container-fluid font" id="main">
        <div class="custom-shape-divider-top-1662649051">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </div>
    <!--about us-->

    <!--section image-->
    <!--service-->
    <h1 class="text-center pt-5 mb-5 fw-bold" id="services" style="color:#fa7b70
    ;">اعمالنا</h1>
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-lg-4 col-sm-6">
                <div class="  border rounded img">
                    <a href=""><img src="{{ asset('main/img/web2.jpg') }}" class=" img-fluid" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="  border rounded img">
                    <a href=""><img src="{{ asset('main/img/about-us.jpg') }}" class=" img-fluid" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="  border rounded img">
                    <a href=""><img src="{{ asset('main/img/web3.jpg') }}" class=" img-fluid" alt=""></a>
                </div>
            </div>
        </div>
        <div class=" col-md-12 text-center mt-5">
            <a href="#" class="btn btn-primary fw-bold" role="button">شاهد باقي الاعمال</a>
        </div>
    </div>

    <!-- question section -->
    <div class="container-fluid mt-5">
        <div class="row d-flex justify-content-center">
            <h3 class="h3_button text-center fw-bold">هذا النص يستبدل</h3>
        </div>
    </div>
    <div class="container-fluid mt-3" style="cursor: pointer;">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5 col-md-8 col-sm-12 justify-content-center">
                <div class="according">
                    <div class="according-item">
                        <button class="according-button " id="according-button-1">
                            <span class="fw-bold fs-5 ">هذا النص هو مثال لنص </span>
                            <span class="icon">
                                <i class="fa-sharp fa-solid fa-chevron-down up " id="up1"></i>
                            </span>
                        </button>
                        <div class="according-content" id="according-content-1">
                            <p class=" text-end fw-bold">هذا النص هو مثال لنص يمكن أن يستبدل في نفس ، لقد تم توليد هذا
                                    النص من منصة قالب جاهز ، حيث يمكنك أنا استخدام هذا النص و مثل هذا النص ....</p>
                        </div>
                    </div>
                    <div class="according-item">
                        <button class="according-button " id="according-button-1">
                            <span class="fw-bold fs-5 ">adsهذا النص هو مثال لنص </span>
                            <span class="icon">
                                <i class="fa-sharp fa-solid fa-chevron-down up " id="up1"></i>
                            </span>
                        </button>
                        <div class="according-content" id="according-content-1">
                            <p class=" text-end fw-bold">هذا النص هو مثال لنص يمكن أن يستبدل في نفس ، لقد تم توليد هذا
                                    النص من منصة قالب جاهز ، حيثda يمكنك أنا استخدام هذا النص و مثل هذا النص ....</p>
                        </div>
                    </div>
                    <div class="according-item">
                        <button class="according-button" id="according-button-2">
                            <span class="fw-bold fs-5">هذا النص هو مثال لنص   </span>
                            <span class="icon">
                                <i class="fa-sharp fa-solid fa-chevron-down up" id="up2"></i>
                            </span>
                        </button>
                        <div class="according-content" id="according-content-2">
                            <p class=" text-end fw-bold">هذا النص هو مثال لنص يمكن أن يستبدل في نفس ، لقد تم توليد هذا
                                    النص من منصة قالب جاهز ، حيث يمكنك أنا استخدام هذا النص و مثل هذا النص ....</p>
                        </div>
                    </div>
                    <div class="according-item">
                        <button class="according-button" id="according-button-3">
                            <span class="fw-bold fs-5">هذا النص هو مثال لنص   </span>
                            <span class="icon">
                                <i class="fa-sharp fa-solid fa-chevron-down up" id="up3"></i>
                            </span>
                        </button>
                        <div class="according-content fw-bold" id="according-content-3">
                            <p class=" text-end">هذا النص هو مثال لنص يمكن أن يستبدل في نفس ، لقد تم توليد هذا
                                    النص من منصة قالب جاهز ، حيث يمكنك أنا استخدام هذا النص و مثل هذا النص ....</p>
                        </div>
                    </div>
                    <div class="according-item">
                        <button class="according-button" id="according-button-4">
                            <span class="fw-bold fs-5">هذا النص هو مثال لنص   </span>
                            <span class="icon">
                                <i class="fa-sharp fa-solid fa-chevron-down up" id="up4"></i>
                            </span>
                        </button>
                        <div class="according-content" id="according-content-4">
                            <p class=" text-end fw-bold">هذا النص هو مثال لنص يمكن أن يستبدل في نفس ، لقد تم توليد هذا
                                    النص من منصة قالب جاهز ، حيث يمكنك أنا استخدام هذا النص و مثل هذا النص ....</p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <h1 class="text-center" id="contactUs"></h1>
    <div class="container-fluid" id="footer">
        <footer class="fw-bold">
            <div class="container">
                <div class="footer-cta pt-5 pb-5">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-md-4 mb-30 text-center">
                            <div class="single-cta">
                                <div class="cta-text">
                                    <h1 class="fw-bold text-center text-dark" data-aos="fade-up" ata-aos-offset="250"
                                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">اطلب
                                        الان فقط ب<strong class=" text-dark fw-bolder"> 192 </strong> ريال</h1>

                                    <div class=" col-md-12 text-center mt-3">
                                        <a href="https://web.whatsapp.com/" data-aos="fade-up" ata-aos-offset="300"
                                            data-aos-delay="50" class="btn btn-success  btn-lg fw-bold" role="button">
                                            <h2 class="fw-bold">واتساب</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-area">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-6 ">
                                <div class="copyright-text ">
                                    <p class=" text-dark text-center">حقوق الطبع والنشرCopyright &copy; لعام2022 محفوظة لشركة
                                        <strong style="color:rgb(31, 92, 92)">SIGMA</strong>
                                        أو الشركات
                                        التابعة لها</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('main/js/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('main/js/jquery/jquery.js') }}"></script>
    <script src="{{ asset('main/js/index.js') }}"></script>
    <script>

    </script>
</body>

</html>
