<!DOCTYPE HTML>
<html>

<head>
</head>

<body>

  <div id="mychart" style="width:800px;height:600px;"></div>
 
  <script src="https://www.gstatic.com/charts/loader.js"></script>


  <script>
  google.charts.load("current", {"packages":["corechart"]});
  google.charts.setOnLoadCallback(myChart);

  function myChart() {
   var data = google.visualization.arrayToDataTable([
    ["動物",      "人数"],
    ["犬",            11],
    ["猫",             8],
    ["ハムスター",     3],
    ["鳥",             2],
    ["魚",             2],
    ["その他",         1],
    ["ペットはいない", 7]
   ]);

   var options = {
    title:"３年１組のみんなのペット",
    slices: {
     0: { color: "darkRed" },
     1: { color: "orange" },
     2: { color: "pink" },
     3: { color: "lime" },
     4: { color: "blue" },
     5: { color: "red" },
     6: { color: "gray" }
    }
   };

   var chart = new google.visualization.PieChart(document.getElementById("mychart"));
   chart.draw(data, options);
  }
  </script>
  
  <div id="player"></div>

<script>
  // IFrame Player API コード を読み込む
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  var player = [];
  var youtubeID = [
    {
      id: "bejKup1eyMI",
      area: "table1"
    },
    {
      id: "MyVT1MQce14",
      area: "table2"
    }
  ];

  function onYouTubeIframeAPIReady() {
    for(var i = 0; i < youtubeID.length; i++){
      
   var player[i] = new YT.Player(youtubeID[i]['area'], {
    width: '960',
    height: '540',
    videoId: youtubeID[i]['id'], 
    events: {
     'onReady':onPlayerReady
    }
   });

  }
  }


  </script>

</body>

</html>