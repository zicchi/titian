<main id="content">
    <section class="pt-10 pb-lg-15 pb-11 mt-12">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-7 mb-6 mb-md-0 pr-md-6 pr-lg-9">
            <div class="galleries position-relative">
              <div class="position-absolute pos-fixed-top-right pr-4 pt-4 z-index-2">
              </div>
              <div class="slick-slider slider-for"
                       data-slick-options='{"slidesToShow": 1, "autoplay":false,"dots":false,"arrows":false,"asNavFor": ".slider-nav"}'>
                <div class="box">
                  <div class="card p-0 hover-change-image rounded-0 border-0">
                    <a href="{{ asset( $product->imageUrl ) }}"
                                 class="card-img ratio ratio-1-1 bg-img-cover-center"
                                 data-gtf-mfp="true"
                                 data-gallery-id="02"
                                 style="background-image:url('{{ asset( $product->imageUrl ) }}')">
                    </a>
                  </div>
                </div>
                {{-- <div class="box">
                  <div class="card p-0 hover-change-image rounded-0 border-0">
                    <a href="images/product-page-15.jpg"
                                 class="card-img ratio ratio-1-1 bg-img-cover-center"
                                 data-gtf-mfp="true"
                                 data-gallery-id="02"
                                 style="background-image:url('{{ asset('assets/images/product-page-15.jpg') }}')">
                    </a>
                  </div>
                </div> --}}
              </div>
              <div class="slick-slider slider-nav mt-1 mx-n1"
                       data-slick-options='{"slidesToShow": 4, "autoplay":false,"dots":false,"arrows":false,"asNavFor": ".slider-for","focusOnSelect": true,"responsive":[{"breakpoint": 768,"settings": {"slidesToShow": 3,"arrows":false}},{"breakpoint": 576,"settings": {"slidesToShow": 2,"arrows":false}}]}'>
                {{-- <div class="box px-0">
                  <div class="bg-white p-1 h-100 rounded-0">
                    <img src="{{ asset('assets/images/product-page-13.jpg') }}" alt="Image 1"
                                   class="h-100 w-100">
                  </div>
                </div> --}}
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <p class="text-muted fs-12 font-weight-500 letter-spacing-05 text-uppercase mb-3">{{ $product->category->name }}</p>
            <h2 class="fs-30 fs-lg-40 mb-2">{{ $product->name }}</h2>
            <p class="fs-20 text-primary mb-4">IDR{{ $product->price }}</p>
            <p class="mb-5">{{ $product->description }}</p>
            <form>
            </form>
            <p class="d-flex text-primary justify-content-center">
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>
