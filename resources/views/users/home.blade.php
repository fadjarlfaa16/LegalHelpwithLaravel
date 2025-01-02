  <x-user-App>
      <!-- Carousel  -->
      <div class="content-home">
          <div id="carouselExampleCaptions" class="carousel slide z-10" style="margin-top: 60px" data-bs-ride="carousel">
              <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                      aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                      aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                      aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                      aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="2000">
                      <a href="#">
                          <div class="imgcarouselplaceholder" {{-- style="background-image:url('../storage/article_images/{{ $toparticle1->article->picture_path }}')" --}}>
                          </div>
                      </a>
                      <div class="carousel-caption text-start" id="caption-on-carousel">
                          {{-- <h2>{{ $toparticle1->article->headline }}</h2> --}}
                          <p>
                              {{-- {{ $toparticle1->article->content }} --}}
                          </p>
                      </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                      <a href="#">
                          <div class="imgcarouselplaceholder" {{-- style="background-image:url('../storage/article_images/{{ $toparticle2->article->picture_path }}')" --}}>
                          </div>
                      </a>
                      <div class="carousel-caption text-start" id="caption-on-carousel">
                          {{-- <h2>{{ $toparticle2->article->headline }}</h2> --}}
                          <p>
                              {{-- {{ $toparticle2->article->content }} --}}
                          </p>
                      </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                      <a href="#">
                          <div class="imgcarouselplaceholder" {{-- style="background-image:url('../storage/article_images/{{ $toparticle3->article->picture_path }}')" --}}>
                          </div>
                      </a>
                      <div class="carousel-caption text-start" id="caption-on-carousel">
                          {{-- <h2>{{ $toparticle3->article->headline }}</h2> --}}
                          <p>
                              {{-- {{ $toparticle3->article->content }} --}}
                          </p>
                      </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                      <a href="#">
                          <div class="imgcarouselplaceholder" {{-- style="background-image:url('../storage/article_images/{{ $toparticle4->article->picture_path }}')" --}}>
                          </div>
                      </a>
                      <div class="carousel-caption text-start" id="caption-on-carousel">
                          {{-- <h2>{{ $toparticle4->article->headline }}</h2> --}}
                          <p>
                              {{-- {{ $toparticle4->article->content }} --}}
                          </p>
                      </div>
                  </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
          </div>

          <!-- Top Konsultan -->
          <div class="below-carousel">
              <div class="text-center">
                  <h2 class="fw-bold text-center mt-4 text-xl">OUR BEST CONSULTANT</h2>
                  <div class="container" style="margin: 2.3rem 2rem 2rem 0">
                      <div class="row justify-content-center">
                          <div class="col-4 text-center">
                              <h2 class="text-start">#2</h2>
                              <div class="isiKonsul">
                                  {{-- <img src="../storage/profile/{{ $topConsultant2->user->profile_path }}"
                                      alt="Fadhil-Hasibuan" class="img-thumbnail rounded-circle second" /> --}}
                                  {{-- <h3>{{ $topConsultant2->user->name }}</h3> --}}
                                  <p class="text-body-secondary">
                                      {{-- {{ $topConsultant2->user->bio }} --}}
                                  </p>
                              </div>
                          </div>
                          <div class="col-4 text-center">
                              <h2 class="text-start">#1</h2>
                              <div class="isiKonsul">
                                  {{-- <img src="../storage/profile/{{ $topConsultant1->user->profile_path }}"
                                      alt="Rayn-Nasution" class="img-thumbnail rounded-circle" /> --}}
                                  {{-- <h3>{{ $topConsultant1->user->name }}</h3> --}}
                                  <p class="text-body-secondary">
                                      {{-- {{ $topConsultant1->user->bio }} --}}
                                  </p>

                              </div>
                          </div>
                          <div class="col-4 text-center">
                              <h2 class="text-start">#3</h2>
                              <div class="isiKonsul">
                                  {{-- <img src="../storage/profile/{{ $topConsultant3->user->profile_path }}"
                                      alt="Rayn-Nasution" class="img-thumbnail rounded-circle" /> --}}
                                  {{-- <h3>{{ $topConsultant3->user->name }}</h3> --}}
                                  <p class="text-body-secondary">
                                      {{-- {{ $topConsultant3->user->bio }} --}}
                                  </p>

                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="text-center" style="margin-top: 3rem">
                      <a href="users/consult" class="custom-link fw-semibold fs-5"
                          style="text-decoration: none">Discover More ➜</a>
                  </div>
              </div>

              <!-- Trending Topics -->
              <div class="container mt-5">
                  <h2 class="fw-bold text-center mb-4">LATEST PEOPLE POST</h2>
                  <div class="threads">
                      @forelse ($forum as $i)
                          <div class="thread">
                              {{-- <img src="../storage/profile/{{ $i->profile }}" alt="{{ $i->username }} Profile"> --}}
                              <div class="thread-content">
                                  {{-- <div class="thread-title">{{ $i->username }}</div>
                                  <div class="thread-text">{{ $i->content }}</div>
                                  <div class="thread-time">{{ $i->created_at }}</div> --}}
                              </div>
                          </div>
                      @empty
                          <p class="text-center mb-10">No data Found!</p>
                      @endforelse
                  </div>
              </div>
          </div>
      </div>
      </div>
      </div>
      </div>
  </x-user-App>
