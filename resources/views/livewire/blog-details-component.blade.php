<main id="content">
    <section class="pt-10 pb-11 pb-lg-15">
      <div class="container">
        <p class="card-text fs-12 mb-2 text-muted lh-12 text-uppercase letter-spacing-05 font-weight-500">
           {{ $blogs->created_at }}
        </p>
        <h1 class="mb-2 fs-40">
          {{ $blogs->title }}
        </h1>
        <p class="mb-7">By <span class="text-primary">{{ $blogs->user->name }}</span> on <span
              class="text-primary">{{ $blogs->category->name }}</span>
        </p>
        <div class="row">
          <div class="col-lg-9">
            <section class="border-bottom pb-8">
              <img src="{{ asset('assets/images/post-03.jpg') }}" alt="Post 01" class="mb-8">
                {!! $blogs->description !!}
              <div class="row no-gutters">
                <div class="col-sm-12 d-flex justify-content-sm-end">


                  <label class="text-primary font-weight-bold mr-3 mb-0">Share:</label>
                  <ul class="list-inline d-flex align-items-center mb-0">
                    <li class="list-inline-item mr-4">
                        {!! $shareComponent !!}
                    </li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
          <div class="col-lg-3 mt-11 mt-lg-0 primary-sidebar sidebar-sticky" id="sidebar">
            <div class="primary-sidebar-inner">
              <div class="card border-0 mb-9">
                <div class="card-header bg-transparent border-0 p-0">
                  <h3 class="card-title fs-20 mb-0">
                    Categories
                  </h3>
                </div>
                <div class="card-body px-0 pt-4 pb-0">
                    <ul class="list-unstyled mb-0">
                      @foreach ($allblogs as $allblog)
                        <li class="mb-1">
                          <a href="{{route('blog',['category' => $allblog->id])}}"
                                         class="text-secondary hover-primary border-bottom border-white border-hover-primary d-inline-block lh-12">{{ $allblog->name }}</a>
                        </li>
                      @endforeach
                    </ul>
                  </div>
              </div>
            </div>
          </section>
        </main>
