<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LegalHelp</title>
    <link rel="icon" href="../img/ico/legalhelplogo.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../consultant/workspace.css" />
    <link rel="stylesheet" href="../consultant/forum.css" />
    <link rel="stylesheet" href="../consultant/profile.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body style="background-color: #e3e0cd">
    <div class="navbar fixed top-0 left-0 w-full flex justify-start items-center bg-[#1b5c60] text-white p-2 z-[9997]">
        <div class="menu-icon text-2xl cursor-pointer px-1" onclick="toggleMenu()">&#9776;</div>
        <img src="../img/ico/legalhelp.png" alt="Asu" style="max-height: 50px" class="px-1">
        <div class="ml-auto">
            <ul class="navbar-nav ms-auto list-group-horizontal navbar-dark">
                <li class="nav-item px-3 ">
                    <a class="nav-link {{ Route::is('consultant.workspace.view') ? 'active' : '' }}"
                        href="{{ route('consultant.workspace.view') }}">Workspace</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link {{ Route::is('consultant.forum.view') ? 'active' : '' }}"
                        href="{{ route('consultant.forum.view') }}">Forum</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-[9998]" onclick="toggleMenu()"></div>

    <!-- Side Menu -->
    <div id="sideMenu"
        class="fixed top-0 left-[-100%] w-64 h-full bg-[#1b5c60] text-white transition-all duration-300 transform z-[9999] p-4">
        <div class="profile-section flex flex-col items-center text-center border-b border-gray-700 pb-4 mb-4">
            <img src="../storage/profile/{{ Auth::user()->profile_path }}" alt="Profile Picture"
                class="w-20 h-20 rounded-full border-2 border-gray-700 mb-2">
            @if (Auth::check())
                <h2 class="mb-1">{{ Auth::user()->name }}</h2>
            @endif
            <p class="text-sm font-bold text-green-500">$ -</p>
            <form action="{{ route('logout') }}">
                <button class="btn btn-danger btn-sm mt-1">Logout</button>
            </form>
        </div>
        <nav class="mt-4">
            <a href=" {{ route('consultant.profile.view') }}"
                class="block py-2 px-4 hover:bg-gray-700 rounded">Profile</a>
            <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Dark Mode</a>
        </nav>
    </div>

    {{ $slot }}

    <footer class=" text-white relative w-100">
        <div class="bg-[#1b5c60] p-4 text-center">
            <p class="">&copy; 2024 Anak Kebanyakan Alpa. All rights reserved.</p>
        </div>
    </footer>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
