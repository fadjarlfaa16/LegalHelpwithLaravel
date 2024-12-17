<x-user-App>

  <div class="content-forum">
    <div class="container">
      <h2 style="font-size: 25px">Sharing your experience with our Forum!</h2>
      {{-- <div class="keywords">
        <p>
          <b>On Trending:</b><br />
          <a
            href="https://nasional.kompas.com/read/2024/04/26/14004051/hasto-ungkap-jokowi-susun-skenario-3-periode-sejak-menang-pilpres-2019"
            >#Jokowi3Periode</a
          ><br />
          <a
            href="https://www.suara.com/tekno/2024/09/17/113421/gibran-terancam-batal-dilantik-jadi-wapres-jika-terbukti-pemilik-akun-kaskus-fufufafa-publik-alhamdulillah"
            >#fufufafaFaceReveal</a
          ><br />
          <a
            href="https://news.detik.com/berita/d-6155775/ganjar-bicara-saya-pdi-perjuangan-senior-pdip-dalam-hati-siapa-tahu#!"
            >#PDIPDihati</a
          >
        </p>
      </div> --}}

      <!-- Update status -->
      <div class="w-100 bg-white p-4 rounded-lg">
        <div class="flex items-center mb-4">
          <img
            src="../img/FSG.jpeg"
            alt="profile"
            class="rounded-full w-12 h-12 mr-4"
          />
          <input
            type="text"
            id="statusSection"
            placeholder="Whats Happening?"
            class="w-full"
          />
        </div>
        <div class="flex items-center justify-end mt-4">
          <div class="flex space-x-4">
            <button
              class="bg-teal-500 text-white px-4 py-1 rounded-lg hover:bg-teal-600 mb-2"
            >
              Post
            </button>
          </div>
        </div>
        <hr />

        <!-- Postingan Orang -->
        <div class="people-post pt-4">
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
              <div class="ml-3">
                <div class="username">Zaqie si Orang Dua</div>
                <div class="time-posted">Posted 5h ago</div>
              </div>
            </div>
            <div class="post-content mt-2">
              Pelanggaran kah jika aku hanya ingin mengambil 2 nasi?
            </div>
            <div class="likes-comments mt-2">
              1004 likes &nbsp;&nbsp;&nbsp; 30 Comments
              &nbsp;&nbsp;&nbsp;&nbsp; 4 Share
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
              <div class="ml-3">
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
              <div class="ml-3">
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

    
</x-user-App>

