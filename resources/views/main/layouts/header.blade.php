<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!--aos-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
        <style>
            body{
                overflow-x: hidden;
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
                            <a class="nav-link text-dark" aria-current="page" href="{{ route('main') }}">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('main') }}#motion">اهمية الموشن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ser text-dark" href="#services">اعمالنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#contactUs">اطلب الان</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

