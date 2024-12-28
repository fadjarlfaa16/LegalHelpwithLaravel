<x-user-App>
    <div class="content-consult">
        <div class="container">
            <h2 class="text-center mb-4" style="font-size: 25px">
                Find out your necessary consultant.
            </h2>
            <div class="flex items-center justify-center">
                <div class="w-full px-4">
                    <div class="flex items-center bg-white rounded-full shadow-md p-2">
                        <input type="text" placeholder="Search..."
                            class="flex-grow px-4 text-gray-700 rounded-l-full focus:outline-none" />
                        <button
                            class="px-4 py-2 bg-white-0 text-neutral-950 rounded-full hover:bg-teal-600 hover:text-white transition ease-in-out focus:outline-none">
                            Search
                        </button>
                    </div>
                </div>
            </div>
            <div class="container mx-auto p-4">
                <div class="same-based-consultant-grid">
                    @foreach ($users as $i)
                        @if ($i->role == 'consultant')
                            <div class="rounded-lg text-center sbc-size">
                                <img src="../storage/profile/{{ $i->profile_path }}" alt="Profile"
                                    class="sbc-img mx-auto rounded-full object-cover" />
                                <div class="sbc-details">
                                    <h2 class="sbc-title">{{ $i->name }}</h2>
                                    <p class="sbc-detail text-gray-600">{{ $i->bio }}</p>
                                </div>
                                <a href="detailofconsultant={{ $i->id }}">
                                    <button class="bg-teal-600 text-white hover:bg-teal-700 transition ease-in-out">
                                        Consult Now!
                                    </button>
                                </a>

                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div id="popupModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/2 p-6">
            <div class="flex justify-between items-center">
                <h3 class="text-xl font-bold">Consultant Details</h3>
                <button class="text-gray-500 hover:text-gray-700" onclick="closeModal()">
                    &times;
                </button>
            </div>
            <div class="mt-4">
                <img src="../img/ucup.jpeg" alt="Profile" class="rounded-full object-cover" />
            </div>
            <div class="mt-6 flex justify-end">
                <button class="px-4 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700 transition ease-in-out"
                    onclick="closeModal()">
                    Close
                </button>
            </div>
        </div>
    </div>
</x-user-App>
