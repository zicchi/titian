<main id="content">
    <section class="py-8 page-title border-top">
        <div class="container">
          <h1 class="fs-40 my-1 text-capitalize text-center">Shop All</h1>
        </div>
      </section>
    <div class="pt-6">
      <div class="container-fluid">
        <div class="slick-slider"
           data-slick-options='{"slidesToShow": 4, "autoplay":true,"dots":true,"arrows":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":4}},{"breakpoint": 992,"settings": {"slidesToShow":3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>
           @foreach ($categories as $category)
          <div class="box" data-animate="fadeInUp">
            <div class="card border-0">
              <img src="{{ asset( $category->imageURL ) }}" alt="Chairs" class="card-img">
              <div class="card-img-overlay d-inline-flex flex-column px-6 py-4">
                  <h3 class="card-title fs-30">{{$category->name}}</h3>
                <div class="mt-auto">
                  <a href="{{ route('product.category', ['category_slug' => $category->slug]) }}"
                             class="text-uppercase fs-14 letter-spacing-05 border-bottom border-light-dark border-hover-primary font-weight-bold">Shop
                    Now</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <section class="pt-13 pb-11 pb-lg-14">
      <div class="container">
        <div class="row overflow-hidden">
          <div class="col-md-3 mb-10 mb-md-0 primary-sidebar sidebar-sticky" id="sidebar">
            <div class="primary-sidebar-inner">
              <div class="card border-0 mb-7">
                <div class="card-header bg-transparent border-0 p-0">
                  <h3 class="card-title fs-20 mb-0">
                    Categories
                  </h3>
                </div>
                <div class="card-body px-0 pt-4 pb-0">
                  <ul class="list-unstyled mb-0">
                    @foreach ($categories as $category)
                    <li class="mb-1">
                      <a href="{{ route('product.category', ['category_slug' => $category->slug]) }}"
                                     class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">{{ $category->name }}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="card border-0 mb-7">
                <div class="card-header bg-transparent border-0 p-0">
                  <h3 class="card-title fs-20 mb-0">
                    Material
                  </h3>
                </div>
                <div class="card-body px-0 pt-4 pb-0">
                  <ul class="list-unstyled mb-0">
                    @foreach ($materials as $material)
                    <li class="mb-1">
                        <a href="{{ route('shop', ['material' => $material->id])  }}"
                           class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">
                            {{ $material->name }}
                      </a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
              {{-- <div class="card border-0">
                <div class="card-header bg-transparent border-0 p-0">
                  <h3 class="card-title fs-20 mb-0">
                    Tags
                  </h3>
                </div>
                <div class="card-body px-0 pt-6 pb-0">
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-2 py-1">
                      <a href="#"
                                     class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Vintage</a>
                    </li>
                    <li class="list-inline-item mr-2 py-1">
                      <a href="#"
                                     class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Awesome</a>
                    </li>
                    <li class="list-inline-item mr-2 py-1">
                      <a href="#"
                                     class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Summer</a>
                    </li>
                    <li class="list-inline-item mr-2 py-1">
                      <a href="#"
                                     class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Beachwear</a>
                    </li>
                    <li class="list-inline-item mr-2 py-1">
                      <a href="#"
                                     class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Sunglasses</a>
                    </li>
                    <li class="list-inline-item mr-2 py-1">
                      <a href="#"
                                     class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Winter</a>
                    </li>
                    <li class="list-inline-item mr-2 py-1">
                      <a href="#"
                                     class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Shorts</a>
                    </li>
                    <li class="list-inline-item mr-2 py-1">
                      <a href="#"
                                     class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Cool</a>
                    </li>
                    <li class="list-inline-item mr-2 py-1">
                      <a href="#"
                                     class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">Nice</a>
                    </li>
                  </ul>
                </div>
              </div> --}}
            </div>
          </div>
          <div class="col-md-9">
            <div class="d-flex mb-6">
              <div class="ml-auto">
                <div class="dropdown">
                  {{-- <a href="#" class="dropdown-toggle fs-14" id="dropdownMenuButton" data-toggle="dropdown"
                             aria-haspopup="true" aria-expanded="false">
                    Default Sorting
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" >
                    <a class="dropdown-item text-primary fs-14" href="#">Price high to low</a>
                    <a class="dropdown-item text-primary fs-14" href="#">Price low to high</a>
                    <a class="dropdown-item text-primary fs-14" href="#">Random</a>
                  </div> --}}
                  {{-- <select name="orderby" id="sorting" wire:model="sorting">
                      <option value="default" class="dropdown-item text-primary fs-14" >Default Sorting</option>
                      <option value="lowToHigh" class="dropdown-item text-primary fs-14" >Price low to high</option>
                      <option value="highToLow" class="dropdown-item text-primary fs-14" >Price high to low</option>
                  </select> --}}
                </div>
              </div>
            </div>

            <div class="row">
              @foreach ($products as $product)
              <div class="col-sm-6 col-lg-4 mb-8" data-animate="fadeInUp">
                <div class="card border-0 hover-change-content product">
                  <div class="card-img-top position-relative">
                    <div style="background-image: url('{{ asset($product->imageUrl) }}')"
                                   class="card-img ratio bg-img-cover-center ratio-1-1">
                    </div>
                  </div>
                  <div class="card-body px-0 pt-4 pb-0 d-flex align-items-end">
                    <div class="mr-auto">
                      <a href="{{ route('product.details',['slug'=>$product->slug])}}" class="text-uppercase text-muted letter-spacing-05 fs-12 d-block font-weight-500">{{ $product->category->name }}</a>
                      <a href="{{ route('product.details',['slug'=>$product->slug])}}" class="font-weight-bold mt-1 d-block">{{$product->name}}</a>
                    </div>
                    <p class="text-primary mb-0 font-weight-500">IDR{{$product->price}}</p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div class="wrap-pagination-info">
                {{$products->links()}}
            </div>
            {{-- <nav class="pt-4 overflow-hidden">
              <ul class="pagination justify-content-center align-items-center mb-0">
                <li class="page-item fs-12 d-none d-sm-block">
                  <a class="page-link" href="#" tabindex="-1"><i class="far fa-angle-double-left"></i></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item fs-12 d-none d-sm-block">
                  <a class="page-link" href="#"><i class="far fa-angle-double-right"></i></a>
                </li>
              </ul>
            </nav> --}}
          </div>
        </div>
      </div>
    </section>
  </main>
