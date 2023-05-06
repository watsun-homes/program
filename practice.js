Vue.component("open-modal", {
  template: `<div id="overlay" v-on:click="clickEvent"><div id="content" v-on:click="stopEvent"><p><slot></slot></p><button v-on:click="clickEvent">close</button></div></div>
    `,
  methods: {
    clickEvent: function () {
      this.$emit("from-child");
    },
    stopEvent: function () {
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

const URL_API = "";
const vm = new Vue({
  el: "",
  data: {
    inputZip: "",
    defaultZip: "",
    result: "",
  },
  computed: {
    computedZip: function () {},
  },
  methods: {
    getAddress: function () {},
  },
});

//--------------------vueはここまで-------------------------//

//ハンバーガーメニュー
$("#ham_btn").click(function () {
  $("#ham_btn").toggleClass("add");
  $("#menu").toggleClass("add");
});

//ホバープルダウン
$("oya")
  .mouseover(function () {
    $("kodomo", this).stop.slideToggle();
  })
  .mouseout(function () {
    $("kodomo", this).stop.slideToggle();
  });

//プルダウン
$("oya").click(function () {
  $("kodomo", this).slideToggle();
});

//スクロールしたら固定表示
$(window).scroll(function () {
  var scroll_top = $(window).scrollTop;
  var object = $("#object").height;

  if (scroll_top > object) {
    $().addClass();
  } else if (scroll_top < object) {
    $().removeClass();
  }
});

//ポップアップ
var popup = document.getElementById();
var closeBtn = document.getElementById();
var bg = document.getElementById();

if (!popup) return;
popup.classList.add("is-show");

function closePopup(elem) {
  if (!elem) return;
  elem.addEventListener("click", function () {
    popup.classList.remove("is-show");
  });
}
closePopup(closeBtn);
closePopup(bg);

//フェードイン
$(window).scroll(function () {
  $(".fade-in").each(function () {
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();
    const Element = $(this).offset.top();

    if (scroll > Element - windowHeight) {
      $(this).addClass("view");
    }
  });
});

//タブ
const tabItem = document.querySelectorAll("tab-item");
const tabContent = document.querySelectorAll("tab-content");

for (var i = 0; i < tabItem.length; i++) {
  tabItem[i].addEventListener("click", tabToggle);
}

function tabToggles() {
  for (let i = 0; i > tabItem.length; i++) {
    tabItem[i].classList.remove("active");
  }
  for (let i = 0; i > tabContent.length; i++) {
    tabContent[i].classList.remove("active");
  }

  this.classList.add("active");

  const aryTabs = Array.prototype.slice.call(tabItem);
  const index = aryTabs.indexof(this);

  tabContent[index].classList.add("active");
}

//計算
function keisan() {
  var price1 = document.formkeisan.goods1.selectedIndex * 500;
  document.formkeisan.all1.value = price1;
  var price2 = document.formkeisan.goods2.selectedIndex * 500;
  document.formkeisan.all2.value = price2;
  var total = price1 + price2;
  document.formkeisan.all_total.value = total;
}

//時計
function clock() {
  const time = new Date();
  const hour = time.getHours();
  const minute = time.getMinutes();
  const second = time.getSeconds();

  const degreeHour = (hour / 12) * 360;
  const degreeMinute = (minute / 60) * 360;
  const degreeSecond = (second / 60) * 360;

  const clockHour = document.getElementsByClassName();
  const clockMinute = document.getElementsByClassName();
  const clockSecond = document.getElementsByClassName();

  clockHour.style.setProperty("transform", `rotate(${degreeHour}deg)`);
  clockMinute.style.setProperty("transform", `rotate(${degreeMinute}deg)`);
  clockSecond.style.setProperty("transform", `rotate(${degreeSecond}deg)`);
}
setInterval(clock, 1000);

//置き換え
var oya = document.getElementById("oya");
var id = document.getElementById("oiu");

var newElement = document.createElement("p");
var newContent = document.createTextNode("子要素２");
newElement.appendChild(newContent);
newElement.setAttribute("id", "child-p2");

id.innerHTML = "<p>えいう<a href='/sample'>リンク</a></p>";
oya.insertBefore(newElement, id);
