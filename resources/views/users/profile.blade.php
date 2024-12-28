<x-user-App>
    <div class="content-profile">
        <div class="max-w-3xl mx-auto py-8 px-4">
            <div class="text-center">
                <div class="relative">
                    <img src="@if (Auth::user()->profile_path == null) https://via.placeholder.com/200
            @else
                ../storage/profile/{{ Auth::user()->profile_path }} @endif"
                        alt="Profile Picture"
                        class="w-32 h-32 mx-auto rounded-full border-4 border-blue-500 object-cover">
                    <form class="mt-8 space-y-5" action="{{ route('consultant.profile.update') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label for="profile_path"
                            class="mt-2 ml-[1%] bg-blue-500 text-white px-3 py-1 text-s rounded-full cursor-pointer hover:bg-blue-600">
                            Select Photo
                        </label>
                        <input type="file" name="profile_path" id="profile_path" class="hidden">
                </div>
                <h2 class="text-2xl font-semibold mt-4">{{ Auth::user()->name }}</h2>
                <p class="text-gray-500">{{ Auth::user()->email }}</p>
            </div>

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Fullname</label>
                <input type="text" id="name" name="name"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-lg py-2 px-3"
                    value="{{ Auth::user()->name }}">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="email" name="email"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-lg py-2 px-3"
                    value="{{ Auth::user()->email }}">
            </div>

            <div>
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <input id="address" name="address"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-lg py-2 px-3"
                    rows="3" value="{{ Auth::user()->address }}">
            </div>

            <div>
                <label for="mobile_number" class="block text-sm font-medium text-gray-700">Mobile Number</label>
                <input type="text" id="mobile_number" name="mobile_number"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-lg py-2 px-3"
                    value="{{ Auth::user()->mobile_number }}">
            </div>

            <div>
                <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
                <input type="text" id="bio" name="bio"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-lg py-2 px-3"
                    value="{{ Auth::user()->bio }}">
            </div>


            <button type="submit"
                class=" w-full py-3 px-4 bg-blue-500 text-white font-medium rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Save Changes
            </button>
            </form>
        </div>
    </div>
    </div>


</x-user-App>
