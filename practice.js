//----------------------------計算↓------------------------------
function keisan() {
  // 商品1
  var price1 = document.form1.goods1.selectedIndex * 500; // 単価を設定
  document.form1.field1.value = price1; // 小計を表示

  // 商品2
  var price2 = document.form1.goods2.selectedIndex * 1000; // 単価を設定
  document.form1.field2.value = price2; // 小計を表示

  // 合計を計算
  var total = price1 + price2;

  document.form1.field_total.value = total; // 合計を表示
}

//----------------------------時計↓------------------------------
function getElements() {
  const time = new Date();
  const hour = time.getHours();
  const minute = time.getMinutes();
  const second = time.getSeconds();

  const degreeHour = (hour / 12) * 360;
  const degreeMin = (minute / 60) * 360;
  const degreeSec = (second / 60) * 360;

  const clockHour = document.getElementsByClassName("clock-hour")[0];
  const clockMin = document.getElementsByClassName("clock-min")[0];
  const clockSec = document.getElementsByClassName("clock-sec")[0];

  clockHour.style.setProperty("transform", `rotate(${degreeHour}deg)`);
  clockMin.style.setProperty("transform", `rotate(${degreeMin}deg)`);
  clockSec.style.setProperty("transform", `rotate(${degreeSec}deg)`);
}
setInterval(getElements, 1000);

