<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="../img/ico/legalhelplogo.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../admin/dashboard.css">
    <link rel="stylesheet" href="../admin/forum.css">
    <link rel="stylesheet" href="../admin/legalpedia.css">
    <link rel="stylesheet" href="../admin/recommended.css">
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
    <div class="navbar flex justify-start items-center bg-[#1b5c60] text-white p-3">
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
        </div>
        <nav class="mt-4">
            <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Users</a>
            <a href="{{ route('admin.recommended.view') }}"
                class="block py-2 px-4 hover:bg-gray-700 rounded">Recommended</a>
            <a href="{{ route('admin.forum.view') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Forum</a>
            <a href="{{ route('admin.legalpedia.view') }}"
                class="block py-2 px-4 hover:bg-gray-700 rounded">Legalpedia</a>
        </nav>
    </div>
    @if (trim($slot ?? '') !== '')
        {{ $slot }}
    @endif

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
