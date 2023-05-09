<div id="app">
    <button @click="openModal">Click</button>
    <open-modal v-show="showContent" v-on:from-child="closeModal">
        テキスト
    </open-modal>
</div>


<input v-modal="inputZip" v-bind:placeholder="computedZip" @keypress.enter="getAddress(computedZip)" maxlength="7">
<button @click="getAddress(computedZip">検索する</button>

<div id="result">
    <transition name="trans">
        <p class="res" :key="results">{{results}}</p>
    </transition>
</div>


<div id="ham_btn"></div>
<nav id="menu">
    <ul>
        <li class="oya">
            <ul class="kodomo">
                <li></li>
                <li></li>
            </ul>
        </li>
        <li></li>
        <li></li>
    </ul>
</nav>


<div class="popup">
    <div class="cotents">
        <div class="close_btn"></div>
        <p>テキスト</p>
    </div>
    <div class="bg"></div>
</div>


<div id="pulldown">
    <div class="oya">
        <div class="tit"></div>
        <div class="kodomo"></div>
    </div>
    <div class="oya">
        <div class="tit"></div>
        <div class="kodomo"></div>
    </div>
</div>


<div class="fadein">
    <p class="fade-in">テキスト</p>
    <p class="fade-in">テキスト</p>
    <p class="fade-in">テキスト</p>
</div>


<div class="tab"></div>
    <div class="tab_box">
        <ul>
            <li class="tab-item active"></li>
            <li class="tab-item"></li>
            <li class="tab-item"></li>
        </ul>
    </div>
    <div class="tab_container">
        <div class="tab-content active"></div>
        <div class="tab-content"></div>
        <div class="tab-content"></div>
    </div>
</div>


<div class="keisan">
    <form action="" name="formkeisan">
        <table>
            <tr>
                <th>商品名</th>
                <th>価格</th>
                <th>数量</th>
                <th>金額</th>
            </tr>
            <tr>
                <td>商品名１</td>
                <td>500円</td>
                <td>
                    <select name="googs1" id="" onchange="keisan()">
                        <option value="">0</option>
                        <option value="">1</option>
                        <option value="">2</option>
                    </select>
                </td>
                <td>
                    <input type="text" name="all1" size="8" value="0"> 円
                </td>
            </tr>
            <tr>
                <td>商品名2</td>
                <td>800円</td>
                <td>
                    <select name="googs2" id="" onchange="keisan()">
                        <option value="">0</option>
                        <option value="">1</option>
                        <option value="">2</option>
                    </select>
                </td>
                <td>
                    <input type="text" name="all2" size="8" value="0"> 円
                </td>
            </tr>
            <tr>
                <td colspan="3">合計</td>
                <td><input type="text" name="all_total" size="8" value="0"> 円</td>
            </tr>
        </table>
    </form>
</div>


<div class="clock">
    <div class="hour"></div>
    <div class="minute"></div>
    <div class="second"></div>
    <div class="clock-12">12</div>
    <div class="clock-3">3</div>
    <div class="clock-6">6</div>
    <div class="clock-9">9</div>
</div>

<div class="okikae">
<div id="oya">
    <div id="oiu"><p>あいう<a href="/">リンク</a></p></div>
</div>
</div>

<p>ブランチの練習です。</p>