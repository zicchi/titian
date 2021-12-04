<main id="content">
    <section class="overflow-hidden">
      <div class="slick-slider custom-slider-02"
       data-slick-options='{"slidesToShow": 1,"infinite":true,"autoplay":false,"dots":true,"arrows":false}'>
        <div class="box">
          <div class="d-flex flex-column bg-img-cover-center vh-100 justify-content-center custom-height-sm"
               style="background-image: url('{{ asset('assets/images/bg-home-06.jpg')}}')">
            <div class="d-flex flex-column h-100 justify-content-center">
              <div class="container container-xxl">
                <h1 class="mb-7 fs-40 fs-lg-56" data-animate="fadeInUp">Aura Mirror</h1>
                <ul class="list-inline mb-5 pt-1" data-animate="fadeInUp">
                  <li class="list-inline-item mr-6 mr-xl-16 mb-6">
                    <p class="fs-11 text-primary text-uppercase letter-spacing-05 mb-1 lh-1 font-weight-500">origin</p>
                    <p class="font-weight-bold text-primary mb-0">Sweden</p>
                  </li>
                  <li class="list-inline-item mr-6 mr-xl-16 mb-6">
                    <p class="fs-11 text-primary text-uppercase letter-spacing-05 mb-1 lh-1 font-weight-500">material</p>
                    <p class="font-weight-bold text-primary mb-0">Aluminum</p>
                  </li>
                  <li class="list-inline-item mr-6 mr-xl-16 mb-6">
                    <p class="fs-11 text-primary text-uppercase letter-spacing-05 mb-1 lh-1 font-weight-500">designer</p>
                    <p class="font-weight-bold text-primary mb-0">Industrial Facility</p>
                  </li>
                </ul>
                <div>
                  <a href="shop-page-02.html"
                             class="btn btn-primary text-uppercase letter-spacing-05" data-animate="fadeInUp">Shop
                    Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="d-flex flex-column bg-img-cover-center vh-100 justify-content-center custom-height-sm"
               style="background-image: url('{{ asset('assets/images/bg-home-06.jpg')}}')">
            <div class="d-flex flex-column h-100 justify-content-center">
              <div class="container container-xxl">
                <h2 class="mb-7 fs-40 fs-lg-56" data-animate="fadeInUp">Aura Mirror</h2>
                <ul class="list-inline mb-5 pt-1" data-animate="fadeInUp">
                  <li class="list-inline-item mr-6 mr-xl-16 mb-6">
                    <p class="fs-11 text-primary text-uppercase letter-spacing-05 mb-1 lh-1 font-weight-500">origin</p>
                    <p class="font-weight-bold text-primary mb-0">Sweden</p>
                  </li>
                  <li class="list-inline-item mr-6 mr-xl-16 mb-6">
                    <p class="fs-11 text-primary text-uppercase letter-spacing-05 mb-1 lh-1 font-weight-500">material</p>
                    <p class="font-weight-bold text-primary mb-0">Aluminum</p>
                  </li>
                  <li class="list-inline-item mr-6 mr-xl-16 mb-6">
                    <p class="fs-11 text-primary text-uppercase letter-spacing-05 mb-1 lh-1 font-weight-500">designer</p>
                    <p class="font-weight-bold text-primary mb-0">Industrial Facility</p>
                  </li>
                </ul>
                <div>
                  <a href="shop-page-02.html"
                             class="btn btn-primary text-uppercase letter-spacing-05" data-animate="fadeInUp">Shop
                    Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="d-flex flex-column bg-img-cover-center vh-100 justify-content-center custom-height-sm"
               style="background-image: url('{{ asset('assets/images/bg-home-06.jpg')}}')">
            <div class="d-flex flex-column h-100 justify-content-center">
              <div class="container container-xxl">
                <h2 class="mb-7 fs-40 fs-lg-56" data-animate="fadeInUp">Aura Mirror</h2>
                <ul class="list-inline mb-5 pt-1" data-animate="fadeInUp">
                  <li class="list-inline-item mr-6 mr-xl-16 mb-6">
                    <p class="fs-11 text-primary text-uppercase letter-spacing-05 mb-1 lh-1 font-weight-500">origin</p>
                    <p class="font-weight-bold text-primary mb-0">Sweden</p>
                  </li>
                  <li class="list-inline-item mr-6 mr-xl-16 mb-6">
                    <p class="fs-11 text-primary text-uppercase letter-spacing-05 mb-1 lh-1 font-weight-500">material</p>
                    <p class="font-weight-bold text-primary mb-0">Aluminum</p>
                  </li>
                  <li class="list-inline-item mr-6 mr-xl-16 mb-6">
                    <p class="fs-11 text-primary text-uppercase letter-spacing-05 mb-1 lh-1 font-weight-500">designer</p>
                    <p class="font-weight-bold text-primary mb-0">Industrial Facility</p>
                  </li>
                </ul>
                <div>
                  <a href="shop-page-02.html"
                             class="btn btn-primary text-uppercase letter-spacing-05" data-animate="fadeInUp">Shop
                    Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-lg-15 py-11">
      <div class="container container-xxl">
        <h2 class="mb-8 text-center fs-30 fs-md-40">Essenstial Items</h2>
        <div class="row mb-6 overflow-hidden">
          @foreach ($products as $product)
          <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div style="background-image: url('{{ \Illuminate\Support\Facades\Storage::url($product->imageUrl) }} ')"
                       class="card-img ratio bg-img-cover-center ratio-1-1">
              </div>
              <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
                <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold mb-1 d-block lh-12">{{ $product->name }}</a>
                  <a href="#" class="text-uppercase text-muted letter-spacing-05 fs-13 font-weight-500">Table</a>
                  <p class="mt-auto text-primary mb-0 font-weight-500">
                    {{ $product->price }}</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="text-center">
          <a href="/shop"
             class="btn btn-outline-primary text-uppercase letter-spacing-05">Shop Now</a>
        </div>
      </div>
    </section>
    <section class="pb-12 pb-lg-15 border-bottom">
      <div class="container">
        <h2 class="mb-10 text-center fs-30 fs-md-40">Happy Clients</h2>
        <div class="slick-slider custom-arrow-1"
           data-slick-options='{"slidesToShow": 3,"infinite":true,"autoplay":false,"dots":false,"arrows":true,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":2,"arrows":false,"dots":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true}}]}'>
          <div class="box" data-animate="fadeInUp">
            <div class="card border-0">
              <div class="card-body px-3 py-0 text-center">
                <div class="mxw-84px mb-6 mx-auto">
                  <img src="{{ asset('assets/images/tes_01.png')}}" alt="Sampson Totton">
                </div>
                <ul class="list-inline mb-4">
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                </ul>
                <p class="card-text mb-4 font-weight-500">
                  “These are beautiful, well made & comfortable! I bought them to wear to work & casually. I wore them immediately walking in the city & has no problem. “
                </p>
                <p class="card-text text-primary font-weight-bold mb-1 fs-15">Sampson Totton</p>
                <p class="card-text text-muted fs-13 text-uppercase letter-spacing-05 font-weight-500">
                  Golden Clock</p>
              </div>
            </div>
          </div>
          <div class="box" data-animate="fadeInUp">
            <div class="card border-0">
              <div class="card-body px-3 py-0 text-center">
                <div class="mxw-84px mb-6 mx-auto">
                  <img src="{{ asset('assets/images/tes_02.png')}}" alt="Alfie Wood">
                </div>
                <ul class="list-inline mb-4">
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                </ul>
                <p class="card-text mb-4 font-weight-500">
                  “ Clothers are addicting! Love this brand and shoe. The arch support is wonderful and helps for long hours on your body. The narrow heel is wonderfully ! “
                </p>
                <p class="card-text text-primary font-weight-bold mb-1 fs-15">Alfie Wood</p>
                <p class="card-text text-muted fs-13 text-uppercase letter-spacing-05 font-weight-500">
                  Piper Bar</p>
              </div>
            </div>
          </div>
          <div class="box" data-animate="fadeInUp">
            <div class="card border-0">
              <div class="card-body px-3 py-0 text-center">
                <div class="mxw-84px mb-6 mx-auto">
                  <img src="{{ asset('assets/images/tes_03.png')}}" alt="Herse Hedman">
                </div>
                <ul class="list-inline mb-4">
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                </ul>
                <p class="card-text mb-4 font-weight-500">
                  “Super class, cute, comfortable. You can wear them with just about anything.I will never sacrifice for style.”“
                </p>
                <p class="card-text text-primary font-weight-bold mb-1 fs-15">Herse Hedman</p>
                <p class="card-text text-muted fs-13 text-uppercase letter-spacing-05 font-weight-500">
                  Potato Chair</p>
              </div>
            </div>
          </div>
          <div class="box" data-animate="fadeInUp">
            <div class="card border-0">
              <div class="card-body px-3 py-0 text-center">
                <div class="mxw-84px mb-6 mx-auto">
                  <img src="{{ asset('assets/images/tes_01.png')}}" alt="Herse Hedman">
                </div>
                <ul class="list-inline mb-4">
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                </ul>
                <p class="card-text mb-4 font-weight-500">
                  “Super class, cute, comfortable. You can wear them with just about anything.I will never sacrifice for style.”“
                </p>
                <p class="card-text text-primary font-weight-bold mb-1 fs-15">Herse Hedman</p>
                <p class="card-text text-muted fs-13 text-uppercase letter-spacing-05 font-weight-500">
                  Potato Chair</p>
              </div>
            </div>
          </div>
          <div class="box" data-animate="fadeInUp">
            <div class="card border-0">
              <div class="card-body px-3 py-0 text-center">
                <div class="mxw-84px mb-6 mx-auto">
                  <img src="{{ asset('assets/images/tes_02.png')}}" alt="Herse Hedman">
                </div>
                <ul class="list-inline mb-4">
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                </ul>
                <p class="card-text mb-4 font-weight-500">
                  “Super class, cute, comfortable. You can wear them with just about anything.I will never sacrifice for style.”“
                </p>
                <p class="card-text text-primary font-weight-bold mb-1 fs-15">Herse Hedman</p>
                <p class="card-text text-muted fs-13 text-uppercase letter-spacing-05 font-weight-500">
                  Potato Chair</p>
              </div>
            </div>
          </div>
          <div class="box" data-animate="fadeInUp">
            <div class="card border-0">
              <div class="card-body px-3 py-0 text-center">
                <div class="mxw-84px mb-6 mx-auto">
                  <img src="{{ asset('assets/images/tes_03.png')}}" alt="Herse Hedman">
                </div>
                <ul class="list-inline mb-4">
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                  <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                </ul>
                <p class="card-text mb-4 font-weight-500">
                  “Super class, cute, comfortable. You can wear them with just about anything.I will never sacrifice for style.”“
                </p>
                <p class="card-text text-primary font-weight-bold mb-1 fs-15">Herse Hedman</p>
                <p class="card-text text-muted fs-13 text-uppercase letter-spacing-05 font-weight-500">
                  Potato Chair</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-8">
      <div class="container container-xxl">
        <div class="slick-slider"
           data-slick-options='{"slidesToShow": 7,"infinite":true,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 1367,"settings": {"slidesToShow":5}},{"breakpoint": 992,"settings": {"slidesToShow":5}},{"breakpoint": 768,"settings": {"slidesToShow": 4}},{"breakpoint": 576,"settings": {"slidesToShow": 2}}]}'>
          <div class="box">
            <a href="#" class="d-block px-3 px-xl-7">
              <img src="{{ asset('assets/images/client_logo_01.png')}}" alt="Client Logo 01"
                       class="opacity-5 opacity-hover-10">
            </a>
          </div>
          <div class="box">
            <a href="#" class="d-block px-3 px-xl-7">
              <img src="{{ asset('assets/images/client_logo_02.png')}}" alt="Client Logo 02"
                       class="opacity-5 opacity-hover-10">
            </a>
          </div>
          <div class="box">
            <a href="#" class="d-block px-3 px-xl-7">
              <img src="{{ asset('assets/images/client_logo_03.png')}}" alt="Client Logo 03"
                       class="opacity-5 opacity-hover-10">
            </a>
          </div>
          <div class="box">
            <a href="#" class="d-block px-3 px-xl-7">
              <img src="{{ asset('assets/images/client_logo_04.png')}}" alt="Client Logo 04"
                       class="opacity-5 opacity-hover-10">
            </a>
          </div>
          <div class="box">
            <a href="#" class="d-block px-3 px-xl-7">
              <img src="{{ asset('assets/images/client_logo_05.png')}}" alt="Client Logo 05"
                       class="opacity-5 opacity-hover-10">
            </a>
          </div>
          <div class="box">
            <a href="#" class="d-block px-3 px-xl-7">
              <img src="{{ asset('assets/images/client_logo_06.png')}}" alt="Client Logo 06"
                       class="opacity-5 opacity-hover-10">
            </a>
          </div>
          <div class="box">
            <a href="#" class="d-block px-3 px-xl-7">
              <img src="{{ asset('assets/images/client_logo_07.png')}}" alt="Client Logo 07"
                       class="opacity-5 opacity-hover-10">
            </a>
          </div>
          <div class="box">
            <a href="#" class="d-block px-3 px-xl-7">
              <img src="{{ asset('assets/images/client_logo_08.png')}}" alt="Client Logo 08"
                       class="opacity-5 opacity-hover-10">
            </a>
          </div>
          <div class="box">
            <a href="#" class="d-block px-3 px-xl-7">
              <img src="{{ asset('assets/images/client_logo_09.png')}}" alt="Client Logo 09"
                       class="opacity-5 opacity-hover-10">
            </a>
          </div>
          <div class="box">
            <a href="#" class="d-block px-3 px-xl-7">
              <img src="{{ asset('assets/images/client_logo_10.png')}}" alt="Client Logo 10"
                       class="opacity-5 opacity-hover-10">
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
