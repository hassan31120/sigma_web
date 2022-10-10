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
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
    <style>
        .acordion-item-header {
            cursor: pointer;
            position: relative;
        }

        .acordion-item-header::after {
            content: "\002b";
            font-size: 2re;
            position: absolute;
            left: 1rem;
        }

        .acordion-item-header.active::after {
            content: "\2212";
        }

        .accordion-item-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-in-out;
        }

        .acordion-item-body-content {

            padding: 1rem;
            line-height: 1.5rem;
            border-top: 1px solid;
            border-image: linear-gradient(to right, transparent, rgb(12, 77, 62), transparent)1;
        }
    </style>
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
                            ;"
                                aria-current="page" href="{{ route('main') }}">الرئيسية</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link text-dark" href="#motion">اهمية الموشن</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link fs-5"style="color: #1d1487
                            ;"
                                href="#services">اعمالنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5"style="color: #1d1487
                            ;"
                                href="#contactUs"> تواصل </a>
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
                <img src="{{ asset('main/img/d451c9d3-80cc-464e-a2ed-a54f55fc1f75.jpg') }}" class="img-fluid"
                    alt="sample image">
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
