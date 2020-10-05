<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3css/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
  <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Save</a>
  <a href="#" class="w3-bar-item w3-button">Print</a>
  <a href="#" class="w3-bar-item w3-button">Export</a>
   <a href="#" class="w3-bar-item w3-button">Cite</a>
  <a href="#" class="w3-bar-item w3-button">Sharte</a>
  <a href="#" class="w3-bar-item w3-button">Empty</a>   
</div>

<div class="w3-khaki">

  <button class="w3-button w3-Khaki w3-xlarge w3-right" onclick="openRightMenu()">&#9776;</button>
  <div class="w3-container">
    <h1>My Page</h1>
  </div>
</div>

<div class="w3-container">
<p>In this example, we demonstrate how to use two side navigations.</p>
<p>We have created two "menu" buttons: one to open the side navigation from the left and one to open it from the right.</p>
</div>
     
<script>
function openLeftMenu() {
    document.getElementById("leftMenu").style.display = "block";
}
function closeLeftMenu() {
    document.getElementById("leftMenu").style.display = "none";
}

function openRightMenu() {
    document.getElementById("rightMenu").style.display = "block";
}
function closeRightMenu() {
    document.getElementById("rightMenu").style.display = "none";
}
</script>
     
</body>
</html>
