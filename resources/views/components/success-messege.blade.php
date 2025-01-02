<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Update</title>
    <style>
        .popup-notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 320px;
            background-color: #ffffff;
            color: rgb(45, 170, 72);
            padding: 15px;
            border-radius: 8px;
            box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 10px;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.3s, transform 0.3s;
            z-index: 9999;
        }

        .popup-notification.show {
            opacity: 1;
            transform: translateY(0);
        }

        .popup-notification img {
            width: 24px;
            height: 24px;
        }

        .close-btn {
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            color: rgb(0, 0, 0);
            margin-right: 10px;
        }

        .close-btn:hover {
            color: #f44336;
        }

        .loading-bar {
            position: relative;
            height: 4px;
            width: 90px;
            background-color: rgba(255, 255, 255, 0.4);
            border-radius: 2px;
            margin-top: 3px;
            overflow: hidden;
        }

        .loading-bar::after {
            content: '';
            position: absolute;
            height: 100%;
            width: 100%;
            background-color: rgb(99, 226, 49);
            animation: shrink 3s linear forwards;
        }

        @keyframes shrink {
            from {
                width: 100%;
            }

            to {
                width: 0;
            }
        }
    </style>
</head>

<body>
    <div id="popup" class="popup-notification">
        <span class="close-btn" onclick="closePopup()">×</span>
        <img src="https://cdn-icons-png.flaticon.com/512/845/845646.png" alt="Success Icon">
        <p style="font-size: 11px">{{ $slot }}</p>
        <div class="loading-bar"></div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const popup = document.getElementById('popup');
            if (popup) {
                popup.classList.add('show');
                setTimeout(() => {
                    closePopup();
                }, 3000);
            }
        });

        function closePopup() {
            const popup = document.getElementById('popup');
            if (popup) {
                popup.classList.remove('show');
            }
        }
    </script>
</body>

</html>
