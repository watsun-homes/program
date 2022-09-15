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
        $(function() {
            if (document.cookie.indexOf('visited=yes') === -1) {
                document.cookie = 'visited=yes; max-age=10';
                //path=/newsと書くと「/news」というURLのみCookieを追加できる。サイト内全体でチェックしたい場合はpath=/としておく。
                console.log('初回のアクセスです');

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

            } else {
                console.log('2回目以降のアクセスです');
                document.cookie = 'visited=; path=/';
            }
        });

    </script>
    <script language="JavaScript">

        function setCount(n) {
            theDay = 30;//クッキーの保存日時
            setDay = new Date();//今日の日時
            setDay.setTime(setDay.getTime() + (theDay * 1000 * 60 * 60 * 24));//クッキーの有効期限作成
            expDay = setDay.toGMTString();//日付を文字列へ変換
            document.cookie = "count=" + n + ";expires=" + expDay;
            //クッキーの設定。有効期限は訪問後３０日間
        }


        function getCount() {
            theName = "count=";
            theCookie = document.cookie + ";"//保存されているクッキーを取得
            start = theCookie.indexOf(theName);//取得したクッキーにcount=があるか
            if (start != -1) {
                end = theCookie.indexOf(";", start);//
                count = eval(unescape(theCookie.substring(start + theName.length, end)));
                //保存されているクッキーからcountの値を取得
                document.write(count + "回目のアクセスです");
                setCount(count + 1);//表示したら次の値を+1して保存
            } else {
                document.write("初めてのアクセスですね");
                setCount(2);
            }
        }
        getCount();
    </script>
</body>

</html>
