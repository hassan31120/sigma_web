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
                                    <h1 class="fw-bold text-center text-light">اطلب
                                        الان فقط ب<strong class=" text-light fw-bolder"> {{ $setting->value }} </strong> ريال</h1>

                                    <div class=" col-md-12 text-center mt-3">
                                        <a href="{{ $setting->link }}" target="_blank" class="btn btn-success  btn-lg fw-bold" role="button">
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
                                    <p class=" text-light">حقوق الطبع والنشرCopyright &copy; لعام2022 محفوظة لشركة  <strong style="color:rgb(31, 92, 92)">مؤسسة المنى ومنصة 24 تك</strong>
                                        أو الشركات التابعة لها
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    {{-- <script src="./js/jquery/jquery-3.4.1.min.js"></script> --}}
    <script src="{{ asset('main/js/index.js') }}"></script>
    <script>

    </script>
</body>

</html>
