  <x-user-App>
      <!-- Carousel  -->
      <div class="content-home">
        <div
          id="carouselExampleCaptions"
          class="carousel slide z-10"
          style="margin-top: 60px"
          data-bs-ride="carousel"
        >
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="3"
              aria-label="Slide 4"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
              <a href="#">
                <div class="imgcarouselplaceholder" style="background-image:url('../img/background1.webp')">
                </div>
              </a>
              <div class="carousel-caption text-start" id="caption-on-carousel">
                <h2>Headline #1</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                  enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <a href="#">
                <div class="imgcarouselplaceholder" style="background-image:url('../img/background1.webp')">
                </div>
              </a>
              <div
                class="carousel-caption d-md-block text-start mb-1"
                id="caption-on-carousel"
              >
                <h2>Headline #2</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                  enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <a href="#">
                <div class="imgcarouselplaceholder" style="background-image:url('../img/background1.webp')">
                </div>
              </a>
              <div
                class="carousel-caption d-md-block text-start mb-1"
                id="caption-on-carousel"
              >
                <h2>Headline #3</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                  enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <a href="#">
                <div class="imgcarouselplaceholder" style="background-image:url('../img/background1.webp')">
                </div>
              </a>
              <div
                class="carousel-caption d-md-block text-start"
                id="caption-on-carousel"
              >
                <h2>Headline #4</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                  enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
  
        <!-- Top Konsultan -->
        <div class="below-carousel">
          <div class="text-center">
            <h2 style="margin-top: 1.5rem; font-size: 150%; font-weight:600;">Weekly Top Legal Consultant</h2>
            <div class="container" style="margin: 2.3rem 2rem 2rem 0">
              <div class="row justify-content-center">
                <div class="col-4 text-center">
                  <h2 class="text-start">#2</h2>
                  <div class="isiKonsul">
                    <img
                      src="../img/FH.jpeg"
                      alt="Fadhil-Hasibuan"
                      class="img-thumbnail rounded-circle second"
                    />
                    <h3>Fadhil Hasibuan</h3>
                    <p class="text-body-secondary">
                      Experienced 30+ years lawyer | Graduated from Harvard Law
                      School | Crazy Rich Indramayu | 21 years old
                    </p>
                    <button type="button" class="btn btn-outline-success bg">
                      Consult Now!
                    </button>
                  </div>
                </div>
                <div class="col-4 text-center">
                  <h2 class="text-start">#1</h2>
                  <div class="isiKonsul">
                    <img
                      src="../img/ZPH.jpeg"
                      alt="Zaqie-Paris-Hutapea"
                      class="img-thumbnail rounded-circle first"
                      style="width: 100%; transform: translateX(-1%)"
                    />
                    <h3>Zaqie Paris Hutapea</h3>
                    <p class="text-body-secondary">
                      Experienced 30+ years lawyer | Graduated from Harvard Law
                      School | Crazy Rich Indramayu | 21 years old
                    </p>
                    <button type="button" class="btn btn-outline-success">
                      Consult Now!
                    </button>
                  </div>
                </div>
                <div class="col-4 text-center">
                  <h2 class="text-start">#3</h2>
                  <div class="isiKonsul">
                    <img
                      src="../img/rayntampan.jpg"
                      alt="Rayn-Nasution"
                      class="img-thumbnail rounded-circle"
                    />
                    <h3>Rayn Simanjuntak</h3>
                    <p class="text-body-secondary">
                      Experienced 30+ years lawyer | Graduated from Harvard Law
                      School | Crazy Rich Indramayu | 21 years old
                    </p>
                    <button type="button" class="btn btn-outline-success">
                      Consult Now!
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center" style="margin-top: 3rem">
              <a
                href="users/consult"
                class="custom-link fw-semibold fs-5"
                style="text-decoration: none"
                >Discover More ➜</a
              >
            </div>
          </div>
  
          <!-- Trending Topics -->
          <div class="container mt-5">
            <h2 class="fw-bold text-center mb-4">#TRENDINGTOPICS</h2>
            <div class="people-post">
              <div class="post-card">
                <div class="d-flex align-items-center">
                  <div
                    class="profile-picture"
                    style="width: 50px; height: 50px; overflow: hidden"
                  >
                    <img
                      src="../img/c_NiG8Kz_400x400.jpg"
                      alt="Gambar Contoh"
                      style="width: 100%; height: auto"
                    />
                  </div>
                  <div class="px-2">
                    <div class="username">Zaqie si Orang Dua</div>
                    <div class="time-posted">Posted 5h ago</div>
                  </div>
                </div>
                <div class="post-content mt-2">
                  Pelanggaran kah jika aku hanya ingin mengambil 2 nasi?
                </div>
                <div class="likes-comments mt-2">
                  1004 likes &nbsp;&nbsp;&nbsp; 30 Comments &nbsp;&nbsp;&nbsp;&nbsp;
                  4 Share
                </div>
              </div>
    
              <div class="post-card">
                <div class="d-flex align-items-center">
                  <div
                    class="profile-picture"
                    style="width: 50px; height: 50px; overflow: hidden"
                  >
                    <img
                      src="../img/download-5-5a5b0cdc20a643bc77487b9d1b4b8387.jpeg"
                      alt="Gambar Contoh"
                      style="width: 100%; height: auto"
                    />
                  </div>
                  <div class="ml-3 px-2">
                    <div class="username">Rian Manis Menggoda</div>
                    <div class="time-posted">Posted 13h ago</div>
                  </div>
                </div>
                <div class="post-content mt-3">
                  Jika Pasal 28 Ayat 2 UUD adalah pembatasan terhadap seluruh Hak
                  Asasi Manusia, maka pasal itu percuma karena tak dapat membatasi
                  cinta kita.
                </div>
                <div class="likes-comments mt-2">
                  900 likes &nbsp;&nbsp;&nbsp;&nbsp; 21 Comments
                  &nbsp;&nbsp;&nbsp;&nbsp; 1 Share
                </div>
                
              </div>
    
              <div class="post-card">
                <div class="d-flex align-items-center">
                  <div
                    class="profile-picture"
                    style="width: 50px; height: 50px; overflow: hidden"
                  >
                    <img
                      src="../img/fizi.jpeg"
                      alt="Gambar Contoh"
                      style="width: 100%; height: auto"
                    />
                  </div>
                  <div class="ml-3 px-2">
                    <div class="username">Raka Ganteng Kalem</div>
                    <div class="time-posted">Posted 18h ago</div>
                  </div>
                </div>
                <div class="post-content mt-3">
                  Aku Membuat orang jatuh cinta apakah itu merupakan suatu
                  pelanggaran hukum?
                </div>
                <div class="likes-comments mt-2">
                  970 likes &nbsp;&nbsp;&nbsp;&nbsp; 25 Comments
                  &nbsp;&nbsp;&nbsp;&nbsp; 2 Share
                </div>
                
              </div>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
  </x-user-App>