$(function () {
  //----------------------------文字アニメーション(lettering)↓----------------------
  $(document).ready(function () {
    $(".title").lettering(); //文字を１文字づつspanで囲ってくれる関数
    $(".button").lettering();
  });

  $(document).ready(function () {
    animation();
  }, 1000);

  $(".button").click(function () {
    animation();
  });

  function animation() {
    var title1 = new TimelineMax();

    title1.to(".button", 0, { visibility: "hidden", opacity: 0 });

    title1.staggerFromTo(
      ".title span",
      0.5,
      { ease: Back.easeOut.config(1.7), opacity: 0, bottom: -80 },
      { ease: Back.easeOut.config(1.7), opacity: 1, bottom: 0 },
      0.05
    );

    title1.to(".button", 0.2, { visibility: "visible", opacity: 1 });
  }

  //----------------------------文字アニメーション(velocity)↓------------------
  $(".end-right").css("left", "-10%");
  $(".end-left").css("left", "110%");
  $(".end-right").velocity(
    {
      left: "55%",
    },
    "easeOutExpo",
    1200
  );
  $(".end-left").velocity(
    {
      left: "52%",
    },
    "easeOutExpo",
    1200
  );
  setTimeout(function () {
    $(".glow").velocity(
      {
        opacity: 1,
      },
      1200
    );
  }, 1200);

  //----------------------------ホバーダウン↓------------------------------
  $("#main_menu .main_list")
    .mouseover(function () {
      $("#sub_menu", this).stop().slideToggle();
    })
    .mouseout(function () {
      $("#sub_menu", this).stop().slideToggle();
    });

  //----------------------------スクロール固定↓------------------------------
  $(window).scroll(function () {
    const scroll_btn = $(window).scrollTop();
    const Element_btn = $("#animation").height();

    if (scroll_btn > Element_btn + 50) {
      $(".menu_btn").addClass("scroll");
    } else if (scroll_btn < Element_btn + 50) {
      $(".menu_btn").removeClass("scroll");
      if ($(window).width() > 768) {
        $(".menu_btn").removeClass("add");
        $(".header-box nav").removeClass("add");
      }
    }
  });

  //----------------------------ハンバーガーメニュー↓------------------------------
  $(".menu_btn").click(function () {
    $(".menu_btn").toggleClass("add");
    $(".header-box nav").toggleClass("add");
  });
  $("#main").click(function () {
    $(".menu_btn").removeClass("add");
    $(".header-box nav").removeClass("add");
  });

  //----------------------------ポップアップ↓------------------------------
  var popup = document.getElementById("popup");
  if (!popup) return;
  popup.classList.add("is-show");

  var blackBg = document.getElementById("bg");
  var closeBtn = document.getElementById("close_btn");

  function closePopup(elem) {
    if (!elem) return;
    elem.addEventListener("click", function () {
      popup.classList.remove("is-show");
    });
  }
  closePopup(blackBg);
  closePopup(closeBtn);

  //---------------------------フェードイン↓------------------------------
  $(window).scroll(function () {
    $(".fade-in").each(function () {
      const scroll = $(window).scrollTop();
      const Element = $(this).offset().top;
      const windowHeight = $(window).height();

      if (scroll > Element - windowHeight + 50) {
        $(this).addClass("view");
      }
    });
  });

  //----------------------------タブ↓------------------------------
  const tabItem = document.querySelectorAll(".tab-item");
  const tabContent = document.querySelectorAll(".tab-content");

  for (var i = 0; i < tabItem.length; i++) {
    tabItem[i].addEventListener("click", tabToggle);
  }

  function tabToggle() {
    for (let i = 0; i < tabItem.length; i++) {
      tabItem[i].classList.remove("active");
    }
    for (let i = 0; i < tabContent.length; i++) {
      tabContent[i].classList.remove("active");
    }

    this.classList.add("active");

    const aryTabs = Array.prototype.slice.call(tabItem);
    const index = aryTabs.indexOf(this);

    tabContent[index].classList.add("active");
  }

  //----------------------------グラフ↓------------------------------
  google.charts.load("current", {
    packages: ["corechart"],
  });
  google.charts.setOnLoadCallback(myChart);
  google.charts.setOnLoadCallback(myChart_2);

  function myChart() {
    var data = google.visualization.arrayToDataTable([
      ["言語", "種類"],
      ["HTML", 30],
      ["CSS", 30],
      ["Javascript", 25],
      ["PHP", 15],
    ]);

    var options = {
      title: "使用言語（円グラフ）",
      backgroundColor: {
        fill: "#C1C7C4",
        stroke: "#C1C7C4",
        strokeWidth: 1,
      },
      slices: {
        0: { color: "darkRed" },
        1: { color: "orange" },
        2: { color: "pink" },
        3: { color: "lime" },
        4: { color: "blue" },
        5: { color: "red" },
        6: { color: "gray" },
      },
    };

    var chart = new google.visualization.PieChart(
      document.getElementById("mychart")
    );
    chart.draw(data, options);
  }

  function myChart_2() {
    var data = google.visualization.arrayToDataTable([
      ["言語", "種類"],
      ["HTML", 30],
      ["CSS", 30],
      ["Javascript", 25],
      ["PHP", 15],
    ]);

    var options = {
      title: "使用言語（棒グラフ）",
      backgroundColor: {
        fill: "#C1C7C4",
        stroke: "#C1C7C4",
        strokeWidth: 3,
      },
      slices: {
        0: {
          color: "darkRed",
        },
        1: {
          color: "orange",
        },
        2: {
          color: "pink",
        },
        3: {
          color: "lime",
        },
        4: {
          color: "blue",
        },
        5: {
          color: "red",
        },
        6: {
          color: "gray",
        },
      },
    };

    var chart = new google.visualization.ColumnChart(
      document.getElementById("mychart_2")
    );
    chart.draw(data, options);
  }

  //----------------------------スライダー↓------------------------------
  var swiper = new Swiper(".swiper-container", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    breakpoints: {
      440: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
    },

    autoplay: {
      delay: 3000,
      stopOnLastSlide: false,
      disableOnInteraction: false,
      reverseDirection: false,
    },

    navigation: {
      nextEl: ".swiper-button-next",

      prevEl: ".swiper-button-prev",
    },

    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
  });

  //----------------------------プルダウン↓------------------------------
  $("#pulldown .pull_box").click(function () {
    $(".pull_txt", this).slideToggle();
  });

  //----------------------------置き換え↓------------------------------
  var oya = document.getElementById("oya");
  var id = document.getElementById("kodomo");

  var newElement = document.createElement("p");
  var newContent = document.createTextNode("追加");
  newElement.appendChild(newContent);
  newElement.setAttribute("id", "kodomo");

  id.innerHTML = "<p>置き換え成功</p>";
  oya.insertBefore(newElement, id);

  //----------------------------RSS取得 ↓------------------------------
  $.ajax({
    url: "https://ascii.jp/mac/rss.xml",
    cache: false,
    dataType: "xml",
    success: function (xml) {
      $(xml)
        .find("item")
        .each(function () {
          var title = $(this).find("title").text();
          var url = $(this).find("link").attr("href");
          $("<li></li>")
            .html('<a href="' + url + '">' + title + "</a>")
            .appendTo("ul#feedList");
        });
    },
  });
});

//----------------------------YoutubeAPI↓------------------------------
//IFramePlayerAPI（動画を埋め込むAPI）
var tag = document.createElement("script");
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player = [];
var youtubeID = [
  {
    id: "bejKup1eyMI",
    area: "table1",
  },
  {
    id: "MyVT1MQce14",
    area: "table2",
  },
];
function onYouTubeIframeAPIReady() {
  for (var i = 0; i < youtubeID.length; i++) {
    player[i] = new YT.Player(youtubeID[i]["area"], {
      width: "960",
      height: "540",
      videoId: youtubeID[i]["id"],
    });
  }
}

