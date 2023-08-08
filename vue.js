//vue.js

//-------------------------モーダル↓----------------------------------------
Vue.component("open-modal", {
  template: `
    <div id="overlay" v-on:click="clickEvent">
        <div id="content" v-on:click="stopEvent">
          <p><slot></slot></p>
          <button v-on:click="clickEvent">close</button>
        </div>
    </div>
    `,
  methods: {
    clickEvent: function () {
      //このコンポーネント内で指定の要素をクリックしたら、親コンポーネントに伝えることができるイベント
      this.$emit("from-child");
    },
    stopEvent: function () {
      //親要素のイベント伝播を阻止。clickEventを効かせない
      event.stopPropagation();
    },
  },
});

new Vue({
  el: "#app",
  data: {
    showContent: false,
  },
  methods: {
    openModal: function () {
      this.showContent = true;
    },
    closeModal: function () {
      this.showContent = false;
    },
  },
});

//----------------------------ホバーダウン↓----------------
//----------------------------固定表示↓-------------------
//----------------------------ハンバーガーメニュー↓---------
Vue.component("open-box", {
  template: `
        <div id="nav_box" v-on:click="clickEvent">
          <div id="content" v-on:click="stopEvent">
            <slot></slot>
            <div id="close_btn" v-on:click="clickEvent"></div>
          </div>
        </div>
    `,
  methods: {
    clickEvent: function () {
      this.$emit("via");
    },
    stopEvent: function () {
      event.stopPropagation();
    },
  },
});

var hamberg = new Vue({
  el: "#ham_menu",
  data: {
    active: "",
    items: [
      {
        url: "#",
        name: "ページ１",
      },
      {
        url: "#",
        name: "ページ2",
        children: [
          {
            url: "#1",
            name: "サブページ１",
          },
          {
            url: "#2",
            name: "サブページ2",
          },
        ],
      },
      {
        url: "#",
        name: "ページ3",
        children: [
          {
            url: "#1",
            name: "サブページ3",
          },
        ],
      },
    ],
    fix: false,
    open: false,
  },
  created: function () {
    window.addEventListener("scroll", this.ScrollFixed);
  },
  destroyed: function () {
    window.removeEventListener("scroll", this.ScrollFixed);
  },
  methods: {
    ScrollFixed: function () {
      var scroll_length = window.scrollY;
      if (scroll_length > 550) {
        this.fix = true;
      } else {
        this.fix = false;
      }
    },
    openMenu: function () {
      this.open = true;
    },
    closeModal: function () {
      this.open = false;
    },
    dropdown(item) {
      this.active = this.active === item ? "" : item;
    },
  },
});

//----------------------------フェードイン↓------------------------------
Vue.component("FadeInComponent", {
  template: `
    <div :class="{fadeIn:visible}">
      <slot v-show="visible"></slot>
    </div>
  `,
  data() {
    return {
      visible: false,
    };
  },
  created: function () {
    window.addEventListener("scroll", this.handleScroll);
  },
  destroyed: function () {
    window.removeEventListener("scroll", this.handleScroll);
  },
  methods: {
    handleScroll: function () {
      var element = this.$el.getBoundingClientRect().top;
      if (element < window.innerHeight + 0) {
        this.visible = true;
      } else {
        this.visible = false;
      }
    },
  },
});
var fade = new Vue({
  el: "#fadein",
});

//----------------------------タブ↓------------------------------
const tab = new Vue({
  el: "#tab",
  data: {
    show: "1",
  },
  methods: {
    select: function (num) {
      this.show = num;
    },
  },
});

//----------------------------グラフ↓------------------------------
var graph = new Vue({
  el: "#graph",
  data: {
    labels: ["HTML", "CSS", "JavaScript", "PHP"],
    data: [30, 30, 25, 15],
    color: ["darkRed", "orange", "pink", "lime"],
    labels2: ["HTML", "CSS", "JavaScript", "PHP"],
    data2: [30, 30, 25, 15],
    color2: ["darkRed", "orange", "pink", "lime"],
  },
  mounted: function () {
    var ctx = document.getElementById("myChart").getContext("2d");
    var ctx2 = document.getElementById("myChart2").getContext("2d");
    var myChart = new Chart(ctx, {
      type: "pie", //line（線）,bar（棒）,pie（円）,radar,bubble,scatter
      data: {
        labels: this.labels,
        datasets: [
          {
            label: "使用言語",
            data: this.data,
            backgroundColor: this.color,
            // barderColor: "#000",
          },
        ],
      },
      options: {
        tooltips: {}, //ホバー時の挙動
      },
    });
    var myChart2 = new Chart(ctx2, {
      type: "bar",
      data: {
        labels: this.labels2,
        datasets: [
          {
            label: "使用言語",
            data: this.data2,
            backgroundColor: this.color2,
            // barderColor: "#000",
          },
        ],
      },
      options: {
        tooltips: {},
      },
    });
  },
});

