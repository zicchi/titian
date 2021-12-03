<main id="content">
    <section class="py-10 pb-lg-13">
      <div class="container">
        <h2 class="fs-sm-40 mb-10 text-center">Frequently Asked Questions</h2>
        <img src="{{ asset('assets/images/b-26.jpg') }}" alt="Frequently Asked Questions" class="mb-10">
        <div class="mxw-830 mx-auto">
          <p class="fs-20 text-primary font-weight-500 mb-5">Kami Siap Membantu Anda
        </p>
          <p class="mb-6">Belum Menemukan Jawaban yang Kamu Cari?</p>
          <div id="accordion-style-01" class="accordion">
            @foreach ($faqs as $faq)

            <div class="card border-0 mb-5">
              <div class="card-header border-0 p-0 bg-transparent bg-transparent" id="headingOne">
                <h5 class="mb-0 fs-16 w-100">
                  <a href="#" class="d-flex align-items-center border-bottom pb-3 pr-2" data-toggle="collapse"
                             data-target="#collapse{{$faq->id}}"
                             aria-expanded="true" aria-controls="collapse{{$faq->id}}">
                    <span>{{$faq->question}}</span>
                    <span class="icon d-inline-block ml-auto"></span>
                  </a>
                </h5>
              </div>
              <div id="collapse{{$faq->id}}" class="collapse" aria-labelledby="heading{{$faq->answer}}"
                       data-parent="#accordion-style-01">
                <div class="card-body py-4 px-0">
                  <p>{{ $faq->answer }}</p>

                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
  </main>
