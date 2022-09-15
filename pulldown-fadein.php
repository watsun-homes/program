<!DOCTYPE HTML>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>  
    <body>
        
        <div class="pulldown_box">
            <div class="tit">タイトル</div>
            <div class="txt">
            テキストテキストテキストテキストテキストテキスト<br>
            テキストテキストテキストテキストテキストテキストテキストテキスト<br>
            テキストテキストテキストテキストテキストテキストテキストテキスト</div>
        </div>        
        
<div>
    <p class="fade">こちらの文字がフェードします。</p>
</div>
        
<script>
    
    
$(function () {
  $(window).scroll(function () {
    $('.fade').each(function () {
        
      const scroll = $(window).scrollTop();
      const targetElement = $(this).offset().top;//要素の高さ
      const windowHeight = $(window).height();//ウィンドウの高さ
        
      if (scroll > targetElement - windowHeight) {
        $(this).addClass('view');
      }
        
    });
  });
});
   
        
        var txt = document.getElementsByClassName('txt')[0];
        txt.setAttribute("id","txtid");
        var txtid = document.getElementById("txtid");
    
    $(".tit").click(function () {
  $(".txt").slideToggle();
});

        
    
</script>
<style>
body{
  height: 150vh;
}

.fade{
  margin-top: 120vh;
  text-align: center;
  opacity : 0;
  transition: opacity 3s;
}
 
.fade.view{
  opacity: 1;
}
    .pulldown_box{
        background-color: #000;
        color: #fff;
    }
    .pulldown_box .tit{
        font-size: 18px;
        text-align: center;
    }
    .pulldown_box .txt{
        display: none;
        transition: display 0.5;
    }
    .pulldown_box .txt.add{
        display: block;
        
    }
</style>
    </body>
</html>