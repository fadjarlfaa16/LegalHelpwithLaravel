<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="../img/ico/legalhelplogo.ico" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <style>
        .admin-content {
            width: 80%;
            margin: auto;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <div class="navbar flex justify-start items-center bg-[#1b5c60] text-white p-4">
        <div class="menu-icon text-2xl cursor-pointer" onclick="toggleMenu()">&#9776;</div>
        <h1 class="text-lg ml-5 font-semibold">Admin Dashboard</h1>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-10" onclick="toggleMenu()"></div>

    <!-- Side Menu -->
    <div id="sideMenu"
        class="fixed top-0 left-[-100%] w-64 h-full bg-[#1b5c60] text-white transition-all duration-300 transform z-20 p-4">
        <div class="profile-section flex flex-col items-center text-center border-b border-gray-700 pb-4 mb-4">
            <img src="https://via.placeholder.com/80" alt="Profile Picture"
                class="w-20 h-20 rounded-full border-2 border-gray-700 mb-2">
            <h2 class="text-lg font-bold">Admin</h2>
            <p class="text-sm text-gray-400">Idle</p>
            <p class="text-sm font-bold text-green-500">$ -</p>
            <form action="{{ route('logout') }}">
                <button type="submit" class="">Logout</button>
            </form>
            {{-- <a href="{{ route('logout') }}">Logout</a> --}}
        </div>
        <nav class="mt-4">
            <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Users</a>
            <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Content</a>
            <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Forum</a>
            <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Legalpedia</a>
        </nav>
    </div>
    <div class="admin-content">
        <!-- Main Content -->
        <div class="container mx-auto mt-10">
            <!-- Stats Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-700">Total Users</h3>
                    <p class="text-3xl font-bold text-green-500 mt-2">1,234</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-700">Revenue</h3>
                    <p class="text-3xl font-bold text-blue-500 mt-2">$12,345</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <h3 class="text-xl font-semibold text-gray-700">Total Consultant</h3>
                    <p class="text-3xl font-bold text-yellow-500 mt-2">345</p>
                </div>
            </div>

            <h2 class="text-2xl font-bold mb-4">Data Users</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead class="bg-[#1b5c60] text-white">
                        <tr>
                            <th class="py-2 px-4 border-b">#</th>
                            <th class="py-2 px-4 border-b">Name</th>
                            <th class="py-2 px-4 border-b">Email</th>
                            <th class="py-2 px-4 border-b">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border-b text-center">1</td>
                            <td class="py-2 px-4 border-b">Fikri si Bujang Lapuk</td>
                            <td class="py-2 px-4 border-b">fikrisiregar@gmail.com</td>
                            <td class="py-2 px-4 border-b">
                                <button></button>
                                <button>Edit</button>
                                <button>Delete</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border-b text-center">2</td>
                            <td class="py-2 px-4 border-b">George si Orang Baik</td>
                            <td class="py-2 px-4 border-b">george@gmail.com</td>
                            <td class="py-2 px-4 border-b">
                                <button></button>
                                <button>Edit</button>
                                <button>Delete</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border-b text-center">3</td>
                            <td class="py-2 px-4 border-b">Rayn si Fast Learner</td>
                            <td class="py-2 px-4 border-b">raynhutapea@gmail.com</td>
                            <td class="py-2 px-4 border-b">
                                <button></button>
                                <button>Edit</button>
                                <button>Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script>
        function toggleMenu() {
            const sideMenu = document.getElementById('sideMenu');
            const overlay = document.getElementById('overlay');
            const isOpen = sideMenu.style.left === '0px';

            if (isOpen) {
                sideMenu.style.left = '-100%';
                overlay.classList.add('hidden');
            } else {
                sideMenu.style.left = '0px';
                overlay.classList.remove('hidden');
            }
        }
    </script>
</body>

</html>
