<main id="content">
    <section class="pt-10 pb-8 pb-md-10">
      <div class="container">
        <h2 class="fs-sm-40 mb-10 text-center">Contact Us</h2>
        <div class="row">
          @foreach ($contacts as $contact)
          <div class="col-sm-6 col-md-3 mb-6 mb-md-0">
            <div class="text-center px-5">
              <p class="font-weight-bold text-primary mb-2">Phone</p>
              <p class="mb-2">Send us a text & an ambassador will respond when available.</p>
              <p class="font-weight-500 text-primary mb-0">{{ $contact->phone }}</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 mb-6 mb-md-0">
            <div class="text-center px-5">
              <p class="font-weight-bold text-primary mb-2">Address</p>
              <p class="mb-2">461 Valencia Street San Francisco, CA 94103</p>
              <p class="font-weight-500 text-primary mb-0">{{ $contact->address }}</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 mb-6 mb-md-0">
            <div class="text-center px-5">
              <p class="font-weight-bold text-primary mb-2">We're Open</p>
              <p class="mb-0">{{ $contact->bio }}</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 mb-6 mb-md-0">
            <div class="text-center px-5">
              <p class="font-weight-bold text-primary mb-5">Social Media</p>
              <ul class="list-inline d-flex align-items-center justify-content-center mb-0">
                <li class="list-inline-item mr-4"><a href="https://facebook.com/{{ $contact->facebook }}" class="fs-20 lh-1"><i
                              class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item mr-4"><a href="https://instagram.com/{{ $contact->instagram }}/" class="fs-20 lh-1"><i
                              class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <section class="pb-10">
        <div class="container">
            <div class="row">

      <div class="container container-xxl">
        <iframe src="{{ $contacts[0]->maps }}" width="100%" height="800px" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <div class="pb-11 pb-lg-15">
      <div class="container">
        <div class="row">
          {{-- <div class="col-md-8 mx-auto">
            <h2 class="fs-24 mb-2">
              We would love to hear from you.
            </h2>
            <p class="mb-7">If you’ve got great products your making or looking to work with us then drop us a
              line.</p>
            <form>
              <div class="row mb-6">
                <div class="col-sm-6">
                  <input type="text" class="form-control" placeholder="Your Name*" required>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" placeholder="Your Email*" required>
                </div>
              </div>
              <div class="form-group mb-4">
                <textarea class="form-control" rows="6">Comment</textarea>
              </div>
              <div class="custom-control custom-checkbox mb-6">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label fs-15" for="customCheck1"> Save my name, email, and website
                  in this
                  browser for the next time I comment.</label>
              </div>
              <button type="submit" class="btn btn-primary text-uppercase letter-spacing-05">submit now</button>
            </form>
          </div> --}}
        </div>
      </div>
    </div>
  </main>
