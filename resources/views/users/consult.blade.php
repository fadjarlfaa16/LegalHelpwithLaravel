<x-user-App>
  <div class="content-consult">
    <div class="container">
      <h2 class="text-center mb-4" style="font-size: 25px">
        Find out your necessary consultant.
      </h2>
      <div class="flex items-center justify-center">
        <div class="w-full px-4">
          <div class="flex items-center bg-white rounded-full shadow-md p-2">
            <input
              type="text"
              placeholder="Search..."
              class="flex-grow px-4 text-gray-700 rounded-l-full focus:outline-none"
            />
            <button
              onclick="openModal()"
              class="px-4 py-2 bg-white-0 text-neutral-950 rounded-full hover:bg-teal-600 hover:text-white transition ease-in-out focus:outline-none"
            >
              Search
            </button>
          </div>
        </div>
      </div>
      <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
          <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
              <img
                src="../img/oppa.webp"
                alt="Profile"
                class="w-24 h-24 mx-auto rounded-full object-cover"
              />
              <h2 class="mt-4 font-semibold text-lg">Anthares Zaqi Derya Muhammad</h2>
              <p class="text-gray-600">Experienced 30+ years lawyer | Graduated from Harvard Law School | Crazy Rich Indramayu | 21 years old</p>
              <a href="detailofconsultant">
                <button
                class="mt-4 px-4 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700 transition ease-in-out"
                
              >
                Consult Now!
              </button>
              </a>
              
            </div>
          

          <!-- Card 2 -->
          <div class="bg-white rounded-lg shadow-md p-6 text-center">
            <img
              src="../img/el gasing.png"
              alt="Profile"
              class="w-24 h-24 mx-auto rounded-full object-cover"
            />
            <h2 class="mt-4 font-semibold text-lg">
              Muhammad Rahman Aulia Anthares
            </h2>
            <p class="text-gray-600">Experienced 30+ years lawyer | Graduated from Harvard Law School | Crazy Rich Indramayu | 21 years old</p>
            <button
              class="mt-4 px-4 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700 transition ease-in-out"
            >
              Consult Now!
            </button>
          </div>

          <!-- Card 3 -->
          <div class="bg-white rounded-lg shadow-md p-6 text-center">
            <img
              src="../img/ucup.jpeg"
              alt="Profile"
              class="w-24 h-24 mx-auto rounded-full object-cover"
            />
            <h2 class="mt-4 font-semibold text-lg">
              Muhammad Derya Aulia Satria Wibowo
            </h2>
            <p class="text-gray-600">Experienced 30+ years lawyer | Graduated from Harvard Law School | Crazy Rich Indramayu | 21 years old</p>
            <button
              class="mt-4 px-4 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700 transition ease-in-out"
            >
              Consult Now!
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div
    id="popupModal"
    class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden justify-center items-center"
  >
    <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/2 p-6">
      <div class="flex justify-between items-center">
        <h3 class="text-xl font-bold">Consultant Details</h3>
        <button
          class="text-gray-500 hover:text-gray-700"
          onclick="closeModal()"
        >
          &times;
        </button>
      </div>
      <div class="mt-4">
        <img
              src="../img/ucup.jpeg"
              alt="Profile"
              class="rounded-full object-cover"
            />
      </div>
      <div class="mt-6 flex justify-end">
        <button
          class="px-4 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700 transition ease-in-out"
          onclick="closeModal()"
        >
          Close
        </button>
      </div>
    </div>
  </div>
  <script>
    function openModal() {
      document.getElementById("popupModal").classList.remove("hidden");
      document.getElementById("popupModal").classList.add("flex");
    }
    function closeModal() {
      document.getElementById("popupModal").classList.add("hidden");
      document.getElementById("popupModal").classList.remove("flex");
    }
  </script>
  
</x-user-App>
