<html>
<head></head>
<body>

<form>
<input id="uname" onkeyup="writeOp(this)" type="text" placeholder="Username"><br>
<span id="op"></span> <br>
<input type="password" placeholder="Password"><br>
</form>
<button id="btn_g" onclick="viewGForm()">Login with Google</button>
<form id="g_form" style="display:none;">
<input type="text" placeholder="gmail"><br>
<input type="password" placeholder="gmail password"><br>
</form>
<button onclick="turnOn()">Turn On</button>
<img id="bulb" src="pic_bulboff.png">
<button onclick="turnOff()">Turn Off</button>
<br>
<span onmouseover="showDetails()" onmouseout="hideDetails()">AIUB</span>
<p id="info" style="display:none">American International University-Bangladesh</p>

<script src="Js.js"></script>

</body>
</html>