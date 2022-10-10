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
            <h3 class="h3_button text-center fw-bold">أسئلة شائعة</h3>
        </div>
    </div>
    <div class="container-fluid mt-3 " style="cursor: pointer;">

        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12 d-flex justify-content-center text-dark">
                <div class="acordion">
                    @foreach ($questions as $question)
                        <div class="acordion-item">
                            <p class="acordion-item-header fw-bold fs-5">
                               {{ $question->question }}
                            </p>
                            <div class="accordion-item-body">
                                <div class="acordion-item-body-content fw-bold">
                                    {{ $question->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
