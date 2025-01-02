<x-user-App>
    <div class="content-consult">
        <div class="container">
            <h2 class="fw-bold text-center text-2xl">CONSULT NOW!</h2>
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
                    @foreach ($users as $user)
                        @if ($user->role == 'consultant')
                            <div class="rounded-lg sbc-size">
                                <img src="../storage/profile/{{ $user->profile_path }}" alt="Profile"
                                    class="sbc-img mx-auto rounded-full object-cover" />
                                <div class="sbc-details">
                                    <h2 class="sbc-title">{{ $user->name }}</h2>
                                    <p class="sbc-detail text-gray-600">{{ $user->address }}</p>
                                </div>
                                <a href="detailofconsultant={{ $user->id }}">
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
</x-user-App>