//----------------------------クッキー処理↓------------------------------
$(function () {
  if (document.cookie.indexOf("visited=yes") === -1) {
    document.cookie = "visited=yes; max-age=10";
    //path=/newsと書くと「/news」というURLのみCookieを追加できる。サイト内全体でチェックしたい場合はpath=/としておく。
    console.log("初回のアクセスです");
  } else {
    console.log("2回目以降のアクセスです");
    document.cookie = "visited=; path=/";
  }
});

function setCount(n) {
  theDay = 30; //クッキーの保存日時
  setDay = new Date(); //今日の日時
  setDay.setTime(setDay.getTime() + theDay * 1000 * 60 * 60 * 24); //クッキーの有効期限作成
  expDay = setDay.toGMTString(); //日付を文字列へ変換
  document.cookie = "count=" + n + ";expires=" + expDay; //クッキーの設定。有効期限は訪問後３０日間
}
function getCount() {
  theName = "count=";
  theCookie = document.cookie + ";"; //保存されているクッキーを取得
  start = theCookie.indexOf(theName); //取得したクッキーにcount=があるか
  if (start != -1) {
    end = theCookie.indexOf(";", start); //
    count = eval(unescape(theCookie.substring(start + theName.length, end)));
    //保存されているクッキーからcountの値を取得
    document.write(count + "回目のアクセスです");
    setCount(count + 1); //表示したら次の値を+1して保存
  } else {
    document.write("初めてのアクセスですね");
    setCount(2);
  }
}
getCount();

//----------------------------オブジェクト↓------------------------------
var container = document.getElementById("object");

for (let i = 0; i < 5; i++) {
  div = document.createElement("div");
  div.onclick = function () {
    alert("This is box #" + i);
  };
  container.appendChild(div);
}

const defo = {
  ai: {
    first: "達也",
    last: "サンプル",
  },
  ue: {
    air: "僕",
    umi: "私",
  },
};

const namaefun = function (namefun = defo) {
  console.log(`${namefun.ue.air}は${namefun.ai.first}`);
};
namaefun();

const namae = (name = defo) => {
  console.log(`${name.ue.air}は${name.ai.first}`);
};
namae();

const iti = (ni, san) => `${ni}の次は${san}`;
console.log(iti("2", "3"));

const nanndemo = (firstname = "僕は", land = "タツヤ") => {
  if (!firstname) {
    throw new error("firstnameミス");
  }
  if (!land) {
    throw new error("landミス");
  }
  return `${firstname}of${land}`;
};

console.log(nanndemo());
console.log(nanndemo("こんにちは", "ああ"));

const person = (first, lasta) => ({
  fir: first,
  la: lasta,
});
console.log(person("どう", "かな"));
//オブジェクトの返却

const tahoe = {
  mountains: ["Freel", "Rose", "Tallac", "Rubicon", "Silver"],
  print: function (delay = 1000) {
    setTimeout(() => {
      console.log(this.mountains.join(","));
      console.log([...this.mountains]);
    }, delay);
  },
};
tahoe.print();

const sandwhich = {
  bread: "dutch crunch",
  meat: "tuna",
  cheese: "swiss",
  toppings: ["lettuce", "tomato", "mustard"],
};

let { toppings, bread, meat, cheese } = sandwhich;
bread = "変更します";
console.log(bread);
console.log(cheese);

console.log(sandwhich.bread, sandwhich.toppings.join(","));
console.log(toppings);

const kansuudesuk = ({
  spouse: {
    lastregular: { firstregular },
  },
}) => {
  console.log(`${firstregular} of tatuya`);
};
const regularPerson = {
  firstregular: "Bill",
  lastregular: "Hei",
  spouse: {
    firstregular: "家",
    lastregular: {
      firstregular: "深いよ",
    },
  },
};
kansuudesuk(regularPerson);

const [, firsthira] = ["ああ", "いい", "うう"];
console.log(firsthira);

const an = "Tailla";
const en = 7879;
const anen = () => {
  console.log(`Mt. ${an} is ${en} feet tall`);
};
const funHike = {
  an,
  en,
  anen,
};
funHike.anen();
anen(); //これだけでもいける

function directions(...args) {
  let [start, ...remaining] = args;
  let [finish, ...stops] = remaining.reverse();

  console.log(`drive through ${args.length} towns`);
  console.log(`start in ${start}`);
  console.log(`the destination is ${finish}`);
  console.log(`stopping ${stops.length} times in between`);
}
directions("Truckee", "Tahoe City", "Sunnyside", "Homewood", "Tahoma");

const getFakePerson = async () => {
  try {
    const res = await fetch("https://api.randomuser.me/?nat=US&results=10");
    const { results } = await res.json();
    console.log(results);
  } catch (error) {
    console.error(error);
  }
};
getFakePerson();
