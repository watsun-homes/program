<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/2.0.6/velocity.min.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
    <script src="practice.js"></script>
</head>

<body>

    <header>

        <div class="header-box">

            <div class="site-title">
                <a href="">WATSUN</a>
            </div>

            <div class="menu_btn">
            </div>

            <nav>
                <ul id="main_menu">
                    <li class="main_list">
                        <a href="">ページ１</a>
                        <ul id="sub_menu">
                            <li><a href="">サブページ１</a></li>
                            <li><a href="">サブページ２</a></li>
                            <li><a href="">サブページ３</a></li>
                        </ul>
                    </li>
                    <li class="main_list">
                        <a href="">ページ２</a>
                        <ul id="sub_menu">
                            <li><a href="">サブページ１</a></li>
                            <li><a href="">サブページ２</a></li>
                        </ul>
                    </li>
                    <li class="main_list">
                        <a href="">ページ３</a>
                        <ul id="sub_menu">
                            <li><a href="">サブページ１</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>

    </header>

    <div class="popup" id="popup">
        <div class="popup_inner">
            <div class="close_btn" id="close_btn"><i class="fas fa-times"></i></div>
            <p>テキスト</p>
        </div>
        <div class="bg" id="bg"></div>
    </div>

    <!-- <div class="popup" id="js-popup">
        <div class="popup-inner">
            <div class="close-btn" id="js-close-btn"><i class="fas fa-times"></i></div>
            <p>表示部分</p>
        </div>
        <div class="black-background" id="js-black-bg"></div>
    </div> -->


    <main id="main">

        <div id="animation">
            <span class="outline end-right">
                END
            </span>
            <span class="outline end-left">
                FRONT
            </span>
            <span class="glow">
                WATSUN
            </span>
        </div>

        <div id="letter">
            <h1>
                <span class="title">This is</span>
                <span class="title">a long</span>
                <span class="title">long title</span>
            </h1>
            <div class="button">restart</div>
        </div>

        <section class="section01">
            <div class="top-text fade-in up fit-content">
                <h1>JSでできることを詰め込んだ<br class="sp">ページとなっております</h1>
            </div>
            <div class="top-subtext fit-content">
                <h2 class="fade-in up">フェードイン （jqueryで設置）</h2>
                <ul>
                    <li class="fade-in left">デザインは気にせずJS機能を詰め込んでます。</li>
                    <li class="fade-in right">SEOにはカウントしていないページです。</li>
                    <li class="fade-in left">Jqueryも使用しています。</li>
                    <li class="fade-in right">Vue.jsも使用しています。</li>
                </ul>
            </div>
        </section>

        <section class="section02">
            <h2>タブ（jqueryで設置）</h2>
            <div class="container">
                <ul class="tab-list">
                    <li class="tab-item active">タブ１</li>
                    <li class="tab-item">タブ２</li>
                    <li class="tab-item">タブ３</li>
                </ul>
                <div class="tab-container">
                    <div class="tab-content active">タイトル１</div>
                    <div class="tab-content">タイトル２</div>
                    <div class="tab-content">タイトル３</div>
                </div>
            </div>
        </section>

        <section class="section03">
            <h2>グラフ（jqueryで設置）</h2>
            <div class="graph_box">
                <div id="mychart" class="graph"></div>
                <div id="mychart_2" class="graph"></div>
            </div>
        </section>

        <section class="section04">
            <h2>スライダー（jqueryで設置）</h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="js-modal-open" href="">
                            <img src="" alt="WATSUNBLOG">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="js-modal-open" href="">
                            <img src="" alt="WATSUNBLOG">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="js-modal-open" href="">
                            <img src="" alt="WATSUNBLOG">
                        </a>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="section05">
            <form action="#" name="form1">
                <h2>計算</h2>
                <table>
                    <tr>
                        <th>商品名</th>
                        <th>単価</th>
                        <th>数量</th>
                        <th>金額</th>
                    </tr>

                    <tr>
                        <td>商品サンプル1</td>
                        <td align="right">500円</td>
                        <td>
                            <select name="goods1" onChange="keisan()">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </td>
                        <td><input type="text" name="field1" size="8" value="0"> 円</td>
                    </tr>

                    <tr>
                        <td>商品サンプル2</td>
                        <td align="right">1,000円</td>
                        <td>
                            <select name="goods2" onChange="keisan()">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </td>
                        <td><input type="text" name="field2" size="8" value="0"> 円</td>
                    </tr>

                    <tr>
                        <td align="right" colspan="3"><strong>合計</strong></td>
                        <td><input type="text" name="field_total" size="8" value="0"> 円</td>
                    </tr>

                </table>

            </form>

            <div class="clock">
                <h2>時計（現在時刻）</h2>
                <div class="edge-clock">
                    <span class="clock-hour"></span>
                    <span class="clock-min"></span>
                    <span class="clock-sec"></span>
                    <span class="clock-12">12</span>
                    <span class="clock-3">3</span>
                    <span class="clock-6">6</span>
                    <span class="clock-9">9</span>
                </div>
            </div>
        </section>

        <section class="section07">
            <h2>プルダウン</h2>
            <div id="pulldown">
                <div class="pull_box">
                    <div class="pull_tit">タイトルタイトルタイトル</div>
                    <div class="pull_txt">
                        テキストテキストテキストテキストテキストテキスト<br>
                        テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                        テキストテキストテキストテキストテキストテキストテキストテキス
                    </div>
                </div>
                <div class="pull_box">
                    <div class="pull_tit">タイトルタイトルタイトル</div>
                    <div class="pull_txt">
                        テキストテキストテキストテキストテキストテキスト<br>
                        テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                        テキストテキストテキストテキストテキストテキストテキストテキス
                    </div>
                </div>
                <div class="pull_box">
                    <div class="pull_tit">タイトルタイトルタイトル</div>
                    <div class="pull_txt">
                        テキストテキストテキストテキストテキストテキスト<br>
                        テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                        テキストテキストテキストテキストテキストテキストテキストテキス
                    </div>
                </div>
            </div>
        </section>

        <section class="section08">

            <h2>Ajax通信（jqueryで設置）</h2>
            <div class="ajax_box">
                <div class="henkou">ボタンを押すとテキストが変更</div>
                <input type="button" class="sample_btn" value="テキスト変更">
            </div>

            <div class="ajax_box">
                <div class="hantei">3の倍数かどうか判定</div>
                <input type="number" value="10" class="input_number" placeholder="数値を入力してください">
                <input type="button" class="hantei_btn" value="ajax通信で取得する">
            </div>

            <div class="ajax_box">
                <select name="gender">
                    <option value="man">男の子</option>
                    <option value="woman">女の子</option>
                </select>
                <select name="type">
                    <option value="human">人間</option>
                    <option value="robot">ロボット</option>
                </select>
                <div class="sikibetu">該当する人物を表示します</div>
                <input type="button" class="sikibetu_btn" value="選択したらクリック">
            </div>

        </section>

        <section class="section09">
            <h2></h2>
            <div class="okikae">
                <div id="oya">
                    <div id="kodomo">
                        <p>置き換え前</p>
                    </div>
                </div>
            </div>
        </section>


        <ul id="feedList"></ul>

        <div id="player"></div>

        <div id="object"></div>

    </main>

    <footer>

        <div class="footer-bottom">
            <div class="copyright">
                <p>Copyright © All Rights Reserved.</p>
            </div>
        </div>

    </footer>

</body>

</html>