<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LegalHelp</title>
    <link rel="stylesheet" href="indexstyle.css" />
    <link rel="stylesheet" href="register.css" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    {{-- <script src="index.js"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>

    <div class="container">
        <div class="content">
            <div class="slogan">
                Protect your life from <span id="element"></span>
            </div>
            <a href="../register" class="start" id="start">Get Started →</a>
        </div>

        @if (trim($slot ?? '') !== '')
            {{ $slot }}
        @endif



        <script src="https://cdn.tailwindcss.com"></script>
        <script src="typed.js/dist/typed.umd.js"></script>
        <script src="jquery.js"></script>
        <script>
            var typed = new Typed("#element", {
                strings: ["legals violation", "jail"],
                typeSpeed: 50,
                backSpeed: 50,
                loop: true,
                loopCount: Infinity,
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>
