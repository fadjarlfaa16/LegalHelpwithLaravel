<x-user-App>
    <div class="content-detailofconsultant">
        {{-- <div class="reservation">
            <div class="picture">
                <div class="detail-of-consultant-profile">

                </div>
            </div>
            <div class="schedule">
                <h1>{{ $reserve->name }}</h1>
                <div class="detailsofpersonal">
                    <div class="based-in">
                        <p>Based in Jakarta</p>
                    </div>
                    <div class="case-solved">
                        <p>10K+ Case Solved</p>
                    </div>
                    <div class="graduated">

                    </div>
                </div>
                <div class="price">
                    <h2>$25.99/days</h2>
                </div>
                <div class="date">

                    <form action="{{ route('user.consultant.reserve', $reserve->id) }}" method="POST">
                        @csrf
                        <label for="reserved_time" id="reserved_time">Choose the schedule: </label>
                        <input type="date" name="reserved_time" id="reserved_time" required><br>
                        <button type="submit" class="btn btn-primary">Make a Schedule!</button>
                    </form>
                </div>

            </div>
        </div>
        <div class="other-consultant">
            <h2 class="text-xl ">From Consultant: </h2>

        </div> --}}
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

                <div class="mt-6">
                    <label for="schedule" class="block text-sm font-medium text-gray-700">Choose the schedule:</label>
                    <div class="relative mt-2">
                        <input type="date" id="schedule"
                            class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                            placeholder="mm / dd / yyyy" />
                    </div>
                </div>

                <button
                    class="mt-6 w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md shadow-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition-all">
                    Make a Schedule!
                </button>
            </div>
        </div>

    </div>
    </div>
    <script>
        const today = new Date();
        const formattedToday = today.toISOString().split('T')[0];

        document.getElementById('schedule').setAttribute('min', formattedToday);
    </script>
</x-user-App>
