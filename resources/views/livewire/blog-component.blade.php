<main id="content">
    <section class="pt-10 pb-11 pb-lg-15">
      <div class="container">
        <h2 class="fs-sm-40 mb-11 text-center">Our Journal</h2>
        <div class="row">
          @foreach ($blogs as $blog)


          <div class="col-sm-6 col-lg-4 mb-8" data-animate="fadeInUp">
            <div class="card border-0">
              <a href="blog-post.html" class="hover-shine card-img-top">
                <img src="{{ asset('assets/images/blog_01.jpg') }}"
                           alt="{{ $blog->title }}">
              </a>
              <div class="card-body px-0 pt-6 pb-0">
                <p class="card-text fs-12 mb-2 text-muted lh-12 text-uppercase letter-spacing-05 font-weight-500">
                    {{ $blog->created_at }}
                </p>
                <h3 class="card-title mb-2 fs-20">
                  <a href="blog-post.html">{{ $blog->title }}</a>
                </h3>
                <p class="card-text mb-4 font-weight-500">{{ $blog->title }}</p>
                <a href="blog-post.html"
                         class="fs-14 font-weight-bold border-bottom border-light-dark text-uppercase letter-spacing-05 d-inline-block border-hover-primary">
                  Read more
                </a>
              </div>
            </div>
          </div>

          @endforeach
        </div>
        <nav class="pt-2">
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
        </nav>
      </div>
    </section>
  </main>