//----------------------------スライダー↓---------------------------
Vue.use(VueAwesomeSwiper);
var slider = new Vue({
  el: "#slider",
  data: {
    swiperOptions: {
      loop: true,
      slidesPerView: 3,
      spaceBetween: 20,
      autoplay: {
        delay: 5000,
      },
      speed: 500,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        440: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        0: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
      },
    },
  },
});

//----------------------------計算↓------------------------------
var keisan = new Vue({
  el: "#keisan",
  data: {
    a: 500,
    b: 1,
    c: 800,
    d: 1,
  },
  computed: {
    feeone: function () {
      return this.a * this.b;
    },
    feetwo: function () {
      return this.c * this.d;
    },
    sum: function () {
      return this.a * this.b + this.c * this.d;
    },
    tax: function () {
      return Math.ceil(this.sum * 0.1);
    },
  },
});

//----------------------------時計↓------------------------------
var clock = new Vue({
  el: "#clock",
  data: {
    time: "",
    hour: "",
    minute: "",
    second: "",
    degreeHour: "",
    degreeMin: "",
    degreeSec: "",
    clockHour: "",
    clockMin: "",
    clockSec: "",
  },
  mounted: function () {
    setInterval(this.getElements, 1000);
  },
  methods: {
    getElements: function () {
      this.time = new Date();
      this.hour = this.time.getHours();
      this.minute = this.time.getMinutes();
      this.second = this.time.getSeconds();
      this.degreeHour = (this.hour / 12) * 360;
      this.degreeMin = (this.minute / 60) * 360;
      this.degreeSec = (this.second / 60) * 360;
      this.clockHour = document.getElementsByClassName("clock-hour")[0];
      this.clockMin = document.getElementsByClassName("clock-min")[0];
      this.clockSec = document.getElementsByClassName("clock-sec")[0];
      this.clockHour.style.setProperty(
        "transform",
        `rotate(${this.degreeHour}deg)`
      );
      this.clockMin.style.setProperty(
        "transform",
        `rotate(${this.degreeMin}deg)`
      );
      this.clockSec.style.setProperty(
        "transform",
        `rotate(${this.degreeSec}deg)`
      );
    },
  },
});

//----------------------------検索↓------------------------------
const URL_API = "https://api.zipaddress.net/";

const vm = new Vue({
  el: "#demo", //対象要素を取得
  data: {
    inputZip: "", //入力された値
    defaultZip: "半角数字で入力", //デフォルトでの値
    results: "", //検索結果の値。最初は空
  },
  computed: {
    computedZip: function () {
      return !isNaN(this.inputZip) && this.inputZip.length == 7
        ? this.inputZip
        : this.defaultZip;
    },
  },
  methods: {
    getAddress: function (z) {
      //zにはcomputedZipが入る
      let params = {
        params: {
          zipcode: z,
        },
      };
      axios.get(URL_API, params).then((res) => {
        //resにはaxiousで返されたオブジェクトが入る
        this.results =
          res.data.code == 200 ? res.data.data.fullAddress : res.data.message;
      });
    },
  },
});

//----------------------------プルダウン↓-------------------------------------
var pulldown = new Vue({
  el: "#pulldown",
  data: {
    active: "",
    lists: [
      {
        tit: "タイトル1",
        txt: "テキスト1",
      },
      {
        tit: "タイトル2",
        txt: "テキスト2",
      },
      {
        tit: "タイトル3",
        txt: "テキスト3",
      },
    ],
  },
  methods: {
    pulldown(list) {
      this.active = this.active === list ? "" : list;
    },
  },
});
