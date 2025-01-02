<x-admin-App>
    <div class="content-dashboard">
        @if (session('success'))
            <x-success-messege>{{ session('success') }}</x-success-messege>
        @endif
        <!-- Main Content -->

        <!-- Stats Section -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <h3 class="text-xl font-semibold text-gray-700">Total Users</h3>
                <p class="text-3xl font-bold text-green-500 mt-2">{{ $userCount }}</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <h3 class="text-xl font-semibold text-gray-700">Forum Activities</h3>
                <p class="text-3xl font-bold text-blue-500 mt-2">{{ $forumCount }}</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <h3 class="text-xl font-semibold text-gray-700">Article Enrolled</h3>
                <p class="text-3xl font-bold text-yellow-500 mt-2">{{ $articleCount }}</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <h3 class="text-xl font-semibold text-gray-700">Total Consultant</h3>
                <p class="text-3xl font-bold text-red-500 mt-2">{{ $consultantCount }}</p>
            </div>
        </div>

        <h2 class="text-2xl font-bold mb-4">Data Users</h2>
        <div class="overflow-x-auto">
            <table class="table-minimalist">
                <thead class="bg-[#1b5c60] text-white">
                    <tr>
                        <th>Profile</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Telephone Number</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $i)
                        @if ($i->role != 'admin')
                            <tr>
                                <td><img src="../storage/profile/{{ $i->profile_path }}" alt="No Profile"
                                        class="pic">
                                </td>
                                <td>{{ $i->name }}</td>
                                <td>{{ $i->email }}</td>
                                @if ($i->mobile_number != null)
                                    <td>{{ $i->mobile_number }}</td>
                                @else
                                    <td>unset</td>
                                @endif
                                @if ($i->address != null)
                                    <td>{{ $i->address }}</td>
                                @else
                                    <td>unset</td>
                                @endif
                                <td>{{ $i->role }}</td>
                                <td>
                                    <form action="{{ route('admin.dashboard.deleteuser', $i->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete User</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>


</x-admin-App>
