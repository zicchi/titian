<main id="content">
    <section class="pt-10 pb-11 pb-lg-15">
      <div class="container container-xxl">
        <h2 class="fs-sm-40 mb-11 text-center">Our Gallery</h2>
        <div class="row">
            @foreach ($galleries as $gallery)

          <div class="col-sm-6 col-lg-4 mb-8" data-animate="fadeInUp">
            <div class="card border-0">
              <a href="#" class="hover-shine card-img-top">
                <img src=" {{ \Illuminate\Support\Facades\Storage::url( $gallery->imageURL ) }}"
                           alt="Under the sun in Cape Town">
              </a>
              <div class="card-body px-0 pt-6 pb-0">
                <h3 class="card-title mb-0 fs-20">
                  <a href="#">{{ $gallery->judul}}</a>
                </h3>
              </div>
            </div>
          </div>

          @endforeach
        </div>
        <nav class="pt-2">
          <ul class="pagination justify-content-center align-items-center mb-0">
            {{$galleries->links()}}
          </ul>
        </nav>
      </div>
    </section>
  </main>
