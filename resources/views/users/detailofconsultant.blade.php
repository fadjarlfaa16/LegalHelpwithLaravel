<x-user-App>
    <div class="content-detailofconsultant">
        <div class=" overflow-hidden max-w-4xl w-full flex flex-col md:flex-row">
            <!-- Profile Image -->
            <div class="flex items-center justify-center md:w-1/3 h-64 md:h-auto">
                <div class="rounded-full w-40 h-40 md:w-48 md:h-48 flex items-center justify-center"
                    style="background-image: url('../storage/profile/{{ $reserve->profile_path }}'); background-size:cover">
                </div>
            </div>

            <!-- Profile Details -->
            <div class="flex-1 p-6 md:p-8">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800">{{ $reserve->name }}</h1>
                <p class="text-sm md:text-base text-gray-600 mt-1">{{ $reserve->email }} - Based in
                    {{ $reserve->address }}</p>

                <div class="mt-4">
                    <p class="text-lg md:text-3xl text-red-500 font-semibold">${{ $reserve->price }}<span
                            class="text-sm">/days</span></p>
                </div>
                <form action="{{ route('user.consultant.reserve', $reserve->id) }}" method="POST">
                    @csrf
                    <div class="mt-6">
                        <label for="schedule" class="block text-sm font-medium text-gray-700">Choose the
                            schedule:</label>
                        <div class="relative mt-2">
                            <input type="date" id="reserved_time" name="reserved_time"
                                class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="mm / dd / yyyy" required />
                        </div>
                    </div>

                    <button type="submit"
                        class="mt-6 w-full bg-emerald-600 text-white font-semibold py-2 px-4 rounded-md shadow-md hover:bg-emerald-700 focus:ring-2 focus:ring-emerald-500 focus:ring-opacity-50 transition-all">
                        Make a Schedule!
                    </button>
                </form>
            </div>
        </div>
        <div class="desc-consultant mt-3">
            <h2 class="text-[20px] mb-2">From consultant:</h2>
            @if ($reserve->bio == null)
                <p>This consultant doesnt have any messages</p>
            @else
                <p>{{ $reserve->bio }}</p>
            @endif
        </div>

    </div>
    </div>
    <script>
        const today = new Date();
        const formattedToday = today.toISOString().split('T')[0];

        document.getElementById('schedule').setAttribute('min', formattedToday);
    </script>
</x-user-App>
