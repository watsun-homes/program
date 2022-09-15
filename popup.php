<!DOCTYPE HTML>
<html>

<head>
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <div class="popup" id="js-popup">
      
        <div class="popup-inner">
            <div class="close-btn" id="js-close-btn"><i class="fas fa-times"></i></div>
            <p>表示部分</p>
        </div>

        <div class="black-background" id="js-black-bg"></div>

    </div>
    <style>
        .popup {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: .6s;
        }

        .popup.is-show {
            opacity: 1;
            visibility: visible;
        }

        .popup-inner {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            max-width: 600px;
            padding: 50px;
            background-color: #000;
            color: #fff;
            z-index: 2;
        }

        .popup-inner img {
            width: 100%;
        }

        .close-btn {
            position: absolute;
            right: 0;
            top: 0;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            cursor: pointer;
        }

        .close-btn i {
            font-size: 20px;
            color: #333;
        }

        .black-background {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, .8);
            z-index: 1;
            cursor: pointer;
        }

    </style>
    <script>
        $(function(){
            var popup = document.getElementById('js-popup');
            if (!popup) return;
            popup.classList.add('is-show');

            var blackBg = document.getElementById('js-black-bg');
            var closeBtn = document.getElementById('js-close-btn');

            closePopup(blackBg);
            closePopup(closeBtn);

            function closePopup(elem) {
                if (!elem) return;
                elem.addEventListener('click', function() {
                    popup.classList.remove('is-show');
                });
            };

        });
    </script>
</body>

</html>
