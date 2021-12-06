<main id="content">
    <section class="pt-10 pb-11 pb-lg-15">
      <div class="container">
        <h2 class="fs-sm-40 mb-11 text-center">Our Journal</h2>
        <div class="row">
          @foreach ($blogs as $blog)


          <div class="col-sm-6 col-lg-4 mb-8" data-animate="fadeInUp">
            <div class="card border-0">
              <a href="{{ route('blog.details', ['slug'=>$blog->slug]) }}" class="hover-shine card-img-top">
                <img src="{{ asset('assets/images/blog_01.jpg') }}"
                           alt="{{ $blog->title }}">
              </a>
              <div class="card-body px-0 pt-6 pb-0">
                <p class="card-text fs-12 mb-2 text-muted lh-12 text-uppercase letter-spacing-05 font-weight-500">
                    {{ $blog->created_at }}
                </p>
                <h3 class="card-title mb-2 fs-20">
                  <a href="{{ route('blog.details', ['slug'=>$blog->slug]) }}">{{ $blog->title }}</a>
                </h3>
              </div>
            </div>
          </div>

            @endforeach
        </div>

        <nav class="pt-2">
              <div class="pagination justify-content-center align-items-center mb-0">
                  {{$blogs->links()}}
              </div>
        </nav>
      </div>
    </section>
  </main>
