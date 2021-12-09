<main id="content">
    <section class="d-flex flex-column bg-img-cover-center vh-100 pt-xxl-13 custom-height-sm"
       style="background-image: url('{{ asset($abouts[0]->foto_header)  }}">
      <div class="d-flex flex-column h-100 justify-content-center">
        <div class="container container-xxl">
          <h1 class="fs-60 mb-4">About Us</h1>
          <p class="mb-0 mxw-435px">{{ $abouts[0]->header_subtitle }}</p>
        </div>
      </div>
    </section>
    <section class="pt-11 pt-lg-15">
      <div class="container">
        <div class="mxw-924 mx-auto mb-7">
          <h2 class="fs-30 fs-md-40 lh-15 text-center mb-0">{{ $abouts[0]->judul  }}</h2>
        </div>
        <div class="mxw-830 mx-auto mb-8">
          <p class="fs-20 text-primary font-weight-500 mb-5">{{$abouts[0]->subjudul}} </p>
          <p class="mb-1">{{ $abouts[0]->description  }}</p>
        </div>
      </div>
    </section>
    <section class="py-11 py-lg-15">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-3 mb-8 mb-lg-0">
            <h2 class="fs-30 fs-md-40 lh-15 mb-6 pt-lg-5">Informasi</h2>
            <p class="font-weight-bold text-primary mb-4">Address</p>
            <address class="mb-6">
              {{ $contacts[0]->address}}
            </address>
            <p class="font-weight-bold text-primary mb-3">Infomation</p>
            <p class="mb-0">{{ $contacts[0]->phone}}</p>
            <p class="mb-7">{{ $contacts[0]->email}}</p>
            <a href="/contact" class="btn btn-primary">contact us</a>
          </div>
          <div class="col-lg-9">
            <div class="pl-lg-10">
              <img src="{{ asset('assets/images/b-21.jpg') }}" alt="Image">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
