@extends('main.layouts.main')
@section('content')
    <!--section image-->
    <!--service-->
    <h1 class="text-center pt-5 mb-5 fw-bold" id="services" style="color:#fa7b70
    ;">اعمالنا</h1>
    <div class="container">
        <div class="row d-flex justify-content-between">
            @foreach ($links as $link)
                <div class="col-lg-4 col-sm-6">
                    <div class="  border rounded img">
                        <a href="{{ $link->link }}" target="_blank"><img src="{{ asset($link->image) }}" class=" img-fluid"
                            alt=""></a>
                    </div>
                </div>
            @endforeach

        </div>
        <div class=" col-md-12 text-center mt-5">
            <a href="{{ route('videos') }}" class="btn btn-primary fw-bold" role="button">شاهد باقي الاعمال</a>
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
                            <span class="fw-bold fs-5">هذا النص هو مثال لنص </span>
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
                            <span class="fw-bold fs-5">هذا النص هو مثال لنص </span>
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
                            <span class="fw-bold fs-5">هذا النص هو مثال لنص </span>
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
@endsection
