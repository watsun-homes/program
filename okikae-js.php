<!DOCTYPE HTML>
<html>
<?php
	print "こんにちは！";
?>

    <div id="oya">
    <div id="oiu"><p>あいう<a href="/">リンク</a></p></div>
    </div>

<script>

    var oya = document.getElementById("oya");
    var id = document.getElementById("oiu");

    var newElement = document.createElement("p");
    var newContent = document.createTextNode("子要素２");
    newElement.appendChild(newContent);
    newElement.setAttribute("id","child-p2");

    id.innerHTML = "<p>えいう<a href='/sample'>リンク</a></p>";
    oya.insertBefore(newElement,id);

</script>

</html>
