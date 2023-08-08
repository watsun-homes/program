<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vue.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Arvo:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,100' rel='stylesheet' type='text/css'>
    <script src="https://cdn.jsdelivr.net/npm/swiper@5.3.6/js/swiper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/swiper@5.3.6/css/swiper.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue-awesome-swiper@3.1.2/dist/vue-awesome-swiper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
    <?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>

    <header>

        <div class="header-box">

            <div class="site-title">
                <a href="<?php echo home_url(); ?>">
                    <?php the_custom_logo();
                    if (!has_custom_logo()) { ?><?php bloginfo('name'); ?>
                <?php } ?>
                </a>
            </div>

            <div id="ham_menu" :class="{scroll:fix}">

                <div id="menu_btn" v-on:click="openMenu"></div>

                <open-box v-on:via="closeModal" :class="{'add':open}">
                    <nav id="nav">
                        <ul id="main_menu">
                            <li v-for="item in items">
                                <a :href="item.url" v-if="!item.children">
                                    {{ item.name }}
                                </a>
                                <span v-else v-on:mouseover="dropdown(item)" v-on:mouseout="dropdown(item)">
                                    <!-- <span v-bind:class="{active:active===item}" v-on:click="dropdown(item)">{{ item.name }}</span> -->
                                    <!-- <span v-on:mouseover="dropdown(item)">{{ item.name }}</span> -->
                                    <a :href="item.url">{{ item.name }}</a>
                                    <ul id="sub_menu" class="dropdown" v-show="active===item">
                                        <li v-for="child in item.children">
                                            <a :href="child.url" :label="child.name">
                                                {{ child.name }}
                                            </a>
                                        </li>
                                    </ul>
                                </span>
                            </li>
                        </ul>
                    </nav>
                </open-box>

            </div>

        </div>

    </header>

    <main id="main">

        <div id="animation">
            <span class="outline">
                Made with
            </span>
            <span class="outline">
                Vue.js
            </span>

            <span class="glow">
                WATSUN
            </span>

            <div id="app">

                <button v-on:click="openModal">このページの情報を見る</button>

                <open-modal v-show="showContent" v-on:from-child="closeModal">
                    このページはVue.jsによって実装されています。<br>
                    「<a href="https://watsunblog.com/front-end/" target="_blank">https://watsunblog.com/front-end/</a>」ページをVue.jsで置き換えてみました。
                </open-modal>

            </div>
        </div>

        <div class="popup" id="js-popup">
        </div>

        <section class="section01">
            <div id="fadein">
                <fade-in-component>
                    <h1>Vue.jsで作成されたページとなっております</h1>
                </fade-in-component>
                <fade-in-component>
                    <h2>フェードイン</h2>
                </fade-in-component>
                <fade-in-component>
                    <ul>
                        <li>デザインは気にせずJS機能を詰め込んでます。</li>
                        <li>SEOにはカウントしていないページです。</li>
                    </ul>
                </fade-in-component>
            </div>
        </section>

        <section class="section02">
            <div id="tab">
                <h2>タブ</h2>
                <div class="container">
                    <ul class="tab_nav">
                        <li @click="select('1')" v-bind:class="{'active': show == '1'}">
                            タブ1
                        </li>
                        <li @click="select('2')" v-bind:class="{'active': show == '2'}">
                            タブ2
                        </li>
                        <li @click="select('3')" v-bind:class="{'active': show == '3'}">
                            タブ3
                        </li>
                    </ul>
                    <div class="tab_content">
                        <div v-if="show == '1'">タイトル１</div>
                        <div v-else-if="show == '2'">タイトル2</div>
                        <div v-else-if="show == '3'">タイトル3</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section03">
            <div id="graph" class="graph_box">
                <div class="graph"><canvas id="myChart"></canvas></div>
                <div class="graph"><canvas id="myChart2"></canvas></div>
            </div>
        </section>

        <section class="section04">
            <div id="slider">
                <h2>スライダー</h2>
                <swiper :options="swiperOptions">
                    <swiper-slide>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio_watsunblog.png" alt="slider01">
                    </swiper-slide>
                    <swiper-slide>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio_watsunblog.png" alt="slider02">
                    </swiper-slide>
                    <swiper-slide>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio_watsunblog.png" alt="slider03">
                    </swiper-slide>
                    <swiper-slide>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio_watsunblog.png" alt="slider04">
                    </swiper-slide>
                    <div class="swiper-pagination" slot="pagination"></div>
                    <div class="swiper-button-prev" slot="button-prev"></div>
                    <div class="swiper-button-next" slot="button-next"></div>
                </swiper>
            </div>
        </section>

        <section class="section05">
            <div id="keisan">
                <h2>計算</h2>
                <table class='table'>
                    <thead>
                        <tr>
                            <th>商品名</th>
                            <th>価格</th>
                            <th>数量</th>
                            <th>金額</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>商品サンプル1</td>
                            <td align="right">{{a}}</td>
                            <td>
                                <input class='form-control' type='number' v-model='b'>
                            </td>
                            <td>{{feeone}}円</td>
                        </tr>
                        <tr>
                            <td>商品サンプル2</td>
                            <td align="right">{{c}}</td>
                            <td>
                                <input class='form-control' type='number' v-model='d'>
                            </td>
                            <td>{{feetwo}}円</td>
                        </tr>
                        <tr>
                            <td align="right" colspan="3"><strong>小計</strong></td>
                            <td>{{sum}}円</td>
                        </tr>
                        <tr>
                            <td align="right" colspan="3"><strong>消費税</strong></td>
                            <td>{{tax}}円</td>
                        </tr>
                        <tr>
                            <td align="right" colspan="3"><strong>合計</strong></td>
                            <td>{{sum + tax}}円</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="clock">
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

        <section class="section06">
            <div id="demo">
                <h2 class="title">住所変換(Vue.jsで設置)</h2>
                <p>郵便番号の入力しボタンを押すと<br class="sp">住所が表示されます。
                </p>

                <div class="btn_flex">
                    <input v-model="inputZip" :placeholder="computedZip" @keypress.enter="getAddress(computedZip)" maxlength="7">
                    <button @click="getAddress(computedZip)">変換ボタン</button>
                </div>

                <div class="result">
                    <transition name="trans">
                        <p class="res" :key="results">{{results}}</p>
                    </transition>
                </div>
            </div>
        </section>

        <section class="section07">
            <div id="pulldown">
                <ul>
                    <li class="pull_box" v-for="list in lists" v-on:click="pulldown(list)">
                        <div class="pull_tit">{{ list.tit }}</div>
                        <div class="pull_txt" v-show="active===list">{{ list.txt }}</div>
                    </li>
                </ul>
            </div>
        </section>

    </main>


    <footer>

        <div class="footer-bottom">
            <div class="copyright">
                <p>Copyright ©<?php bloginfo('name'); ?> All Rights Reserved.</p>
            </div>
        </div>

    </footer>


    <script src="<?php echo get_template_directory_uri(); ?>/js/vue.js"></script>


</body>


</html>